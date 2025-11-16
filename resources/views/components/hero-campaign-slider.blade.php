@php
    $bookingDeadline = $bookingDeadline ?? 'November 30, 2025';
@endphp

<section class="relative ">
    {{-- Flechas externas --}}
    <div class="pointer-events-none w-full absolute inset-0 flex items-center justify-between z-20 px-4 sm:px-6 lg:px-10">
        <button
            type="button"
            aria-label="Anterior"
            class="hero-campaign-prev pointer-events-auto inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-black/40 hover:bg-black/70 text-white shadow-lg transition focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-transparent"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>

        <button
            type="button"
            aria-label="Siguiente"
            class="hero-campaign-next pointer-events-auto inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-black/40 hover:bg-black/70 text-white shadow-lg transition focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-transparent"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </div>

    {{-- Slider Swiper --}}
    <div class="swiper hero-campaign-slider h-full">
        <div class="swiper-wrapper h-full">

            {{-- Slide 1 --}}
            <div class="swiper-slide h-full">
                <div
                    class="relative w-full h-full flex items-center justify-center bg-cover bg-center text-white px-4 py-10 sm:px-10 md:px-16"
                    style="background-image: url('{{ asset('images/banners/campaigns/3.webp') }}');"
                >
                    <div class="relative w-full h-[65vh] md:h-[60vh] overflow-hidden rounded-3xl shadow-[0_0_50px_rgba(0,0,0,0.60)]  p-4 sm:p-8 lg:p-12 flex flex-col justify-between">
                        {{-- Black Friday badge --}}
                        <div class="absolute top-0 left-4 sm:left-16">
                            <img
                                src="{{ asset('images/banners/campaigns/elements/black.svg') }}"
                                alt="Black Friday"
                                class="w-28 sm:w-40 lg:w-56"
                            />
                        </div>

                        <div class="flex flex-col justify-between flex-1 pt-20 sm:pt-28 lg:pt-32">
                            <div class="space-y-4">
                                <h3 class="font-light uppercase tracking-[0.2em] text-[0.65rem] sm:text-xs md:text-sm">
                                    EARLY BOOKING OFFER — SAVE UP TO 20% BEFORE NOVEMBER 30ТH
                                </h3>

                                <h2 class="text-sm sm:text-xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold font-serif tracking-wide text-white/80 ">
                                    LIVE THE ULTIMATE PATAGONIAN ADVENTURE IN 2026
                                </h2>

{{--                                <div class="flex mt-4 sm:mt-6">--}}
{{--                                    <a href="{{ url('/peru-travel-packages/brazil-argentina-peru-highlights') }}"--}}
{{--                                       class="btn btn-secondary btn-lg ">--}}
{{--                                        Get Offer--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>

                            <div class="mt-6 space-y-4 text-white">
                                <div class="flex gap-2">
                                    <span class="h-3 w-3 rounded-full bg-white"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                </div>

                                <div class="text-[0.65rem] sm:text-xs md:text-sm font-medium uppercase tracking-[0.2em]">
                                    DESTINATIONS: ARGENTINA + CHILE (PATAGONIA, GLACIERS, USHUAIA, TORRES DEL PAINE)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide h-full">
                <div
                    class="relative w-full h-full flex items-center justify-center bg-cover bg-center text-white px-4 py-10 sm:px-10 md:px-16"
                    style="background-image: url('{{ asset('images/banners/campaigns/2.webp') }}');"
                >
                    <div class="relative w-full h-[65vh] md:h-[60vh] overflow-hidden rounded-3xl shadow-[0_0_50px_rgba(0,0,0,0.60)]  p-4 sm:p-8 lg:p-12 flex flex-col justify-between">
                        <div class="absolute top-0 left-4 sm:left-16">
                            <img
                                src="{{ asset('images/banners/campaigns/elements/black.svg') }}"
                                alt="Black Friday"
                                class="w-28 sm:w-40 lg:w-56"
                            />
                        </div>

                        <div class="flex flex-col justify-between flex-1 pt-20 sm:pt-28 lg:pt-32">
                            <div class="space-y-4">
                                <h3 class="font-light uppercase tracking-[0.2em] text-[0.65rem] sm:text-xs md:text-sm">
                                    FEEL THE RHYTHM OF SOUTH AMERICA WITH OUR EXCLUSIVE 2025 COMBINED TOURS
                                </h3>

                                <h2 class="text-sm sm:text-xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold font-serif tracking-wide text-white/80 ">
                                    LIVE THE SUMMER ALL YEAR LONG
                                </h2>

{{--                                <div class="flex mt-4 sm:mt-6">--}}
{{--                                    <a href="{{ url('/peru-travel-packages/andean-marvels-from-lima-to-uyuni') }}"--}}
{{--                                       class="btn btn-primary btn-lg ">--}}
{{--                                        Get Offer--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>

                            <div class="mt-6 space-y-4 text-white">
                                <div class="flex gap-2">
                                    <span class="h-3 w-3 rounded-full bg-white"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                </div>

                                <div class="text-[0.65rem] sm:text-xs md:text-sm font-medium uppercase tracking-[0.2em]">
                                    Destinations: RIO DE JANEIRO - BUENOS AIRES - IGUAZU FALLS - MONTEVIDEO - PUNTA DEL ESTE
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide h-full">
                <div
                    class="relative w-full h-full flex items-center justify-center bg-cover bg-center text-white px-4 py-10 sm:px-10 md:px-16"
                    style="background-image: url('{{ asset('images/banners/campaigns/1.webp') }}');"
                >
                    <div class="relative w-full h-[65vh] md:h-[60vh] overflow-hidden rounded-3xl shadow-[0_0_50px_rgba(0,0,0,0.60)]  p-4 sm:p-8 lg:p-12 flex flex-col justify-between">
                        <div class="absolute top-0 left-4 sm:left-16">
                            <img
                                src="{{ asset('images/banners/campaigns/elements/black.svg') }}"
                                alt="Black Friday"
                                class="w-28 sm:w-40 lg:w-56"
                            />
                        </div>

                        <div class="flex flex-col justify-between flex-1 pt-20 sm:pt-28 lg:pt-32">
                            <div class="space-y-4">
                                <h3 class="font-light uppercase tracking-[0.2em] text-[0.65rem] sm:text-xs md:text-sm">
                                    DISCOVER SOUTH AMERICA'S MOST EXTRAORDINARY ROUTE - WITH EXCLUSIVE 2025 EARLY-BOOKING OFFERS
                                </h3>

                                <h2 class="text-sm sm:text-xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold font-serif tracking-wide text-white/80 ">
                                    UNVEIL THE SECRETS OF THE ANDES
                                </h2>

{{--                                <div class="flex mt-4 sm:mt-6">--}}
{{--                                    <a href="{{ url('/peru-travel-packages/echoes-of-the-incas') }}"--}}
{{--                                       class="btn btn-dark btn-lg ">--}}
{{--                                        Get Offer--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>

                            <div class="mt-6 space-y-4 text-white">
                                <div class="flex gap-2">
                                    <span class="h-3 w-3 rounded-full bg-white"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                    <span class="h-3 w-3 rounded-full bg-white/50"></span>
                                </div>

                                <div class="text-[0.65rem] sm:text-xs md:text-sm font-medium uppercase tracking-[0.2em]">
                                    DESTINATIONS: PERU - BOLIVIA - ECUADOR
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
