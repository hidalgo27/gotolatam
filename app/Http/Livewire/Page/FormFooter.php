<?php
// /app/Http/Livewire/Page/FormFooter.php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;
use App\Services\KommoService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Agent;
use Livewire\Component;

class FormFooter extends Component
{
    public $values_categories = [];

    public $values_destinations = [];

    public $values_number;

    public $values_trip_length = [];

    public $travel_day;

    public $comment;

    public $name;

    public $email;

    public $phone;

    public $country;

    public $phonecountry;

    public $values_number_input;

    public $success;

    public $device;

    public $browser;

    public function mount(): void
    {
        $agent = new Agent();

        if ($agent->isMobile()) {
            $this->device = 'Móvil';
        } elseif ($agent->isTablet()) {
            $this->device = 'Tablet';
        } else {
            $this->device = 'Computadora de escritorio';
        }

        $this->browser = $agent->browser();
    }

    public function render()
    {
        $categories =
            TCategoria::all();

        $number = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ];

        $trip_lengths = [
            '7-11',
            '12-15',
            '16-21',
            '22-28',
            '29+',
        ];

        $hotels = [
            [
                'star' => '5',
                'category' => __(
                    'message.form_footer_par15'
                ),
            ],
            [
                'star' => '4',
                'category' => __(
                    'message.form_footer_par16'
                ),
            ],
            [
                'star' => '3',
                'category' => __(
                    'message.form_footer_par17'
                ),
            ],
        ];

        $destino = [
            [
                'destino' => 'Perú',
            ],
            [
                'destino' => 'Colombia',
            ],
            [
                'destino' => 'Chile',
            ],
            [
                'destino' => 'Ecuador',
            ],
            [
                'destino' => 'Bolivia',
            ],
            [
                'destino' => 'Argentina',
            ],
            [
                'destino' => 'Brasil',
            ],
        ];

        return view(
            'livewire.page.form-footer',
            compact(
                'categories',
                'number',
                'trip_lengths',
                'hotels',
                'destino'
            )
        );
    }

    public function store(): void
    {
        $this->resetErrorBag();
        $this->success = null;

        $this->validate([
            'name' => [
                'required',
                'string',
                'max:150',
            ],

            'email' => [
                'required',
                'email',
                'max:190',
            ],

            'phone' => [
                'required',
                'string',
                'max:50',
            ],

            'travel_day' => [
                'nullable',
                'string',
            ],

            'comment' => [
                'nullable',
                'string',
                'max:5000',
            ],

            'values_categories' => [
                'nullable',
                'array',
            ],

            'values_destinations' => [
                'nullable',
                'array',
            ],

            'values_number' => [
                'nullable',
                'string',
            ],

            'values_number_input' => [
                'nullable',
                'integer',
                'min:1',
                'max:99',
            ],

            'values_trip_length' => [
                'nullable',
                'array',
            ],
        ]);

        $productId = 2;
        $from = 'info@gotolatam.com';
        $product = 'gotolatam.com';

        $travellers =
            $this->resolveTravellers();

        $categories =
            $this->cleanArray(
                $this->values_categories
            );

        $destinations =
            $this->cleanArray(
                $this->values_destinations
            );

        $tripLengths =
            $this->cleanArray(
                $this->values_trip_length
            );

        try {
            $formattedDate =
                filled($this->travel_day)
                    ? Carbon::parse(
                    $this->travel_day
                )->format('Y-m-d')
                    : null;
        } catch (\Throwable $exception) {
            $this->addError(
                'travel_day',
                'La fecha de viaje ingresada no es válida.'
            );

            return;
        }

        $inquireDate =
            Carbon::now('America/Lima')
                ->format('Y-m-d H:i:s');

        $normalizedPhone =
            $this->normalizedPhone();

        /*
         * Datos para el servicio anterior.
         */
        $legacyData = [
            'category_d' => $categories,
            'destino_d' => $destinations,
            'pasajeros_d' => $travellers,
            'duracion_d' => $tripLengths,
            'el_nombre' => trim(
                (string) $this->name
            ),
            'el_email' => strtolower(
                trim((string) $this->email)
            ),
            'el_fecha' => $formattedDate,
            'el_telefono' =>
                $normalizedPhone,
            'el_textarea' =>
                $this->comment,
            'codigo_pais' =>
                $this->phonecountry,
            'device' => $this->device,
            'browser' => $this->browser,
            'origen' => 'Web',
            'producto' => $product,
            'inquire_date' =>
                $inquireDate,
        ];

        /*
         * Datos para G1.
         */
        $g1Data = [
            'product_id' => $productId,
            'package' => '',
            'hotel_category' => $categories,
            'destinations' => $destinations,
            'passengers' => $travellers,
            'duration' => $tripLengths,
            'travel_date' => $formattedDate,
            'country' => $this->country,
            'country_code' =>
                $this->phonecountry,
            'device' => $this->device,
            'origin' => 'Web',
            'browser' => $this->browser,
            'name' => trim(
                (string) $this->name
            ),
            'email' => strtolower(
                trim((string) $this->email)
            ),
            'phone' => $normalizedPhone,
            'comment' => $this->comment,
            'initial_price' => 0,
            'inquiry_date' =>
                $inquireDate,
            'dialCode' => '',
        ];

        /*
         * Datos exclusivos para Kommo.
         */
        $kommoData = [
            'product_id' => $productId,
            'product' => $product,
            'website' => $product,

            'hotel_category' =>
                $categories,

            'destinations' =>
                $destinations,

            'passengers' =>
                $travellers,

            'duration' =>
                $tripLengths,

            'travel_date' =>
                $formattedDate,

            'country' =>
                $this->country,

            'country_code' =>
                $this->phonecountry,

            'device' =>
                $this->device,

            'origin' =>
                'Web',

            'browser' =>
                $this->browser,

            'name' => trim(
                (string) $this->name
            ),

            'email' => strtolower(
                trim((string) $this->email)
            ),

            'phone' =>
                $normalizedPhone,

            'comment' =>
                $this->comment,

            'inquiry_date' =>
                $inquireDate,
        ];

        try {
            /*
             * 1. Registrar en G1.
             */
            $g1Response =
                Http::acceptJson()
                    ->asJson()
                    ->timeout(20)
                    ->post(
                        'https://app.g1.agency/api/v1/leads/',
                        $g1Data
                    );

            if ($g1Response->failed()) {
                Log::error(
                    'No se pudo registrar el lead de GotoLatam en G1',
                    [
                        'status' =>
                            $g1Response->status(),

                        'response' =>
                            $g1Response->body(),

                        'product_id' =>
                            $productId,
                    ]
                );

                $this->addError(
                    'api_error',
                    'No se pudo enviar la solicitud. Inténtalo nuevamente.'
                );

                return;
            }

            /*
             * 2. Servicio anterior.
             *
             * No utiliza connectTimeout porque la
             * versión actual de Laravel no lo admite.
             */
            try {
                $legacyResponse =
                    Http::acceptJson()
                        ->asJson()
                        ->timeout(20)
                        ->post(
                            'https://api.gotoecuador.com/api/store/inquire',
                            $legacyData
                        );

                if (
                    $legacyResponse->failed()
                ) {
                    Log::error(
                        'G1 recibió el lead, pero el servicio anterior respondió con error',
                        [
                            'status' =>
                                $legacyResponse->status(),

                            'response' =>
                                $legacyResponse->body(),

                            'product' =>
                                $product,
                        ]
                    );
                }
            } catch (
            \Throwable $legacyException
            ) {
                Log::error(
                    'G1 recibió el lead, pero no se pudo conectar al servicio anterior',
                    [
                        'message' =>
                            $legacyException
                                ->getMessage(),

                        'product' =>
                            $product,
                    ]
                );
            }

            /*
             * 3. Kommo.
             *
             * Si falla, no bloquea el formulario.
             */
            try {
                /** @var KommoService $kommoService */
                $kommoService = app(
                    KommoService::class
                );

                $kommoService
                    ->createLeadWithContact(
                        $kommoData
                    );
            } catch (
            \Throwable $kommoException
            ) {
                Log::error(
                    'G1 recibió el lead de GotoLatam, pero Kommo falló',
                    [
                        'message' =>
                            $kommoException
                                ->getMessage(),

                        'file' =>
                            $kommoException
                                ->getFile(),

                        'line' =>
                            $kommoException
                                ->getLine(),

                        'product_id' =>
                            $productId,

                        'product' =>
                            $product,
                    ]
                );
            }

            /*
             * 4. Correo administrativo.
             */
            $this->sendAdminEmail(
                $from,
                $travellers,
                $categories,
                $destinations,
                $tripLengths,
                $normalizedPhone
            );

            $this->resetLeadForm();

            $this->success = __(
                'message.msg_email'
            );
        } catch (\Throwable $exception) {
            Log::error(
                'Error al procesar el formulario de GotoLatam',
                [
                    'message' =>
                        $exception->getMessage(),

                    'file' =>
                        $exception->getFile(),

                    'line' =>
                        $exception->getLine(),

                    'trace' =>
                        $exception
                            ->getTraceAsString(),

                    'product_id' =>
                        $productId,

                    'product' =>
                        $product,
                ]
            );

            $this->addError(
                'api_error',
                'Ocurrió un error al enviar los datos.'
            );
        }
    }

    private function resolveTravellers()
    {
        if (
            $this->values_number === '6'
        ) {
            return filled(
                $this->values_number_input
            )
                ? (string)
                $this->values_number_input
                : '6';
        }

        return $this->values_number;
    }

    private function sendAdminEmail(
        string $from,
               $travellers,
        array $categories,
        array $destinations,
        array $tripLengths,
        string $normalizedPhone
    ): void {
        Mail::send(
            [
                'html' =>
                    'notifications.page.admin-form-footer',
            ],
            [
                'category_all' =>
                    implode(', ', $categories),

                'destinations_all' =>
                    implode(', ', $destinations),

                'travellers_all' =>
                    $travellers,

                'trip_length' =>
                    implode(', ', $tripLengths),

                'travel_day_all' =>
                    $this->travel_day,

                'comentario' =>
                    $this->comment,

                'nombre' =>
                    $this->name,

                'email' =>
                    $this->email,

                'telefono' =>
                    $normalizedPhone,

                'code' =>
                    $this->phonecountry,

                'device' =>
                    $this->device,

                'browser' =>
                    $this->browser,
            ],
            function ($message) use ($from) {
                $message
                    ->to(
                        $from,
                        'GotoLatam'
                    )
                    ->subject(
                        'GotoLatam'
                    )
                    ->from(
                        'info@gotolatam.com',
                        'GotoLatam'
                    );
            }
        );
    }

    private function sendClientEmail(): void
    {
        Mail::send(
            [
                'html' =>
                    'notifications.page.client-form-design',
            ],
            [
                'name' => $this->name,
            ],
            function ($message) {
                $message
                    ->to(
                        $this->email,
                        $this->name
                    )
                    ->subject(
                        'GotoLatam'
                    )
                    ->from(
                        'info@gotolatam.com',
                        'GotoLatam'
                    );
            }
        );
    }

    private function normalizedPhone(): string
    {
        $phone = trim(
            (string) $this->phone
        );

        if ($phone === '') {
            return '';
        }

        if (
            strpos($phone, '+') === 0
        ) {
            return preg_replace(
                '/[^\d+]/',
                '',
                $phone
            ) ?: $phone;
        }

        preg_match(
            '/\+\d+/',
            (string)
            $this->phonecountry,
            $matches
        );

        $dialCode =
            $matches[0] ?? '';

        $cleanPhone =
            preg_replace(
                '/\D+/',
                '',
                $phone
            ) ?: $phone;

        return $dialCode .
            $cleanPhone;
    }

    private function cleanArray(
        $value
    ): array {
        if ($value === null) {
            return [];
        }

        if (!is_array($value)) {
            $value = [
                $value,
            ];
        }

        return array_values(
            array_filter(
                $value,
                static function ($item) {
                    return $item !== null
                        && $item !== ''
                        && $item !== false;
                }
            )
        );
    }

    private function resetLeadForm(): void
    {
        $this->reset([
            'values_categories',
            'values_destinations',
            'values_number',
            'values_number_input',
            'values_trip_length',
            'travel_day',
            'comment',
            'name',
            'email',
            'phone',
            'country',
            'phonecountry',
        ]);

        $this->dispatchBrowserEvent(
            'form-footer-reset'
        );
    }
}
