@extends('layouts.page-layout')
@section('content')
    <div class="absolute inset-0 h-screen overflow- w-full bg-gray-100 -z-1 overflow-hidden">
{{--        <video autoplay loop muted class="object-cover h-full w-full">--}}
{{--            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />Your browser does not support the video tag.--}}
            {{--            <source src="{{asseDestinationst('media/intro.mp4')}}" type="video/mp4" />Your browser does not support the video tag.--}}

        <div class="vimeo-wrapper hidden sm:block">
            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
            <div class="absolute inset-0 gradient-cicle-gray"></div>

        </div>

        <img src="{{asset('images/p-cusco-1.jpg')}}" alt="" class="object-cover w-full h-full sm:hidden">


{{--        </video>--}}
    </div>
    <div class="flex h-83-5vh relative overflow-hidden">
{{--        <div class="relative items-start grid grid-cols-3 justify-between ">--}}

{{--        </div>--}}

        <div class=" grid grid-cols-1 gap-12 place-items-center text-center justify-center text-white w-full">
            <div class="mx-auto w-3/4">
                <div class="bg-gray-900 bg-opacity-50 p-4 sm:hidden">
                    <h1 class="text-center text-lg md:text-3xl my-6 font-normal font-cinzel text-white">THE <span class="text-secondary">BEST</span> VACATION IN SOUTH AMERICA WITH THE <span class="text-secondary">BEST</span> LATAM OPERATOR</h1>
                </div>

                    <h1 class="text-center text-3xl hidden sm:inline-block  my-6 font-normal font-cinzel text-white">THE <span class="text-secondary">BEST</span> VACATION IN SOUTH AMERICA WITH THE <span class="text-secondary">BEST</span> LATAM OPERATOR</h1>

{{--                <h3 class="text-xl text-gray-50 hidden sm:block mb-6">Take Advantage of affordable deposits and flexible terms to plan your Peru adventure with confidence, Free cancellation insurance offered with 25% deposit. T&C apply.</h3>--}}

{{--                <h4 class="font-bold text-secondary mt-6">Destinations</h4>--}}
{{--                @foreach($destination as $destinations)--}}
{{--                    <a href="{{ route('destinations.show', $destinations) }}" class="font-bold  block text-sm hover:text-primary">{{$destinations->nombre}}</a>--}}
{{--                @endforeach--}}
{{--                <br>--}}
                <div class="fixed left-0 ml-3 bottom-0 mb-2 z-10 hidden sm:inline-block">
                    <img src="{{asset('images/fiorella.jpg')}}" alt="" class="rounded-t-lg w-24 mx-auto">
                    <a href="#form-dream-adventure" class="btn-secondary-2 text-center  font-bold"><span class="text-lg pt-3">Start my quote</span></a>
                    <span class="my-5 block"></span>
                </div>
{{--                @livewire('page.form-inquire')--}}
            </div>
        </div>

{{--        <div class="relative z-50 p-5 flex justify-center">--}}
{{--            <a href="#" class="text-gray-50">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />--}}
{{--                </svg>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>

{{--            <form-home-component></form-home-component>--}}
{{--    <div class="hidden md:inline-block">--}}
{{--            @livewire('page.form-home')--}}
{{--    </div>--}}


{{--            <div class="mb-10 pb-10 border-b border-gray-200"></div>--}}




{{--    <section class="grid gap-12 bg-gray-100 p-6 grid-cols-8 hidden md:inline-flex"><!--.row -->--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/asta.png')}}"  alt="logo asta" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/expedia.png')}}"  alt="logo expedia" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/peru.png')}}"  alt="logo marca peru" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="px-3 w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="https://www.gotoperu.com.pe/images/logos/tripadvisor.png" alt="logo tripadvisor" class="w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="https://www.gotoperu.com.pe/images/logos/yelp.png" alt="logo yelp" class="w-full dark:filter dark:grayscale">--}}
{{--        </div>--}}
{{--    </section>--}}



    <section class="bg-gray-50 hidden sm:flex dark:bg-gray-700">
    <div class="container">
        <div class="w-full swiper-container slider-brands overflow-hidden relative">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/shield.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Book with Confidence</h3>
                            <p class="text-xs">Plan your travels with peace of mind</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/trusted.jpg')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Trusted local Peru travel experts</h3>
                            <p class="text-xs">Professional service from trusted local experts</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Great Reviews</h3>
                            <p class="text-xs">We are proud of our service quality and great reviews</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/good.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">You are in good hands</h3>
                            <p class="text-xs">While on your journey help is never out of reach</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/hassle.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Hassle-free experience</h3>
                            <p class="text-xs">We plan and book your entire Peru trip before you arrive.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/tours.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Flexible tour options</h3>
                            <p class="text-xs">Our vacation packages are customisable to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/good.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Hospitality at its finest</h3>
                            <p class="text-xs">Peruvian hospitality is worldwide known and we are proof of that.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/secure.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Full Financial Protection</h3>
                            <p class="text-xs">Your payments are protected with financial safety as standard.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid items-center grid-cols-5">
                        <div class="">
                            <img src="{{asset('images/icons/guarantee.png')}}" alt="" class="w-full">
                        </div>
                        <div class="col-span-4 p-3 text-gray-500 dark:text-gray-50">
                            <h3 class="truncate font-bold text-sm">Value for Money</h3>
                            <p class="text-xs">Exceptional quality for your Money, no intermediaries.</p>
                        </div>
                    </div>
                </div>

            </div>
{{--            <div class="swiper-button-next btn-next"></div>--}}
{{--            <div class="swiper-button-prev btn-prev"></div>--}}
        </div>
    </div>
    </section>

    <section class="px-6 container grid grid-cols-1 md:grid-cols-4 my-12">
        <div class="text-center w-full col-span-4 items-center text-3xl text-secondary dark:text-secondary font-bold gap-2">
            SOUTH AMERICA  TRAVEL PACKAGES
            <div class="border-4 h-1 w-12 border-primary mx-auto mt-3"></div>
        </div>
        <div class="col-span-4 text-center mt-4">
            GOTOPERU is a family-owned company committed to offering the highest level of customer service possible. The personnel at GOTOPERU will ensure that you have an unforgettable vacation. Peru is one of the world's most diversified nations, boasting stunning old cultures and breathtaking natural beauty. Explore the world with GOTOPERU.
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-6 sm:hidden">
        <div class="md:col-span-2 bg-gray-800 text-white dark:bg-gray-700 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">
            <div class="text-center">
                <img src="{{asset('images/banners/joana.png')}}" alt="" class="w-1/2 mx-auto">
                <h3 class="font-semibold block text-xl">WHY BOOK WITH US</h3>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Experts in tailor-made Peru travel</p>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Headquarters in Cusco, offices in Lima, Arequipa and Tampa,FL.</p>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Local staff with first-hand South America travel experience</p>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Dedicated to providing personalized, quality service</p>
                {{--                <a href="#" class="btn-primary">{{__('message.button_all')}}</a>--}}
{{--                <div class="block mt-6">--}}
{{--                    <a href="{{route('book')}}" class="btn-primary">View More</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
{{--    <section class="container grid grid-cols-1 md:grid-cols-4 py-12 bg-white dark:bg-gray-800 hidden sm:block">--}}
{{--        <div class="text-center w-full col-span-4 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">--}}
{{--            BOOK & TRAVEL WITH CONFIDENCE <br>Deposits from 10% : Free cancellation insurance available with 20% deposit--}}
{{--            <div class="border-4 h-1 w-12 border-primary mx-auto mt-3"></div>--}}
{{--        </div>--}}
{{--        <div class="col-span-4 text-center mt-4">--}}
{{--            <a href="" class="text-secondary font-medium hover:text-gray-500 block">Book With Confidence - view flexible terms</a>--}}
{{--            <a href="" class="text-secondary font-medium hover:text-gray-500 block">Travel With Confidence - view Health & Safety guarantees</a>--}}
{{--        </div>--}}
{{--    </section>--}}

    <div class="hidden sm:inline-flex ">
    <section class="grid grid-cols-1 md:grid-cols-6  ">
        <div class="md:col-span-4 relative bg-gray-700">
            <div class="inset-0 flex items-center text-white w-full">
                <div class="w-full grid grid-cols-1 md:grid-cols-6 items-center">
                    <div class="p-6 col-span-4">
                        <h3 class="font-semibold block text-xl">Your LATAM Travel Operator</h3>
                        <p class="block my-6">
                            Trust our team of local travel experts to plan an unforgettable trip full of must-see attractions and our favorite hidden gems of the land of the Incas. Our peruvian experts have all traveled down the same roads, trains and treks and know what you’re about to experience.
                            Every Peru tour offered is regularly inspected to ensure our travelers have an amazing experience.
                        </p>

                        <div class="block mt-6">
                            <a href="{{route('packages.all')}}" class="btn-secondary">View Tours</a>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <img src="{{asset('images/banners/joana.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-2 bg-gray-800 text-white dark:bg-gray-700 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">
            <div class="">
                <h3 class="font-semibold block text-xl">WHY BOOK WITH US</h3>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Experts in tailor-made Peru travel</p>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Headquarters in Cusco, offices in Lima, Arequipa and Tampa,FL.</p>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Local staff with first-hand South America travel experience</p>
                <p class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Dedicated to providing personalized, quality service</p>
                {{--                <a href="#" class="btn-primary">{{__('message.button_all')}}</a>--}}
                <div class="block mt-6">
                    <a href="{{route('book')}}" class="btn-primary">View More</a>
                </div>
            </div>
        </div>
    </section>
    </div>


{{--    <div class="w-4/5 mx-auto my-20 bg-white">--}}
{{--        <div id="slider" class="swiper-container w-full">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                <div class="swiper-slide bg-cover bg-center shadow-lg" style="background-image: url('https://picsum.photos/400/555');">--}}
{{--                    <div class="container mx-auto px-6 md:px-20 py-6">--}}
{{--                        <div class="w-full md:w-1/2">--}}
{{--                            <div class="md:border border-gray-100 md:p-10">--}}
{{--                                <h3 class="text-5xl leading-tight" style="font-family: Niconne, cursive;">Welcome To </h3>--}}
{{--                                <h2 class="font-bold leading-tight text-6xl">Web2Tailwind</h2>--}}
{{--                                <p class="text-xl mt-10 font-light">Use complete html components in your projects.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="my-10 md:mx-10 md:-mt-2"><a href="#appointment"--}}
{{--                                                                    class="bg-pink-500  ease-linear hover:bg-blue-600 text-white px-6 py-4 rounded-full">USE--}}
{{--                                    TEMPLATE</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="hidden md:flex swiper-button-prev bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>--}}
{{--            <div class="hidden md:flex swiper-button-next bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--    <section class="container hidden sm:block">--}}
{{--        <h2 class="text-center font-bold text-gray-500 md:text-4xl mb-20 xl:text-5xl dark:text-secondary">Your Peru Vacation Worry-Free</h2>--}}
{{--        <div class="grid text-center mb-16 gap-4 grid-cols-1 sm:grid-cols-3">--}}
{{--            <div class="relative mb-12 sm:mb-0">--}}
{{--                <div class="text-center mb-4 absolute -top-10 right-1/2 transform translate-x-1/2">--}}
{{--                    <a href="#" class="block relative">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="bg-gray-50 bg-opacity-30 transition duration-500 dark:bg-gray-800 border px-8 py-4 pt-12 hover:border-secondary">--}}
{{--                    <div class="text-center">--}}
{{--                        <p class="font-bold text-gray-500 pb-2 dark:text-white">--}}
{{--                            Your wellbeign is our priority--}}
{{--                        </p>--}}
{{--                        <a href="#" class="text-gray-500 dark:text-gray-200 font-light hover:text-blue-500 font-light transition duration-500">--}}
{{--                            Find out more--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="relative mb-12 sm:mb-0">--}}
{{--                <div class="text-center mb-4 absolute -top-10 right-1/2 transform translate-x-1/2">--}}
{{--                    <a href="#" class="block relative">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-primary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="bg-gray-50 bg-opacity-30 transition duration-500 dark:bg-gray-800 border px-8 py-4 pt-12 hover:border-primary">--}}
{{--                    <div class="text-center">--}}
{{--                        <p class="font-bold text-gray-500 pb-2 dark:text-white">--}}
{{--                            Your perfectly planned trip--}}
{{--                        </p>--}}
{{--                        <a href="#" class="text-gray-500 dark:text-gray-200 font-light hover:text-blue-500 font-light transition duration-500">--}}
{{--                            Find out more--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="relative mb-12 sm:mb-0">--}}
{{--                <div class="text-center mb-4 absolute -top-10 right-1/2 transform translate-x-1/2">--}}
{{--                    <a href="#" class="block relative">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="bg-gray-50 bg-opacity-30 transition duration-500 dark:bg-gray-800 border px-8 py-4 pt-12 hover:border-secondary">--}}
{{--                    <div class="text-center">--}}
{{--                        <p class="font-bold text-gray-500 pb-2 dark:text-white">--}}
{{--                            Free Changes & Cancellation--}}
{{--                        </p>--}}
{{--                        <a href="#" class="text-gray-500 dark:text-gray-200 font-light hover:text-blue-500 hover:font-bold font-light transition duration-500">--}}
{{--                            Find out more--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



    <div class="dark:bg-gray-700">
    <section class="px-6 container grid grid-cols-1 md:grid-cols-4 my-12">
        <div class="text-center w-full col-span-4 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">
            Most Popular Travel Packages
            <div class="border-4 h-1 w-12 border-primary mx-auto mt-3"></div>
        </div>
    </section>

    <section class="px-6 mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">

        @foreach($paquete_recommended as $paquete)
            <x-packages-card :paquete="$paquete"></x-packages-card>
        @endforeach


    </section>
    </div>

    <section class="grid md:grid-cols-2 sm:grid-cols-1 mx-auto gap-0">

        @foreach($category_block as $category_b)

            <div class="overflow-hidden relative group">
                <a href="{{ route('category.show', $category_b) }}">
                    <div class="relative">
                        <img src="{{$category_b->imagen_banner}}" alt="" class="object-cover min-w-full h-20r transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full inset-x-0 bottom-0 p-3">
                        <div class="py-2 px-4 text-gray-100 shadow-lg rounded-lg mb-4">
                            <h2 class="text-lg font-semibold">{{$category_b->nombre}}</h2>
                            <div class="font-normal text-sm">
                                {!! $category_b->resumen !!}
                            </div>
                            {{--                            <a href="" class="float-right ">View self-drive tours</a>--}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </section>

    <section class="grid md:grid-cols-5 sm:grid-cols-1">
        @foreach($category_footer as $category_f)
            <div class="overflow-hidden relative group">
                <a href="{{ route('category.show', $category_f) }}">
                    <div class="relative">
                        <img src="{{$category_f->imagen}}" alt="" class="h-20r object-cover min-w-full  transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full bottom-0 inset-x-0 p-3">
                        <div class="py-2 px-4 text-gray-100 shadow-lg rounded-lg">
                            <h2 class="text-lg font-semibold">{{$category_f->nombre}}</h2>
                            <div class="font-normal text-sm">
                                {!! $category_f->resumen !!}
                            </div>
                            {{--                        <a href="" class="float-right font-bold">View self-drive tours</a>--}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </section>


    <div class="bg-gray-100 pt-12  dark:bg-gray-800">
    <section class="px-6 container grid grid-cols-1 md:grid-cols-4">
        <div class="text-center w-full col-span-4 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">
            Recomended Travel Packages
            <div class="border-4 h-1 w-12 border-primary mx-auto mt-3"></div>
        </div>
    </section>
    <section class="px-6 mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 py-12">
        @foreach($paquetes_features as $paquete)
            <x-packages-card :paquete="$paquete"></x-packages-card>
        @endforeach


    </section>
    </div>

{{--    <div class="flex mb-3 px-6 block md:mt-12 sm:mt-0 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">--}}
{{--        <div class="">--}}
{{--            <span class="inline-block w-1 h-2.5 bg-secondary dark:bg-primary ml-1"></span>--}}
{{--            <span class="hidden md:inline-flex inline-block w-3 h-2.5 bg-secondary dark:bg-primary ml-1"></span>--}}
{{--            <span class="hidden md:inline-flex inline-block w-5 h-2.5 bg-secondary dark:bg-primary"></span>--}}
{{--        </div> {{__('message.subtitle6')}}--}}
{{--    </div>--}}
{{--    <section class="grid grid-cols-1 md:grid-cols-5">--}}
{{--        <div class="md:col-span-3 relative">--}}
{{--            <img src="{{asset('images/banners/confidence/experienced-tour-guides.jpg')}}" alt="" class="object-cover h-full w-full">--}}
{{--            <div class="absolute inset-0 gradient-cicle-gray flex items-center text-white text-center w-full">--}}
{{--                <div class="w-full text-center">--}}
{{--                    <h3 class="font-semibold block text-lg md:text-4xl">POPULAR: MACHUPICCHU FULL DAY</h3>--}}
{{--                    <p class="block mb-6">Book online and save up to 20%. All included: trains, entrances, buses, guide, transfers</p>--}}
{{--                    <div class="font-semibold text-white dark:text-gray-700 text-xs md:text-5xl mt-auto">--}}
{{--                        <div class="text-xs ">Price p.p. from</div>--}}
{{--                        $299 <span class="text-sm text-secondary">usd</span>--}}
{{--                    </div>--}}

{{--                    <div class="block mt-6">--}}
{{--                        <a href="peru-travel-packages/machu-picchu-full-day" class="btn-secondary">View Tours</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="md:col-span-2 bg-gray-800 text-white dark:bg-gray-700 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">--}}
{{--            <div class="">--}}
{{--                <h3 class="font-semibold text-2xl">--}}
{{--                    GET IN TOUCH WITH ONE OF OUR LOCAL TRAVEL EXPERTS--}}
{{--                </h3>--}}
{{--                <p class="block my-12">--}}
{{--                    Whatever your needs, we are here to help. If you have any questions about our packages or services, please do not hesitate to contact us.--}}
{{--                </p>--}}
{{--                <div class="flex justify-center gap-12">--}}
{{--                    <div class="text-center">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=12024911478" target="_blank">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />--}}
{{--                            </svg>--}}
{{--                            Chat--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <a href="mailto:info@gotoperu.com">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />--}}
{{--                            </svg>--}}
{{--                            Email--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=12024911478" target="_blank">--}}
{{--                            <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="mx-auto w-14 h-10">--}}
{{--                            Whatsapp--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a href="#" class="btn-primary">{{__('message.button_all')}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="px-6 container grid grid-cols-1 md:grid-cols-4 my-12">
        <div class="text-center w-full col-span-4 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">
            Recomended Travel Packages
            <div class="border-4 h-1 w-12 border-primary mx-auto mt-3"></div>
        </div>
        <div class="col-span-4 text-center mt-4">
            See and learn about our tours from our valued Nordic Visitor customers.
        </div>
    </section>
    <section class="container hidden md:block mt-6">

{{--        <div class="flex items-center text-2xl text-gray-700 mb-4 dark:text-secondary font-bold gap-2">--}}
{{--            <div class="border-4 h-1 w-12 border-secondary"></div> {{__('message.subtitle5')}}--}}
{{--        </div>--}}
        <div class="dark:bg-primary">
        <div class="elfsight-app-d1e14e4b-52d0-4ad9-9068-f94e0de6bf50"></div>
        </div>

        <div class="mt-6 dark:bg-primary text-white">
            <div class="elfsight-app-45e6b553-4db1-4009-9a37-a98b273413ec"></div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-100 dark:bg-gray-700 dark:border-gray-700 border p-4">
                    <div class="flex items-center">
                        <div class="w-10">
                            <div class="m-1 mr-2 w-8 h-8 relative flex justify-center items-center rounded-full bg-secondary text-xl text-white uppercase">Z</div>
                        </div>
                        <div class="col-span-4 p-3 text-gray-500">
                            <h3 class="font-bold text-sm">Zeeshan B.</h3>
                            <p class="text-sm">Toronto - Canada</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p>...I would recommend Gotoperu 100%. You will not regret it!!!</p>
                    </div>
                </div>
                <div class="bg-gray-100 border p-4 dark:bg-gray-700 dark:border-gray-700">
                    <div class="flex items-center">
                        <div class="w-10">
                            <div class="m-1 mr-2 w-8 h-8 relative flex justify-center items-center rounded-full bg-secondary text-xl text-white uppercase">M</div>
                        </div>
                        <div class="col-span-4 p-3 text-gray-500">
                            <h3 class="font-bold text-sm">Mike T</h3>
                            <p class="text-sm">Bryan, Texas</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p>Great service, great communication, and everything was just as promised...!</p>
                    </div>
                </div>
                <div class="bg-gray-100 border p-4 dark:bg-gray-700 dark:border-gray-700">
                    <div class="flex items-center">
                        <div class="w-10">
                            <div class="m-1 mr-2 w-8 h-8 relative flex justify-center items-center rounded-full bg-secondary text-xl text-white uppercase">K</div>
                        </div>
                        <div class="col-span-4 p-3 text-gray-500">
                            <h3 class="font-bold text-sm">Kavitabhagia</h3>
                            <p class="text-sm">Dubai, United</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p>...our experience with this tour company was very satisfying!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-12 hidden sm:flex">
            <div class="flex inline-flex items-center text-2xl text-gray-700 font-bold gap-3">
                <div class="border dark:border-gray-700">
                    <a href="https://www.instagram.com/go.to.peru/" target="_blank">
                        <img src="{{asset('images/logos/instagram2.png')}}" alt="" class="px-6 py-4">
                    </a>
                </div>
                <div class="border dark:border-gray-700">
                    <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank">
                        <img src="{{asset('images/logos/facebook2.png')}}" alt="" class="px-6 py-4">
                    </a>
                </div>
                <div class="border dark:border-gray-700">
                    <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank">
                        <img src="{{asset('images/logos/youtube2.png')}}" alt="" class="px-6 py-4">
                    </a>
                </div>
                <div class="border dark:border-gray-700">
                    <a href="https://www.tiktok.com/@gotoperu" target="_blank">
                        <img src="{{asset('images/logos/tiktok2.png')}}" alt="" class="px-6 py-4">
                    </a>
                </div>
                <div class="border dark:border-gray-700">
                    <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank">
                        <img src="{{asset('images/logos/tripadvisor2.png')}}" alt="" class="px-6 py-4 dark:filter dark:grayscale dark:invert">
                    </a>
                </div>
                <div class="border dark:border-gray-700">
                    <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank">
                        <img src="{{asset('images/logos/yelp2.png')}}" alt="" class="px-6 py-4 dark:filter dark:grayscale dark:invert">
                    </a>
                </div>
                <div class="border dark:border-gray-700">
                    <a href="https://www.trustpilot.com/review/gotoperu.com">
                        <img src="{{asset('images/logos/trust2.png')}}" alt="" class="px-6 py-4 dark:filter dark:grayscale dark:invert">
                    </a>
                </div>
            </div>
        </div>

    </section>


{{--    <section class="grid grid-cols-1 md:grid-cols-6 my-12">--}}
{{--        <div class="md:col-span-4 relative bg-gray-700">--}}
{{--            <div class="inset-0 flex items-center text-white w-full">--}}
{{--                <div class="w-full grid grid-cols-1 md:grid-cols-6 items-center">--}}
{{--                    <div class="p-6 col-span-4">--}}
{{--                        <h3 class="font-semibold block text-xl">Your Peruvian Travel Operator</h3>--}}
{{--                        <p class="block my-6">--}}
{{--                            Trust our team of local travel experts to plan an unforgettable trip full of must-see attractions and our favorite hidden gems of the land of the Incas. Our peruvian experts have all traveled down the same roads, trains and treks and know what you’re about to experience.--}}
{{--                            Every Peru tour offered is regularly inspected to ensure our travelers have an amazing experience.--}}
{{--                        </p>--}}

{{--                        <div class="block mt-6">--}}
{{--                            <a href="{{route('packages.all')}}" class="btn-secondary">View Tours</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-span-2">--}}
{{--                        <img src="{{asset('images/banners/joana.png')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="md:col-span-2 bg-gray-800 text-white dark:bg-gray-700 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">--}}
{{--            <div class="">--}}
{{--                <h3 class="font-semibold block text-xl">WHY BOOK WITH US</h3>--}}
{{--                <p class="flex my-4">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />--}}
{{--                    </svg>--}}
{{--                    Experts in tailor-made Peru travel</p>--}}
{{--                <p class="flex my-4">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />--}}
{{--                    </svg>--}}
{{--                    Headquarters in Cusco, offices in Lima, Arequipa and Tampa,FL.</p>--}}
{{--                <p class="flex my-4">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />--}}
{{--                    </svg>--}}
{{--                    Local staff with first-hand South America travel experience</p>--}}
{{--                <p class="flex my-4">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />--}}
{{--                    </svg>--}}
{{--                    Dedicated to providing personalized, quality service</p>--}}
{{--                --}}{{--                <a href="#" class="btn-primary">{{__('message.button_all')}}</a>--}}
{{--                <div class="block mt-6">--}}
{{--                    <a href="{{route('book')}}" class="btn-primary">View More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="grid grid-cols-1 md:grid-cols-2 my-12">
        <div class="bg-gray-800 dark:bg-gray-800 text-white dark:bg-gray-700 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">
            <div class="py-12">
                <h3 class="font-semibold text-2xl">
                    ABOUT GOTOPERU
                </h3>
                <p class="block my-12">
                    We are a travel operator with Headquarters in Cusco City and offices in the main destinations of LATAM catering to travelers who want an original, authentic and unforgettable experience at the land of the Incas.
                </p>

                <h3 class="font-medium">Personalized Service</h3>
                <p class="flex my-4 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    First name basis always, since your own custom-made itinerary our dedicated local team, including representatives, guides, drivers will be always there for you on each day of your vacation. Plus a truly local assistance 24/7 on each destination.
                </p>
                <h3 class="font-medium">Confidence</h3>
                <p class="flex my-4 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    GOTOPERU is certified by the Peruvian Government, by the Ministry of Foreign Trade and Tourism of Peru (MINCETUR) . In addition we are also highly rated on Tripadvisor, Trustpilot and diverse well known travel forums.
                </p>
            </div>
        </div>
        <div class="bg-secondary text-white dark:bg-gray-800 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">
            <div class="text-center">
                <h3 class="font-semibold text-2xl">
                    GET SOCIAL WITH US
                </h3>
                <p class="block my-12">
                    Follow our Nordic adventures and share your own with us.
                </p>
                <div class="w-full md:w-1/2 mx-auto mt-12 bg-gray-100 bg-opacity-50 p-6 rounded">
                    <div class="flex inline-flex items-center text-2xl text-gray-700 font-bold gap-3">
                        <div class="">
                            <a href="https://www.instagram.com/go.to.peru/" target="_blank">
                                <img src="{{asset('images/logos/instagram2.png')}}" alt="" class="px-2">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank">
                                <img src="{{asset('images/logos/facebook2.png')}}" alt="" class="px-2">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank">
                                <img src="{{asset('images/logos/youtube2.png')}}" alt="" class="px-2">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.tiktok.com/@gotoperu" target="_blank">
                                <img src="{{asset('images/logos/tiktok2.png')}}" alt="" class="px-2">
                            </a>
                        </div>
                    </div>
                </div>
                {{--                <a href="#" class="btn-primary">{{__('message.button_all')}}</a>--}}
            </div>
        </div>
    </section>



    <div class="dark:bg-gray-700 pt-1">
    <section class="container mb-12 ">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-2 col-span-4">
                <div class="grid grid-cols-3 md:grid-cols-8 content-center text-center">
                    <div class="">
                        <img src="{{asset('images/include/assistances.png')}}" alt="{{__('message.serv_item2')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item2')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/breakfast.png')}}" alt="{{__('message.serv_item3')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item3')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/entrances.png')}}" alt="{{__('message.serv_item4')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item4')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/flight.png')}}" alt="{{__('message.serv_item5')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item5')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/hotels.png')}}" alt="{{__('message.serv_item6')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item6')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/tours.png')}}" alt="{{__('message.serv_item7')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item7')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/trains.png')}}" alt="{{__('message.serv_item8')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item8')}}</p>
                    </div>
                    <div class="">
                        <img src="{{asset('images/include/transfers.png')}}" alt="{{__('message.serv_item9')}}" class="object-contain px-4 text-center">
                        <p class="text-xs">{{__('message.serv_item9')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <section class="container hidden md:block">--}}
{{--        <div class="flex mb-3 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2 mt-24">--}}
{{--            <div class="border-4 h-1 w-12 border-primary"></div> Travel Style--}}
{{--        </div>--}}

{{--        --}}

{{--        <div class="mt-12">--}}
{{--            <category-component></category-component>--}}
{{--        </div>--}}

{{--    </section>--}}



{{--    <section class="container mt-6 mb-12 ">--}}

{{--        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">--}}
{{--            <div class="col-span-3 grid grid-cols-1 items-center relative filter grayscale bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url({{asset('images/hotels-t.jpg')}})">--}}
{{--                <div class="flex relative">--}}
{{--                    <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div>--}}
{{--                    <img src="{{asset('images/banners/social.jpg')}}" alt="" class="object-cover h-full w-full">--}}
{{--                    <div class="absolute inset-0 gradient-cicle-gray"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-span-2 flex gap-4 flex-col justify-between content-between overflow-hidden">--}}
{{--                <div class="">--}}
{{--                    <div class="flex items-center text-center text-gray-700 dark:text-gray-300 gap-2">--}}
{{--                        <div class="border p-4 w-1/2">--}}
{{--                            <p class="block text-4xl font-bold">30 000</p>--}}
{{--                            <p class="text-xs">FACEBOOK FANS</p>--}}
{{--                        </div>--}}
{{--                        <div class="border p-4 w-1/2">--}}
{{--                            <p class="block text-3xl font-bold">#gotoperu</p>--}}
{{--                            <p class="text-xs">INSTAGRAM HASHTAG</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="">--}}
{{--                    --}}{{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})">--}}

{{--                    <div class="bg-gray-500 bg-opacity-10 text-center p-12">--}}
{{--                        <img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" alt="" class="mx-auto py-4">--}}
{{--                        <h3>PHOTOS FROM OUR TRAVELERS</h3>--}}
{{--                        <p>Get inspired by photos and videos from fellow travelers in Peru, or share your favorite @go.to.peru experiences with us.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="grid grid-cols-4 items-center text-2xl text-gray-700 font-bold gap-3">--}}
{{--                    <div class="border">--}}
{{--                        <a href="https://www.instagram.com/go.to.peru/" target="_blank"><img src="{{asset('images/logos/instagram.png')}}" alt="" class="p-6"></a>--}}
{{--                    </div>--}}
{{--                    <div class="border">--}}
{{--                        <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><img src="{{asset('images/logos/facebook.png')}}" alt="" class="p-6"></a>--}}
{{--                    </div>--}}
{{--                    <div class="border">--}}
{{--                        <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank"><img src="{{asset('images/logos/youtube.png')}}" alt="" class="p-6"></a>--}}
{{--                    </div>--}}
{{--                    <div class="border">--}}
{{--                        <a href="https://www.tiktok.com/@gotoperu" target="_blank"><img src="{{asset('images/logos/tiktok.png')}}" alt="" class="p-6"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}

{{--    </section>--}}


    <div class="flex mb-3 container block md:mt-12 sm:mt-0 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">
        <div class="">
{{--            <span class="inline-block w-1 h-2.5 bg-secondary dark:bg-primary ml-1"></span>--}}
{{--            <span class="hidden md:inline-flex inline-block w-3 h-2.5 bg-secondary dark:bg-primary ml-1"></span>--}}
            <span class="hidden md:inline-flex inline-block w-5 h-2.5 bg-secondary dark:bg-primary"></span>
        </div> {{__('message.subtitle6')}}
    </div>
    <section class="grid grid-cols-1 md:grid-cols-5 container gap-4">
        <div class="md:col-span-3 relative">
            <img src="{{asset('images/hotel.jpg')}}" alt="" class="object-cover h-full w-full">
            <div class="absolute inset-0 gradient-cicle-gray"></div>
        </div>
        <div class="md:col-span-2 bg-secondary bg-opacity-20 dark:bg-gray-700 dark:bg-opacity-90 p-6 dark:text-gray-50 flex items-center">
            <div class="">
                <h3 class="font-semibold text-2xl">{{__('message.info_sub1')}}</h3>
                <div class=" mb-10">
                    <span class="inline-block w-10 h-2 bg-secondary dark:bg-primary"></span>
                </div>
                <p class="block my-12">
                    {{__('message.info_par1')}}
                </p>
                <a href="{{route('hotels')}}" class="btn-primary">{{__('message.button_all')}}</a>
            </div>
        </div>
    </section>
    </div>
    <section class="grid hidden grid-cols-1 md:grid-cols-3 my-4 container gap-4">
        <div class="md:col-span-1 relative flex items-center">
            <div class="relative w-full">
                <img src="{{asset('images/blog.jpg')}}" alt="" class="object-cover w-full h-full">
            </div>
            <div class="absolute inset-0 gradient-cicle-gray"></div>
            <div class="absolute inset-x-0 bottom-0 p-6 m-6  rounded-lg shadow-lg text-gray-500 bg-gray-50 dark:bg-gray-800 dark:text-gray-300">
                <h3 class="font-semibold text-2xl">Lugares Para Visitar en Perú en el 2021</h3>
                <div class="flex inline-flex divide-x text-xs my-3 divide-gray-500 gap-1">
                    <div class="flex inline-flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <span>Hidalgo</span>
                    </div>
                    <div class="flex inline-flex items-center gap-1 pl-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        <span>27 junio 2021</span>
                    </div>
                    <div class="flex inline-flex items-center gap-1 pl-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                        </svg>
                        <span>Travel</span>
                    </div>
                </div>
                <div class=" mb-10">
                    <span class="inline-block w-1 h-2 bg-secondary ml-1"></span>
                    <span class="inline-block w-3 h-2 bg-secondary ml-1"></span>
                    <span class="inline-block w-10 h-2 bg-secondary"></span>
                    <span class="inline-block w-3 h-2 bg-secondary ml-1"></span>
                    <span class="inline-block w-1 h-2 bg-secondary ml-1"></span>
                </div>

                <a href="" class="btn-secondary">View all</a>
            </div>
        </div>
        <div class="md:col-span-2 relative">
            <img src="{{asset('images/cua4.jpg')}}" alt="" class="h-full w-full object-cover">
            <div class="md:absolute md:inset-0 p-6 bg-gray-900 bg-opacity-50">
                <div class="flex flex-col h-full justify-end">
                    <div class="text-gray-50 text-right">
                        <h3 class="font-semibold text-2xl">News and travel guides</h3>
                        <div class=" mb-10">
                            <span class="inline-block w-1 h-2 bg-white ml-1"></span>
                            <span class="inline-block w-3 h-2 bg-white ml-1"></span>
                            <span class="inline-block w-20 h-2 bg-white"></span>
                        </div>
                        <p class="block my-12">Welcome travelers to our Peru blog, you will find useful Peru travel information and much more to inspire you for your next vacation to the land of the Incas including travel tips for Lima, Cusco, the Inca Trail, Machu Picchu, the Amazon and many other peruvian amazing destinations.</p>
                        <a href="" class="btn-secondary">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="container grid grid-cols-1 md:grid-cols-3 flex items-center">
            <div class="bg-gray-100 dark:bg-gray-700 dark:text-gray-100 h-full col-span-1  justify-between p-6 text-gray-500 order-2 md:order-1">
                <span class="text-sm font-light">{{$blogs_first->created_at}}</span>
                _____
                <span class="text-sm font-light">{{$blogs_first->categoria->nombre}}</span>

                <h2 class="my-6 font-semibold text-gray-600 dark:text-gray-100 text-3xl"><a href="{{route('blog.show', $blogs_first)}}">{{$blogs_first->titulo}}</a></h2>
                <span class="text-sm mb-6">{!! Str::limit($blogs_first->detalle, 300) !!}</span>

                <a href="{{route('blog.show', $blogs_first)}}" class="text-secondary mt-4 flex">{{__('message.button_read')}} <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="col-span-2 order-1 md:order-2 h-30r">
                <img src="{{$blogs_first->imagen_miniatura}}" alt="" class="h-full w-full object-cover object-center">
            </div>
        </div>
    </section>

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush
@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper = new Swiper(".slider-featured", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper = new Swiper(".slider-brands", {
            slidesPerView: 4,
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    // spaceBetween: 20,
                },
                640: {
                    slidesPerView: 1,
                    // spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    // spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    // spaceBetween: 50,
                },
            },
        });
    </script>

@endpush

@endsection
