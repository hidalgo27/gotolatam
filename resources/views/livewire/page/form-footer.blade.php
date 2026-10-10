<div class="bg-gray-100 dark:bg-gray-700 {{ $success ? 'py-12' : 'py-5 md:py-12' }} text-gray-700 dark:text-gray-100" id="form-dream-adventure" data-quote-form="general"
     x-data="{
         step: @entangle('step').defer,


         submitted: @entangle('success'),
         dateReadOnly: window.innerWidth < 768 || /iPhone|iPad|iPod/.test(navigator.userAgent),
         number: @entangle('values_number').defer,
         specified: @entangle('values_number_input').defer,
         preferredContact: @entangle('preferredContactMethod').defer,
         tripLengths: @entangle('values_trip_length').defer,
         get travelers() {
             const value = Number(this.number === '6' ? this.specified : this.number);
             return Number.isInteger(value) && value > 0 ? value : null;
         },
         setTravelers(raw) {
             const text = String(raw).trim();
             if (text === '') {
                 this.number = null;
                 this.specified = null;
                 return;
             }
             if (!/^[0-9]+$/.test(text)) return;
             const value = Number(text);
             if (!Number.isSafeInteger(value) || value < 1 || value > 99) return;
             this.number = value >= 6 ? '6' : String(value);
             this.specified = value >= 6 ? String(value) : null;
         },
         changeTravelers(change) {
             this.setTravelers(Math.max(1, (this.travelers || 0) + change));
         },
         setPreferredContact(value, checked) {
             if (checked && value === 'No preference') {
                 this.preferredContact = ['No preference'];
                 return;
             }
             const selected = Object.values(this.preferredContact || {});
             this.preferredContact = ['WhatsApp', 'Email', 'Phone'].filter(method =>
                 method === value ? checked : selected.includes(method)
             );
         },
         init() {
             this.viewportResizeHandler = () => this.updateFloatingActions();
             this.viewportScrollHandler = () => this.updateFloatingActions();
             if (window.visualViewport) {
                 window.visualViewport.addEventListener('resize', this.viewportResizeHandler);
                 window.visualViewport.addEventListener('scroll', this.viewportScrollHandler);
             }
         },
         destroy() {
             this.clearFocusedField();
             if (window.visualViewport) {
                 window.visualViewport.removeEventListener('resize', this.viewportResizeHandler);
                 window.visualViewport.removeEventListener('scroll', this.viewportScrollHandler);
             }
         },
         rememberFocusedField(field) {
             if (window.innerWidth >= 768 || !field || field.readOnly
                 || !field.matches('textarea, input[type=text], input[type=email], input[type=tel]')) return;
             this.clearFocusedField();
             this.focusedField = field;
             if (window.visualViewport) {
                 this.fieldViewportHandler = () => {
                     cancelAnimationFrame(this.fieldVisibilityFrame);
                     this.fieldVisibilityFrame = requestAnimationFrame(() => {
                         this.fieldVisibilityFrame = requestAnimationFrame(() => this.keepFocusedFieldVisible());
                     });
                 };
                 window.visualViewport.addEventListener('resize', this.fieldViewportHandler);
                 window.visualViewport.addEventListener('scroll', this.fieldViewportHandler);
             } else {
                 this.fieldVisibilityTimer = setTimeout(() => this.keepFocusedFieldVisible(), 300);
             }
         },
         clearFocusedField(field = null) {
             if (field && field !== this.focusedField) return;
             clearTimeout(this.fieldVisibilityTimer);
             cancelAnimationFrame(this.fieldVisibilityFrame);
             if (window.visualViewport && this.fieldViewportHandler) {
                 window.visualViewport.removeEventListener('resize', this.fieldViewportHandler);
                 window.visualViewport.removeEventListener('scroll', this.fieldViewportHandler);
             }
             this.focusedField = null;
             this.fieldViewportHandler = null;
         },
         keepFocusedFieldVisible() {
             const field = this.focusedField;
             if (window.innerWidth >= 768 || !field || document.activeElement !== field || !field.isConnected) return;
             const viewport = window.visualViewport;
             if (/CriOS\//.test(navigator.userAgent) && viewport) {
                 const bounds = field.getBoundingClientRect();
                 const top = viewport.offsetTop;
                 const bottom = top + viewport.height;
                 // Let Chrome finish its own positioning when the field is already visible.
                 if (bounds.top >= top && bounds.bottom <= bottom) return;
                 const margin = 8;
                 const offset = bounds.top < top || bounds.height > viewport.height - margin * 2
                     ? bounds.top - top - margin : bounds.bottom - bottom + margin;
                 if (Math.abs(offset) > 1) window.scrollBy({ top: offset, left: 0, behavior: 'auto' });
                 return;
             }
             const top = (viewport ? viewport.offsetTop : 0) + 16;
             const bottom = (viewport ? viewport.offsetTop + viewport.height : window.innerHeight) - 16;
             const bounds = field.getBoundingClientRect();
             if (bounds.top < top || bounds.bottom > bottom) {
                 const offset = bounds.top < top || bounds.height > bottom - top
                     ? bounds.top - top : bounds.bottom - bottom;
                 window.scrollBy({ top: offset, left: 0, behavior: 'auto' });
             }
         },
         updateFloatingActions() {
             const viewport = window.visualViewport;
             const top = viewport ? viewport.offsetTop : 0;
             const bottom = top + (viewport ? viewport.height : window.innerHeight);
             const hide = window.innerWidth < 768
                 && Array.from(document.querySelectorAll('[data-quote-form]')).some(form => {
                     const bounds = form.getBoundingClientRect();
                     return bounds.height > 0 && bounds.top < bottom && bounds.bottom > top;
                 });
             document.querySelectorAll('[data-quote-floating], .fixed.bottom-0.right-0.py-6.px-7, .fixed.bottom-0.right-0.py-5.px-4, .fixed.bg-12.bottom-0.w-full').forEach(action => {
                 action.classList.toggle('quote-floating-hidden', hide);
             });
         },
         goToStep(value) {
             this.step = value;
             this.$nextTick(() => this.$refs.stepHeading.focus());
         }
     }"
     x-effect="step; submitted; $nextTick(() => updateFloatingActions())"
     @scroll.window.throttle.100ms="updateFloatingActions()"
     @resize.window.debounce.100ms="dateReadOnly = window.innerWidth < 768 || /iPhone|iPad|iPod/.test(navigator.userAgent); updateFloatingActions()">
    <div class="container mx-auto">
        <div class="{{ $success ? 'w-11/12 max-w-6xl mx-auto' : 'quote-form-inner w-11/12 max-w-2xl mx-auto' }}">
            <div class="{{ $success ? 'quote-form-inner mx-auto text-center mb-6' : 'mb-4 text-center md:block md:mb-6' }}">
                <img src="{{ asset('images/logos/logo-gotoperu-black.png') }}" alt="GoToLatam" class="block mx-auto h-12 w-auto max-w-full mb-1 md:mb-4">
                <h2 class="font-semibold text-gray-700 dark:text-gray-100 {{ $success ? 'text-2xl' : 'text-lg text-center md:text-2xl md:text-center' }}">Plan Your Trip</h2>
                <p class="text-gray-500 dark:text-gray-300 {{ $success ? 'text-sm mt-2' : 'w-full text-sm mt-1 md:mt-2' }}">Tell us about the trip you have in mind.</p>
            </div>

            <form id="form-footer-lead" wire:submit.prevent="store" @submit.capture="if (step === 1) { $event.preventDefault(); $event.stopImmediatePropagation(); goToStep(2); }" novalidate>
                <input type="hidden" wire:model="device" readonly>
                <input type="hidden" wire:model="browser" readonly>
                <div x-show="!submitted">
                    <div class="mb-4 md:mb-6" aria-label="Quote progress">
                        <div class="flex items-center justify-between gap-3 mb-2 md:mb-3">
                            <h3 class="text-base md:text-lg font-semibold text-gray-700 dark:text-gray-100 focus:outline-none" tabindex="-1" x-ref="stepHeading"
                                x-text="step === 1 ? 'Your Trip' : 'Your Details'">Your Trip</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-300" aria-live="polite">Step <span x-text="step">1</span> of 2</p>
                        </div>
                        <div class="grid grid-cols-2 gap-2" aria-hidden="true">
                            <span class="h-1 bg-primary"></span>
                            <span class="h-1" :class="step === 2 ? 'bg-primary' : 'bg-gray-300'"></span>
                        </div>
                    </div>

                    <fieldset class="min-w-0" wire:loading.attr="disabled" wire:target="store">
                        <div x-show="step === 1" class="grid grid-cols-1 gap-4 md:block md:space-y-6">
                            <div>
                                <label for="datepicker" class="block text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2"><span class="md:hidden">Travel date</span><span class="hidden md:inline">When would you like to travel?</span></label>
                                <input id="datepicker" wire:model.lazy="travel_day" type="text" autocomplete="off"
                                       :readonly="dateReadOnly" :inputmode="dateReadOnly ? 'none' : null"
                                       class="quote-input bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-3 md:p-5 text-gray-700 dark:text-gray-100 w-full focus:outline-none focus:border-primary"
                                       placeholder="Select a tentative date" aria-describedby="quote-date-help-general quote-date-error-general"
                                       aria-invalid="{{ $errors->has('travel_day') ? 'true' : 'false' }}">
                                <p id="quote-date-help-general" class="hidden md:block text-xs text-gray-500 dark:text-gray-300 mt-2">Tentative date · Leave blank if you're not sure yet.</p>
                                @error('travel_day') <p id="quote-date-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </div>

                            <fieldset class="min-w-0">
                                <legend class="text-sm font-semibold text-gray-700 dark:text-gray-100 mb-1 md:mb-2 w-full md:w-auto">
                                    <span class="flex items-center justify-between gap-2">
                                        <span>Number of travelers</span>
                                        <button type="button" class="quote-action flex-shrink-0 px-2 text-xs md:hidden text-primary focus:outline-none focus:underline"
                                                :class="number === 'Undecided' ? 'font-semibold' : 'font-normal'"
                                                :aria-pressed="number === 'Undecided'"
                                                @click="number = number === 'Undecided' ? null : 'Undecided'; specified = null">
                                            Not sure yet
                                        </button>
                                    </span>
                                </legend>
                                <div class="block">
                                    <div class="min-w-0 flex items-center justify-between gap-2 md:gap-3 bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-1 md:p-2">
                                        <button type="button" @click="changeTravelers(-1)" :disabled="travelers === null || travelers <= 1"
                                                class="quote-stepper-button flex items-center justify-center border border-gray-300 dark:border-gray-600 text-primary hover:border-primary focus:outline-none focus:ring-2 focus:ring-primary"
                                                aria-label="Remove one traveler">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-5 h-5" aria-hidden="true" ><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" /></svg>
                                        </button>
                                        <input type="number" min="1" max="99" step="1" inputmode="numeric" autocomplete="off"
                                               class="quote-travelers-input min-w-0 flex-1 w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 px-2 text-center font-semibold text-gray-700 dark:text-gray-100 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary"
                                               aria-label="Number of travelers" aria-invalid="{{ $errors->has('values_number') || $errors->has('values_number_input') ? 'true' : 'false' }}" aria-describedby="quote-travelers-error-general quote-travelers-count-error-general" :value="travelers === null ? '' : travelers"
                                               :placeholder="number === 'Undecided' ? 'Not sure yet' : 'Choose travelers'"
                                               @input="setTravelers($event.target.value); $event.target.value = travelers === null ? '' : travelers">
                                        <button type="button" @click="changeTravelers(1)" :disabled="travelers >= 99"
                                                class="quote-stepper-button flex items-center justify-center border border-gray-300 dark:border-gray-600 text-primary hover:border-primary focus:outline-none focus:ring-2 focus:ring-primary"
                                                aria-label="Add one traveler">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-5 h-5" aria-hidden="true" ><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                                        </button>
                                    </div>
                                    <button type="button" class="quote-action hidden w-max max-w-full mx-auto mt-1 px-3 text-sm md:inline-block md:w-auto md:mx-0 md:mt-2 border text-primary focus:outline-none focus:ring-2 focus:ring-primary"
                                            :class="number === 'Undecided' ? 'border-primary bg-white dark:bg-gray-800' : 'border-transparent'"
                                            :aria-pressed="number === 'Undecided'"
                                            @click="number = number === 'Undecided' ? null : 'Undecided'; specified = null">
                                        Not sure yet
                                    </button>
                                </div>
                                @error('values_number') <p id="quote-travelers-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                                @error('values_number_input') <p id="quote-travelers-count-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </fieldset>

                            <fieldset class="min-w-0">
                                <legend id="quote-destinations-label-general" class="text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2">Destinations <span class="text-xs font-normal text-gray-500 dark:text-gray-300">· Optional</span></legend>
                                <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
                                    @foreach($destino as $index => $destination)
                                        <label class="quote-touch-choice relative cursor-pointer min-w-0" wire:key="quote-destination-general-{{ $index }}">
                                            <input wire:model.defer="values_destinations.{{ $index }}" type="checkbox" value="{{ $destination['destino'] }}" class="quote-choice-input sr-only">
                                            <span class="quote-choice flex items-center justify-center gap-2 rounded-none border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 px-2 py-3 text-primary hover:border-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="quote-choice-check w-4 h-4 flex-shrink-0" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                                <span class="text-sm text-gray-700 dark:text-gray-100">{{ $destination['destino'] }}</span>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                                @error('values_destinations') <p class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </fieldset>

                            <div class="min-w-0">
                                <label for="quote-length-general" class="block text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2">Trip length</label>
                                <div class="relative min-w-0">
                                    <select id="quote-length-general"
                                            class="quote-input block min-w-0 w-full rounded-none appearance-none bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-3 md:p-5 pr-10 md:pr-10 font-normal focus:outline-none focus:border-primary"
                                            :class="Object.values(tripLengths || {}).filter(Boolean).length ? 'text-gray-700 dark:text-gray-100' : 'text-gray-400'"
                                            x-effect="$el.value = Object.values(tripLengths || {}).filter(Boolean)[0] || ''"
                                            @change="tripLengths = $event.target.value ? [$event.target.value] : []"
                                            aria-invalid="{{ $errors->has('values_trip_length') ? 'true' : 'false' }}" aria-describedby="quote-length-error-general">
                                        <option value="">Select trip length</option>
                                        @foreach($trip_lengths as $trip_length)
                                            <option value="{{ $trip_length }}">{{ $trip_length }} days</option>
                                        @endforeach
                                        <option value="Undecided">Not sure yet</option>
                                    </select>
                                    <span class="pointer-events-none absolute inset-y-0 right-0 flex w-10 items-center justify-center text-gray-500 dark:text-gray-300" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                    </span>
                                </div>
                                @error('values_trip_length') <p id="quote-length-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </div>

                            <fieldset class="min-w-0">
                                <legend class="text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2 md:mb-0">Hotel preference <span class="text-xs font-normal text-gray-500 dark:text-gray-300 md:hidden">· Optional</span></legend>
                                <p class="hidden md:block text-xs text-gray-500 dark:text-gray-300 mt-1 mb-3">Optional · Select one or more</p>
                                <div class="grid grid-cols-3 gap-0 border border-gray-300 dark:border-gray-600 divide-x divide-gray-300 md:gap-2 md:border-0 md:divide-x-0">
                                    @foreach(array_reverse($hotels, true) as $index => $hotel)
                                        <label class="quote-touch-choice relative cursor-pointer min-w-0" wire:key="quote-hotel-{{ $index }}">
                                            <input wire:model.defer="values_categories.{{ $index }}" type="checkbox" value="{{ $hotel['star'] }}" class="quote-choice-input sr-only">
                                            <span class="quote-choice quote-hotel flex flex-col items-center justify-center text-center gap-2 md:gap-1 md:border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 px-1 py-4 md:py-5 md:px-3 text-primary hover:border-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="quote-choice-check !absolute top-0 right-0 mt-2 mr-2 hidden md:block w-4 h-4" aria-hidden="true" ><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                                <span class="text-sm font-semibold text-gray-700 dark:text-gray-100">{{ $hotel['category'] }}</span>
                                                <span class="quote-hotel-stars flex items-center justify-center text-secondary" role="img" aria-label="{{ $hotel['star'] }} stars">
                                                    @for($star = 0; $star < (int) $hotel['star']; $star++)
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3" aria-hidden="true" ><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                                    @endfor
                                                </span>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                                @error('values_categories') <p class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                                @error('values_categories.*') <p class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </fieldset>

                            <button type="button" class="btn-secondary quote-action quote-main-action w-full" @click="goToStep(2)">
                                Continue <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="inline-block w-4 h-4 ml-2" aria-hidden="true" ><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </button>
                        </div>

                        <div x-show="step === 2" x-cloak class="grid grid-cols-1 gap-4 md:block md:space-y-6" @focusin="rememberFocusedField($event.target)" @focusout="clearFocusedField($event.target)">
                            <div>
                                <label for="quote-name-general" class="block text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2">Full name</label>
                                <input id="quote-name-general" wire:model.defer="name" type="text" autocomplete="name" maxlength="150"
                                       class="quote-input bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-3 md:p-5 text-gray-700 dark:text-gray-100 w-full focus:outline-none focus:border-primary"
                                       aria-required="true" aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}" aria-describedby="quote-name-error-general">
                                @error('name') <p id="quote-name-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="quote-email-general" class="block text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2">Email</label>
                                <input id="quote-email-general" wire:model.defer="email" type="email" autocomplete="email" maxlength="190" inputmode="email"
                                       class="quote-input bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-3 md:p-5 text-gray-700 dark:text-gray-100 w-full focus:outline-none focus:border-primary"
                                       aria-required="true" aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}" aria-describedby="quote-email-error-general">
                                @error('email') <p id="quote-email-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2">Phone / WhatsApp</label>
                                <div class="{{ $errors->has('phone') ? 'quote-phone-invalid' : '' }}"><div wire:ignore>
                                    <input id="phone" type="tel" autocomplete="tel" maxlength="50" inputmode="tel"
                                           class="quote-input phone_number bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-3 md:p-5 text-gray-700 dark:text-gray-100 w-full focus:outline-none focus:border-primary"
                                           data-intl-tel-input aria-required="true" aria-invalid="{{ $errors->has('phone') ? 'true' : 'false' }}" aria-describedby="quote-phone-error-general">
                                </div></div>
                                @error('phone') <p id="quote-phone-error-general" class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </div>
                            <fieldset class="min-w-0">
                                <legend class="text-sm font-semibold text-gray-700 dark:text-gray-100">How would you prefer us to contact you?</legend>
                                <p class="text-xs text-gray-500 dark:text-gray-300 mt-2 mb-3 md:mt-1">Optional</p>
                                <div class="grid grid-cols-4 gap-0 border border-gray-300 dark:border-gray-600 divide-x divide-gray-300 md:grid md:grid-cols-4 md:gap-2 md:border-0 md:divide-x-0">
                                    @foreach(['WhatsApp', 'Email', 'Phone', 'No preference'] as $contactMethod)
                                        <label class="quote-touch-choice relative cursor-pointer min-w-0" wire:key="quote-contact-{{ $loop->index }}">
                                            <input type="checkbox" value="{{ $contactMethod }}" class="quote-choice-input sr-only"
                                                   x-effect="$el.checked = (preferredContact || []).includes($el.value)"
                                                   @change="setPreferredContact($event.target.value, $event.target.checked)">
                                            <span class="quote-choice flex items-center justify-center gap-2 text-center md:border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 px-2 py-4 md:py-5 md:px-3 text-primary hover:border-primary">
                                                <span class="text-sm text-gray-700 dark:text-gray-100">@if($contactMethod === 'No preference')<span class="md:hidden">Any</span><span class="hidden md:inline">{{ $contactMethod }}</span>@else{{ $contactMethod }}@endif</span>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                                @error('preferredContactMethod') <p class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </fieldset>
                            <div>
                                <label for="quote-comment-general" class="block text-sm font-semibold text-gray-700 dark:text-gray-100 mb-2">Comments <span class="font-normal text-gray-500 dark:text-gray-300">· Optional</span></label>
                                <textarea id="quote-comment-general" wire:model.defer="comment" rows="3" maxlength="5000"
                                          class="h-24 md:h-auto quote-input bg-gray-50 dark:bg-gray-800 border border-gray-400 dark:border-gray-600 p-2 md:p-5 text-gray-700 dark:text-gray-100 w-full placeholder:text-sm placeholder:font-normal placeholder:text-gray-400 focus:outline-none focus:border-primary"
                                          placeholder="{{ __('message.form_footer_par9') }}"></textarea>
                                @error('comment') <p class="text-sm text-red-500 mt-2" role="alert">{{ $message }}</p> @enderror
                            </div>
                            <div class="space-y-1 md:space-y-2">
                                <button type="submit" class="btn-primary quote-action quote-main-action w-full" wire:loading.attr="disabled" wire:target="store">
                                    <span wire:loading.remove wire:target="store">Get My Free Quote</span>
                                    <span wire:loading wire:target="store" role="status">Sending your request…</span>
                                </button>
                                <button type="button" class="btn-prev quote-action w-full text-sm" @click="goToStep(1)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="inline-block w-4 h-4 mr-1" aria-hidden="true" ><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg> Back
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </div>
                @error('api_error') <p class="text-sm text-red-500 mt-4" role="alert">{{ $message }}</p> @enderror
                @if($success)
                    <div class="relative" role="status" aria-live="polite">
                        <div class="absolute inset-0 ml-3 mt-6 bg-gray-700" aria-hidden="true">
                            <div class="absolute inset-0 bg-line-cover opacity-10"></div>
                        </div>
                        <div class="relative">
                            <div class="relative z-10 min-w-0 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 p-5 md:p-8 text-left break-words md:w-2/3">
                                <span class="inline-flex items-center justify-center rounded-full bg-secondary p-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-6 h-6 text-white" aria-hidden="true" ><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                </span>
                                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-100">Thank you, {{ $submittedName }}!</h2>
                                <p class="text-sm text-gray-500 dark:text-gray-300 mt-2">We've received your trip request.</p>
                                <div class="mt-6">
                                    <h3 class="text-xs font-bold tracking-wider text-primary">WHAT HAPPENS NEXT?</h3>
                                    <p class="text-sm font-bold text-gray-700 dark:text-gray-100 leading-snug mt-3">Our Latin America travel experts will take it from here.</p>
                                    <ol class="mt-4 text-sm">
                                        <li class="flex items-start gap-3">
                                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 rounded-full border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-xs font-semibold text-primary" aria-hidden="true">1</span>
                                            <div class="min-w-0 flex-1">
                                                <h4 class="font-semibold text-gray-700 dark:text-gray-100">We review your request</h4>
                                                <p class="text-gray-500 dark:text-gray-300 mt-1">Our travel team will review the details you shared.</p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-3 mt-4">
                                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 rounded-full border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-xs font-semibold text-primary" aria-hidden="true">2</span>
                                            <div class="min-w-0 flex-1">
                                                <h4 class="font-semibold text-gray-700 dark:text-gray-100">We prepare your proposal</h4>
                                                <p class="text-gray-500 dark:text-gray-300 mt-1">A GoToLatam travel advisor will work on your personalized quote.</p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-3 mt-4">
                                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 rounded-full border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-xs font-semibold text-primary" aria-hidden="true">3</span>
                                            <div class="min-w-0 flex-1">
                                                <h4 class="font-semibold text-gray-700 dark:text-gray-100">We'll contact you</h4>
                                                <p class="text-gray-500 dark:text-gray-300 mt-1">
                                                    @switch(count($preferredContactMethod ?? []) === 1 ? $preferredContactMethod[0] : null)
                                                        @case('WhatsApp')
                                                            We'll reach out via WhatsApp using the number you provided.
                                                            @break
                                                        @case('Email')
                                                            We'll contact you using the email address you provided.
                                                            @break
                                                        @case('Phone')
                                                            A travel advisor will call you using the number you provided.
                                                            @break
                                                        @default
                                                            A travel advisor will contact you using the details you provided.
                                                    @endswitch
                                                </p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-300 mt-4">Please check your email and phone for a message from your travel advisor.</p>
                            </div>
                            <div class="relative ml-3 grid grid-cols-3 items-end md:contents md:static md:ml-0">
                                <div class="relative z-10 col-span-2 min-w-0 grid grid-cols-1 gap-3 md:flex md:items-center pl-4 pr-1 py-4 md:p-8 text-left text-gray-50 md:w-2/3">
                                    <p class="text-sm min-w-0">Want to talk to a travel advisor now?</p>
                                    <a href="https://api.whatsapp.com/send?phone=51934005414" target="_blank" rel="noopener"
                                       class="btn-secondary quote-action inline-flex items-center justify-center flex-shrink-0 max-w-full !px-0 text-center">
                                        <span class="inline-flex items-center gap-1 whitespace-nowrap px-1 text-gray-700 dark:text-gray-100 md:block md:px-3 md:whitespace-normal">
                                            <span>Chat on WhatsApp</span>
                                            <span>→</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="relative self-stretch col-span-1 min-w-0 md:absolute right-0 bottom-0 flex items-end justify-center md:px-3 md:pt-6 md:w-4/12">
                                    <img src="{{ asset('images/team/pabel.png') }}" alt="GoToLatam travel team" class="absolute inset-0 block w-full h-full max-w-full object-contain object-bottom md:static md:w-full md:h-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"
    >

    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            /*
             * Calendario.
             */
            const dateInput =
                document.getElementById('datepicker');

            if (
                dateInput &&
                typeof window.Pikaday === 'function'
            ) {
                const formRoot = dateInput.closest('[data-quote-form]');
                    const isIPhone = /iPhone|iPod/.test(navigator.userAgent);
                    let suppressDateFocus = false;
                    let closeAfterSelection = false;
                    const closeSelectedCalendar = () => {
                        if (!closeAfterSelection || !picker) return;
                        picker.hide();
                        dateInput.blur();
                    };
                    const picker = new window.Pikaday({
                        field: dateInput,
                        format: 'YYYY-MM-DD',
                        minDate: new Date(),
                        firstDay: 1,
                        toString: function (date) {
                            return date.getFullYear() + '-' + String(date.getMonth() + 1).padStart(2, '0') + '-' + String(date.getDate()).padStart(2, '0');
                        },
                        parse: function (value) {
                            const parts = /^(\d{4})-(\d{2})-(\d{2})$/.exec(value);
                            if (!parts) return NaN;
                            const date = new Date(Number(parts[1]), Number(parts[2]) - 1, Number(parts[3]));
                            return date.getFullYear() === Number(parts[1]) && date.getMonth() === Number(parts[2]) - 1 && date.getDate() === Number(parts[3]) ? date : NaN;
                        },
                        onSelect: function (date) {
                            const formattedDate = this.toString(date);
                            dateInput.value = formattedDate;
                            closeAfterSelection = window.innerWidth < 768 || /iPhone|iPad|iPod/.test(navigator.userAgent);
                            if (isIPhone) {
                                suppressDateFocus = true;
                                this.hide();
                                dateInput.blur();
                                requestAnimationFrame(() => @this.set('travel_day', formattedDate, true));
                            } else {
                                @this.set('travel_day', formattedDate, true);
                                if (closeAfterSelection) requestAnimationFrame(closeSelectedCalendar);
                            }
                        }
                    });
                    formRoot.addEventListener('pointerdown', event => {
                        if (event.target === dateInput) closeAfterSelection = false;
                        if (event.target === dateInput || event.target.closest('label[for=' + dateInput.id + ']')) suppressDateFocus = false;
                    });
                    if (isIPhone) {
                        formRoot.addEventListener('change', event => {
                            if (event.firedBy === picker) event.stopImmediatePropagation();
                        }, true);
                        const preventDateReopen = event => {
                            if (event.target !== dateInput || !suppressDateFocus) return;
                            if (event.type === 'click' && event.isTrusted && event.detail === 0) {
                                suppressDateFocus = false;
                                return;
                            }
                            event.stopImmediatePropagation();
                            if (event.type === 'click') event.preventDefault();
                            dateInput.blur();
                        };
                        formRoot.addEventListener('focus', preventDateReopen, true);
                        formRoot.addEventListener('click', preventDateReopen, true);
                    } else if (window.Livewire) {
                        window.Livewire.hook('message.processed', (message, component) => {
                            if (component.id === formRoot.getAttribute('wire:id') && closeAfterSelection) requestAnimationFrame(closeSelectedCalendar);
                        });
                    }
            }

            /*
             * Teléfono internacional.
             */
            const form =
                document.getElementById(
                    'form-footer-lead'
                );

            const input =
                form ? form.querySelector('[data-intl-tel-input]') : null;

            if (
                !form ||
                !input ||
                typeof window.intlTelInput !==
                'function'
            ) {
                return;
            }

            const extractCountryName =
                function (fullCountryName) {
                    return (
                        fullCountryName || ''
                    )
                        .replace(
                            /\s?\(.*?\)/,
                            ''
                        )
                        .trim();
                };

            const iti =
                window.intlTelInput(
                    input,
                    {
                        initialCountry: 'auto',
                        separateDialCode: true,
                        autoHideDialCode: false,
                        nationalMode: false,

                        geoIpLookup: function (
                            callback
                        ) {
                            fetch(
                                'https://ipinfo.io/json'
                            )
                                .then(function (
                                    response
                                ) {
                                    if (!response.ok) {
                                        throw new Error(
                                            'No se pudo detectar el país.'
                                        );
                                    }

                                    return response.json();
                                })
                                .then(function (
                                    data
                                ) {
                                    callback(
                                        data.country ||
                                        'US'
                                    );
                                })
                                .catch(function () {
                                    callback('US');
                                });
                        },

                        utilsScript:
                            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
                    }
                );

            const syncPhone =
                function () {
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
                        input.value.trim();

                    if (
                        typeof iti.getNumber ===
                        'function'
                    ) {
                        const internationalNumber =
                            iti.getNumber();

                        if (
                            internationalNumber
                        ) {
                            phoneValue =
                                internationalNumber;
                        }
                    }

                @this.set('phone', phoneValue, true);

                @this.set('phonecountry', phoneCountry, true);

                @this.set('country', countryName, true);
                };

            input.addEventListener(
                'blur',
                syncPhone
            );
            input.addEventListener('input', syncPhone);
            if (form) form.addEventListener('submit', syncPhone, true);

            input.addEventListener(
                'change',
                syncPhone
            );

            input.addEventListener(
                'countrychange',
                syncPhone
            );

            form.addEventListener(
                'mousedown',
                function (event) {
                    const submitButton =
                        event.target.closest(
                            'button[type="submit"]'
                        );

                    if (submitButton) {
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

                    if (submitButton) {
                        syncPhone();
                    }
                },
                {
                    passive: true,
                }
            );

            window.addEventListener(
                'form-footer-reset',
                function () {
                    input.value = '';

                    if (dateInput) {
                        dateInput.value = '';
                    }
                }
            );

            setTimeout(
                syncPhone,
                1000
            );
        });
    </script>
@endpush
