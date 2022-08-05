@extends('layouts.page-layout')
@section('content')
    <section class="bg-gray-100">
        <div class="container grid grid-cols-1 md:grid-cols-3 flex items-center">
            <div class="col-span-1  justify-between p-6 text-gray-500 order-2 md:order-1">
                <span class="text-sm font-light">{{$blogs_first->created_at}}</span>
                _____
                <span class="text-sm font-light">{{$blogs_first->categoria->nombre}}</span>

                <h2 class="my-6 font-semibold text-gray-600 text-3xl"><a href="{{route('blog.show', $blogs_first)}}">{{$blogs_first->titulo}}</a></h2>
                <div class="text-sm mb-6">{!! Str::limit($blogs_first->detalle, 300) !!}</div>

                <a href="{{route('blog.show', $blogs_first)}}" class="text-secondary mt-4 flex">read <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="col-span-2 order-1 md:order-2 h-30r">
                <div class="w-full swiper-container mySwiper h-full">
                    <div class="swiper-wrapper">
                        @foreach($blogs_first->imagenes as $imagen)
                            <div class="swiper-slide">
                                <img src="{{$imagen->nombre}}" alt="{{$blogs_first->titulo}}" class="h-full w-full object-cover object-center">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next btn-next"></div>
                    <div class="swiper-button-prev btn-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-6">
        <div class="container grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($blogs as $blog)
                @if($loop->iteration > 1)
                    <div class="text-gray-500 flex flex-col">
                        <div class="h-96">
                            <img src="{{$blog->imagen_miniatura}}" alt="" class="h-full w-full object-cover object-top">
                        </div>
                        <div class="p-4">
                            <span class="text-sm font-light">{{$blogs_first->created_at}}</span>
                            _____
                            <span class="text-sm font-light">{{$blogs_first->categoria->nombre}}</span>

                            <h2 class="my-4 font-semibold text-gray-600 text-xl"><a href="{{route('blog.show', $blog)}}">{{$blog->titulo}}</a></h2>
                            <span class="text-sm font-normal">{!! Str::limit($blog->detalle, 150) !!}</span>
                        </div>
                        <div class="mt-auto px-4">
                            <a href="{{route('blog.show', $blog)}}" class="text-secondary flex">
                                read
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>


    <section class="">
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
@endsection
