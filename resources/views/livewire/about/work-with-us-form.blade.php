<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg my-12">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
        Join Our Team
    </h2>
    <p class="text-center text-gray-600 mb-8">
        We are always looking for talented individuals to join our team. If you are passionate about travel and have the
        skills we need, we would love to hear from you!
    </p>

    <form wire:submit.prevent="submit" class="space-y-6">
        <!-- Información Personal -->
        <div class="grid md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Personal Information
                </h3>
            </div>

            <div class="relative">
                <div class="relative">
                    <div class="relative">
                        <input type="text" class="is-input-ico peer" placeholder=" " autocomplete="new-password"
                            wire:model="name" />
                        <label class="is-input-ico-label">Full Name *</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                    </div>
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="relative">
                <div class="relative">
                    <input type="email" class="is-input-ico peer" placeholder=" " autocomplete="off"
                        wire:model="userEmail" />
                    <label class="is-input-ico-label">Email *</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                        </svg>
                    </div>
                </div>
                @error('userEmail')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Teléfono con selección de país -->
            <div class="relative" wire:ignore>
                <div class="relative">
                    <input type="number" id="phone" wire:model="phone" class="is-input-ico peer phone_number"
                        placeholder=" " data-intl-tel-input autocomplete="new-password" />
                    <label class="is-input-ico-label">Phone Number *</label>

                </div>
                @error('phone')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
                <input type="hidden" id="country" wire:model="country" />
                <input type="hidden" id="country_code" wire:model="country_code" />
            </div>

            <div class="relative">
                <div class="relative">
                    <div class="relative">
                        <select id="education" wire:model="education_level" class="is-input-ico peer"
                            autocomplete="off">
                            @foreach ($educationLevels as $level)
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endforeach
                        </select>
                        <label class="is-input-ico-label">Education Level</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Custom Education Input (shown when "Other" is selected) -->
                @if ($education_level === 'Other')
                    <div class="mt-4 relative">
                        <div class="relative">
                            <input type="text" wire:model="education_other" class="is-input-ico peer" placeholder=" "
                                autocomplete="off" />
                            <label class="is-input-ico-label">Specify your education level</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Información Profesional -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Profesional Information</h3>
            </div>

            <!-- Job Position Section -->
            <div class="relative">
                <!-- Dropdown de Posición -->
                <div class="relative">
                    <div class="relative">
                        <select id="position" wire:model="position" class="is-input-ico peer" autocomplete="off"
                            wire:change="$set('position_other', '')" wire:key={{ $position }}
                            @error('position') class="border-red-500" @enderror>
                            @foreach ($positions as $pos)
                                <option value="{{ $pos }}">{{ $pos }}</option>
                            @endforeach
                        </select>
                        <label class="is-input-ico-label" @error('position') class="text-red-500" @enderror>
                            Job Position *
                        </label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                    </div>
                    @error('position')
                        <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Campo de texto para "Other" -->
                @if ($position === 'Other')
                    <div class="mt-4 relative">
                        <div class="relative">
                            <input type="text" wire:model="position_other" class="is-input-ico peer"
                                placeholder=" " autocomplete="off" />
                            <label class="is-input-ico-label">
                                Specify your position *
                            </label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                        </div>
                        @error('position_other')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
            </div>

            <!-- Años de Experiencia -->
            <div class="relative">
                <div class="relative">
                    <div class="relative">
                        <input type="number" class="is-input-ico peer hide-number-arrows" placeholder=" "
                            autocomplete="off" wire:model="experience_years" min="0" max="50" />
                        <label class="is-input-ico-label">Years of Experience *</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    @error('experience_years')
                        <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Expectativa Salarial -->
            <div class="relative">
                <div class="relative">
                    <div class="relative">
                        <input type="number" step="0.01" class="is-input-ico peer hide-number-arrows"
                            placeholder=" " autocomplete="off" wire:model="expected_salary" min="0" />
                        <label class="is-input-ico-label">Expected Salary</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Perfil de LinkedIn -->
            <div class="relative">
                <div class="relative">
                    <div class="relative">
                        <input type="url" class="is-input-ico peer" placeholder=" " autocomplete="off"
                            wire:model="linkedin" />
                        <label class="is-input-ico-label">LinkedIn Profile</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                class="w-6 h-6">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Disponibilidad y CV -->
        <div class="space-y-6">
            <!-- Disponibilidad para viajar -->
            <div class="flex items-center pl-4">
                <div class="relative flex items-center">
                    <input type="checkbox" id="travel_availability" wire:model="travel_availability"
                        class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary" />
                    <label for="travel_availability" class="ml-3 text-sm text-gray-700 flex items-center">
                        Do you have availability to travel?
                    </label>
                </div>
            </div>

            <!-- Mensaje/Carta de Presentación -->
            <div class="relative">
                <div class="relative">
                    <textarea wire:model="message" rows="4" class="is-input-ico peer" placeholder=" "></textarea>
                    <label class="is-input-ico-label">Cover Letter/Message</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="relative">
                    <div class="relative">
                        <input type="file" id="resume" wire:model="resume" class="hidden"
                            accept=".pdf,application/pdf" wire:loading.attr="disabled" wire:target="resume" />
                        <label for="resume"
                            class="is-input-ico peer cursor-pointer @error('resume') border-red-500 @enderror">
                            <span class="truncate">
                                @if ($resume)
                                    {{ $resume->getClientOriginalName() }}
                                @else
                                    Select PDF file
                                @endif
                            </span>
                            <label class="is-input-ico-label @error('resume') text-red-500 @enderror">
                                Upload your CV (PDF only) *
                            </label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            @if ($resume)
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                            @endif
                        </label>
                    </div>
                    @error('resume')
                        <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                    @enderror
                    @if ($uploadError)
                        <span class="text-xs text-red-500 mt-1">{{ $uploadError }}</span>
                    @endif
                    <p class="text-xs text-gray-500 mt-1 pl-4">Maximum file size: 5MB</p>
                </div>
            </div>
        </div>

        <!-- Botón de envío -->
        <div class="mx-auto mt-12">
            <button type="submit" class="btn-primary">
                {{ __('message.button_send') }}
                <span wire:loading wire:target="submit">
                    <div class="lds-hourglass"></div>
                </span>
            </button>
        </div>
    </form>
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let input = document.querySelector('[data-intl-tel-input]');
            let countryInput = document.getElementById('country');
            let countryCodeInput = document.getElementById('country_code');

            const iti = window.intlTelInput(input, {
                initialCountry: "auto",
                separateDialCode: false,
                autoHideDialCode: true,
                nationalMode: false,
                geoIpLookup: function(callback) {
                    fetch('https://ipinfo.io/json')
                        .then(response => response.json())
                        .then(data => {
                            const countryCode = data.country ? data.country : "US";
                            callback(countryCode);

                            // Forzar la actualización del país y código telefónico
                            setTimeout(() => {
                                let countryData = iti.getSelectedCountryData();
                                let countryDialCode = countryData.dialCode ?
                                    `${countryData.iso2.toUpperCase()} +${countryData.dialCode}` :
                                    '';
                                let phoneCountry = `${countryCode} ${countryDialCode}`;
                                let countryName = extractCountryName(countryData.name);

                                // Actualizar los valores
                                @this.set('phone', input.value);
                                @this.set('country', countryName);
                                @this.set('country_code', countryDialCode);
                                countryInput.value = countryName;
                                countryCodeInput.value = countryDialCode;
                            }, 500);
                        })
                        .catch(() => {
                            callback("US");
                        });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            // Evento para actualizar los datos cuando cambia el país o el número
            input.addEventListener('blur', function() {
                let countryData = iti.getSelectedCountryData();
                let countryName = extractCountryName(countryData.name);
                let countryDialCode = countryData.dialCode ?
                    `${countryData.iso2.toUpperCase()} +${countryData.dialCode}` : '';
                let phoneCountry = ` `;

                // Actualizar los valores
                @this.set('phone', this.value);
                @this.set('country', countryName);
                @this.set('country_code', countryDialCode);
                countryInput.value = countryName;
                countryCodeInput.value = countryDialCode;
            });

            /**
             * Extrae solo el nombre del país en inglés (sin el nombre local en paréntesis).
             */
            function extractCountryName(fullCountryName) {
                return fullCountryName.replace(/\s?\(.*?\)/, '');
            }
        });
    </script>
@endpush
