<?php
// /app/Http/Livewire/Page/FormFooterDetail.php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;
use App\Models\TDestino;
use App\Services\KommoService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Agent;
use Livewire\Component;
use Throwable;

class FormFooterDetail extends Component
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

    public $paquete;

    public $device;

    public $browser;

    protected $rules = [
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
            'required',
            'date',
        ],

        'values_number' => [
            'required',
        ],

        'values_number_input' => [
            'nullable',
            'integer',
            'min:1',
            'max:99',
        ],

        'values_categories' => [
            'nullable',
            'array',
        ],

        'values_categories.*' => [
            'nullable',
            'string',
        ],

        'comment' => [
            'nullable',
            'string',
            'max:5000',
        ],
    ];

    protected $messages = [
        'name.required' => 'Ingrese su nombre.',
        'email.required' => 'Ingrese su correo electrónico.',
        'email.email' => 'Ingrese un correo electrónico válido.',
        'phone.required' => 'Ingrese su número de teléfono.',
        'travel_day.required' => 'Seleccione la fecha de viaje.',
        'travel_day.date' => 'La fecha seleccionada no es válida.',
        'values_number.required' => 'Seleccione el número de pasajeros.',
        'values_number_input.integer' => 'Ingrese una cantidad válida de pasajeros.',
        'values_number_input.min' => 'La cantidad de pasajeros debe ser mayor que cero.',
        'values_number_input.max' => 'La cantidad máxima permitida es 99.',
    ];

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
        $destinations = TDestino::all();

        $categories = TCategoria::all();

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
            'livewire.page.form-footer-detail',
            compact(
                'destinations',
                'categories',
                'number',
                'trip_lengths',
                'hotels',
                'destino'
            )
        );
    }

    public function updatedValuesNumber(
        $value
    ): void {
        if ((string) $value !== '6') {
            $this->values_number_input = null;
        }
    }

    public function store(): void
    {
        $this->resetErrorBag();

        if (
            (string) $this->values_number === '6'
        ) {
            $this->validate([
                'values_number_input' => [
                    'required',
                    'integer',
                    'min:6',
                    'max:99',
                ],
            ], [
                'values_number_input.required' =>
                    'Ingrese la cantidad de pasajeros.',
                'values_number_input.integer' =>
                    'Ingrese una cantidad válida.',
                'values_number_input.min' =>
                    'Ingrese una cantidad igual o mayor a 6.',
                'values_number_input.max' =>
                    'La cantidad máxima permitida es 99.',
            ]);
        }

        $validated = $this->validate();

        $travellers =
            (string) $this->values_number === '6'
                ? $this->values_number_input
                : $this->values_number;

        $hotelCategories = array_values(
            array_filter(
                $this->values_categories,
                function ($value) {
                    return $value !== null &&
                        $value !== '';
                }
            )
        );

        $destinations = array_values(
            array_filter(
                $this->values_destinations,
                function ($value) {
                    return $value !== null &&
                        $value !== '';
                }
            )
        );

        try {
            $formattedDate = Carbon::parse(
                $validated['travel_day'],
                'America/Lima'
            )->format('Y-m-d');
        } catch (Throwable $exception) {
            $this->addError(
                'travel_day',
                'La fecha seleccionada no es válida.'
            );

            return;
        }

        $inquireDate = Carbon::now(
            'America/Lima'
        )->format('Y-m-d H:i:s');

        $g1Data = [
            'product_id' => 2,
            'package' => $this->paquete,
            'hotel_category' => $hotelCategories,
            'destinations' => $destinations,
            'passengers' => $travellers,
            'duration' => [],
            'travel_date' => $formattedDate,
            'country' => $this->country,
            'country_code' => $this->phonecountry,
            'device' => $this->device,
            'origin' => 'Web',
            'browser' => $this->browser,
            'name' => trim(
                (string) $this->name
            ),
            'email' => strtolower(
                trim(
                    (string) $this->email
                )
            ),
            'phone' => trim(
                (string) $this->phone
            ),
            'comment' => trim(
                (string) $this->comment
            ),
            'initial_price' => 0,
            'inquiry_date' => $inquireDate,
            'dialCode' => '',
        ];

        /*
         * La API antigua utiliza nombres de campos
         * diferentes a G1.
         */
        $legacyData = [
            'package' => $this->paquete,
            'category_d' => $hotelCategories,
            'destino_d' => $destinations,
            'pasajeros_d' => $travellers,
            'duracion_d' => [],
            'el_nombre' => trim(
                (string) $this->name
            ),
            'el_email' => strtolower(
                trim(
                    (string) $this->email
                )
            ),
            'el_fecha' => $formattedDate,
            'el_telefono' => trim(
                (string) $this->phone
            ),
            'el_textarea' => trim(
                (string) $this->comment
            ),
            'codigo_pais' => $this->phonecountry,
            'device' => $this->device,
            'browser' => $this->browser,
            'origen' => 'Web',
            'producto' => 'gotolatam.com',
            'inquire_date' => $inquireDate,
        ];

        /*
         * Kommo tiene su propio arreglo para no depender
         * de la estructura de G1 ni de la API antigua.
         */
        $kommoData = [
            'product_id' => 2,
            'product' => 'gotolatam.com',
            'package' => $this->paquete,
            'hotel_category' => $hotelCategories,
            'destinations' => $destinations,
            'passengers' => $travellers,
            'duration' => [],
            'travel_date' => $formattedDate,
            'country' => $this->country,
            'country_code' => $this->phonecountry,
            'device' => $this->device,
            'browser' => $this->browser,
            'origin' => 'Web',
            'name' => trim(
                (string) $this->name
            ),
            'email' => strtolower(
                trim(
                    (string) $this->email
                )
            ),
            'phone' => trim(
                (string) $this->phone
            ),
            'comment' => trim(
                (string) $this->comment
            ),
            'inquiry_date' => $inquireDate,
            'website' => url()->current(),
        ];

        try {
            /*
             * PASO 1:
             * G1 es el servicio principal.
             * Si falla, el formulario se detiene.
             */
            $g1Response = Http::timeout(20)
                ->acceptJson()
                ->post(
                    'https://app.g1.agency/api/v1/leads/',
                    $g1Data
                );

            if (!$g1Response->successful()) {
                Log::error(
                    'G1 rechazó el lead de detalle de GotoLatam',
                    [
                        'status' => $g1Response->status(),
                        'response' => $g1Response->body(),
                        'product_id' => 2,
                        'product' => 'gotolatam.com',
                        'package' => $this->paquete,
                        'email' => $this->email,
                    ]
                );

                $this->addError(
                    'api_error',
                    'No se pudo registrar la solicitud. Inténtelo nuevamente.'
                );

                return;
            }

            /*
             * PASO 2:
             * La API antigua es complementaria.
             * Si falla, se registra el error, pero no se
             * pierde el lead porque G1 ya lo recibió.
             */
            try {
                $legacyResponse = Http::timeout(20)
                    ->acceptJson()
                    ->post(
                        'https://api.gotoecuador.com/api/store/inquire',
                        $legacyData
                    );

                if (
                    !$legacyResponse->successful()
                ) {
                    Log::error(
                        'G1 recibió el lead de detalle de GotoLatam, pero la API antigua falló',
                        [
                            'status' =>
                                $legacyResponse->status(),
                            'response' =>
                                $legacyResponse->body(),
                            'product_id' => 2,
                            'product' =>
                                'gotolatam.com',
                            'package' =>
                                $this->paquete,
                        ]
                    );
                }
            } catch (Throwable $exception) {
                Log::error(
                    'G1 recibió el lead de detalle de GotoLatam, pero ocurrió una excepción en la API antigua',
                    [
                        'message' =>
                            $exception->getMessage(),
                        'file' =>
                            $exception->getFile(),
                        'line' =>
                            $exception->getLine(),
                        'product_id' => 2,
                        'product' =>
                            'gotolatam.com',
                        'package' =>
                            $this->paquete,
                    ]
                );
            }

            /*
             * PASO 3:
             * Kommo tampoco debe bloquear el formulario.
             */
            try {
                if (
                    (bool) config(
                        'services.kommo.enabled',
                        false
                    )
                ) {
                    app(
                        KommoService::class
                    )->createLeadWithContact(
                        $kommoData
                    );
                }
            } catch (Throwable $exception) {
                Log::error(
                    'G1 recibió el lead de detalle de GotoLatam, pero Kommo falló',
                    [
                        'message' =>
                            $exception->getMessage(),
                        'file' =>
                            $exception->getFile(),
                        'line' =>
                            $exception->getLine(),
                        'product_id' => 2,
                        'product' =>
                            'gotolatam.com',
                        'package' =>
                            $this->paquete,
                    ]
                );
            }

            /*
             * PASO 4:
             * Enviar correo administrativo.
             */
            try {
                $this->sendAdminEmail(
                    $travellers,
                    $hotelCategories,
                    $destinations,
                    $formattedDate
                );
            } catch (Throwable $exception) {
                Log::error(
                    'El lead de detalle de GotoLatam fue registrado, pero el correo administrativo falló',
                    [
                        'message' =>
                            $exception->getMessage(),
                        'file' =>
                            $exception->getFile(),
                        'line' =>
                            $exception->getLine(),
                        'product_id' => 2,
                        'product' =>
                            'gotolatam.com',
                        'package' =>
                            $this->paquete,
                    ]
                );
            }

            $this->resetLeadForm();

            $this->success = __(
                'message.msg_email'
            );
        } catch (Throwable $exception) {
            Log::error(
                'Error al procesar el formulario de detalle de GotoLatam',
                [
                    'message' =>
                        $exception->getMessage(),
                    'file' =>
                        $exception->getFile(),
                    'line' =>
                        $exception->getLine(),
                    'trace' =>
                        $exception->getTraceAsString(),
                    'product_id' => 2,
                    'product' =>
                        'gotolatam.com',
                    'package' =>
                        $this->paquete,
                ]
            );

            $this->addError(
                'api_error',
                'Ocurrió un error al enviar los datos. Inténtelo nuevamente.'
            );
        }
    }

    private function sendAdminEmail(
        $travellers,
        array $hotelCategories,
        array $destinations,
        string $formattedDate
    ): void {
        $from = 'info@gotolatam.com';

        Mail::send(
            [
                'html' =>
                    'notifications.page.admin-form-footer-detail',
            ],
            [
                'paquete' =>
                    $this->paquete,

                'category_all' =>
                    implode(
                        ', ',
                        $hotelCategories
                    ),

                'destinations_all' =>
                    implode(
                        ', ',
                        $destinations
                    ),

                'travellers_all' =>
                    $travellers,

                'trip_length' =>
                    implode(
                        ', ',
                        array_values(
                            array_filter(
                                $this->values_trip_length
                            )
                        )
                    ),

                'travel_day_all' =>
                    $formattedDate,

                'comentario' =>
                    $this->comment,

                'nombre' =>
                    $this->name,

                'email' =>
                    $this->email,

                'telefono' =>
                    $this->phone,

                'code' =>
                    $this->phonecountry,

                'country' =>
                    $this->country,

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
                        'Nueva consulta: ' .
                        $this->paquete
                    )
                    ->from(
                        'info@gotolatam.com',
                        'GotoLatam'
                    );
            }
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

        /*
         * No se reinicia $paquete porque identifica
         * el paquete consultado.
         *
         * Tampoco se reinician device y browser.
         */
        $this->dispatchBrowserEvent(
            'form-footer-detail-reset'
        );
    }
}
