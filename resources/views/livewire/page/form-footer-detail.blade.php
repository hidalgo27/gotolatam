{{-- /resources/views/livewire/page/form-footer-detail.blade.php --}}

<div
    id="form-dream-adventure"
    class="bg-gray-100 py-12"
>
    <div class="mx-auto mb-6 w-11/12 text-center md:w-7/12 lg:w-1/2 xl:w-1/3">
        <img
            src="{{ asset('images/logos/logo-gotoperu-black.png') }}"
            alt="GotoLatam"
            class="mx-auto w-52"
        >

        <h3 class="mt-2 text-2xl font-semibold text-gray-600">
            {{ __('message.form_footer_title') }}
        </h3>

        <p class="text-sm tracking-tighter text-gray-500">
            {{ __('message.form_footer_par1') }}
        </p>

        <h4 class="mt-6 font-medium">
            {{ __('message.form_footer_par14') }}:
        </h4>

        <div class="mb-3 border bg-white p-2 text-center">
            <p class="text-lg font-medium">
                {{ $paquete }}
            </p>
        </div>
    </div>

    <form
        id="form-footer-detail-lead"
        wire:submit.prevent="store"
        class="mx-auto grid w-11/12 grid-cols-1 items-center gap-12 md:w-7/12 lg:w-1/2 xl:w-2/5"
    >
        <div>
            {{-- Categoría del hotel --}}
            <div class="mx-auto grid grid-cols-6 gap-2">
                <div class="col-span-6 flex flex-col text-center">
                    <h2 class="text-lg font-bold text-gray-500">
                        {{ __('message.form_footer_subtitle1') }}
                    </h2>

                    <p class="text-xs font-semibold text-gray-500">
                        {{ __('message.form_footer_par2') }}
                    </p>
                </div>

                <label
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 p-5 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                        />
                    </svg>
                </label>

                <div class="col-span-6 grid grid-cols-3 gap-2 md:col-span-5">
                    @foreach ($hotels as $index => $hotel)
                        <label
                            class="btn-check-form relative flex cursor-pointer items-center justify-center border border-gray-400 bg-gray-50 py-3 text-gray-500 transition duration-700 hover:border-secondary hover:bg-white"
                        >
                            <input
                                wire:model="values_categories.{{ $index }}"
                                type="checkbox"
                                value="{{ $hotel['star'] }}"
                                class="absolute opacity-0"
                            >

                            <svg
                                class="pointer-events-none absolute left-0 top-0 hidden h-7 w-7 fill-current p-1 text-secondary"
                                viewBox="0 0 20 20"
                            >
                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                            </svg>

                            <span class="flex flex-col text-center">
                                <span class="block select-none text-xs md:text-base">
                                    {{ $hotel['category'] }}
                                </span>

                                <span class="flex justify-center text-secondary">
                                    @for ($i = 0; $i < $hotel['star']; $i++)
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 w-3 md:h-4 md:w-4"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                    @endfor
                                </span>
                            </span>
                        </label>
                    @endforeach
                </div>

                @error('values_categories')
                <span class="col-span-6 text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            {{-- Número de pasajeros --}}
            <div class="mx-auto mt-4 grid grid-cols-6 gap-2">
                <div class="col-span-6 flex flex-col text-center">
                    <h2 class="text-lg font-bold text-gray-500">
                        {{ __('message.form_footer_subtitle2') }}
                    </h2>
                </div>

                <label
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 p-5 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                </label>

                <div class="col-span-6 grid grid-cols-7 gap-2 md:col-span-5">
                    @foreach ($number as $numbers)
                        <label
                            class="btn-check-form relative flex cursor-pointer items-center justify-center border border-gray-400 bg-gray-50 py-3 text-gray-500 transition duration-500 hover:border-secondary hover:bg-white"
                        >
                            <input
                                wire:model="values_number"
                                type="radio"
                                value="{{ $numbers }}"
                                class="absolute hidden"
                            >

                            <svg
                                class="pointer-events-none absolute left-0 top-0 hidden h-7 w-7 fill-current p-1 text-secondary"
                                viewBox="0 0 20 20"
                            >
                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                            </svg>

                            <span class="block select-none">
                                {{ $numbers }}
                            </span>
                        </label>
                    @endforeach

                    <label
                        x-data="{ open: @entangle('values_number').defer === '6' }"
                        x-on:click="open = true"
                        class="btn-check-form relative flex cursor-pointer items-center justify-center border border-gray-400 bg-gray-50 text-gray-500 transition duration-500 hover:border-secondary hover:bg-white"
                    >
                        <input
                            wire:model="values_number"
                            type="radio"
                            value="6"
                            class="absolute hidden"
                        >

                        <svg
                            class="pointer-events-none absolute left-0 top-0 hidden h-7 w-7 fill-current p-1 text-secondary"
                            viewBox="0 0 20 20"
                        >
                            <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                        </svg>

                        <span class="flex flex-col text-center">
                            <span class="block select-none">
                                <span class="text-xss">
                                    {{ __('message.form_footer_par3') }}
                                </span>

                                <input
                                    x-show="open"
                                    wire:model.defer="values_number_input"
                                    x-on:click.stop
                                    type="number"
                                    min="6"
                                    max="99"
                                    inputmode="numeric"
                                    class="form-input w-full text-xs"
                                    placeholder="6+"
                                >
                            </span>
                        </span>
                    </label>

                    <label
                        class="btn-check-form relative flex cursor-pointer items-center justify-center border border-gray-400 bg-gray-50 px-4 py-3 text-gray-500 transition duration-500 hover:border-secondary hover:bg-white"
                    >
                        <input
                            wire:model="values_number"
                            type="radio"
                            value="Undecided"
                            class="absolute hidden"
                        >

                        <svg
                            class="pointer-events-none absolute left-0 top-0 hidden h-7 w-7 fill-current p-1 text-secondary"
                            viewBox="0 0 20 20"
                        >
                            <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                        </svg>

                        <span class="block select-none text-xss tracking-tighter">
                            {{ __('message.form_footer_par4') }}
                        </span>
                    </label>
                </div>

                @error('values_number')
                <span class="col-span-6 text-xs text-red-500 md:col-span-5 md:col-start-2">
                        {{ $message }}
                    </span>
                @enderror

                @error('values_number_input')
                <span class="col-span-6 text-xs text-red-500 md:col-span-5 md:col-start-2">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            {{-- Fecha de viaje --}}
            <div class="mx-auto mt-6 grid grid-cols-6 gap-2">
                <label
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                    </svg>
                </label>

                <div
                    class="col-span-6 md:col-span-5"
                    wire:ignore
                >
                    <input
                        id="datepicker-detail"
                        type="text"
                        autocomplete="off"
                        class="w-full border border-gray-400 bg-gray-50 p-3 text-gray-500 md:p-5"
                        placeholder="{{ __('message.form_footer_par7') }}"
                        data-detail-datepicker
                    >
                </div>

                @error('travel_day')
                <span class="col-span-6 text-xs text-red-500 md:col-span-5 md:col-start-2">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            {{-- Nombre --}}
            <div class="mx-auto mt-6 grid grid-cols-6 gap-2">
                <label
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 p-5 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                        />
                    </svg>
                </label>

                <div class="col-span-6 md:col-span-5">
                    <input
                        wire:model.defer="name"
                        type="text"
                        autocomplete="name"
                        class="w-full border border-gray-400 bg-gray-50 p-3 text-gray-500 focus:outline-none md:p-5"
                        placeholder="{{ __('message.form_footer_par10') }}"
                    >

                    @error('name')
                    <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Correo --}}
            <div class="mx-auto mt-6 grid grid-cols-6 gap-2">
                <label
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 p-5 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />
                    </svg>
                </label>

                <div class="col-span-6 md:col-span-5">
                    <input
                        wire:model.defer="email"
                        type="email"
                        autocomplete="email"
                        class="w-full border border-gray-400 bg-gray-50 p-3 text-gray-500 focus:outline-none md:p-5"
                        placeholder="{{ __('message.form_footer_par11') }}"
                    >

                    @error('email')
                    <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Teléfono --}}
            <div class="mx-auto mt-6 grid grid-cols-6 gap-2">
                <label
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 p-5 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                        />
                    </svg>
                </label>

                <div
                    class="col-span-6 md:col-span-5"
                    wire:ignore
                >
                    <input
                        id="phone-detail"
                        type="tel"
                        autocomplete="tel"
                        class="phone_number w-full border border-gray-400 bg-gray-50 p-3 text-gray-500 focus:outline-none md:p-5"
                        placeholder="{{ __('message.form_footer_par12') }}"
                        data-detail-intl-tel-input
                    >
                </div>

                @error('phone')
                <span class="col-span-6 text-xs text-red-500 md:col-span-5 md:col-start-2">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            {{-- Comentario --}}
            <div class="mx-auto mt-6 grid grid-cols-6 gap-2">
                <div
                    class="hidden items-center justify-center border border-gray-400 bg-gray-50 p-5 text-gray-500 md:col-span-1 md:inline-flex"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        />
                    </svg>
                </div>

                <textarea
                    wire:model.defer="comment"
                    rows="4"
                    maxlength="5000"
                    class="col-span-6 w-full border border-gray-400 bg-gray-50 p-5 text-gray-500 focus:outline-none md:col-span-5"
                    placeholder="{{ __('message.form_footer_par9') }}"
                ></textarea>

                @error('comment')
                <span class="col-span-6 text-xs text-red-500 md:col-span-5 md:col-start-2">
                        {{ $message }}
                    </span>
                @enderror

                <p class="col-span-6 text-right text-xs font-bold text-gray-400">
                    {{ __('message.form_footer_par13') }}
                </p>
            </div>
        </div>

        @error('api_error')
        <div class="rounded border border-red-300 bg-red-50 p-3 text-sm text-red-700">
            {{ $message }}
        </div>
        @enderror

        <div class="mx-auto">
            <button
                type="submit"
                class="btn-primary"
                wire:loading.attr="disabled"
                wire:target="store"
            >
                <span
                    wire:loading.remove
                    wire:target="store"
                >
                    {{ __('message.button_send') }}
                </span>

                <span
                    wire:loading
                    wire:target="store"
                >
                    <span class="lds-hourglass"></span>
                </span>
            </button>
        </div>

        @if ($success)
            <div
                class="mx-auto mt-3 flex w-11/12 justify-between"
                x-data="{ dataopen: true }"
                x-show="dataopen"
            >
                <div class="inline-flex w-full overflow-hidden bg-white shadow-sm">
                    <div class="flex w-12 items-center justify-center bg-green-500"></div>

                    <div class="flex w-full items-center justify-between px-3 py-2 text-left">
                        <div>
                            <span class="font-semibold text-green-500">
                                {{ __('message.form_footer_par8') }}
                            </span>

                            <p class="mb-1 text-sm leading-none text-gray-500">
                                {{ $success }}
                            </p>
                        </div>

                        <button
                            type="button"
                            x-on:click="dataopen = false"
                            class="cursor-pointer rounded border border-green-300 bg-green-200 px-2 py-1 text-sm text-green-500"
                        >
                            OK
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </form>
</div>

<style>
    input:checked + svg {
        display: block;
    }
</style>

@push('scripts')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"
    >

    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

    <script>
        document.addEventListener(
            'DOMContentLoaded',
            function () {
                const form =
                    document.getElementById(
                        'form-footer-detail-lead'
                    );

                const dateInput =
                    document.querySelector(
                        '[data-detail-datepicker]'
                    );

                const phoneInput =
                    document.querySelector(
                        '[data-detail-intl-tel-input]'
                    );

                /*
                 * Calendario Pikaday.
                 */
                let picker = null;

                if (
                    dateInput &&
                    typeof window.Pikaday ===
                    'function'
                ) {
                    picker = new window.Pikaday({
                        field: dateInput,
                        format: 'YYYY-MM-DD',
                        minDate: new Date(),
                        firstDay: 1,

                        onSelect: function (date) {
                            const year =
                                date.getFullYear();

                            const month =
                                String(
                                    date.getMonth() + 1
                                ).padStart(
                                    2,
                                    '0'
                                );

                            const day =
                                String(
                                    date.getDate()
                                ).padStart(
                                    2,
                                    '0'
                                );

                            const formattedDate =
                                year +
                                '-' +
                                month +
                                '-' +
                                day;

                            dateInput.value =
                                formattedDate;

                        @this.set(
                            'travel_day',
                            formattedDate
                        );
                        },
                    });
                }

                /*
                 * Teléfono internacional.
                 */
                let iti = null;

                const extractCountryName =
                    function (
                        fullCountryName
                    ) {
                        return (
                            fullCountryName ||
                            ''
                        )
                            .replace(
                                /\s?\(.*?\)/,
                                ''
                            )
                            .trim();
                    };

                const syncPhone =
                    function () {
                        if (
                            !iti ||
                            !phoneInput
                        ) {
                            return;
                        }

                        const countryData =
                            iti.getSelectedCountryData();

                        const countryName =
                            extractCountryName(
                                countryData.name ||
                                ''
                            );

                        const countryDialCode =
                            countryData.dialCode
                                ? '+' +
                                countryData.dialCode
                                : '';

                        const isoCode =
                            countryData.iso2
                                ? countryData.iso2
                                    .toUpperCase()
                                : '';

                        const phoneCountry =
                            (
                                isoCode +
                                ' ' +
                                countryDialCode
                            ).trim();

                        let phoneValue =
                            phoneInput.value.trim();

                        if (
                            typeof iti.getNumber ===
                            'function'
                        ) {
                            const completeNumber =
                                iti.getNumber();

                            if (completeNumber) {
                                phoneValue =
                                    completeNumber;
                            }
                        }

                    @this.set(
                        'phone',
                        phoneValue
                    );

                    @this.set(
                        'phonecountry',
                        phoneCountry
                    );

                    @this.set(
                        'country',
                        countryName
                    );
                    };

                if (
                    phoneInput &&
                    typeof window.intlTelInput ===
                    'function'
                ) {
                    iti =
                        window.intlTelInput(
                            phoneInput,
                            {
                                initialCountry:
                                    'auto',

                                separateDialCode:
                                    true,

                                autoHideDialCode:
                                    false,

                                nationalMode:
                                    false,

                                geoIpLookup:
                                    function (
                                        callback
                                    ) {
                                        fetch(
                                            'https://ipinfo.io/json'
                                        )
                                            .then(
                                                function (
                                                    response
                                                ) {
                                                    if (
                                                        !response.ok
                                                    ) {
                                                        throw new Error(
                                                            'No se pudo detectar el país.'
                                                        );
                                                    }

                                                    return response.json();
                                                }
                                            )
                                            .then(
                                                function (
                                                    data
                                                ) {
                                                    callback(
                                                        data.country ||
                                                        'US'
                                                    );
                                                }
                                            )
                                            .catch(
                                                function () {
                                                    callback(
                                                        'US'
                                                    );
                                                }
                                            );
                                    },

                                utilsScript:
                                    'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
                            }
                        );

                    phoneInput.addEventListener(
                        'blur',
                        syncPhone
                    );

                    phoneInput.addEventListener(
                        'change',
                        syncPhone
                    );

                    phoneInput.addEventListener(
                        'countrychange',
                        syncPhone
                    );

                    setTimeout(
                        syncPhone,
                        1000
                    );
                }

                /*
                 * Sincronizar antes de que Livewire
                 * procese el submit.
                 */
                if (form) {
                    form.addEventListener(
                        'mousedown',
                        function (event) {
                            const submitButton =
                                event.target.closest(
                                    'button[type="submit"]'
                                );

                            if (
                                submitButton
                            ) {
                                syncPhone();
                            }
                        }
                    );

                    form.addEventListener(
                        'touchstart',
                        function (event) {
                            const submitButton =
                                event.target.closest(
                                    'button[type="submit"]'
                                );

                            if (
                                submitButton
                            ) {
                                syncPhone();
                            }
                        },
                        {
                            passive: true,
                        }
                    );
                }

                /*
                 * Limpiar los campos manejados con
                 * wire:ignore después del registro.
                 */
                window.addEventListener(
                    'form-footer-detail-reset',
                    function () {
                        if (phoneInput) {
                            phoneInput.value =
                                '';
                        }

                        if (dateInput) {
                            dateInput.value =
                                '';
                        }

                        if (
                            picker &&
                            typeof picker.setDate ===
                            'function'
                        ) {
                            picker.setDate(
                                null
                            );
                        }
                    }
                );
            }
        );
    </script>
@endpush
