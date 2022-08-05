@extends('layouts.page-layout')
@section('content')
    <section class="bg-gray-50 py-12">
        <div class="w-full md:w-3/5 mx-auto grid grid-cols-1 md:grid-cols-1 flex items-center">
            <div class="col-span-1 px-6 md:px-0 justify-between text-gray-500">
                <span class="text-sm font-light text-secondary">{{$post->created_at}}</span>
                _____
                <span class="text-sm font-light text-secondary">{{$post->categoria->nombre}}</span>

                <h2 class="my-4 font-semibold text-gray-600 text-3xl">{{$post->titulo}}</h2>
{{--                <span class="text-sm mb-6">{!! Str::limit($post->detalle, 300) !!}</span>--}}

{{--                <a href="" class="text-secondary mt-4 flex">read <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />--}}
{{--                    </svg></a>--}}
            </div>
            <div class="col-span-2 h-30r">
                <div class="w-full swiper-container mySwiper h-full">
                    <div class="swiper-wrapper">
                        @foreach($post->imagenes as $imagen)
                            <div class="swiper-slide">
                                <img src="{{$imagen->nombre}}" alt="{{$post->titulo}}" class="h-full w-full object-cover object-center">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next btn-next"></div>
                    <div class="swiper-button-prev btn-prev"></div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-3/5 mx-auto mt- px-6 md:px-0 unreset">
            <div class="text-gray-600 w-full block">{!! $post->detalle !!}</div>
        </div>
    </section>


    <section class="">
        @livewire('page.form-footer')
    </section>
    @push('css')
        <link rel="stylesheet" href="{{asset('css/unreset.css')}}" />
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
@endsection
