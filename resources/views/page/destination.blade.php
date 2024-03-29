@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/400/1700/machu-picchu-full-day.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.dest_title1')}}</h1>
        </div>
    </section>
{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}
    <section class="container py-12 text-gray-500 text-center">

        <p>GOTOLATAM's travelers get one-of-a-kind experiences in 13 Central and South American countries thanks to the customized tours we offer. Our award-winning staff is ready to help with local needs 24 hours a day, 7 days a week. With us, you can dream, book, and go to the most important LATAM places with confidence and local connections.</p>
        <p>We have everything you need to plan the perfect trip to South America, whether you want to walk and trek in Patagonia and the Amazon Rainforest, ski in the Andes Mountains, cruise the Galapagos Islands, explore the Iguazu Falls, or see important historical sites like Easter Island, Machu Picchu, and the Nazca Lines.</p>
    </section>

    <section class="container grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
        @foreach($pais as $pais3)
            <article class="grid grid-cols-1 place-content-between mb-6 border-r border-l dark:border-gray-700">
                <div class="w-full">
                    <figure class="overflow-hidden relative">
                        <img src="{{$pais3->imagen_s}}" alt="" class="bg-cover h-full w-full">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </figure>

                    <div class="w-full p-6 mt-4 mb-5 text-center">
                        <div class="">
                            {{--                        <h2 class="">{{ Str::limit($destination->nombre, 40) }}</h2>--}}
                            <h2 class="text-xl font-bold mb-4 text-center text-gray-600 dark:text-gray-300">{{$pais3->nombre}}</h2>
{{--                            <p class="text-sm text-gray-500 dark:text-gray-200">{{$pais3->resumen}}</p>--}}
                        </div>
                        {{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fuga repellat reprehenderit sint vero. Eum maxime minima, nobis numquam optio quasi quidem quo ratione sunt totam vel velit voluptatem voluptatum?--}}
                    </div>
                </div>
                <div class="w-full">
                    <a href="{{ route('destinations.show', $pais3) }}" class="btn-secondary block text-center mt-2">{{__('message.button_all')}}</a>
                </div>
            </article>

        @endforeach
    </section>
    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection
