<?php
// /app/Services/KommoService.php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;

class KommoService
{
    private string $baseUrl;

    private string $token;

    public function __construct()
    {
        $subdomain = trim(
            (string) config(
                'services.kommo.subdomain'
            )
        );

        $this->token = trim(
            (string) config(
                'services.kommo.token'
            )
        );

        if ($subdomain === '') {
            throw new RuntimeException(
                'KOMMO_SUBDOMAIN no está configurado.'
            );
        }

        if ($this->token === '') {
            throw new RuntimeException(
                'KOMMO_TOKEN no está configurado.'
            );
        }

        $this->baseUrl = sprintf(
            'https://%s.kommo.com/api/v4',
            $subdomain
        );
    }

    public function createLeadWithContact(
        array $data
    ): array {
        if (
            !config('services.kommo.enabled')
        ) {
            Log::info(
                'El envío a Kommo está desactivado.'
            );

            return [];
        }

        $lead = [
            'name' => $this->leadName($data),

            'pipeline_id' => $this->integerConfig(
                'services.kommo.pipeline_id'
            ),

            'status_id' => $this->integerConfig(
                'services.kommo.status_id'
            ),

            'responsible_user_id' =>
                $this->integerConfig(
                    'services.kommo.responsible_user_id'
                ),

            'created_at' => time(),

            '_embedded' => [
                'contacts' => [
                    $this->contactPayload($data),
                ],
            ],
        ];

        $customFields = $this->leadCustomFields(
            $data
        );

        if (!empty($customFields)) {
            $lead['custom_fields_values'] =
                $customFields;
        }

        $payload = [
            $lead,
        ];

        Log::info(
            'Enviando lead de GotoLatam a Kommo',
            [
                'lead_name' => $lead['name'],
                'pipeline_id' =>
                    $lead['pipeline_id'],
                'status_id' =>
                    $lead['status_id'],
                'responsible_user_id' =>
                    $lead['responsible_user_id'],
                'custom_fields_count' =>
                    count($customFields),
                'has_contact' => true,
            ]
        );

        $response = $this->post(
            '/leads/complex',
            $payload
        );

        $responseData = $response->json();

        Log::info(
            'Lead de GotoLatam creado correctamente en Kommo',
            [
                'lead_id' => data_get(
                    $responseData,
                    '0.id'
                ),

                'contact_id' => data_get(
                    $responseData,
                    '0.contact_id'
                ),

                'merged' => data_get(
                    $responseData,
                    '0.merged',
                    false
                ),
            ]
        );

        return is_array($responseData)
            ? $responseData
            : [];
    }

    private function contactPayload(
        array $data
    ): array {
        $customFields = [];

        $email = trim(
            (string) ($data['email'] ?? '')
        );

        $phone = trim(
            (string) ($data['phone'] ?? '')
        );

        if ($phone !== '') {
            $customFields[] = [
                'field_code' => 'PHONE',

                'values' => [
                    [
                        'value' => $phone,
                        'enum_code' => 'WORK',
                    ],
                ],
            ];
        }

        if ($email !== '') {
            $customFields[] = [
                'field_code' => 'EMAIL',

                'values' => [
                    [
                        'value' => $email,
                        'enum_code' => 'WORK',
                    ],
                ],
            ];
        }

        $contact = [
            'name' => trim(
                (string) (
                    $data['name']
                    ?? 'Contacto web'
                )
            ),

            'responsible_user_id' =>
                $this->integerConfig(
                    'services.kommo.responsible_user_id'
                ),
        ];

        if (!empty($customFields)) {
            $contact['custom_fields_values'] =
                $customFields;
        }

        return $contact;
    }

    private function leadCustomFields(
        array $data
    ): array {
        $fields = [];

        $this->appendTravelDateField(
            $fields,
            $data
        );

        $this->appendPassengersField(
            $fields,
            $data
        );

        $this->appendDestinationsField(
            $fields,
            $data
        );

        /*
         * Los campos que todavía no tienen un ID
         * propio en Kommo se incorporan en Solicitud.
         */
        $this->appendTextField(
            $fields,
            $this->fieldId('comment'),
            $this->buildRequestDescription($data)
        );

        /*
         * Estos campos se enviarán automáticamente
         * cuando se creen en Kommo y se coloquen sus
         * respectivos IDs en .env.
         */
        $this->appendTextField(
            $fields,
            $this->fieldId('duration'),
            $this->arrayToText(
                $data['duration'] ?? []
            )
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('hotel_category'),
            $this->arrayToText(
                $data['hotel_category'] ?? []
            )
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('country'),
            $data['country'] ?? null
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('country_code'),
            $data['country_code'] ?? null
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('device'),
            $data['device'] ?? null
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('browser'),
            $data['browser'] ?? null
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('origin'),
            $data['origin'] ?? null
        );

        $this->appendTextField(
            $fields,
            $this->fieldId('product'),
            $data['product'] ?? null
        );

        return $fields;
    }

    private function appendTravelDateField(
        array &$fields,
        array $data
    ): void {
        $fieldId = $this->fieldId(
            'travel_date'
        );

        $travelDate = $data['travel_date']
            ?? null;

        if (
            $fieldId === null ||
            !filled($travelDate)
        ) {
            return;
        }

        try {
            $timestamp = Carbon::parse(
                $travelDate,
                'America/Lima'
            )
                ->startOfDay()
                ->timestamp;
        } catch (\Throwable $exception) {
            Log::warning(
                'Fecha de viaje inválida para Kommo',
                [
                    'travel_date' =>
                        $travelDate,
                ]
            );

            return;
        }

        $fields[] = [
            'field_id' => $fieldId,

            'values' => [
                [
                    'value' => $timestamp,
                ],
            ],
        ];
    }

    private function appendPassengersField(
        array &$fields,
        array $data
    ): void {
        $fieldId = $this->fieldId(
            'passengers'
        );

        $passengers = trim(
            (string) (
                $data['passengers']
                ?? ''
            )
        );

        if (
            $fieldId === null ||
            $passengers === ''
        ) {
            return;
        }

        $enumId = $this->passengerEnumId(
            $passengers
        );

        if ($enumId === null) {
            Log::warning(
                'Cantidad de pasajeros sin enum en Kommo',
                [
                    'passengers' =>
                        $passengers,
                ]
            );

            return;
        }

        $fields[] = [
            'field_id' => $fieldId,

            'values' => [
                [
                    'enum_id' => $enumId,
                ],
            ],
        ];
    }

    private function appendDestinationsField(
        array &$fields,
        array $data
    ): void {
        $fieldId = $this->fieldId(
            'destinations'
        );

        if ($fieldId === null) {
            return;
        }

        $destinations = $this->normalizeArray(
            $data['destinations'] ?? []
        );

        if (empty($destinations)) {
            return;
        }

        $values = [];

        foreach (
            $destinations as $destination
        ) {
            $enumId =
                $this->destinationEnumId(
                    $destination
                );

            if ($enumId === null) {
                Log::warning(
                    'Destino sin enum en Kommo',
                    [
                        'destination' =>
                            $destination,
                    ]
                );

                continue;
            }

            $values[$enumId] = [
                'enum_id' => $enumId,
            ];
        }

        if (empty($values)) {
            return;
        }

        $fields[] = [
            'field_id' => $fieldId,
            'values' => array_values($values),
        ];
    }

    private function appendTextField(
        array &$fields,
        ?int $fieldId,
              $value
    ): void {
        if ($fieldId === null) {
            return;
        }

        $text = trim(
            (string) $value
        );

        if ($text === '') {
            return;
        }

        $fields[] = [
            'field_id' => $fieldId,

            'values' => [
                [
                    'value' => $text,
                ],
            ],
        ];
    }

    private function passengerEnumId(
        string $passengers
    ): ?int {
        $map = [
            '1' => 1435842,
            '2' => 1435844,
            '3' => 1435846,
            '4' => 1435848,
            '5' => 1435850,
            '6' => 1435852,
            '7' => 1435854,
            '8' => 1435856,
            '9' => 1435858,
            '10' => 1435860,
        ];

        return $map[$passengers] ?? null;
    }

    private function destinationEnumId(
        string $destination
    ): ?int {
        $normalized =
            $this->normalizeText(
                $destination
            );

        $map = [
            'peru' => 1471688,
            'brasil' => 1471690,
            'brazil' => 1471690,
            'chile' => 1471692,
            'argentina' => 1471694,
            'bolivia' => 1471696,
            'ecuador' => 1471698,
            'colombia' => 1471700,
            'multidestino' => 1471702,
            'multi destino' => 1471702,
            'multiple destinations' =>
                1471702,
        ];

        return $map[$normalized] ?? null;
    }

    private function buildRequestDescription(
        array $data
    ): string {
        $lines = [];

        $comment = trim(
            (string) (
                $data['comment']
                ?? ''
            )
        );

        if ($comment !== '') {
            $lines[] = 'Comentario: ' .
                $comment;
        }

        $hotelCategory =
            $this->arrayToText(
                $data['hotel_category']
                ?? []
            );

        if ($hotelCategory !== '') {
            $lines[] =
                'Categoría de hotel: ' .
                $hotelCategory .
                ' estrellas';
        }

        $duration =
            $this->arrayToText(
                $data['duration']
                ?? []
            );

        if ($duration !== '') {
            $lines[] =
                'Duración: ' .
                $duration .
                ' días';
        }

        $passengers = trim(
            (string) (
                $data['passengers']
                ?? ''
            )
        );

        if ($passengers !== '') {
            $lines[] =
                'Número de pasajeros: ' .
                $passengers;
        }

        $destinations =
            $this->arrayToText(
                $data['destinations']
                ?? []
            );

        if ($destinations !== '') {
            $lines[] =
                'Destinos: ' .
                $destinations;
        }

        $country = trim(
            (string) (
                $data['country']
                ?? ''
            )
        );

        if ($country !== '') {
            $lines[] =
                'País del cliente: ' .
                $country;
        }

        $countryCode = trim(
            (string) (
                $data['country_code']
                ?? ''
            )
        );

        if ($countryCode !== '') {
            $lines[] =
                'Código de país: ' .
                $countryCode;
        }

        $device = trim(
            (string) (
                $data['device']
                ?? ''
            )
        );

        if ($device !== '') {
            $lines[] =
                'Dispositivo: ' .
                $device;
        }

        $browser = trim(
            (string) (
                $data['browser']
                ?? ''
            )
        );

        if ($browser !== '') {
            $lines[] =
                'Navegador: ' .
                $browser;
        }

        $origin = trim(
            (string) (
                $data['origin']
                ?? ''
            )
        );

        if ($origin !== '') {
            $lines[] =
                'Origen: ' .
                $origin;
        }

        $product = trim(
            (string) (
                $data['product']
                ?? ''
            )
        );

        if ($product !== '') {
            $lines[] =
                'Sitio web: ' .
                $product;
        }

        return implode(
            PHP_EOL,
            $lines
        );
    }

    private function leadName(
        array $data
    ): string {
        $name = trim(
            (string) (
                $data['name']
                ?? ''
            )
        );

        $product = trim(
            (string) (
                $data['product']
                ?? 'gotolatam.com'
            )
        );

        if ($name === '') {
            $name = 'Nueva consulta web';
        }

        return sprintf(
            '%s - %s',
            $name,
            $product
        );
    }

    private function post(
        string $endpoint,
        array $payload
    ): Response {
        $response = Http::withToken(
            $this->token
        )
            ->acceptJson()
            ->asJson()
            ->timeout(20)
            ->retry(2, 500)
            ->post(
                $this->baseUrl .
                $endpoint,
                $payload
            );

        if ($response->failed()) {
            Log::error(
                'Kommo rechazó la creación del lead',
                [
                    'status' =>
                        $response->status(),

                    'response' =>
                        $response->json()
                            ?: $response->body(),

                    'payload_summary' => [
                        'lead_name' => data_get(
                            $payload,
                            '0.name'
                        ),

                        'pipeline_id' => data_get(
                            $payload,
                            '0.pipeline_id'
                        ),

                        'status_id' => data_get(
                            $payload,
                            '0.status_id'
                        ),
                    ],
                ]
            );

            throw new RuntimeException(
                sprintf(
                    'Kommo respondió HTTP %d: %s',
                    $response->status(),
                    $response->body()
                )
            );
        }

        return $response;
    }

    private function integerConfig(
        string $key
    ): int {
        $value = config($key);

        if (!is_numeric($value)) {
            throw new RuntimeException(
                sprintf(
                    'La configuración %s no es válida.',
                    $key
                )
            );
        }

        return (int) $value;
    }

    private function fieldId(
        string $field
    ): ?int {
        $value = config(
            "services.kommo.fields.{$field}"
        );

        if (!is_numeric($value)) {
            return null;
        }

        return (int) $value;
    }

    private function normalizeArray(
        $value
    ): array {
        if ($value === null) {
            return [];
        }

        if (is_string($value)) {
            $value = preg_split(
                '/[,;|]/',
                $value,
                -1,
                PREG_SPLIT_NO_EMPTY
            );
        }

        if (!is_array($value)) {
            $value = [
                $value,
            ];
        }

        return array_values(
            array_filter(
                array_map(
                    static function ($item) {
                        return trim(
                            (string) $item
                        );
                    },
                    $value
                ),
                static function ($item) {
                    return $item !== '';
                }
            )
        );
    }

    private function arrayToText(
        $value
    ): string {
        return implode(
            ', ',
            $this->normalizeArray($value)
        );
    }
    
    private function normalizeText(
        string $value
    ): string {
        $normalized = Str::ascii($value);

        $normalized = strtolower(
            trim($normalized)
        );

        return str_replace(
            '.',
            '',
            $normalized
        );
    }
}
