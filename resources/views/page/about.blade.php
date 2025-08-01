@extends('layouts.page-layout')
@section('content')
    {{--    <section class="-mt-32 h-80vh -z-1 relative"> --}}
    {{--        <img src="{{asset('images/banners/rainbow.jpg')}}" alt="" class="h-full w-full object-cover object-top"> --}}
    {{--        <div class="absolute bottom-0 left-0 p-12"> --}}
    {{--            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.revi_title1')}}</h1> --}}
    {{--        </div> --}}
    {{--    </section> --}}
    {{--    <div class="hidden md:inline-block"> --}}
    {{--        @livewire('page.form-home') --}}
    {{--    </div> --}}

    <section class="bg-gray-200 shadow hidden md:block">
        <div class="grid grid-cols-2 items-end">
            <div class="pl-64 my-6 text-sm">
                <h2 class="font-bold text-secondary text-4xl">YOUR LATAM TRAVEL EXPERTS</h2>
                <p class="italic font-medium my-4">GOTOLATAM's knowledge is based on the advice and experience of OUR LOCAL
                    TEAM, who have worked in the travel industry for over 14 years. Our staff members were born in the
                    southern continent and have traveled extensively through both South and Central America, so they can
                    offer a unique perspective on the diversity of attractions and destinations to be discovered, as well as
                    provide handy suggestions for traveling. We have affiliated offices in Buenos Aires, Santiago, Rio,
                    Quito, La Paz, and Bogota in addition to our headquarters in the capital of the Incas : Cusco, Peru.
                    Depending on your needs and preferences, we provide a vast selection of hotels and tours from which to
                    choose. If there is something absent from our website, please contact our team so we can explore whether
                    we can arrange it for you.We work with a variety of hand-picked local operators, including the top
                    guides and local reps at each stage of your itinerary who will serve as your trusted connections on the
                    ground.</p>
                <p class="my-4 font-bold">Our origins can be traced back to GOTOPERU Group, one of the most well-known tour
                    operators in Peru with thousands of satisfied travelers; GOTOLATAM is now the foundation of our
                    expansion, offering our clients more opportunities to continue exploring the best of our continent under
                    one umbrella #GOTOLATAM</p>
                {{--                <p class="font-bold">Paul Catano</p> --}}
                {{--                <p class="text-xs">{{__('message.info_par4')}}</p> --}}
            </div>
            <div class="">
                <img src="{{ asset('images/gotoperu-banner-rgba.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="bg-primary ">
        <main class="container py-14 text-white">
            <h2 class="text-3xl font-semibold mb-2">{{ __('message.abou_title2') }} </h2>
            {{-- <p class="">{{__('message.abou_par1')}}</p> --}}
            <div class="md:w-2/3 gap-2 leading-relaxed ">
                <p>
                    {{ __('message.abou_message1') }}
                </p>
                <p class="mt-4">
                    {{ __('message.abou_message2') }}
                </p>
                <p class="mt-4">
                    {{ __('message.abou_message3') }}
                </p>
            </div>
        </main>
        <img src="https://cdn.vayaadventures.com/wp-content/uploads/Vaya_About-Us-Team-noresize.jpg" class="w-full">
        </img>
    </section>
    <section class="text-white">
        <main class="container py-14">
            <h1 class="italic text-4xl mb-6 font-playfair">GOTOGROUP TODAY</h1>
            <div class="md:w-2/3 gap-2 leading-relaxed">
                <p>
                    Today, GOTOGROUP stands as a dynamic network, a collection of specialized companies united by a passion
                    for
                    crafting exceptional travel experiences across Latin America. With brands such as <b>Gotoperu,
                        Gotolatam,
                        Gotocolombia, Gotoecuador, MachupicchuCompany, and SouthAmerica Company</b>, we provide a diverse
                    array of
                    services tailored to meet the needs of every type of traveler—whether you're in search of adventure,
                    relaxation, or a luxurious escape.
                </p>
                <p class="mt-4">
                    Our unwavering dedication to quality and our deep-rooted passion for the Latin American spirit remain
                    the
                    driving forces behind everything we do. With a growing presence that encompasses offices in Peru and the
                    USA,
                    along with an upcoming launch in Colombia this year and ambitious plans for Central America,
                    <b>GOTOGROUP</b>
                    is
                    strategically positioned to continue delivering authentic, high-end travel experiences across the
                    continent.
                    We are more than just a travel company; we are a family of passionate individuals collaborating to
                    create
                    experiences that connect cultures, enrich lives, and leave lasting memories.
                </p>
            </div>
        </main>
    </section>
    <section class="bg-primary grid grid-cols-1 md:grid-cols-2 text-white">
        <main class="container md:pl-26 md:pr-24 py-14 order-2 md:order-1">
            <h1 class="italic text-4xl mb-6 font-playfair">WHAT'S NEXT FOR GOTO?</h1>
            <div class="gap-2 leading-relaxed md:text-base">
                <p>
                    The future at GOTOGROUP is vibrant with possibilities. We are committed to continuous evolution, with
                    exciting
                    new destinations and unique experiences constantly being developed. In 2025, we will continue to grow
                    our
                    portfolio, adding <b>GotoCostaRica</b> to our list of destinations and expanding our luxury offerings
                    across
                    Latin
                    America. We're also focused on enhancing our sustainability efforts, ensuring that each journey we
                    create not
                    only delights our travelers but also respects the environment.
                </p>
                <p class="mt-4">
                    We are committed to earning ISO certifications for quality, environmental sustainability, and safety,
                    making
                    sure that every part of our operation meets the highest international standards. Our journey is just
                    beginning, and we can't wait to share more of what’s to come.
                </p>
            </div>
        </main>
        <img src="https://cdn.vayaadventures.com/wp-content/uploads/Vaya_About-Us-Block-1-noresize.jpg"
            class="h-[40vh] md:h-full md:w-full object-cover order-1 md:order-2">
        </img>
    </section>
    <section class="grid grid-cols-1 md:grid-cols-2 text-white">
        <img src="https://cdn.vayaadventures.com/wp-content/uploads/Vaya_About-Us-Block-2-noresize.jpg"
            class="h-[40vh] md:h-full md:w-full object-cover">
        </img>
        <main class="container md: md:pl-24 py-14">
            <h1 class="italic text-4xl mb-6 font-playfair">GOTO'S ICON</h1>
            <div class="gap-2 leading-relaxed md:text-base">
                <p>
                    At the heart of <b>GOTOGROUP</b> lies our powerful symbol, the <b>Qente</b>. This symbol embodies our
                    deep
                    connection
                    to
                    Andean culture, particularly the legacy of the ancient Incas. The Qente, a mythological and formidable
                    bird,
                    represents freedom, knowledge, and protection—essential elements of the philosophy we embrace in our
                    travels.
                </p>
                <p class="mt-4">
                    In the Andean worldview, this renowned winged creature safeguards the delicate balance between nature
                    and
                    humanity. It also symbolizes our unwavering commitment to authenticity and the creation of unique,
                    meaningful
                    journeys for each visitor. The Qente signifies not only the splendor of South American landscapes but
                    also the
                    potential to grow, reach new heights, and uncover the unknown. Like this bird, we at <b>GOTOGROUP</b>
                    aspire
                    to
                    elevate our customers by connecting them with the most breathtaking places in Latin America, from the
                    ancient
                    ruins of Machu Picchu to the vibrant landscapes of the Amazon jungle.
                </p>
                <p class="mt-4">
                    Our logo is more than just an image; it represents our mission: to serve as guardians of an authentic
                    travel
                    experience, preserving traditions and protecting the environment while enabling our clients to uplift
                    their
                    spirits and hearts with each excursion. When tourists travel with GOTOGROUP, they do more than merely
                    explore
                    a destination; they immerse themselves in a vibrant culture rich with history, nature, and ancient
                    wisdom.
                </p>
            </div>
        </main>
    </section>
    <section class="bg-primary text-white ">
        <main class="container py-14">
            <h1 class="italic text-4xl mb-6 font-playfair">TAILORING YOUR PERFECT ADVENTURE</h1>
            <div class="md:w-2/3 gap-2 leading-relaxed ">
                <p>
                    Every traveler is unique, and so is every journey we create. At GOTOGROUP, we specialize in designing
                    personalized travel experiences that reflect your desires, interests, and sense of adventure. Whether
                    you’re
                    exploring the ruins of ancient civilizations, hiking through breathtaking landscapes, or indulging in
                    luxurious escapes, we work closely with you to craft an itinerary that fits your vision of the perfect
                    adventure.
                </p>
                <p class="mt-4">
                    From the moment you contact us, our team is dedicated to ensuring your experience exceeds your
                    expectations.
                    We take the time to understand what makes your journey special and ensure that every detail is perfectly
                    tailored to your needs. With GOTOGROUP, you’ll discover the true spirit of Latin America in a way that’s
                    as
                    unique as you are.
                </p>
            </div>
        </main>
    </section>
    {{-- <section class="swiper mySwiper3">
        <div class="swiper-wrapper grid grid-cols-1 md:grid-cols-8 mb-12">
            @foreach ($pais2 as $pais3)
                <article class="swiper-slide grid grid-cols-1 place-content-between mb-6  dark:border-gray-700">
                    <div class="w-full">
                        <figure class="overflow-hidden relative">
                            <a href="{{ route('destinations.show', $pais3) }}">
                                <img src="{{$pais3->imagen_s}}" alt="" class="bg-cover h-full w-full">
                                <div class="absolute inset-0 gradient-cicle-gray"></div>
                            </a>
                            <div class="absolute left-0 bottom-0 text-gray-50 p-3">
                                {{$pais3->nombre}}
                            </div>
                        </figure>
                    </div>
                </article>

            @endforeach
        </div>
    </section> --}}



    {{-- <section class="container py-12 text-gray-500 text-center">
        <p class="">{{__('message.revi_par1')}}</p>
               <p class="my-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet beatae commodi doloremque est eveniet expedita id ipsam labore magnam maxime, minima nemo nihil porro quaerat rem ullam. A, earum?</p>
        <div class="text-gray-600 text-xl font-medium">
            {{__('message.revi_par2')}}
        </div>
    </section> --}}

    {{-- <section class="container grid grid-cols-1 mb-12">
        <img src="{{asset('images/banners/latam.jpg')}}" alt="">
        <section class="grid grid-cols-1 -mt-6 md:grid-cols-2">
            <div class="bg-secondary p-12">
                <h2 class="font-bold text-white text-2xl">{{__('message.info_subtitle1')}}: </h2>
                <p class="text-sm italic text-yellow-700 font-medium my-4">{{__('message.info_par1')}} </p>
                <p class="my-4 text-sm font-bold text-yellow-900">{{__('message.info_par2')}}</p>
                <p class="font-bold text-white">{{__('message.info_par3')}}</p>
                <p class="text-xs">{{__('message.info_par4')}}</p>
            </div>
            <div class="bg-primary grid grid-cols-1 md:grid-cols-2 gap-6 p-12">
                <div class="">
                    <h3 class="font-bold text-white mb-2">{{__('message.info_subtitle2')}}</h3>
                    <p class="text-sm text-gray-800">{{__('message.info_par5')}}</p>
                </div>
                <div class="">
                    <h3 class="font-bold text-white mb-2">{{__('message.info_subtitle3')}}</h3>
                    <p class="text-sm text-gray-800">{{__('message.info_par6')}}</p>
                </div>
                <div class="md:col-span-2">
                    <h3 class="font-bold text-white mb-2">{{__('message.info_subtitle4')}}</h3>
                    <p class="text-sm text-gray-800">{{__('message.info_par7')}}</p>
                </div>
            </div>
        </section>
    </section> --}}

    {{-- <section class="container hidden md:block mt-12 py-6">

        <div class="flex items-center text-2xl text-gray-700 mb-4 dark:text-secondary font-bold gap-2">
            <div class="border-4 h-1 w-12 border-secondary"></div> VIDEO TESTIMONIALS
        </div>


        <div class="grid grid-cols-3 gap-6">
            @foreach ($videos as $video)
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
    </section> --}}
    {{-- <section class="container my-12md:block">
        <div class="grid grid-cols-5  items-center gap-6">
            <div class="col-span-2">
                <img src="{{asset('images/team/about-us.jpg')}}" alt="">
            </div>
            <div class="col-span-3">
                <h2 class="font-bold text-secondary text-center text-4xl mb-6">ABOUT US</h2>
                <p>GOTOLATAM's knowledge is based on the advice and experience of OUR LOCAL TEAM, who have worked in the travel industry for over 14 years. Our staff members were born in the southern continent and or/have traveled extensively through both South and Central America, so they can offer a unique perspective on the diversity of attractions and destinations to be discovered, as well as provide handy suggestions for traveling. We have affiliated offices in Buenos Aires, Santiago, Rio, Quito, La Paz, and Bogota in addition to our headquarters in the capital of the Incas : Cusco, Peru.</p>
                <p>Depending on your needs and preferences, we provide a vast selection of hotels and tours from which to choose. If there is something absent from the brochure or website, please contact our team so we can explore whether we can arrange it for you.</p>
                <p>As travel professionals, we work with a variety of hand-picked local operators, including the top guides and local reps at each stage of your itinerary who will serve as your trusted connections on the ground, always with an smile =) because at GOTOLATAM make dream vacations come true is a our daily goal.</p>
                <p>Our origins can be traced back to GOTOPERU Group, one of the most well-known tour operators in Peru with thousands of satisfied travelers; GOTOLATAM is now the foundation of our expansion, offering our clients more opportunities to continue exploring the best of our continent under one umbrella #GOTOLATAM </p>
            </div>

        </div>
    </section> --}}
    {{-- <section class="bg-gray-100 my-6 py-6">
        <div class="container flex items-center text-2xl text-gray-700 mb-4 dark:text-secondary font-bold gap-2">
            <div class="border-4 h-1 w-12 border-secondary"></div> OUR TEAM
        </div>
        <div class="container">
            <div class="swiper mySwiper2 relative">
                <div class="swiper-wrapper">
                    @foreach ($teams as $team)
                        <div class="swiper-slide my-6 text-center">
                            @if ($team->imagen_perfil)
                                <img class="w-48 h-48 rounded-full shadow mx-auto -mb-24" src="{{ $team->imagen_perfil }}"
                                    alt="{{ $team->nombre }}" />
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-48 h-48 rounded-full mx-auto bg-white -mb-24" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif
                            <div class="bg-white shadow-lg rounded-lg px-8 pt-32 pb-2 text-gray-400">
                                <h3 class="font-title font-bold text-gray-600 text-lg mb-2">
                                    {{ $team->nombre }}
                                </h3>
                                <p class="font-body mb-2">
                                    {{ $team->cargo }}
                                </p>
                                <p class="font-body text-sm mb-4">
                                    {{ $team->actividad }}
                                </p>
                                <a class="font-body text-blue-500 hover:text-gray-800" href="#">
                                    {{ $team->email }}
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section> --}}
    <section class="container hidden md:block mt-12">

        <div class="flex items-center text-2xl text-gray-700 mb-4 dark:text-secondary font-bold gap-2">
            <div class="border-4 h-1 w-12 border-secondary"></div> {{ __('message.subtitle5') }}
        </div>
        <div class="elfsight-app-d1e14e4b-52d0-4ad9-9068-f94e0de6bf50"></div>

        <div class="mt-6">
            <div class="elfsight-app-45e6b553-4db1-4009-9a37-a98b273413ec"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mt-6">
            <div class="col-span-2 flex gap-4 flex-wrap content-between overflow-hidden">
                <div class="w-full">
                    <div class="grid grid-cols-2 w-full items-center text-center text-gray-700 dark:text-gray-300 gap-2">
                        <div class="border p-4 w-full">
                            <p class="block text-4xl font-bold">97%</p>
                            <p class="text-xs">{{ __('message.social_con1') }}</p>
                        </div>
                        <div class="border p-4 w-full">
                            <p class="block text-3xl font-bold">9000 +</p>
                            <p class="text-xs">{{ __('message.social_con2') }}</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    {{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})"> --}}
                    {{--                <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105"> --}}
                    <div class="flex items-center justify-center">
                        <div class="border bg-white p-6 dark:bg-gray-800 text-gray-800 dark:text-gray-300">
                            <p class="mb-2 flex inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('message.social_li1') }}
                            </p>
                            <p class="mb-2 flex inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('message.social_li2') }}
                            </p>
                            <p class="mb-2 flex inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('message.social_li3') }}
                            </p>
                            <p class="mb-2 flex inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('message.social_li4') }}
                            </p>
                            <p class="mb-2 flex inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('message.social_li5') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex inline-flex items-center text-2xl text-gray-700 font-bold gap-3">
                    <div class="border">
                        <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html"
                            target="_blank"><img src="https://gotoperu.com.mx/images/icons/tripadvisor.png"
                                alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img
                                src="https://gotoperu.com.mx/images/icons/yelp.png" alt=""
                                class="p-4 dark:filter dark:grayscale dark:invert"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.trustpilot.com/review/gotoperu.com"><img
                                src="https://gotoperu.com.mx/images/icons/trust.png" alt=""
                                class="p-4 dark:filter dark:grayscale dark:invert"></a>
                    </div>
                </div>


            </div>
            <div class="col-span-3 grid grid-cols-1 items-center relative overflow-hidden bg-center bg-no-repeat bg-cover"
                style="background-image: url('{{ asset('images/banners/redes.jpg') }}')">
                {{--            <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105"> --}}

                {{--            <div class="absolute flex items-center inset-0 "> --}}
                <div class="md:mx-16">
                    <div class="w-full swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($testinomials as $testinomial)
                                <div class="swiper-slide p-12">
                                    <div
                                        class="my-10 mx-16 w-full mx-auto rounded-lg bg-gray-100 dark:bg-gray-800 shadow-lg px-5 pt-5 pb-10 text-gray-800 dark:text-gray-300">
                                        <div class="w-full pt-1 text-center pb-5 -mt-16 mx-auto">
                                            <a href="#" class="block relative">
                                                <img alt="profil"
                                                    src="https://gotoperu.com.mx/images/video-testimonial/2.jpg"
                                                    class="mx-auto object-cover rounded-full h-20 w-20 z-30" />
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
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-12 w-12 mx-auto cursor-pointer text-red-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
    <section class="container mt-6 mb-12 ">
        {{--        <div class="flex mb-3 items-center text-2xl text-gray-700 dark:text-primary font-bold gap-2"> --}}
        {{--            <div class=""> --}}
        {{--                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
        {{--                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
        {{--                <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
        {{--            </div> Social Media --}}
        {{--        </div> --}}

        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="col-span-3 grid grid-cols-1 items-center relative bg-fixed bg-center bg-no-repeat bg-cover"
                style="background-image: url({{ asset('images/hotels-t.jpg') }})">
                <div class="flex relative">
                    {{--                    <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div> --}}
                    <img src="{{ asset('images/banners/social.jpg') }}" alt=""
                        class="object-cover h-full w-full">
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
                    {{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})"> --}}

                    <div class="bg-gray-500 bg-opacity-10 text-center p-12">
                        <img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png"
                            alt="" class="mx-auto py-4">
                        <h3>{{ __('message.revi_subtitle1') }}</h3>
                        <p>{{ __('message.revi_par3') }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-4 items-center text-2xl text-gray-700 font-bold gap-3">
                    <div class="border">
                        <a href="https://www.instagram.com/goto.peru/" target="_blank"><img
                                src="{{ asset('images/logos/instagram.png') }}" alt="" class="p-6"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><img
                                src="{{ asset('images/logos/facebook.png') }}" alt="" class="p-6"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank"><img
                                src="{{ asset('images/logos/youtube.png') }}" alt="" class="p-6"></a>
                    </div>
                    <div class="border">
                        <a href="https://www.tiktok.com/@gotoperu" target="_blank"><img
                                src="{{ asset('images/logos/tiktok.png') }}" alt="" class="p-6"></a>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="">
        {{-- @livewire('page.form-footer') --}}
        @include('livewire.about.sections-about')
    </section>
    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    @push('scripts')
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <script>
            new VenoBox({
                selector: '.venobox'
            });

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
            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 3,
                spaceBetween: 30,
                freeMode: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });

            var swiper = new Swiper(".mySwiper3", {
                slidesPerView: 7,
                spaceBetween: 0,
                freeMode: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 6,
                    },
                    1024: {
                        slidesPerView: 7,
                    },
                },
            });
        </script>
    @endpush
@endsection
