@extends('layouts.page-layout')
@section('content')
    <div class="swiper mySwiper2 relative">
        <div class="swiper-wrapper">
            @foreach ($paquete['imagen_paquetes'] as $paquete_destino)
                <div class="swiper-slide">
                    <img src="{{ $paquete_destino['nombre'] }}" alt="" class="object-cover h-50vh w-full object-top">
                </div>
            @endforeach
            {{--            <div class="swiper-slide"> --}}
            {{--                @foreach ($paquete['imagen_paquetes'] as $imagen) --}}
            {{--                    <img src="{{$imagen['nombre']}}" alt="{{$paquete['titulo']}}" class="object-cover h-80vh w-full object-top bg-yellow-300  "> --}}
            {{--                @endforeach --}}
            {{--            </div> --}}
            {{--            <div class="swiper-slide">Slide 2</div> --}}
            {{--            <div class="swiper-slide">Slide 3</div> --}}
            {{--            <div class="swiper-slide">Slide 4</div> --}}
            {{--            <div class="swiper-slide">Slide 5</div> --}}
            {{--            <div class="swiper-slide">Slide 6</div> --}}
            {{--            <div class="swiper-slide">Slide 7</div> --}}
            {{--            <div class="swiper-slide">Slide 8</div> --}}
            {{--            <div class="swiper-slide">Slide 9</div> --}}
        </div>
        {{--        <div class="swiper-pagination"></div> --}}
        <div class="absolute bottom-0  m-6 z-10">
            {{--            <h1 class="text-3xl md:text-5xl font-semibold mb-3 text-gray-50">{{ $paquete['titulo'] }}</h1> --}}

            {{--                        <div class="flex gap-3 mb-3"> --}}
            {{--                            <div class="flex-1 border p-3 flex bg-white text-xl items-center justify-center"> --}}
            {{--                                {{ $paquete['duracion'] }} {{__('message.pack_par4')}} --}}
            {{--                            </div> --}}
            {{--                            @if ($paquete['is_p_t'] == 1) --}}
            {{--                                <div class="flex-1 border bg-white p-3 flex items-center"> --}}
            {{--                                    @foreach ($paquete['precio_paquetes'] as $precio) --}}
            {{--                                        @if ($precio['estrellas'] == 2) --}}
            {{--                                            @if ($precio['precio_d'] > 0) --}}
            {{--                                                <div class="text-xl font-semibold text-gray-600"> --}}
            {{--                                                    <span> {{__('message.pack_par5')}} </span> --}}
            {{--                                                    <span>${{$precio['precio_d']}}</span> --}}
            {{--                                                    <span class="text-xs"> usd</span> --}}
            {{--                                                </div> --}}
            {{--                                            @else --}}
            {{--                                                <span class="text-red-500 font-bold">{{__('message.button_inquire')}}</span> --}}
            {{--                                            @endif --}}
            {{--                                        @endif --}}
            {{--                                    @endforeach --}}
            {{--                                </div> --}}
            {{--                            @else --}}
            {{--                                <div class="flex-1 border bg-white p-3 flex items-center text-center"> --}}
            {{--                                    @if ($paquete['precio_tours']) --}}
            {{--                                        <div class="text-xl font-semibold text-gray-600"> --}}
            {{--                                            <span> {{__('message.pack_par5')}} </span> --}}
            {{--                                            <span>${{$paquete['precio_tours']}}</span> --}}
            {{--                                            <span class="text-xs"> usd</span> --}}
            {{--                                        </div> --}}
            {{--                                    @else --}}
            {{--                                        <span class="text-red-500 font-bold">{{__('message.button_inquire')}}</span> --}}
            {{--                                    @endif --}}

            {{--                                </div> --}}
            {{--                            @endif --}}
            {{--                        </div> --}}
            {{--                        <div class="p-6 bg-white border"> --}}
            {{--                            <h5>{{ $paquete['duracion'] }} {{__('message.pack_par4')}}</h5> --}}
            {{--                            <h2 class="text-2xl font-bold text-gray-600"> {{$paquete['titulo']}}</h2> --}}
            {{--                            <div class="flex -space-x-1 overflow-hidden"> --}}
            {{--                                <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
            {{--                                <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
            {{--                                <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt=""> --}}
            {{--                                <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
            {{--                            </div> --}}
            {{--                            <div class="mt-3 text-sm text-gray-600"> --}}
            {{--                                <p>Get a travel expert to plan your dream vacation</p> --}}
            {{--                                <a href="#form-dream-adventure" class="btn btn-secondary inline-flex mt-3">Inquire</a> --}}
            {{--                                @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
            {{--                                    {{$paquete_destino['destinos']['nombre']}} --}}
            {{--                                    @if ($loop->iteration < count($paquete['paquetes_destinos'])) , @else . @endif --}}
            {{--                                @endforeach --}}
            {{--                            </div> --}}
            {{--                        </div> --}}

        </div>
    </div>
    {{--        <section class="relative"> --}}
    {{--            @foreach ($paquete['imagen_paquetes'] as $imagen) --}}
    {{--                <img src="{{$imagen['nombre']}}" alt="{{$paquete['titulo']}}" class="object-cover h-80vh w-full object-top bg-yellow-300  "> --}}
    {{--            @endforeach --}}

    {{--            <div class="absolute w-full bottom-0 left-0 p-12"> --}}
    {{--                <h1 class="text-3xl md:text-5xl font-semibold mb-3 text-gray-50">{{ $paquete['titulo'] }}</h1> --}}

    {{--                <div class="container"> --}}
    {{--                    <div class="grid grid-cols-3 justify-items-end"> --}}
    {{--                        <div class="col-span-3  md:w-1/2"> --}}
    {{--                            <div class="flex gap-3 mb-3"> --}}
    {{--                                <div class="flex-1 border p-3 flex bg-white text-xl items-center justify-center"> --}}
    {{--                                    {{ $paquete['duracion'] }} {{__('message.pack_par4')}} --}}
    {{--                                </div> --}}
    {{--                                @if ($paquete['is_p_t'] == 1) --}}
    {{--                                    <div class="flex-1 border bg-white p-3 flex items-center"> --}}
    {{--                                        @foreach ($paquete['precio_paquetes'] as $precio) --}}
    {{--                                            @if ($precio['estrellas'] == 2) --}}
    {{--                                                @if ($precio['precio_d'] > 0) --}}
    {{--                                                    <div class="text-xl font-semibold text-gray-600"> --}}
    {{--                                                        <span> {{__('message.pack_par5')}} </span> --}}
    {{--                                                        <span>${{$precio['precio_d']}}</span> --}}
    {{--                                                        <span class="text-xs"> usd</span> --}}
    {{--                                                    </div> --}}
    {{--                                                @else --}}
    {{--                                                    <span class="text-red-500 font-bold">{{__('message.button_inquire')}}</span> --}}
    {{--                                                @endif --}}
    {{--                                            @endif --}}
    {{--                                        @endforeach --}}
    {{--                                    </div> --}}
    {{--                                @else --}}
    {{--                                    <div class="flex-1 border bg-white p-3 flex items-center text-center"> --}}
    {{--                                        @if ($paquete['precio_tours']) --}}
    {{--                                            <div class="text-xl font-semibold text-gray-600"> --}}
    {{--                                                                                                <span> {{__('message.pack_par5')}} </span> --}}
    {{--                                                <span>${{$paquete['precio_tours']}}</span> --}}
    {{--                                                <span class="text-xs"> usd</span> --}}
    {{--                                            </div> --}}
    {{--                                        @else --}}
    {{--                                            <span class="text-red-500 font-bold">{{__('message.button_inquire')}}</span> --}}
    {{--                                        @endif --}}

    {{--                                    </div> --}}
    {{--                                @endif --}}
    {{--                            </div> --}}
    {{--                            <div class="p-6 bg-white border"> --}}
    {{--                                <h2 class="text-2xl font-bold text-gray-600"> {{$paquete['titulo']}}</h2> --}}
    {{--                                <div class="mt-3 text-sm text-gray-600"> --}}
    {{--                                    @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
    {{--                                        {{$paquete_destino['destinos']['nombre']}} --}}
    {{--                                        @if ($loop->iteration < count($paquete['paquetes_destinos'])) , @else . @endif --}}
    {{--                                    @endforeach --}}
    {{--                                </div> --}}
    {{--                            </div> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}

    {{--                </div> --}}
    {{--            </div> --}}

    {{--        </section> --}}


    <section class="container" x-data="{ openTab: 1 }">
        {{--            <div class=" mt-6 " > --}}
        {{--                <ul class="grid  md:grid-cols-5 gap-3"> --}}
        {{--                    <li @click="openTab = 1" class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3" :class="openTab == 1 ? 'bg-primary text-white' : 'bg-white hover:text-primary'"> --}}
        {{--                        <div class=" ">Overview</div> --}}
        {{--                    </li> --}}
        {{--                    <li @click="openTab = 2" class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3" :class="openTab == 2 ? 'bg-primary text-white' : 'bg-white hover:text-primary'"> --}}
        {{--                        <div class="">Full Itinerary</div> --}}
        {{--                    </li> --}}
        {{--                    <li> --}}
        {{--                        <a href="#prices" class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3" :class="openTab == 3 ? 'bg-primary text-white' : 'bg-white hover:text-primary'">Price</a> --}}
        {{--                    </li> --}}
        {{--                    <li> --}}
        {{--                        <a href="#hotels"  class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3">Hotels</a> --}}
        {{--                    </li> --}}
        {{--                    <li> --}}
        {{--                        <a href="#reviews" class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3">Reviews</a> --}}
        {{--                    </li> --}}
        {{--                </ul> --}}
        {{--            </div> --}}

        <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="col-span-2 order-2 md:order-1">
                <div class="my-6 shadow-lg">

                    <div class="px-4 py-3 flex rounded-t-lg dark:bg-gray-900">
                        <img src="https://source.unsplash.com/50x50/?portrait?2" alt=""
                            class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-gray-500 mr-5">
                        <p class="relative py-1 italic text-center dark:text-gray-100 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                class="absolute left-0-0 top-0 w-8 h-8 dark:text-violet-400">
                                <path d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z"></path>
                                <path d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                            </svg>
                            @foreach ($testinomials_r as $testinomial)
                                <span class="px-9 block">{{ Str::limit($testinomial->contenido, 150) }} <span
                                        class="text-right font-bold text-sm text-secondary">{{ $testinomial->nombre }} /
                                        {{ $testinomial->ciudad }}</span></span>
                            @endforeach

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                class="absolute right-0 bottom-0 w-8 h-8 dark:text-violet-400">
                                <path d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z"></path>
                                <path d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                            </svg>
                        </p>
                    </div>
                </div>

                <div x-show="openTab === 1" x-transition:enter="transition duration-500 transform ease-in"
                    x-transition:enter-start="opacity-0">
                    <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 dark:text-gray-400">
                        <div class="">
                            {{--                                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
                            {{--                                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
                            <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                        </div> {{ __('message.pack_deta_par1') }}
                    </div>
                    <div class="mb-6">
                        {!! $paquete['descripcion'] !!}
                    </div>

                    {{--                        <div class="flex items-center text-lg text-gray-700 font-bold gap-2 mt-6"> --}}
                    {{--                            <div class="c"> --}}
                    {{--                                --}}{{--                        <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
                    {{--                                --}}{{--                        <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
                    {{--                                <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
                    {{--                            </div> {{__('message.pack_deta_par2')}} --}}
                    {{--                        </div> --}}

                    {{--                        <div class="grid grid-cols-1 md:grid-cols-1 my-6"> --}}

                    {{--                                @php $i = 1; @endphp --}}

                    {{--                                <div class="grid grid-cols-3 place-content-between md:gap-3"> --}}
                    {{--                                    @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
                    {{--                                        @foreach ($paquete_destino['destinos']['destino_imagen'] as $destino_imagen) --}}
                    {{--                                            <div class="flex items-center @if (count($paquete['paquetes_destinos']) % 2 != 0 and $i == 1) col-span-2 @endif"> --}}
                    {{--                                                <img src="{{$destino_imagen['nombre']}}" alt="" class="rounded-full h-10 w-10 "> --}}
                    {{--                                                <div class=" inset-x-0 bottom-0 text-sm tracking-wide text- p-2 font-medium"> --}}
                    {{--                                                    {{$paquete_destino['destinos']['nombre']}} --}}
                    {{--                                                </div> --}}
                    {{--                                            </div> --}}
                    {{--                                            @php $i++ @endphp --}}
                    {{--                                        @endforeach --}}
                    {{--                                    @endforeach --}}
                    {{--                                </div> --}}

                    {{--                        </div> --}}


                    {{--                    <img src="{{$paquete['mapa']}}" alt="" class="w-full mt-2 mb-12"> --}}
                    <div class="">
                        <a class="venobox" data-gall="myGallery" href="{{ $paquete['mapa'] }}"><img
                                src="{{ $paquete['mapa'] }}" /></a>
                    </div>

                    <div x-transition:enter="transition  duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">

                        <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 dark:text-gray-400">
                            <div class="">

                                <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                            </div> {{ __('message.pack_deta_par3') }}
                        </div>

                        <div class="grid divide-y" x-data="{ selected: 1 }">

                            @foreach ($paquete->paquete_itinerario as $section)
                                <div class="flex contents gap-4 cursor-pointer"
                                    @click="selected !== {{ $loop->iteration }} ? selected = {{ $loop->iteration }} : selected = null">
                                    <div class="relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full w-0.5 bg-gray-600 pointer-events-none"></div>
                                        </div>
                                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full  shadow text-center"
                                            :class="selected !== {{ $loop->iteration }} ? 'bg-gray-500' : 'bg-secondary'">

                                            <div :class="selected !== {{ $loop->iteration }} ? 'hidden' : ''">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 stroke-white"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" col-start-2 col-end-12 p-4 my-4 mr-auto w-full">
                                        <h3 class="font-semibold text-sm">Day {{ $loop->iteration }}:</span>
                                            {{ ucfirst(strtolower($section->itinerarios->titulo)) }}</h3>

                                        <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                            style="" x-ref="container{{ $loop->iteration }}"
                                            x-bind:style="selected == {{ $loop->iteration }} ? 'max-height: ' + $refs
                                                .container{{ $loop->iteration }}.scrollHeight + 'px' : ''">
                                            @foreach ($section->itinerarios->itinerario_imagen as $imagen)
                                                <img src="{{ $imagen->nombre }}" alt="{{ $imagen->alt }}"
                                                    class="w-full my-3">
                                            @endforeach
                                            <div class="text-sm">
                                                {!! $section->itinerarios->descripcion !!}
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endforeach

                        </div>





                        {{--                            <div class="grid"> --}}
                        {{--                                <div class="col-span-4 md:col-span-4"> --}}

                        {{--                                    @foreach ($paquete->paquete_itinerario as $section) --}}

                        {{--                                        <article class="mb-4" --}}
                        {{--                                                 @if ($loop->first) --}}
                        {{--                                                 x-data="{ open: true }" --}}
                        {{--                                                 @else --}}
                        {{--                                                 x-data="{ open: false }" --}}
                        {{--                                            @endif --}}
                        {{--                                        > --}}
                        {{--                                            <header class="border border-gray-200 px-4 py-2 flex justify-between cursor-pointer bg-gray-100" x-on:click="open = !open"> --}}
                        {{--                                                <h1 class="font-semibold text-sm text-gray-600 "><span class="capitalize">Day {{$loop->iteration}}:</span> {{ucfirst(strtolower($section->itinerarios->titulo))}}</h1> --}}

                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /> --}}
                        {{--                                                </svg> --}}
                        {{--                                            </header> --}}
                        {{--                                            <div class="bg-white py-2 px-4 border mt-1" x-show="open" x-transition> --}}
                        {{--                                                @foreach ($section->itinerarios->itinerario_imagen as $imagen) --}}
                        {{--                                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{$imagen->nombre}}"><img src="{{$imagen->nombre}}" alt="{{$imagen->alt}}" class="w-100" loading="lazy"></a> --}}
                        {{--                                                @endforeach --}}
                        {{--                                                <div class="grid grid-cols-1 gap-2 text-sm"> --}}
                        {{--                                                    {!! $section->itinerarios->descripcion !!} --}}
                        {{--                                                </div> --}}
                        {{--                                            </div> --}}
                        {{--                                        </article> --}}
                        {{--                                    @endforeach --}}



                        {{--                                </div> --}}

                        {{--                            </div> --}}
                    </div>

                </div>



                {{--                    <div x-show="openTab === 2" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0"> --}}
                {{--                        <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 dark:text-gray-400"> --}}
                {{--                            <div class=""> --}}
                {{--                                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
                {{--                                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
                {{--                                <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
                {{--                            </div> {{__('message.pack_deta_par3')}} --}}
                {{--                        </div> --}}

                {{--                        <div class="grid"> --}}
                {{--                            <div class="col-span-4 md:col-span-4"> --}}

                {{--                                @foreach ($paquete->paquete_itinerario as $section) --}}

                {{--                                    <article class="mb-4" --}}
                {{--                                             @if ($loop->first) --}}
                {{--                                             x-data="{ open: true }" --}}
                {{--                                             @else --}}
                {{--                                             x-data="{ open: false }" --}}
                {{--                                        @endif --}}
                {{--                                    > --}}
                {{--                                        <header class="border border-gray-200 px-4 py-2 flex justify-between cursor-pointer bg-gray-100" x-on:click="open = !open"> --}}
                {{--                                            <h1 class="font-semibold text-sm text-gray-600 "><span class="capitalize">Day {{$loop->iteration}}:</span> {{ucfirst(strtolower($section->itinerarios->titulo))}}</h1> --}}

                {{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
                {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /> --}}
                {{--                                            </svg> --}}
                {{--                                        </header> --}}
                {{--                                        <div class="bg-white py-2 px-4 border mt-1" x-show="open" x-transition> --}}
                {{--                                            <div class="grid grid-cols-1 gap-2 text-sm"> --}}
                {{--                                                {!! $section->itinerarios->descripcion !!} --}}
                {{--                                            </div> --}}
                {{--                                        </div> --}}
                {{--                                    </article> --}}
                {{--                                @endforeach --}}



                {{--                            </div> --}}

                {{--                        </div> --}}
                {{--                    </div> --}}






            </div>

            <div class="flex flex-col gap-3 order-1 md:order-2">
                <div class="flex flex-col gap-3">

                    <div class="flex gap-3 ">
                        {{--                                                    <div class="flex-1 border p-3 flex bg-white text-xl items-center justify-center"> --}}
                        {{--                                                        {{ $paquete['duracion'] }} {{__('message.pack_par4')}} --}}
                        {{--                                                    </div> --}}
                        @if ($paquete['is_p_t'] == 1)
                            <div class="flex-1 border bg-white p-3 flex items-center">
                                @foreach ($paquete['precio_paquetes'] as $precio)
                                    @if ($precio['estrellas'] == 3)
                                        <div class="text-4xl font-semibold text-gray-600">
                                            {{--                                                                            <span> {{__('message.pack_par5')}} </span> --}}
                                            <span class="text-base block">{{ $paquete['duracion'] }}
                                                {{ __('message.pack_par4') }}</span>
                                            <h2 class="text-2xl font-bold text-gray-600"> {{ $paquete['titulo'] }}</h2>
                                            <div class="flex -space-x-1 overflow-hidden">
                                                @foreach ($teams->take(6) as $team)
                                                    @if ($team->imagen_perfil)
                                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                            src="{{ $team->imagen_perfil }}" alt="{{ $team->nombre }}">
                                                    @endif
                                                @endforeach
                                            </div>
                                            <p class="text-sm font-normal mt-2">Get a travel expert to plan your dream
                                                vacation</p>
                                            @if ($precio['precio_d'] > 0)
                                                <p class="text-xs font-light mt-2">Price p.p. from</p>
                                                <span>${{ $precio['precio_d'] }}</span>
                                                <span class="text-sm"> usd</span>
                                            @else
                                                <span class="text-red-500 text-sm font-bold">Price:
                                                    {{ __('message.button_inquire') }}</span>
                                            @endif
                                            <span class="block text-red-500 mt-3 text-xs font-normal">See book With
                                                Confidence terms</span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <div class="flex-1 border bg-white p-3 flex items-center">
                                @if ($paquete['precio_tours'])
                                    <div class="text-4xl font-semibold text-gray-600">
                                        {{--                                                                            <span> {{__('message.pack_par5')}} </span> --}}
                                        <span class="text-base block">{{ $paquete['duracion'] }}
                                            {{ __('message.pack_par4') }}</span>
                                        <p class="text-xs font-light mt-3">Price p.p. from</p>
                                        <span>${{ $paquete['precio_tours'] }}</span>
                                        <span class="text-sm"> usd</span>
                                        <span class="block text-red-500 mt-3 text-xs font-normal">See book With Confidence
                                            terms</span>
                                    </div>

                                    {{--                                        <div class="text-xl font-semibold text-gray-600"> --}}
                                    {{--                                            <span> {{__('message.pack_par5')}} </span> --}}
                                    {{--                                            <span>${{$paquete['precio_tours']}}</span> --}}
                                    {{--                                            <span class="text-xs"> usd</span> --}}
                                    {{--                                        </div> --}}
                                @else
                                    <span class="text-red-500 font-bold">{{ __('message.button_inquire') }}</span>
                                @endif

                            </div>
                        @endif
                    </div>

                    <div class="flex">
                        <a href="#form-dream-adventure" class="btn-secondary font-bold text-center w-full">Get a Quote</a>
                        @if ($paquete['codigo_f'])
                            <button class="wtrvl-checkout_button btn-primary w-full" id="wetravel_button_widget"
                                data-env="https://www.wetravel.com" data-version="v0.2" data-uid="239346"
                                data-uuid="{{ $paquete['codigo_f'] }}"
                                href="https://www.wetravel.com/checkout_embed?uuid={{ $paquete['codigo_f'] }}">Book</button>
                        @endif
                    </div>

                    <div class="border my-3 bg-gray-600 text-white p-3 text-xs">
                        <p class="text-white">Contact our travel advisor to use this itinerary (or others) as a base to
                            design together your perfect peruvian adventure!</p>
                        <p class="mt-2"><span class="text-secondary font-bold">For Example:</span> add one day / reduce
                            the program lenght / upgrades hotels / add all meals / upgrade to private tours</p>
                    </div>

                    <div class="border">
                        <div class="bg-blue-100 font-medium p-3">
                            Availability
                        </div>
                        <div class="px-3 text-xs divide-y grid grid-cols-1 divide-slate-200">
                            <div class="grid grid-cols-2 py-2 items-center">
                                <div class="">
                                    Departures Available
                                </div>
                                <div class="text-right font-medium">
                                    Until December 2026
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-2 items-center">

                                <div class="border p-1 text-center">
                                    Group Tours
                                </div>

                                <div class="text-right font-medium">
                                    Available
                                </div>

                            </div>


                            <div class="grid grid-cols-2 py-2 items-center">

                                <div
                                    class="border border-fuchsia-500 text-fuchsia-500 p-1 text-center flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                    Private Tours
                                </div>

                                <div class="text-right font-medium">
                                    Available
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-2 items-center">

                                <div
                                    class="border border-cyan-500 text-cyan-500 p-1 text-center flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg> Solo Travelers
                                </div>

                                <div class="text-right font-medium">
                                    @foreach ($paquete['precio_paquetes'] as $precio)
                                        @if ($precio['estrellas'] == 3)
                                            @if ($precio['precio_s'] > 0)
                                                <div class="text-4xl font-semibold text-gray-600">
                                                    {{--                                                                            <span> {{__('message.pack_par5')}} </span> --}}
                                                    From${{ $precio['precio_d'] }}usd
                                                </div>
                                            @else
                                                <span
                                                    class="text-red-500 font-bold">{{ __('message.button_inquire') }}</span>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 my-3 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="rounded-full bg-secondary p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="leading-none">
                                <span class="text-xs block">Travel Style</span>
                                <span class="text-sm font-medium">ESCORTED TOURS</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="rounded-full bg-gray-400 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none"
                                    viewBox="0 0 24 24" stroke="stroke-amber-400" stroke-width="1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="leading-none">
                                <span class="text-xs block">Season</span>
                                <span class="text-sm font-medium">JAN - DEC</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="rounded-full bg-gray-900 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div class="leading-none">
                                <span class="text-xs block">Interest</span>
                                <span class="text-sm font-medium">Culture, history, Adventure</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="rounded-full bg-primary p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                </svg>
                            </div>
                            <div class="leading-none">
                                <span class="text-xs block">Departure</span>
                                <span class="text-sm font-medium">Daily</span>
                            </div>
                        </div>






                    </div>

                    <div class="block">
                        <div id="TA_cdsratingsonlynarrow522" class="TA_cdsratingsonlynarrow w-full">
                            <ul id="8CdJuXhFL" class="TA_links ZrzN0Ffd">
                                <li id="7JQHh6DaTf" class="SOH6nHQUMt"><a target="_blank"
                                        href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html"><img
                                            src="https://www.tripadvisor.com.pe/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg"
                                            class="mx-auto" alt="TripAdvisor" /></a></li>
                            </ul>
                        </div>
                        <script async
                            src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=522&amp;locationId=15202262&amp;lang=es_PE&amp;border=true&amp;display_version=2"
                            data-loadtrk onload="this.loadtrk=true"></script>
                    </div>

                    {{--                            <div class="flex gap-3"> --}}
                    {{--                                <div class="flex-1 border p-3 flex text-xl items-center justify-center"> --}}
                    {{--                                    @foreach ($paquete['paquetes_categoria'] as $category_p) --}}
                    {{--                                        <div class="text-xl font-semibold text-gray-600"> --}}
                    {{--                                            <span class="text-xs">Travel Style</span> --}}
                    {{--                                            <span class="block text-base">   {{ucwords(strtolower($category_p['categoria']['nombre']))}}</span> --}}
                    {{--                                        </div> --}}

                    {{--                                    @endforeach --}}
                    {{--                                </div> --}}

                    {{--                                <div class="flex-1 border py-2 px-3 flex items-center"> --}}

                    {{--                                        <div class="text-xl font-semibold text-gray-600"> --}}
                    {{--                                            <span class="text-xs">Physical Rating</span> --}}
                    {{--                                            @foreach ($paquete['paquetes_dificultad'] as $dificultad) --}}
                    {{--                                            <span class="block text-base">   {{ucwords(strtolower($dificultad['dificultad']['nombre']))}}</span> --}}
                    {{--                                            @endforeach --}}
                    {{--                                        </div> --}}


                    {{--                                </div> --}}
                    {{--                            </div> --}}

                    {{--                            <div class="flex gap-3"> --}}
                    {{--                                <div class="flex-1 border p-3 flex text-xl items-center justify-center"> --}}

                    {{--                                    <div class="text-xl font-semibold text-gray-600"> --}}
                    {{--                                        <span class="text-xs">Group Size</span> --}}
                    {{--                                        <span class="block text-base">{{$paquete['group_size']}}</span> --}}
                    {{--                                    </div> --}}


                    {{--                                </div> --}}

                    {{--                                <a href="#reviews" class="flex-1 border py-2 px-3 flex items-center"> --}}


                    {{--                                        <div class="text-xl font-semibold text-gray-600"> --}}
                    {{--                                            <span class="text-xs">Reviews</span> --}}
                    {{--                                            --}}{{--                                    <span class="block text-base"></span> --}}
                    {{--                                        </div> --}}

                    {{--                                </a> --}}
                    {{--                            </div> --}}







                    {{--                        <img src="{{$paquete['mapa']}}" alt="" class="w-full mt-2"> --}}
                </div>



            </div>
        </section>

        {{--            <section> --}}
        {{--                @if ($paquete['is_p_t'] == 1) --}}
        {{--                    <section class="my-12 flex flex-col gap-4" id="prices"> --}}

        {{--                        <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 dark:text-gray-400"> --}}
        {{--                            <div class=""> --}}
        {{--                                --}}{{--                                    <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
        {{--                                --}}{{--                                    <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
        {{--                                <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
        {{--                            </div> {{__('message.pack_deta_par4')}} --}}
        {{--                        </div> --}}


        {{--                            <div class="grid md:grid-cols-2 gap-4"> --}}
        {{--                                <div class="overflow-x-scroll"> --}}
        {{--                                    <p class="font-semibold text-secondary text-center">{{__('message.pack_deta_par5')}}</p> --}}
        {{--                                <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-scroll"> --}}
        {{--                                    <thead class="bg-secondary dark:text-white"> --}}
        {{--                                    <tr> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par9')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par10')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par11')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par12')}} --}}
        {{--                                        </th> --}}
        {{--                                    </tr> --}}
        {{--                                    </thead> --}}
        {{--                                    <tbody class="bg-secondary bg-opacity-10 divide-y divide-gray-200"> --}}
        {{--                                    <tr> --}}

        {{--                                        @foreach ($paquete['precio_paquetes'] as $precio) --}}
        {{--                                            @if ($precio['precio_s'] > 0) --}}
        {{--                                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-800 dark:text-white">${{$precio['precio_s']}}<small>USD</small></td> --}}
        {{--                                            @else --}}
        {{--                                                <td class="px-6 py-4 whitespace-nowrap font-medium text-red-500">{{__('message.button_inquire')}}</td> --}}
        {{--                                            @endif --}}
        {{--                                        @endforeach --}}

        {{--                                    </tr> --}}

        {{--                                    <!-- More people... --> --}}
        {{--                                    </tbody> --}}
        {{--                                </table> --}}
        {{--                                </div> --}}
        {{--                                <div class="overflow-x-scroll"> --}}
        {{--                                    <p class="font-semibold text-primary text-center">Prices are based on double occupancy.</p> --}}
        {{--                                <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-scroll"> --}}
        {{--                                    <thead class="bg-primary text-white"> --}}
        {{--                                    <tr> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par9')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par10')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par11')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par12')}} --}}
        {{--                                        </th> --}}
        {{--                                    </tr> --}}
        {{--                                    </thead> --}}
        {{--                                    <tbody class="bg-primary bg-opacity-10 divide-y divide-gray-200"> --}}

        {{--                                    <tr> --}}

        {{--                                        @foreach ($paquete['precio_paquetes'] as $precio) --}}
        {{--                                            @if ($precio['precio_d'] > 0) --}}
        {{--                                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-800 dark:text-white">${{$precio['precio_d']}}<small>USD</small></td> --}}
        {{--                                            @else --}}
        {{--                                                <td class="px-6 py-4 whitespace-nowrap font-medium text-red-500">{{__('message.button_inquire')}}</td> --}}
        {{--                                            @endif --}}
        {{--                                        @endforeach --}}

        {{--                                    </tr> --}}


        {{--                                    <!-- More people... --> --}}
        {{--                                    </tbody> --}}
        {{--                                </table> --}}
        {{--                                </div> --}}

        {{--                            </div> --}}
        {{--                        <div class="grid md:grid-cols-2 gap-4 md:mt-5"> --}}
        {{--                            <div class="overflow-x-scroll"> --}}
        {{--                                <p class="font-semibold text-gray-500 text-center">Prices are based on triple occupancy.</p> --}}
        {{--                                <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-scroll"> --}}
        {{--                                    <thead class="bg-gray-700 text-white"> --}}
        {{--                                    <tr> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par9')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par10')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par11')}} --}}
        {{--                                        </th> --}}
        {{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold uppercase tracking-wider"> --}}
        {{--                                            {{__('message.pack_deta_par12')}} --}}
        {{--                                        </th> --}}
        {{--                                    </tr> --}}
        {{--                                    </thead> --}}
        {{--                                    <tbody class="bg-gray-50 divide-y divide-gray-200"> --}}

        {{--                                    <tr> --}}

        {{--                                        @foreach ($paquete['precio_paquetes'] as $precio) --}}
        {{--                                            @if ($precio['precio_t'] > 0) --}}
        {{--                                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-800">${{$precio['precio_t']}}<small>USD</small></td> --}}
        {{--                                            @else --}}
        {{--                                                <td class="px-6 py-4 whitespace-nowrap font-medium text-red-500">{{__('message.button_inquire')}}</td> --}}
        {{--                                            @endif --}}
        {{--                                        @endforeach --}}

        {{--                                    </tr> --}}

        {{--                                    <!-- More people... --> --}}
        {{--                                    </tbody> --}}
        {{--                                </table> --}}
        {{--                            </div> --}}
        {{--                        </div> --}}



        {{--                            <p class="text-sm text-gray-500">{{__('message.pack_deta_par6')}}</p> --}}


        {{--                    </section> --}}
        {{--                @endif --}}
        {{--            </section> --}}

    </section>


    <section class="container my-12 ">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-2 col-span-4">
                <div class="grid grid-cols-3 md:grid-cols-8 content-center text-center">
                    <div class="">
                        <img src="{{ asset('images/include/assistances.png') }}" alt="{{ __('message.serv_item2') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item2') }}</p>
                    </div>
                    <div class="">
                        <img src="{{ asset('images/include/breakfast.png') }}" alt="{{ __('message.serv_item3') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item3') }}</p>
                    </div>
                    <div class="">
                        <img src="{{ asset('images/include/entrances.png') }}" alt="{{ __('message.serv_item4') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item4') }}</p>
                    </div>

                    <div class="">
                        <img src="{{ asset('images/include/hotels.png') }}" alt="{{ __('message.serv_item6') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item6') }}</p>
                    </div>
                    <div class="">
                        <img src="{{ asset('images/include/tours.png') }}" alt="{{ __('message.serv_item7') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item7') }}</p>
                    </div>
                    <div class="">
                        <img src="{{ asset('images/include/trains.png') }}" alt="{{ __('message.serv_item8') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item8') }}</p>
                    </div>
                    <div class="">
                        <img src="{{ asset('images/include/transfers.png') }}" alt="{{ __('message.serv_item9') }}"
                            class="object-contain px-4 text-center">
                        <p class="text-xs">{{ __('message.serv_item9') }}</p>
                    </div>

                    <div class="">
                        <img src="{{ asset('images/include/flight.png') }}" alt="{{ __('message.serv_item5') }}"
                            class="object-contain px-4 grayscale text-center">
                        <p class="text-xs">{{ __('message.serv_item5') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary bg-opacity-60 mt-12 py-12">
        <div class="container text-center grid  grid-cols-1 md:grid-cols-2 gap-6">
            <div class="text-center">

                <div class="flex mb-3 items-center text-center justify-center text-lg text-gray-700 font-bold gap-2">
                    <div class="text-center">
                        {{--                                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
                        {{--                                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
                        {{--                        <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
                    </div> {{ __('message.pack_deta_par7') }}
                </div>
                <div class="dark:text-white">
                    {!! $paquete['incluye'] !!}
                </div>

            </div>

            <section class="text-center">
                <div class="flex mb-3 items-center justify-center text-lg text-gray-700 font-bold gap-2">
                    <div class="">
                        {{--                                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
                        {{--                                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
                        {{--                        <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
                    </div> {{ __('message.pack_deta_par8') }}
                </div>
                <div class="dark:text-white">
                    {!! $paquete['noincluye'] !!}
                </div>
            </section>
        </div>
    </section>

    {{--    <section class="container" x-data="{ openDes: 1 }" id="hotels"> --}}
    {{--        <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 dark:text-gray-400"> --}}
    {{--            <div class=""> --}}
    {{--                --}}{{--                                    <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
    {{--                --}}{{--                                    <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
    {{--                <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
    {{--            </div> Recommended Hotels --}}
    {{--        </div> --}}
    {{--        <div class=" mt-6 "> --}}
    {{--            <ul class="flex flex-nowrap overflow-x-scroll gap-3"> --}}
    {{--                @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
    {{--                    --}}{{--                            {{$loop->iteration}} --}}

    {{--                    <li @click="openDes = {{$loop->iteration}}" class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3" :class="openDes == {{$loop->iteration}} ? 'bg-primary text-white' : 'bg-white hover:text-primary'"> --}}
    {{--                        <div class="">{{$paquete_destino['destinos']['nombre']}}</div> --}}
    {{--                    </li> --}}
    {{--                    --}}{{--                        <li @click="openDes = 2" class="inline-block border py-2 px-4 font-medium w-full cursor-pointer text-center transition duration-300 py-3" :class="openDes == 2 ? 'bg-primary text-white' : 'bg-white hover:text-primary'"> --}}
    {{--                    --}}{{--                            <div class="">Full Itinerary</div> --}}
    {{--                    --}}{{--                        </li> --}}
    {{--                @endforeach --}}
    {{--            </ul> --}}
    {{--        </div> --}}

    {{--        <section class="mt-6 grid grid-cols-1  gap-4"> --}}
    {{--            <div class="col-span-2 order-2 md:order-1"> --}}
    {{--                @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
    {{--                    <div x-show="openDes === {{$loop->iteration}}" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0"> --}}
    {{--                        --}}{{--                            <div class="">{{$paquete_destino['destinos']['nombre']}}</div> --}}
    {{--                        <div class="grid grid-cols-1"> --}}
    {{--                            @foreach ($hoteles_destinos->where('iddestinos', $paquete_destino->destinos->id)->take(3) as $hoteles_destino) --}}
    {{--                                <div class="grid grid-cols-3 gap-4 mb-4 border"> --}}
    {{--                                    <div class="col-span-3 md:col-span-1"> --}}
    {{--                                        --}}{{--                @if ($hotel->imagen) --}}
    {{--                                        --}}{{--                    <img src="{{$hotel->imagen}}" alt="{{$hotel->nombre}}" class="object-cover w-full h-full"> --}}
    {{--                                        --}}{{--                @else --}}
    {{--                                        <img src="{{$hoteles_destino->hotel->imagen}}" alt="" class="object-cover w-full h-full"> --}}
    {{--                                        --}}{{--                @endif --}}

    {{--                                    </div> --}}
    {{--                                    <div class="col-span-3 md:col-span-2 p-6"> --}}
    {{--                                        <h3 class="font-bold text-gray-500">{{$hoteles_destino->hotel->nombre}}</h3> --}}
    {{--                                        <div class="flex"> --}}
    {{--                                            @for ($i = 0; $i < $hoteles_destino->hotel->estrellas; $i++) --}}
    {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor"> --}}
    {{--                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /> --}}
    {{--                                                </svg> --}}
    {{--                                            @endfor --}}
    {{--                                        </div> --}}
    {{--                                        <div class="pt-2 flex text-sm mb-6"> --}}
    {{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /> --}}
    {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /> --}}
    {{--                                            </svg> --}}
    {{--                                            <p class="ml-2">{{$hoteles_destino->hotel->direccion}}</p> --}}
    {{--                                        </div> --}}

    {{--                                        <div class="text-sm"> --}}
    {{--                                            <p>{!! $hoteles_destino->hotel->descripcion !!}</p> --}}
    {{--                                        </div> --}}

    {{--                                        @php $services = explode(',', $hoteles_destino->hotel->servicios); @endphp --}}
    {{--                                        --}}{{--                                            <p class="text-gray-500"><b>{{__('message.hote_subtitle1')}}:</b></p> --}}

    {{--                                        <div class="flex bg-blue-100 p-3 flex-wrap gap-4 mt-3 justify-center relative"> --}}
    {{--                                            @foreach ($services as $service) --}}
    {{--                                                <div class="inline-flex text-sm"> --}}
    {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /> --}}
    {{--                                                    </svg> --}}
    {{--                                                    {{$service}} --}}
    {{--                                                </div> --}}
    {{--                                            @endforeach --}}
    {{--                                        </div> --}}

    {{--                                        <div class="flex mt-6 text-sm"> --}}
    {{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /> --}}
    {{--                                            </svg> --}}
    {{--                                            <a href="{{$hoteles_destino->hotel->url}}" class="btn btn-outline-secondary text-blue-600 ml-2" target="_blank">{{ucfirst(strtolower($hoteles_destino->hotel->nombre))}}</a> --}}
    {{--                                        </div> --}}
    {{--                                    </div> --}}
    {{--                                </div> --}}
    {{--                            @endforeach --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                @endforeach --}}
    {{--            </div> --}}
    {{--        </section> --}}

    {{--        <section class="my-12 text-center"> --}}
    {{--            <a href="{{route('hotels')}}" class="btn btn-primary">View more hotels</a> --}}
    {{--        </section> --}}
    {{--    </section> --}}

    {{--        <div class="container mt-12 hidden mb-3"> --}}
    {{--            <div class="flex items-center text-lg text-gray-700 font-bold gap-2"> --}}
    {{--                <div class="c"> --}}
    {{--                    <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
    {{--                    <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
    {{--                    <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
    {{--                </div> Destinations --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--        <section class="flex flex-col hidden gap-4"> --}}

    {{--            <div class="grid grid-cols-1 md:grid-cols-6 md:gap-3"> --}}
    {{--                <div class="col-span-4 md:col-span-4 flex md:gap-3"> --}}
    {{--                    --}}{{--                    <div class="flex-shrink"> --}}

    {{--                    --}}{{--                    </div> --}}
    {{--                    @php $i = 1; @endphp --}}
    {{--                    <div class="grid grid-cols-2 place-content-between md:gap-3"> --}}
    {{--                        @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
    {{--                            @foreach ($paquete_destino['destinos']['destino_imagen'] as $destino_imagen) --}}
    {{--                                <div class="relative @if (count($paquete['paquetes_destinos']) % 2 != 0 and $i == 1) col-span-2 @endif"> --}}
    {{--                                    <img src="{{$destino_imagen['nombre']}}" alt="" class="@if (count($paquete['paquetes_destinos']) % 2 != 0 and $i == 1) object-cover h-80 object-bottom w-full @endif"> --}}
    {{--                                    <div class="absolute inset-x-0 bottom-0 text-sm tracking-wide text-white p-2 font-medium"> --}}
    {{--                                        {{$paquete_destino['destinos']['nombre']}} --}}
    {{--                                    </div> --}}
    {{--                                </div> --}}
    {{--                                @php $i++ @endphp --}}
    {{--                            @endforeach --}}
    {{--                        @endforeach --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-span-2 md:col-span-2 bg-primary flex items-center bg-opacity-30 p-6"> --}}
    {{--                    <div class=""> --}}
    {{--                        @foreach ($paquete['paquetes_destinos'] as $paquete_destino) --}}
    {{--                            <h3 class="font-semibold mt-3">{{$paquete_destino['destinos']['nombre']}}</h3> --}}
    {{--                            <div class="text-sm"> --}}
    {{--                                {!! $paquete_destino['destinos']['resumen'] !!} --}}
    {{--                            </div> --}}
    {{--                        @endforeach --}}
    {{--                    </div> --}}

    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </section> --}}

    {{--    <section class="container hidden md:block mt-4" id="reviews"> --}}

    {{--        <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 dark:text-gray-400"> --}}
    {{--            <span class="inline-block w-5 h-2.5 bg-secondary"></span> {{__('message.subtitle5')}} --}}
    {{--        </div> --}}
    {{--        <div class="grid grid-cols-1 md:grid-cols-5 gap-4"> --}}
    {{--            <div class="col-span-2 flex gap-4 flex-wrap content-between overflow-hidden"> --}}
    {{--                <div class="w-full"> --}}
    {{--                    <div class="grid grid-cols-2 w-full items-center text-center text-gray-700 dark:text-gray-300 gap-2"> --}}
    {{--                        <div class="border p-4 w-full"> --}}
    {{--                            <p class="block text-4xl font-bold">97%</p> --}}
    {{--                            <p class="text-xs">{{__('message.social_con1')}}</p> --}}
    {{--                        </div> --}}
    {{--                        <div class="border p-4 w-full"> --}}
    {{--                            <p class="block text-3xl font-bold">9000 +</p> --}}
    {{--                            <p class="text-xs">{{__('message.social_con2')}}</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="relative"> --}}
    {{--                    --}}{{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})"> --}}
    {{--                    --}}{{--                <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105"> --}}
    {{--                    <div class="flex items-center justify-center"> --}}
    {{--                        <div class="border bg-white p-6 dark:bg-gray-800 text-gray-800 dark:text-gray-300"> --}}
    {{--                            <p class="mb-2 flex inline-flex"> --}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /> --}}
    {{--                                </svg> --}}
    {{--                                {{__('message.social_li1')}} --}}
    {{--                            </p> --}}
    {{--                            <p class="mb-2 flex inline-flex"> --}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /> --}}
    {{--                                </svg> --}}
    {{--                                {{__('message.social_li2')}} --}}
    {{--                            </p> --}}
    {{--                            <p class="mb-2 flex inline-flex"> --}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /> --}}
    {{--                                </svg> --}}
    {{--                                {{__('message.social_li3')}} --}}
    {{--                            </p> --}}
    {{--                            <p class="mb-2 flex inline-flex"> --}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /> --}}
    {{--                                </svg> --}}
    {{--                                {{__('message.social_li4')}} --}}
    {{--                            </p> --}}
    {{--                            <p class="mb-2 flex inline-flex"> --}}
    {{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /> --}}
    {{--                                </svg> --}}
    {{--                                {{__('message.social_li5')}} --}}
    {{--                            </p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="flex inline-flex items-center text-2xl text-gray-700 font-bold gap-3"> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank"><img src="https://gotoperu.com.mx/images/icons/tripadvisor.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a> --}}
    {{--                    </div> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img src="https://gotoperu.com.mx/images/icons/yelp.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a> --}}
    {{--                    </div> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.trustpilot.com/review/gotoperu.com"><img src="https://gotoperu.com.mx/images/icons/trust.png" alt="" class="p-4 dark:filter dark:grayscale dark:invert"></a> --}}
    {{--                    </div> --}}
    {{--                </div> --}}


    {{--            </div> --}}
    {{--            <div class="col-span-3 grid grid-cols-1 items-center relative overflow-hidden bg-center bg-no-repeat bg-cover" style="background-image: url('{{asset('images/banners/redes.jpg')}}')"> --}}
    {{--                --}}{{--            <img src="{{asset('images/hotels-t.jpg')}}" alt="" class="h-full object-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105"> --}}

    {{--                --}}{{--            <div class="absolute flex items-center inset-0 "> --}}
    {{--                <div class="md:mx-16"> --}}
    {{--                    <div class="w-full swiper-container mySwiper"> --}}
    {{--                        <div class="swiper-wrapper"> --}}
    {{--                            @foreach ($testinomials as $testinomial) --}}
    {{--                                <div class="swiper-slide p-12"> --}}
    {{--                                    <div class="my-10 mx-16 w-full mx-auto rounded-lg bg-gray-100 dark:bg-gray-800 shadow-lg px-5 pt-5 pb-10 text-gray-800 dark:text-gray-300"> --}}
    {{--                                        <div class="w-full pt-1 text-center pb-5 -mt-16 mx-auto"> --}}
    {{--                                            <a href="#" class="block relative"> --}}
    {{--                                                <img alt="profil" src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" class="mx-auto object-cover rounded-full h-20 w-20 z-30"/> --}}
    {{--                                            </a> --}}
    {{--                                        </div> --}}
    {{--                                        <div class="w-full mb-6"> --}}
    {{--                                            <div class="text-3xl text-indigo-500 text-left leading-tight h-3"> --}}
    {{--                                                “ --}}
    {{--                                            </div> --}}
    {{--                                            <p class="text-sm text-gray-600 dark:text-gray-100 text-center px-5"> --}}
    {{--                                                {{ Str::limit($testinomial->contenido, 150) }} --}}
    {{--                                            </p> --}}
    {{--                                            <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3"> --}}
    {{--                                                ” --}}
    {{--                                            </div> --}}
    {{--                                        </div> --}}
    {{--                                        <div class="w-full text-center"> --}}
    {{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto cursor-pointer text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"> --}}
    {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /> --}}
    {{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> --}}
    {{--                                            </svg> --}}

    {{--                                            <p class="text-md text-indigo-500 font-bold text-center"> --}}
    {{--                                                {{ $testinomial->nombre }} --}}
    {{--                                            </p> --}}
    {{--                                            <p class="text-xs text-gray-500 dark:text-gray-300 text-center"> --}}
    {{--                                                {{ $testinomial->ciudad }} --}}
    {{--                                            </p> --}}
    {{--                                        </div> --}}
    {{--                                    </div> --}}
    {{--                                </div> --}}
    {{--                            @endforeach --}}
    {{--                        </div> --}}
    {{--                        <div class="swiper-button-next btn-next"></div> --}}
    {{--                        <div class="swiper-button-prev btn-prev"></div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}

    {{--    </section> --}}
    {{--    <section class="container mt-6 mb-12 "> --}}
    {{--        --}}{{--        <div class="flex mb-3 items-center text-2xl text-gray-700 dark:text-primary font-bold gap-2"> --}}
    {{--        --}}{{--            <div class=""> --}}
    {{--        --}}{{--                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span> --}}
    {{--        --}}{{--                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span> --}}
    {{--        --}}{{--                <span class="inline-block w-5 h-2.5 bg-secondary"></span> --}}
    {{--        --}}{{--            </div> Social Media --}}
    {{--        --}}{{--        </div> --}}

    {{--        <div class="grid grid-cols-1 md:grid-cols-5 gap-4"> --}}
    {{--            <div class="col-span-3 grid grid-cols-1 items-center relative bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url({{asset('images/hotels-t.jpg')}})"> --}}
    {{--                <div class="flex relative"> --}}
    {{--                    --}}{{--                    <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div> --}}
    {{--                    <img src="{{asset('images/banners/social.jpg')}}" alt="" class="object-cover h-full w-full"> --}}
    {{--                    <div class="absolute inset-0 gradient-cicle-gray"></div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="col-span-2 flex gap-4 flex-col justify-between content-between overflow-hidden"> --}}
    {{--                <div class=""> --}}
    {{--                    <div class="flex items-center text-center text-gray-700 dark:text-gray-300 gap-2"> --}}
    {{--                        <div class="border p-4 w-1/2"> --}}
    {{--                            <p class="block text-4xl font-bold">30 000</p> --}}
    {{--                            <p class="text-xs">FACEBOOK FANS</p> --}}
    {{--                        </div> --}}
    {{--                        <div class="border p-4 w-1/2"> --}}
    {{--                            <p class="block text-3xl font-bold">#gotoperu</p> --}}
    {{--                            <p class="text-xs">INSTAGRAM HASHTAG</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class=""> --}}
    {{--                    --}}{{--            <div class="bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('images/hotels-t.jpg')}})"> --}}

    {{--                    <div class="bg-gray-500 bg-opacity-10 text-center p-12"> --}}
    {{--                        <img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" alt="" class="mx-auto py-4"> --}}
    {{--                        <h3>{{__('message.revi_subtitle1')}}</h3> --}}
    {{--                        <p>{{__('message.revi_par3')}}</p> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="grid grid-cols-4 items-center text-2xl text-gray-700 font-bold gap-3"> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.instagram.com/go.to.peru/" target="_blank"><img src="{{asset('images/logos/instagram.png')}}" alt="" class="p-6"></a> --}}
    {{--                    </div> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><img src="{{asset('images/logos/facebook.png')}}" alt="" class="p-6"></a> --}}
    {{--                    </div> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank"><img src="{{asset('images/logos/youtube.png')}}" alt="" class="p-6"></a> --}}
    {{--                    </div> --}}
    {{--                    <div class="border"> --}}
    {{--                        <a href="https://www.tiktok.com/@gotoperu" target="_blank"><img src="{{asset('images/logos/tiktok.png')}}" alt="" class="p-6"></a> --}}
    {{--                    </div> --}}
    {{--                </div> --}}


    {{--            </div> --}}
    {{--        </div> --}}

    {{--    </section> --}}



    @livewire('page.form-footer-detail', ['paquete' => $paquete['titulo']], key('paquete' . $paquete['id']))


    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    @push('scripts')
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.wetravel.com/master/core-app/assets/embed_checkout.js"></script>
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
                slidesPerView: 2,
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
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 2,
                    },
                },
            });
        </script>
    @endpush

@endsection
