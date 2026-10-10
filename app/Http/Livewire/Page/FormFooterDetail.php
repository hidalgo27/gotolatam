<?php
// /app/Http/Livewire/Page/FormFooterDetail.php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;
use App\Models\TDestino;
use App\Services\KommoService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
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

    public $step = 1;

    public $preferredContactMethod = [];

    public $submittedName;

    public $attributionContext;

    public $firstTouch = [];

    public $ctaSource = 'form';

    public $packageDuration;

    protected $leadMetadata = [];

    private const ATTRIBUTION_QUERY_KEYS = [
        'utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid', 'fbclid',
    ];

    private const ATTRIBUTION_LABELS = [
        'first_landing_type' => 'First Landing Type',
        'first_landing_path' => 'First Landing',
        'utm_source' => 'UTM Source',
        'utm_medium' => 'UTM Medium',
        'utm_campaign' => 'UTM Campaign',
        'utm_content' => 'UTM Content',
        'utm_term' => 'UTM Term',
        'gclid' => 'GCLID',
        'fbclid' => 'FBCLID',
        'conversion_page_type' => 'Conversion Page Type',
        'conversion_page_path' => 'Conversion Page',
        'package_id' => 'Package ID',
        'package_slug' => 'Package Slug',
        'campaign_id' => 'Offer Campaign ID',
        'campaign_slug' => 'Offer Slug',
        'cta_source' => 'CTA Source',
    ];

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
            'nullable',
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

        'values_destinations' => ['nullable', 'array'],
        'values_destinations.*' => ['nullable', 'string'],
        'values_trip_length' => ['nullable', 'array'],
        'values_trip_length.*' => ['nullable', 'string'],

        'comment' => [
            'nullable',
            'string',
            'max:5000',
        ],

        'ctaSource' => ['required', 'string', 'in:hero,header,header_mobile,mobile_drawer,sticky_nav,advisor,footer,floating,rail,final,form'],

        'preferredContactMethod' => ['nullable', 'array'],
        'preferredContactMethod.*' => ['string', 'distinct', 'in:WhatsApp,Email,Phone,No preference'],
    ];

    protected $messages = [
        'name.required' => 'Ingrese su nombre.',
        'email.required' => 'Ingrese su correo electrónico.',
        'email.email' => 'Ingrese un correo electrónico válido.',
        'phone.required' => 'Ingrese su número de teléfono.',
        'travel_day.date' => 'La fecha seleccionada no es válida.',
        'values_number.required' => 'Seleccione el número de pasajeros.',
        'values_number_input.integer' => 'Ingrese una cantidad válida de pasajeros.',
        'values_number_input.min' => 'La cantidad de pasajeros debe ser mayor que cero.',
        'values_number_input.max' => 'La cantidad máxima permitida es 99.',
    ];

    public function mount($packageId = null, $packageSlug = null, $campaignId = null, $campaignSlug = null): void
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

        // IDs/slugs are passed by the server-rendered package view, not read from the query string.
        $context = [
            'component_id' => $this->id,
            'package_id' => $packageId,
            'package_slug' => $packageSlug,
            'campaign_id' => $campaignId,
            'campaign_slug' => $campaignSlug,
            'landing_url' => request()->getPathInfo(),
        ];
        $query = request()->query();
        foreach (self::ATTRIBUTION_QUERY_KEYS as $key) {
            $context[$key] = $this->normalizeAttributionValue($query[$key] ?? null, $key);
        }
        $this->validateAttributionContext($context);
        $this->attributionContext = Crypt::encryptString(json_encode($context, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

    protected function normalizeAttributionValue($value, $key)
    {
        if (!is_string($value) || !mb_check_encoding($value, 'UTF-8')) {
            return null;
        }

        if (in_array($key, ['gclid', 'fbclid'], true)) {
            // Preserve valid opaque click IDs byte-for-byte; reject invalid/oversized values, never truncate.
            return $value !== '' && mb_strlen($value) <= 512
                && !preg_match('/[<>\x00-\x20\x7F]/u', $value) ? $value : null;
        }

        $value = trim(preg_replace('/[\x00-\x1F\x7F]+/u', ' ', strip_tags($value)) ?? '');
        return $value === '' ? null : mb_substr($value, 0, 255);
    }

    protected function validateAttributionContext($context)
    {
        $rules = [
            'component_id' => 'required|string|max:100',
            'package_id' => 'nullable|integer|min:1|required_with:campaign_id',
            'package_slug' => 'nullable|string|max:255|required_with:package_id|not_regex:/[<>\x00-\x1F\x7F]/',
            'campaign_id' => 'nullable|integer|min:1|required_with:campaign_slug',
            'campaign_slug' => 'nullable|string|max:120|required_with:campaign_id|not_regex:/[<>\x00-\x1F\x7F]/',
            'landing_url' => 'required|string|max:1024|starts_with:/|not_regex:/[<>?\x00-\x1F\x7F]/',
        ];
        foreach (self::ATTRIBUTION_QUERY_KEYS as $key) {
            $rules[$key] = 'nullable|string|max:' . (in_array($key, ['gclid', 'fbclid'], true) ? 512 : 255);
        }
        if (!is_array($context) || Validator::make($context, $rules)->fails()
            || ($context['component_id'] ?? null) !== $this->id) {
            throw ValidationException::withMessages(['api_error' => 'Please refresh the page and try again.']);
        }
    }

    public function updatingAttributionContext()
    {
        // The initial snapshot is read-only; only the allowlisted CTA source can change in the browser.
        throw ValidationException::withMessages(['api_error' => 'Please refresh the page and try again.']);
    }

    protected function leadAttribution()
    {
        try {
            if (!is_string($this->attributionContext) || strlen($this->attributionContext) > 32768) {
                throw new \UnexpectedValueException('Invalid attribution snapshot.');
            }
            $context = json_decode(Crypt::decryptString($this->attributionContext), true, 512, JSON_THROW_ON_ERROR);
        } catch (\Throwable $exception) {
            throw ValidationException::withMessages(['api_error' => 'Please refresh the page and try again.']);
        }

        $this->validateAttributionContext($context);
        $context['conversion_page_type'] = !empty($context['campaign_id']) ? 'offer' : (!empty($context['package_id']) ? 'package' : 'other');
        $context['conversion_page_path'] = $context['landing_url'];
        $firstTouch = is_array($this->firstTouch) ? $this->firstTouch : [];
        $firstPath = $firstTouch['first_landing_path'] ?? null;
        $validFirstTouch = in_array($firstTouch['first_landing_type'] ?? null, ['home', 'package', 'offer', 'other'], true)
            && is_string($firstPath) && mb_check_encoding($firstPath, 'UTF-8') && mb_strlen($firstPath) <= 1024
            && strpos($firstPath, '/') === 0 && strpos($firstPath, '//') !== 0
            && !preg_match('/[<>?#\x00-\x1F\x7F]/u', $firstPath);
        $context['first_landing_type'] = $validFirstTouch ? $firstTouch['first_landing_type'] : $context['conversion_page_type'];
        $context['first_landing_path'] = $validFirstTouch ? $firstPath : $context['landing_url'];
        foreach (self::ATTRIBUTION_QUERY_KEYS as $key) {
            // A valid first touch takes precedence, including an original visit without UTMs.
            $context[$key] = $this->normalizeAttributionValue($validFirstTouch ? ($firstTouch[$key] ?? null) : ($context[$key] ?? null), $key);
        }

        $context['cta_source'] = $this->ctaSource;
        $attribution = [];
        foreach (self::ATTRIBUTION_LABELS as $key => $label) {
            if (($context[$key] ?? null) !== null) {
                $attribution[$label] = $context[$key];
            }
        }
        return $attribution;
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
        if ($this->success) {
            return;
        }

        $this->resetErrorBag();
        $this->step = 2;

        // Unchecked indexed Livewire checkboxes use false; it is not a selected value.
        foreach (['values_categories', 'values_destinations', 'values_trip_length'] as $field) {
            if ($this->{$field} === null) {
                $this->{$field} = [];
            }
            if (is_array($this->{$field})) {
                $this->{$field} = array_map(
                    static fn($value) => $value === false ? null : $value,
                    $this->{$field}
                );
            }
        }

        try {
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
        } catch (\Illuminate\Validation\ValidationException $exception) {
            if (array_intersect(array_keys($exception->errors()), [
                'travel_day', 'values_number', 'values_number_input', 'values_categories',
                'values_destinations', 'values_trip_length',
            ]) || collect(array_keys($exception->errors()))->contains(function ($field) {
                return strpos($field, 'values_categories.') === 0
                    || strpos($field, 'values_destinations.') === 0
                    || strpos($field, 'values_trip_length.') === 0;
            })) {
                $this->step = 1;
            }

            throw $exception;
        }

        $this->preferredContactMethod = in_array('No preference', $this->preferredContactMethod ?? [], true)
            ? ['No preference']
            : array_values(array_intersect(['WhatsApp', 'Email', 'Phone'], $this->preferredContactMethod ?? []));

        $this->leadMetadata = $this->leadAttribution();

        $travellers =
            (string) $this->values_number === '6'
                ? $this->values_number_input
                : $this->values_number;

        $hotelCategories = array_values(
            array_filter(
                $validated['values_categories'] ?? [],
                function ($value) {
                    return $value !== null &&
                        $value !== '';
                }
            )
        );

        $destinations = array_values(
            array_filter(
                $validated['values_destinations'] ?? [],
                function ($value) {
                    return $value !== null &&
                        $value !== '';
                }
            )
        );

        $duration = array_values(array_filter(
            $validated['values_trip_length'] ?? [],
            static fn($value) => $value !== null && $value !== ''
        ));
        if ($duration === []
            && (is_int($this->packageDuration) || is_string($this->packageDuration))
            && filter_var($this->packageDuration, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) !== false) {
            $duration = [(string) (int) $this->packageDuration];
        }

        try {
            $formattedDate = filled($validated['travel_day'] ?? null)
                ? Carbon::parse(
                    $validated['travel_day'],
                    'America/Lima'
                )->format('Y-m-d')
                : null;
        } catch (Throwable $exception) {
            $this->step = 1;
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
            'duration' => $duration,
            // TODO: Solución temporal GOTOLATAM.
            // Eliminar fecha ficticia cuando G1 permita
            // registrar travel_date como SQL NULL.
            'travel_date' => $formattedDate ?? '1900-01-01',
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
                $this->leadComment()
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
                $this->leadComment()
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
                $this->leadComment()
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
                ->asJson()
                ->withoutRedirecting()
                ->post(
                    'https://app.g1.agency/api/v1/leads/',
                    $g1Data
                );

            $g1Result = $g1Response->json();
            if (!$g1Response->successful()
                || !is_array($g1Result)
                || ($g1Result['success'] ?? null) !== true
                || $this->g1ResponseHasErrors($g1Result)) {
                $errorFields = is_array($g1Result['errors'] ?? null)
                    ? $g1Result['errors'] : (is_array($g1Result) ? $g1Result : []);
                Log::error(
                    'G1 rechazó el lead de detalle de GotoLatam',
                    [
                        'status' => $g1Response->status(),
                        'response_is_json' => is_array($g1Result),
                        'error_fields' => array_values(array_intersect(
                            array_keys($errorFields),
                            array_merge(array_keys($g1Data), ['travel_date2', 'non_field_errors'])
                        )),
                        'product_id' => 2,
                        'product' => 'gotolatam.com',
                    ]
                );

                $this->addError(
                    'api_error',
                    'No pudimos confirmar el registro de tu solicitud en el servicio de cotizaciones. Tus datos se han conservado; contacta a nuestro equipo para recibir ayuda.'
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
                            'product_id' => 2,
                            'product' =>
                                'gotolatam.com',
                        ]
                    );
                }
            } catch (Throwable $exception) {
                Log::error(
                    'G1 recibió el lead de detalle de GotoLatam, pero ocurrió una excepción en la API antigua',
                    [
                        'exception_type' =>
                            get_class($exception),
                        'file' =>
                            $exception->getFile(),
                        'line' =>
                            $exception->getLine(),
                        'product_id' => 2,
                        'product' =>
                            'gotolatam.com',
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
                        'exception_type' =>
                            get_class($exception),
                        'file' =>
                            $exception->getFile(),
                        'line' =>
                            $exception->getLine(),
                        'product_id' => 2,
                        'product' =>
                            'gotolatam.com',
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
                        'exception_type' =>
                            get_class($exception),
                        'file' =>
                            $exception->getFile(),
                        'line' =>
                            $exception->getLine(),
                        'product_id' => 2,
                        'product' =>
                            'gotolatam.com',
                    ]
                );
            }

            $this->submittedName = $this->name;
            $this->resetLeadForm();

            $this->success = __(
                'message.msg_email'
            );

            $this->dispatchBrowserEvent('gotolatam:generate-lead', array_filter([
                'lead_event_id' => (string) \Illuminate\Support\Str::uuid(),
                'first_landing_type' => $this->leadMetadata['First Landing Type'] ?? null,
                'conversion_page_type' => $this->leadMetadata['Conversion Page Type'] ?? null,
                'package_id' => $this->leadMetadata['Package ID'] ?? null,
                'package_slug' => $this->leadMetadata['Package Slug'] ?? null,
                'offer_slug' => $this->leadMetadata['Offer Slug'] ?? null,
                'cta_source' => $this->ctaSource,
                'number_travelers' => filter_var($travellers, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?: null,
                'hotel_category' => implode('|', $hotelCategories),
            ], function ($value) { return $value !== null && $value !== ''; }));
        } catch (Throwable $exception) {
            Log::error(
                'Error al procesar el formulario de detalle de GotoLatam',
                [
                    'exception_type' =>
                        get_class($exception),
                    'file' =>
                        $exception->getFile(),
                    'line' =>
                        $exception->getLine(),
                    'product_id' => 2,
                    'product' =>
                        'gotolatam.com',
                ]
            );

            $this->addError(
                'api_error',
                'Ocurrió un error al enviar los datos. Inténtelo nuevamente.'
            );
        }
    }

    private function g1ResponseHasErrors(array $result): bool
    {
        foreach (['error', 'errors', 'non_field_errors'] as $key) {
            if (isset($result[$key]) && !in_array($result[$key], [false, '', []], true)) {
                return true;
            }
        }

        if (array_key_exists('success', $result)
            && in_array($result['success'], [false, 0, 'false', '0'], true)) {
            return true;
        }

        $status = $result['status'] ?? null;
        if (is_string($status) && in_array(strtolower(trim($status)), [
            'error', 'failed', 'failure', 'rejected', 'invalid',
        ], true)) {
            return true;
        }

        return is_array($result['data'] ?? null)
            && $this->g1ResponseHasErrors($result['data']);
    }

    private function sendAdminEmail(
        $travellers,
        array $hotelCategories,
        array $destinations,
        ?string $formattedDate
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
                    $this->leadComment(),

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

    private function leadComment(): string
    {
        $comment = (string) $this->comment;

        if ($this->preferredContactMethod) {
            $comment .= (trim($comment) !== '' ? "\n\n" : '')
                . 'Preferred contact: ' . implode(', ', $this->preferredContactMethod);
        }

        if ($this->leadMetadata) {
            $lines = [];
            foreach ($this->leadMetadata as $label => $value) {
                $lines[] = $label . ': ' . $value;
            }
            $comment .= (trim($comment) !== '' ? "\n\n" : '')
                . "[Marketing Attribution]\n" . implode("\n", $lines) . "\n[/Marketing Attribution]";
        }

        return $comment;
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
