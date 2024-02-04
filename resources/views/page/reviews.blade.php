@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/banners/mapi.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.revi_title1')}}</h1>
        </div>
    </section>
    {{--    <div class="hidden md:inline-block">--}}
    {{--        @livewire('page.form-home')--}}
    {{--    </div>--}}
    <section class="container py-12 text-gray-500 text-center">
        <p class="">{{__('message.revi_par1')}}</p>
        {{--        <p class="my-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet beatae commodi doloremque est eveniet expedita id ipsam labore magnam maxime, minima nemo nihil porro quaerat rem ullam. A, earum?</p>--}}
        <div class="text-gray-600 text-xl font-medium">
            {{__('message.revi_par2')}}
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


    <section class="container hidden md:block">

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
                <div class="flex inline-flex items-center text-2xl text-gray-700 font-bold gap-3">
                    <div class="border">
                        <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank"><img src="https://gotoperu.com.mx/images/icons/tripadvisor.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img src="https://gotoperu.com.mx/images/icons/yelp.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.trustpilot.com/review/gotoperu.com"><img src="https://gotoperu.com.mx/images/icons/trust.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>
                    </div>
                </div>


            </div>
            <div class="col-span-3 grid grid-cols-1 items-center relative overflow-hidden bg-center bg-no-repeat bg-cover" style="background-image: url('{{asset('images/banners/redes.jpg')}}')">
                {{--            <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105">--}}

                {{--            <div class="absolute flex items-center inset-0 ">--}}
                <div class="md:mx-16">
                    <div class="w-full swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($testinomials as $testinomial)
                                <div class="swiper-slide p-12">
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

    </section>

    <section class="container hidden md:block mt-12 py-6">

        <div class="flex items-center text-2xl text-gray-700 mb-4 dark:text-secondary font-bold gap-2">
            <div class="border-4 h-1 w-12 border-secondary"></div> VIDEO TESTIMONIALS
        </div>


        <div class="grid grid-cols-3 gap-6">
            @foreach($videos as $video)
                <div class="overflow-hidden relative">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-maxwidth="50%" data-vbtype="video" href="{{$video->codigo}}">
                        <img src="{{$video->imagen}}" class="transform bg-blue-400 hover:bg-blue-600 transition duration-500 hover:scale-105"/>
                        <div class="absolute bottom-0 left-0 bg-gray-800 p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>



    <section class="container mt-6 mb-12 ">
        {{--        <div class="flex mb-3 items-center text-2xl text-gray-700 dark:text-primary font-bold gap-2">--}}
        {{--            <div class="">--}}
        {{--                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>--}}
        {{--                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>--}}
        {{--                <span class="inline-block w-5 h-2.5 bg-secondary"></span>--}}
        {{--            </div> Social Media--}}
        {{--        </div>--}}

        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="col-span-3 grid grid-cols-1 items-center relative bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url({{asset('images/hotels-t.jpg')}})">
                <div class="flex relative">
                    {{--                    <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div>--}}
                    <img src="{{asset('images/banners/social.jpg')}}" alt="" class="object-cover h-full w-full">
                    <div class="absolute inset-0 gradient-cicle-gray"></div>
                </div>
            </div>
            <div class="col-span-2 flex gap-4 flex-col justify-between content-between overflow-hidden">
                <div class="">
                    <div class="flex items-center text-center text-gray-700 dark:text-gray-300 gap-2">
                        <div class="border p-4 w-1/2">
                            <p class="block text-4xl font-bold">30 000</p>
                            <p class="text-xs">FACEBOOK FANS</p>
                        </div>
                        <div class="border p-4 w-1/2">
                            <p class="block text-3xl font-bold">#gotoperu</p>
                            <p class="text-xs">INSTAGRAM HASHTAG</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    {{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})">--}}

                    <div class="bg-gray-500 bg-opacity-10 text-center p-12">
                        <img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" alt="" class="mx-auto py-4">
                        <h3>{{__('message.revi_subtitle1')}}</h3>
                        <p>{{__('message.revi_par3')}}</p>
                    </div>
                </div>
                <div class="grid grid-cols-4 items-center text-2xl text-gray-700 font-bold gap-3">
                    <div class="border">
                        <a href="https://www.instagram.com/go.to.peru/" target="_blank"><img src="{{asset('images/logos/instagram.png')}}" alt="" class="p-6"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><img src="{{asset('images/logos/facebook.png')}}" alt="" class="p-6"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank"><img src="{{asset('images/logos/youtube.png')}}" alt="" class="p-6"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.tiktok.com/@gotoperu" target="_blank"><img src="{{asset('images/logos/tiktok.png')}}" alt="" class="p-6"></a>
                    </div>
                </div>


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
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
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
@endsection
