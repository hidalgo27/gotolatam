<div class="bg-gray-100 py-12" x-data="{data: false}" id="form-dream-adventure">
    <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mb-6 text-center">
        <img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="" class="mx-auto w-52">
        <h3 class="text-2xl font-semibold mt-2 text-gray-600">{{__('message.form_footer_title')}}</h3>
        <p class="text-gray-500 tracking-tighter text-sm">{{__('message.form_footer_par1')}}</p>
        <h4 class="font-medium mt-6">{{__('message.form_footer_par14')}}:</h4>
        <div class="border bg-white bg-gray-100 text-center p-2 mb-3">
            <p class="text-lg font-medium">{{$paquete}}</p>
        </div>
    </div>
    <form wire:submit.prevent="store">
        <div x-show="!data">
            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto grid grid-cols-6 gap-2">
                <div class="col-span-6 flex flex-col text-center">
                    <h2 class="text-lg font-bold text-gray-500">{{__('message.form_footer_subtitle1')}}</h2>
                    <p class="text-xs text-gray-500 font-semibold">{{__('message.form_footer_par2')}}</p>

                </div>
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5 grid grid-cols-3 gap-2">
                    @foreach($hotels as $index => $hotel)

                        <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-700">
                            <input wire:model="values_categories.{{ $index }}" type="checkbox" value="{{$hotel['star'].','}}" class="opacity-0 absolute">
                            <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            <span class="flex flex-col text-center">
                                <div class="select-none block text-xs md:text-base">{{ $hotel['category'] }}</div>
                                <div class="text-secondary flex justify-center">
                                    @for ($i = 0; $i < $hotel['star']; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 md:h-4 md:w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    @endfor
                                </div>
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 gap-2">
                <div class="col-span-6 flex flex-col text-center">
                    <h2 class="text-lg font-bold">DESTINATIONS</h2>
                </div>
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 dark:bg-gray-700 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 dark:bg-gray-700 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>

                </label>
                <div class="col-span-6 md:col-span-5 grid grid-cols-4 gap-2">
                    @foreach($destino as $index => $destinos)
                        <label class="cursor-pointer btn-check-form  flex justify-start items-start relative bg-gray-50 dark:bg-gray-700 border border-gray-400 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-700">
                            <input wire:model="values_destinations.{{ $index }}" type="checkbox" value="{{$destinos['destino'].','}}" class="opacity-0 absolute">
                            <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            <span class="flex flex-col text-center">
                                <div class="select-none block text-xs md:text-base">{{ $destinos['destino'] }}</div>
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 mt-4 gap-2">
                <div class="col-span-6 flex flex-col text-center">
                    <h2 class="text-lg font-bold text-gray-500">{{__('message.form_footer_subtitle2')}}</h2>
                </div>
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5 grid grid-cols-7 gap-2">
                    @foreach($number as $index => $numbers)
                        <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500">
                            <input wire:model="values_number" type="radio" value="{{$numbers}}" class="hidden absolute">
                            <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            <span class="flex flex-col text-center">
                                <div class="select-none block">{{ $numbers }}</div>
                            </span>
                        </label>
                    @endforeach
                    <label x-data="{open: false}" class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500" x-on:click="open = true" x-on:click.away="open = false">
                        <input wire:model="values_number" type="radio" value="6" class="hidden absolute" >
                        <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        <span class="flex flex-col text-center">
                                <div class="select-none block">
                                    <span class="text-xss md:text-xss">{{__('message.form_footer_par3')}}</span>
                                    <input wire:model="values_number_input" x-show="open" type="text" class="form-input text-xs w-full">
                                </div>
                            </span>
                    </label>
                    <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 px-4 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500">
                        <input wire:model="values_number" type="radio" value="Undecided" class="hidden absolute">
                        <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        <span class="flex flex-col text-center">
                                <div class="select-none block text-xss tracking-tighter">{{__('message.form_footer_par4')}}</div>
                            </span>
                    </label>
                </div>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 mt-4 gap-2">
                <div class="col-span-6 flex flex-col text-center">
                    <h2 class="text-lg font-bold text-gray-500">{{__('message.form_footer_subtitle3')}}</h2>
                </div>
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5 grid grid-cols-6 gap-2">
                    @foreach($trip_lengths as $index => $trip_length)
                        <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 px-2 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500">
                            <input wire:model="values_trip_length" type="radio" value="{{$trip_length}}" class="hidden absolute">
                            <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                            <span class="flex flex-col text-center">
                                <div class="select-none block text-xs md:text-base">{{ $trip_length }}</div>
                                <div class="text-xs">{{__('message.form_footer_par5')}}</div>
                            </span>
                        </label>
                    @endforeach
                    <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 px-4 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500">
                        <input wire:model="values_trip_length" type="radio" value="Undecided" class="hidden absolute">
                        <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        <span class="flex flex-col text-center">
                                <div class="select-none block text-xss tracking-tighter">{{__('message.form_footer_par6')}}</div>
                            </span>
                    </label>
                </div>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 mt-6 gap-2">
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400  flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5"
                     x-data
                     x-init="new Pikaday({ field: $refs.input })"
                >
                    <input
                        x-ref="input"
                        id="datepicker" autocomplete="off"   wire:model.lazy="travel_day" type="text" class="bg-gray-50 border border-gray-400 p-3 md:p-5 bg-gray-50 text-gray-500 w-full"  placeholder="{{__('message.form_footer_par7')}}">
                </div>
            </div>

        </div>

        <div x-show="data">
            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 gap-2 flex">
                <div class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
                <textarea wire:model="comment" class="col-span-6 md:col-span-5 bg-gray-50 border border-gray-400 p-5 bg-gray-50 text-gray-500 w-full focus:outline-none" rows="4" placeholder="{{__('message.form_footer_par9')}}"></textarea>
                {{--            <textarea name="" id="" cols="30" rows="10"></textarea>--}}
                <p class="text-xs col-span-6 text-right text-gray-400 font-bold">{{__('message.form_footer_par13')}}</p>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 mt-4 md:mt-6 gap-2">
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5">
                    <input wire:model="name" type="text" class="bg-gray-50 border border-gray-400 p-3 md:p-5 bg-gray-50 text-gray-500 w-full focus:outline-none" placeholder="{{__('message.form_footer_par10')}}">
                    @error('name')
                    <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 mt-4 md:mt-6 gap-2">
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5">
                    <input wire:model="email" type="text" class="bg-gray-50 border border-gray-400 p-3 md:p-5 bg-gray-50 text-gray-500 w-full focus:outline-none" placeholder="{{__('message.form_footer_par11')}}">
                    @error('email')
                    <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 grid grid-cols-6 mt-4 md:mt-6 gap-2">
                <label class="md:col-span-1 hidden md:inline-flex bg-gray-50 border border-gray-400 p-5 flex items-center justify-center bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </label>
                <div class="col-span-6 md:col-span-5" wire:ignore>
                    <input wire:model="phone" id="phone" type="text" class="phone_number bg-gray-50 border border-gray-400 p-3 md:p-5 bg-gray-50 text-gray-500 w-full focus:outline-none" placeholder="{{__('message.form_footer_par12')}}">
                </div>
            </div>
        </div>


        <div class="w-11/12 md:w-7/12 lg:w-1/2 xl:w-1/3 mx-auto mt-3 flex justify-between">
            <button type="button" class="btn-next" x-show="data" @click="data = !data">{{__('message.button_prev')}}</button>
            <button type="button" class="btn-secondary ml-auto" x-show="!data" @click="data = !data">{{__('message.button_next')}}</button>
            <button type="submit" class="btn-primary" x-show="data" wire:click="load_submit">
                {{__('message.button_send')}} <span wire:loading wire:target="load_submit"><div class="lds-hourglass"></div></span>
            </button>
        </div>

        @if ($success)
            <div class="w-11/12  mx-auto mt-3 flex justify-between" x-data="{dataopen: true}" x-show="dataopen">
                <div class="inline-flex w-full overflow-hidden bg-white shadow-sm">
                    <div class="flex items-center justify-center w-12 bg-green-500">
                    </div>
                    <div class="px-3 py-2 text-left w-full flex justify-between items-center">
                        <div>
                            <span class="font-semibold text-green-500">{{__('message.form_footer_par8')}}</span>
                            <p class="mb-1 text-sm leading-none text-gray-500">{{$success}}</p>
                        </div>
                        <div class="">
                            <span @click="dataopen = !dataopen" class="p-2 py-1 rounded text-green-500 text-sm bg-green-200 border border-green-300 cursor-pointer">OK</span>
                        </div>
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>

        let input = document.querySelector(".phone_number");

        window.intlTelInput(input, {
            initialCountry: "auto",
            separateDialCode: true,
            autoHideDialCode:false,
            nationalMode: false,
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    callback(countryCode);
                    // alert(countryCode);
                @this.set('phonecountry', countryCode);
                });
            },
            utilsScript: "../../build/js/utils.js?1613236686837", // just for formatting/placeholders etc
        });

        input.addEventListener('blur', function () {
        @this.set('phone', this.value);
        });

        var picker = new Pikaday({ field: document.getElementById('datepicker') });
    </script>

@endpush
