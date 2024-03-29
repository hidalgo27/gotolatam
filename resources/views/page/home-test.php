<x-page-layout>

    <div class="absolute inset-0 h-screen overflow- w-full -z-1 overflow-hidden">
        {{--        <video autoplay loop muted class="object-cover h-full w-full">--}}
            {{--            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />Your browser does not support the video tag.--}}
            {{--            <source src="{{asseDestinationst('media/intro.mp4')}}" type="video/mp4" />Your browser does not support the video tag.--}}

            <div class="vimeo-wrapper hidden sm:block">
                <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
                <div class="absolute inset-0 gradient-cicle-gray"></div>

            </div>

            <img src="{{asset('images/400/sacred-valley-machu-picchu.jpg')}}" alt="" class="object-cover w-full h-full sm:hidden">


            {{--        </video>--}}
    </div>
    <div class="flex h-83-5vh relative overflow-hidden">
        {{--        <div class="relative items-start grid grid-cols-3 justify-between ">--}}

            {{--        </div>--}}

        <div class=" grid grid-cols-1 gap-12 place-items-center text-center justify-center text-white w-full">
            <div class="mx-auto">
                <h1 class="text-5xl text-center  mb-6 font-bold font-cinzel text-secondary">{{__('message.title1')}}</h1>
                <h3 class="text-2xl text-gray-50">{{__('message.subtitle1')}}</h3>
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




    <section class="grid gap-12 bg-gray-100 p-6 grid-cols-8 hidden md:inline-flex"><!--.row -->
        <div>
            <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/asta.png')}}"  alt="logo asta" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/expedia.png')}}"  alt="logo expedia" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/peru.png')}}"  alt="logo marca peru" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        <div>
            <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="px-3 w-full dark:filter dark:grayscale">
        </div>
        {{--        <div>--}}
            {{--            <img src="https://www.gotoperu.com.pe/images/logos/tripadvisor.png" alt="logo tripadvisor" class="w-full dark:filter dark:grayscale">--}}
            {{--        </div>--}}
        {{--        <div>--}}
            {{--            <img src="https://www.gotoperu.com.pe/images/logos/yelp.png" alt="logo yelp" class="w-full dark:filter dark:grayscale">--}}
            {{--        </div>--}}
    </section>

    <section class="container my-20 text-gray-500 text-center mx-auto relative">
        <h2 class="text-center font-bold text-gray-500 md:text-4xl mb-6 xl:text-5xl dark:text-secondary">{{__('message.title2_a')}} <span class="text-secondary">{{__('message.title2_b')}}</span></h2>
        <p>{{__('message.parrafo1')}}</p>


    </section>



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



    <div class="flex container mb-3 items-center text-2xl text-gray-700 dark:text-secondary font-bold gap-2">
        <div class="border-4 h-1 w-12 border-primary"></div> {{__('message.subtitle2')}}
    </div>

    <section class="container grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

        @foreach($paquete_recommended as $paquete)
        <x-packages-card :paquete="$paquete"></x-packages-card>
        @endforeach


    </section>


    <section class="py-12 my-12  bg-gray-100 dark:bg-gray-800 relative">
        <div class="flex container mb-3 items-center text-2xl text-gray-700 dark:text-primary font-bold gap-2">
            <div class="border-4 h-1 w-12 border-secondary"></div> {{__('message.subtitle3')}}
        </div>

        <div class="container">
            <div class="swiper-container slider-featured overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach($paquetes_features as $feature)
                    <div class="swiper-slide grid grid-cols-1 md:grid-cols-3">

                        <!--                    <div class="" v-for="imagen in slide.imagen_paquetes">-->
                        <!--                        <img :src="imagen.nombre" alt="" class="object-cover">-->
                        <!--                    </div>-->
                        <div class=" md:col-span-2 mb:6 md:mb-0 relative z-0">
                            @foreach($feature->imagen_paquetes as $imagen)
                            <img src="{{$imagen->nombre}}" alt="" class="object-cover">
                            @endforeach
                            <div class="absolute inset-0 gradient-cicle-gray"></div>
                        </div>
                        <div class="flex md:col-span-1 md:-ml-24 flex items-center relative z-50">
                            <div class="p-12 w-full  bg-white dark:bg-gray-800 rounded-lg shadow-xl ">
                                <!--                        <h4 class="text-2xl text-secondary font-semibold">{{ $feature->duracion }} {{__('message.pack_par4')}} $999</h4>-->
                                <h3 class="text-2xl my-3 font-bold text-gray-500 dark:text-gray-300">{{ $feature->titulo }}</h3>
                                <div class="font-bold text-secondary text-lg mb-4">
                                    @foreach($feature['precio_paquetes'] as $precio)
                                    @if($precio['estrellas'] == 2)
                                    @if($precio['precio_d'] > 0)
                                    {{ $feature->duracion }} {{__('message.pack_par4')}} {{__('message.pack_par5')}} $ {{$precio['precio_d']}} <span class="text-xs">usd</span>
                                    @else
                                    <span class="text-red-500">{{__('message.button_inquire')}}</span>
                                    @endif
                                    @endif
                                    @endforeach

                                </div>
                                <div class="mb-6">
                                    {!! Str::limit($feature->descripcion, 150) !!}

                                </div>
                                <a href="{{route('packages.detail', $feature->url)}}" class="btn btn-primary">{{__('message.button_see')}}</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next btn-next"></div>
                <div class="swiper-button-prev btn-prev"></div>
            </div>
        </div>

    </section>




    <div class="flex container mb-3 items-center text-2xl text-gray-700 dark:text-primary font-bold gap-2">
        <div class="border-4 h-1 w-12 border-secondary dark:border-secondary"></div> {{__('message.subtitle4')}}
        {{--        <div class="text-center mb-10">--}}
            {{--            <span class="inline-block w-1 h-1 rounded-full bg-blue-500 ml-1"></span>--}}
            {{--            <span class="inline-block w-3 h-1 rounded-full bg-blue-500 ml-1"></span>--}}
            {{--            <span class="inline-block w-40 h-1 rounded-full bg-blue-500"></span>--}}
            {{--            <span class="inline-block w-3 h-1 rounded-full bg-blue-500 ml-1"></span>--}}
            {{--            <span class="inline-block w-1 h-1 rounded-full bg-blue-500 ml-1"></span>--}}
            {{--        </div>--}}
    </div>

    <section class="grid grid-cols-1 md:grid-cols-5 mb-4 container gap-4">
        <div class="md:col-span-3 overflow-hidden group relative">
            <img src="{{asset('images/cua2.jpg')}}" alt="" class="hidden md:inline-flex object-cover h-full min-w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
            <div class="md:absolute md:inset-y-0 md:left-0 w-full md:w-64 p-6 bg-primary bg-opacity-95 text-gray-50">
                <h3 class="font-bold text-2xl">Cusco & Machu Picchu</h3>
                <p class="mt-3 mb-6 text-sm block">{{__('message.pack_item1')}}</p>
                <a href="{{route('destinations.show', 'machu-picchu')}}" class="btn-white hidden md:inline-flex">{{__('message.button_all')}}</a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 hidden md:inline-flex absolute bottom-0 right-0 m-6 cursor-pointer text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="md:col-span-2 flex flex-col gap-4 content-between overflow-hidden">

            <div class="overflow-hidden relative group">
                <a href="{{route('packages.detail', 'sacred-valley-machu-picchu')}}">
                    <div class="relative">
                        <img src="{{asset('images/banners/packages/sacred-valley.jpg')}}" alt="" class=" object-cover min-w-full  transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full bottom-0 inset-x-0 p-3">
                        <div class="py-2 px-4 text-gray-100 bg-primary bg-opacity-95 shadow-lg rounded-lg">
                            <div class="font-normal text-sm">
                                2 {{__('message.pack_par4')}} / <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ 359 <span class="text-xs">usd</span>
                            </div>
                            <h2 class="text-lg font-semibold">{{__('message.pack_item2')}}</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="overflow-hidden relative group">
                <a href="{{route('packages.detail', 'cusco-machu-picchu-rainbows-photography')}}">
                    <div class="relative">
                        <img src="{{asset('images/banners/packages/rainbow.jpg')}}" alt="" class="object-cover min-w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full bottom-0 inset-x-0 p-3">
                        <div class="py-2 px-4 text-gray-100 bg-primary bg-opacity-95 shadow-lg rounded-lg">
                            <div class="font-normal text-sm">
                                7 {{__('message.pack_par4')}} / <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ 899 <span class="text-xs">usd</span>
                            </div>
                            <h2 class="text-lg font-semibold">{{__('message.pack_item3')}}</h2>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </section>

    <section class="grid grid-cols-1 md:grid-cols-5 mb-4 container gap-4">

        <div class="md:col-span-2 order-2 md:order-1 flex flex-col gap-4 content-between overflow-hidden">

            <div class="overflow-hidden relative group">
                <a href="{{route('packages.detail', 'best-of-peru')}}">
                    <div class="relative">
                        <img src="{{asset('images/asc.jpg')}}" alt="" class="object-cover min-w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full inset-x-0 bottom-0 p-3">
                        <div class="py-2 px-4 text-gray-100 bg-secondary bg-opacity-95 shadow-lg rounded-lg">
                            <div class="font-normal text-sm">
                                12 {{__('message.pack_par4')}} / <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ 1699 <span class="text-xs">usd</span>
                            </div>
                            <h2 class="text-lg font-semibold">{{__('message.pack_item5')}}</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="overflow-hidden relative group">
                <a href="{{route('packages.detail', 'paracas-nazca')}}">
                    <div class="relative">
                        <img src="{{asset('images/banners/packages/paracas-nazca.jpg')}}" alt="" class=" object-cover min-w-full  transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full bottom-0 inset-x-0 p-3">
                        <div class="py-2 px-4 text-gray-100 bg-secondary bg-opacity-95 shadow-lg rounded-lg">
                            <div class="font-normal text-sm">
                                2 {{__('message.pack_par4')}} / <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ 299 <span class="text-xs">usd</span>
                            </div>
                            <h2 class="text-lg font-semibold">Paracas & Nazca</h2>
                        </div>
                    </div>
                </a>
            </div>


        </div>

        <div class="md:col-span-3 order-1 md:order-2 overflow-hidden group relative">
            <div class="relative h-full w-full">
                <img src="{{asset('images/pa.jpg')}}" alt="" class="hidden md:inline-flex object-cover h-full w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                <div class="absolute inset-0 gradient-cicle-gray"></div>
            </div>
            <div class="md:absolute md:inset-y-0 md:right-0 w-full md:w-64 p-6 bg-secondary bg-opacity-95 text-gray-50">
                <h3 class="font-bold text-right text-2xl">Nazca, Ballestas & Huacachina</h3>
                <p class="mt-3 md:mb-6 block text-sm">{{__('message.pack_item4')}}</p>
                <a href="{{route('destinations.show', 'lineas-de-nazca')}}" class="btn-white hidden md:inline-flex">{{__('message.button_all')}}</a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 hidden md:inline-flex absolute bottom-0 left-0 m-6 cursor-pointer text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

        </div>

    </section>

    <section class="grid col-span-1 md:grid-cols-5 mb-4 container gap-4">
        <div class="md:col-span-3 overflow-hidden group relative">
            <img src="{{asset('images/titicaca.jpg')}}" alt="" class="hidden md:inline-flex object-cover h-full min-w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
            <div class="md:absolute md:inset-y-0 md:left-0 w-full md:w-64 p-6 bg-gray-700 bg-opacity-95 text-gray-50">
                <h3 class="font-bold text-2xl">{{__('message.pack_item6')}}</h3>
                <p class="mt-3 mb-6 text-sm block">{{__('message.pack_item7')}}</p>
                <a href="{{route('destinations.show', 'puno')}}" class="btn-white hidden md:inline-flex">{{__('message.button_all')}}</a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 hidden md:inline-flex absolute bottom-0 right-0 m-6 cursor-pointer text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="md:col-span-2 flex flex-col gap-4 content-between overflow-hidden">

            <div class="overflow-hidden relative group">
                <a href="{{route('packages.detail', 'lake-titicaca-from-cusco')}}">
                    <div class="relative">
                        <img src="{{asset('images/banners/packages/lake-titicaca-from-cusco.jpg')}}" alt="" class=" object-cover min-w-full  transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full bottom-0 inset-x-0 p-3">
                        <div class="py-2 px-4 text-gray-100 bg-gray-700 bg-opacity-95 shadow-lg rounded-lg">
                            <div class="font-normal text-sm">
                                3 {{__('message.pack_par4')}} / <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ 219 <span class="text-xs">usd</span>
                            </div>
                            <h2 class="text-lg font-semibold">{{__('message.pack_item8')}}</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="overflow-hidden relative group">
                <a href="{{route('packages.detail', 'best-of-peru')}}">
                    <div class="relative">
                        <img src="{{asset('images/asc.jpg')}}" alt="" class="object-cover min-w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute w-full bottom-0 inset-x-0 p-3">
                        <div class="py-2 px-4 text-gray-100 bg-gray-700 bg-opacity-95 shadow-lg rounded-lg">
                            <div class="font-normal text-sm">
                                12 {{__('message.pack_par4')}} / <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ 1699 <span class="text-xs">usd</span>
                            </div>
                            <h2 class="text-lg font-semibold">{{__('message.pack_item5')}}</h2>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </section>

    <section class="container mb-12">
        <div class="grid grid-cols-6 gap-4 mt-12">
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

    <section class="py-12 bg-gray-100 hidden md:block">

        <div class="container">
            <div class="flex items-center text-2xl text-gray-700 mb-4 dark:text-secondary font-bold gap-2">
                <div class="border-4 h-1 w-12 border-secondary"></div> {{__('message.subtitle5')}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="col-span-2 flex gap-4 flex-wrap content-between overflow-hidden">
                    <div class="w-full">
                        <div class="grid grid-cols-2 w-full items-center text-center text-gray-700 dark:text-gray-300 gap-2">
                            <div class="border p-4 w-full">
                                <p class="block text-4xl font-bold">97%</p>
                                <p class="text-xs">{{__('message.social_con1')}}</p>
                            </div>
                            <div class="border p-4 w-full">
                                <p class="block text-3xl font-bold">9000 +</p>
                                <p class="text-xs">{{__('message.social_con2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        {{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})">--}}
                            {{--                <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105">--}}
                            <div class="flex items-center justify-center">
                                <div class="border bg-white p-6 dark:bg-gray-800 text-gray-800 dark:text-gray-300">
                                    <p class="mb-2 flex inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{__('message.social_li1')}}
                                    </p>
                                    <p class="mb-2 flex inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{__('message.social_li2')}}
                                    </p>
                                    <p class="mb-2 flex inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{__('message.social_li3')}}
                                    </p>
                                    <p class="mb-2 flex inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{__('message.social_li4')}}
                                    </p>
                                    <p class="mb-2 flex inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{__('message.social_li5')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="grid grid-cols-2 w-full items-center text-center text-gray-700 dark:text-gray-300 gap-2">
                                <div class="border p-4 w-full">
                                    <p class="block text-4xl font-bold">30 000</p>
                                    <p class="text-xs">FACEBOOK FANS</p>
                                </div>
                                <div class="border p-4 w-full">
                                    <p class="block text-3xl font-bold">#gotoperu</p>
                                    <p class="text-xs">INSTAGRAM HASHTAG</p>
                                </div>
                            </div>
                        </div>
                        {{--                <div class="grid grid-cols-2 items-center text-2xl text-gray-700 font-bold gap-3">--}}

                            {{--                        <div class="border">--}}
                                {{--                            <p class="block text-4xl font-bold">#gotoperu</p>--}}
                                {{--                            <p class="text-xs">FACEBOOK FANS</p>--}}
                                {{--                        </div>--}}
                            {{--                        <div class="border">--}}
                                {{--                            <p class="block text-3xl font-bold">#gotoperu</p>--}}
                                {{--                            <p class="text-xs">INSTAGRAM HASHTAG</p>--}}
                                {{--                        </div>--}}

                            {{--                    <div class="border">--}}
                                {{--                        <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank"><img src="https://gotoperu.com.mx/images/icons/tripadvisor.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>--}}
                                {{--                    </div>--}}
                            {{--                    <div class="border">--}}
                                {{--                        <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img src="https://gotoperu.com.mx/images/icons/yelp.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>--}}
                                {{--                    </div>--}}
                            {{--                    <div class="border">--}}
                                {{--                        <a href="https://www.trustpilot.com/review/gotoperu.com"><img src="https://gotoperu.com.mx/images/icons/trust.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>--}}
                                {{--                    </div>--}}
                            {{--                </div>--}}

                    </div>
                    <div class="col-span-3 grid grid-cols-1 items-center relative overflow-hidden bg-center bg-no-repeat bg-cover" style="background-image: url('{{asset('images/earth-the-world.jpg')}}')">
                        {{--            <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105">--}}

                        {{--            <div class="absolute flex items-center inset-0 ">--}}
                            <div class="md:mx-16">
                                <div class="w-full swiper-container mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach($testinomials as $testinomial)
                                        <div class="swiper-slide p-4">
                                            <div class="my-10 mx-16 w-full mx-auto rounded-lg bg-gray-100 dark:bg-gray-800 shadow-lg px-5 pt-5 pb-10 text-gray-800 dark:text-gray-300">
                                                <div class="w-full pt-1 text-center pb-5 -mt-16 mx-auto">
                                                    <a href="#" class="block relative">
                                                        <img alt="profil" src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" class="mx-auto object-cover rounded-full h-20 w-20 z-30"/>
                                                    </a>
                                                </div>
                                                <div class="w-full mb-6">
                                                    <div class="text-3xl text-indigo-500 text-left leading-tight h-3">
                                                        “
                                                    </div>
                                                    <p class="text-sm text-gray-600 dark:text-gray-100 text-center px-5">
                                                        {{ Str::limit($testinomial->contenido, 150) }}
                                                    </p>
                                                    <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">
                                                        ”
                                                    </div>
                                                </div>
                                                <div class="w-full text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto cursor-pointer text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    <p class="text-md text-indigo-500 font-bold text-center">
                                                        {{ $testinomial->nombre }}
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-300 text-center">
                                                        {{ $testinomial->ciudad }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next btn-next"></div>
                                    <div class="swiper-button-prev btn-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="container block mt-4">
                    <div class="flex inline-flex items-center text-2xl text-gray-700 font-bold gap-3">
                        <div class="border">
                            <a href="https://www.instagram.com/goto.peru/" target="_blank">
                                <img src="{{asset('images/logos/instagram2.png')}}" alt="" class="px-6 py-4">
                            </a>
                        </div>
                        <div class="border">
                            <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank">
                                <img src="{{asset('images/logos/facebook2.png')}}" alt="" class="px-6 py-4">
                            </a>
                        </div>
                        <div class="border">
                            <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank">
                                <img src="{{asset('images/logos/youtube2.png')}}" alt="" class="px-6 py-4">
                            </a>
                        </div>
                        <div class="border">
                            <a href="https://www.tiktok.com/@gotoperu" target="_blank">
                                <img src="{{asset('images/logos/tiktok2.png')}}" alt="" class="px-6 py-4">
                            </a>
                        </div>
                        <div class="border">
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank">
                                <img src="{{asset('images/logos/tripadvisor2.png')}}" alt="" class="px-6 py-4 dark:filter dark:grayscale dark:invert">
                            </a>
                        </div>
                        <div class="border">
                            <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank">
                                <img src="{{asset('images/logos/yelp2.png')}}" alt="" class="px-6 py-4 dark:filter dark:grayscale dark:invert">
                            </a>
                        </div>
                        <div class="border">
                            <a href="https://www.trustpilot.com/review/gotoperu.com">
                                <img src="{{asset('images/logos/trust2.png')}}" alt="" class="px-6 py-4 dark:filter dark:grayscale dark:invert">
                            </a>
                        </div>
                    </div>
                </section>
    </section>


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
                            {{--                        <a href="https://www.instagram.com/goto.peru/" target="_blank"><img src="{{asset('images/logos/instagram.png')}}" alt="" class="p-6"></a>--}}
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
            <span class="inline-block w-1 h-2.5 bg-secondary dark:bg-primary ml-1"></span>
            <span class="hidden md:inline-flex inline-block w-3 h-2.5 bg-secondary dark:bg-primary ml-1"></span>
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
                    <span class="inline-block w-1 h-2 bg-secondary dark:bg-primary ml-1"></span>
                    <span class="inline-block w-3 h-2 bg-secondary dark:bg-primary ml-1"></span>
                    <span class="inline-block w-10 h-2 bg-secondary dark:bg-primary"></span>
                    <span class="inline-block w-3 h-2 bg-secondary dark:bg-primary ml-1"></span>
                    <span class="inline-block w-1 h-2 bg-secondary dark:bg-primary ml-1"></span>
                </div>
                <p class="block my-12">
                    {{__('message.info_par1')}}
                </p>
                <a href="{{route('hotels')}}" class="btn-primary">{{__('message.button_all')}}</a>
            </div>
        </div>
    </section>

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
            <div class="bg-gray-100 h-full col-span-1  justify-between p-6 text-gray-500 order-2 md:order-1">
                <span class="text-sm font-light">{{$blogs_first->created_at}}</span>
                _____
                <span class="text-sm font-light">{{$blogs_first->categoria->nombre}}</span>

                <h2 class="my-6 font-semibold text-gray-600 text-3xl"><a href="{{route('blog.show', $blogs_first)}}">{{$blogs_first->titulo}}</a></h2>
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
    </script>

    @endpush
</x-page-layout>
