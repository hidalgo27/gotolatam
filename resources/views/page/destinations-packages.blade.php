@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        {{--        @foreach($destinations->destino_imagen as $imagen)--}}
        <img src="{{$destino->imagen}}" alt="" class="h-full w-full object-cover">
        {{--        @endforeach--}}

        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{$destino->nombre}} Travel Packages</h1>
        </div>
    </section>

    <div class="container">
        <div class="flex md:justify-center w-full gap-3 my-10 overflow-x-scroll focus:touch-pan-x">
            @foreach($destinations->where('idpais', $pais->id) as $des)

                <a href="{{route('destinations.destino.show', [$pais, $des]) }}" class="inline text-center mb-4 gap-3">
                    <img class="inline-block h-20 w-20 rounded-full mx-auto @if($destino->id == $des->id) border-2 shadow border-blue-500 p-0.5 @endif" src="{{$des->imagen}}" alt="" />
                    <span class="block w-24 text-xs">{{$des->nombre}}</span>
                </a>
            @endforeach
        </div>
    </div>

    {{--    <div class="hidden md:inline-block">--}}
    {{--        @livewire('page.form-home')--}}
    {{--    </div>--}}

{{--    <section class="container py-12 text-gray-500 text-center mx-auto">--}}
{{--        <p>{{__('message.dest_deta_par1')}}</p>--}}

{{--    </section>--}}


{{--    <section class="container grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">--}}
{{--        @foreach($destinations as $destination)--}}
{{--            <article class="grid grid-cols-1 place-content-between mb-6 border-r border-l dark:border-gray-700">--}}
{{--                <div class="w-full">--}}
{{--                    <figure class="overflow-hidden relative">--}}
{{--                        <img src="{{$destination->imagen}}" alt="" class="bg-cover h-full w-full">--}}
{{--                        <div class="absolute inset-0 gradient-cicle-gray"></div>--}}
{{--                    </figure>--}}

{{--                    <div class="w-full p-6 mt-4 mb-5 text-center">--}}
{{--                        <div class="">--}}
{{--                            --}}{{--                        <h2 class="">{{ Str::limit($destination->nombre, 40) }}</h2>--}}
{{--                            <h2 class="text-xl font-bold mb-4 text-center text-gray-600 dark:text-gray-300">{{$destination->nombre}}</h2>--}}
{{--                            <p class="text-sm text-gray-500 dark:text-gray-200">{{$destination->resumen}}</p>--}}
{{--                        </div>--}}
{{--                        --}}{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fuga repellat reprehenderit sint vero. Eum maxime minima, nobis numquam optio quasi quidem quo ratione sunt totam vel velit voluptatem voluptatum?--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="w-full">--}}
{{--                    <a href="{{ route('destinations.show', $destination) }}" class="btn-secondary block text-center mt-2">{{__('message.button_all')}}</a>--}}
{{--                    --}}{{--                    <a href="{{route('packages.detail', $paquete['paquetes']['url'])}}" class="btn-secondary">{{__('message.button_detail')}}</a>--}}
{{--                </div>--}}
{{--            </article>--}}

{{--        @endforeach--}}
{{--    </section>--}}


    <section class="container grid mb-12">




            {{--                <a href="{{ route('destinations.show', $paises) }}" class="pais-link mb-2 flex items-center font-semibold h3 @if($paises->id == $pais->id) active @endif">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />--}}
            {{--                    </svg>--}}
            {{--                    {{$paises->nombre}}--}}
            {{--                </a>--}}


            @foreach($destino->where('idpais', $pais->id) as $destinos)
                <a href="{{route('destinations.destino.show', [$pais, $destinos]) }}" class="inline text-center mb-4 gap-3">
                    <img class="inline-block h-20 w-20 rounded-full mx-auto" src="{{$destinos->imagen}}" alt=""/>
                    <span class="block w-24 text-xs">{{$destinos->nombre}}</span>
                </a>
            @endforeach


        
        <h2 class="text-center font-semibold text-4xl">{{$destino->nombre}} Highlights</h2>
        <p class="text-center my-6">{!! $destino->descripcion !!}</p>

{{--        <div class="flex md:justify-center w-full gap-3 my-10 overflow-x-scroll focus:touch-pan-x">--}}
{{--            @foreach($pais2 as $paises)--}}



{{--                --}}{{--                <a href="{{ route('destinations.show', $paises) }}" class="pais-link mb-2 flex items-center font-semibold h3 @if($paises->id == $pais->id) active @endif">--}}
{{--                --}}{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">--}}
{{--                --}}{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />--}}
{{--                --}}{{--                    </svg>--}}
{{--                --}}{{--                    {{$paises->nombre}}--}}
{{--                --}}{{--                </a>--}}


{{--                @foreach($destino->where('idpais', $pais->id) as $destinos)--}}
{{--                    <a href="{{route('destinations.destino.show', [$pais, $destinos]) }}" class="inline text-center mb-4 gap-3">--}}
{{--                        <img class="inline-block h-20 w-20 rounded-full mx-auto" src="{{$destinos->imagen}}" alt=""/>--}}
{{--                        <span class="block w-24 text-xs">{{$destinos->nombre}}</span>--}}
{{--                    </a>--}}
{{--                @endforeach--}}


{{--            @endforeach--}}
{{--        </div>--}}

        {{--        <img src="{{$pais->imagen}}" alt="">--}}
        {{--        <div x-data="{--}}
        {{--            activeTab:1,--}}
        {{--            activeClass: 'inline-block px-4 py-2 bg-red-500',--}}
        {{--            inactiveClass : 'inline-block px-4 py-2 bg-purple-500'--}}
        {{--         }" class="container mx-auto mt-20">--}}
        {{--            <ul class="flex justify-center space-x-2 ">--}}
        {{--                <li>--}}
        {{--                    <button type="button" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass">Tab 1</button>--}}
        {{--                </li>--}}
        {{--                <li>--}}
        {{--                    <button type="button" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass">Tab 2</button>--}}
        {{--                </li>--}}
        {{--                <li>--}}
        {{--                    <button type="button" x-on:click="activeTab = 3" :class="activeTab === 3 ? activeClass : inactiveClass">Tab 3</button>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--            <div class="mt-6 bg-white border p-3">--}}
        {{--                <div x-show="activeTab === 1"> Tab 1 Content show...  </div>--}}
        {{--                <div x-show="activeTab === 2">Tab 2 Content show ...</div>--}}
        {{--                <div x-show="activeTab === 3">Tab 3 Content show ...</div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
    <section class="container hidden md:block">
        <div class="grid grid-cols-12 gap-12" x-data="{
            activeTab:0,
            activeClass: 'font-semibold bg-secondary bg-opacity-5 text-secondary border-r-4',
            inactiveClass : 'font-medium bg-gray-100 text-gray-500 border-r'
        }">
            <div class="col-span-3">
                <ul class="divide-y">
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 0" :class="activeTab === 0 ? activeClass : inactiveClass">
                            {{$destino->nombre}} Tours</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass">Best time to visit</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass">Top tours</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 3" :class="activeTab === 3 ? activeClass : inactiveClass">Things to do</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 4" :class="activeTab === 4 ? activeClass : inactiveClass">Weather</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 5" :class="activeTab === 5 ? activeClass : inactiveClass">Airports</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 6" :class="activeTab === 6 ? activeClass : inactiveClass">Hotels</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 7" :class="activeTab === 7 ? activeClass : inactiveClass">Restaurants</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 8" :class="activeTab === 8 ? activeClass : inactiveClass">Best way of payment</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 9" :class="activeTab === 9 ? activeClass : inactiveClass">Festivities</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 10" :class="activeTab === 10 ? activeClass : inactiveClass">Other useful information</button>
                    </li>
                    <li>
                        <button type="button" class="px-5 text-left py-4 w-full border-secondary" x-on:click="activeTab = 11" :class="activeTab === 11 ? activeClass : inactiveClass">Best places to visit</button>
                    </li>
                </ul>
            </div>
            <div class="col-span-9">
                <div x-show="activeTab === 0">
                    <div class="col-span-4  grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        @foreach($paquetes_api as $paquete)
                            <div class="group">
                                <div class="overflow-hidden relative">
                                    <div class="relative">
                                        <img src="{{$paquete['paquetes']['imagen']}}" alt="sds" class="object-cover w-full h-96 transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                                    </div>
                                    <div class="absolute inset-x-0 bottom-0 w-full p-2">
                                        <div class="bg-primary bg-opacity-90 p-2 text-gray-50 group-hover:bg-opacity-100 transition duration-500 rounded-lg shadow-xl">
                                            <h2 class="font-semibold text-sm">{{ $paquete['paquetes']['titulo'] }}</h2>
                                            <p class="text-xs my-2">
                                                @foreach($paquete['paquetes']['paquetes_destinos'] as $paquete_destino)

                                                    <span class="@if ($paquete_destino['destinos']['id'] == $destino->id) bg-yellow-500 text-gray-800 px-1 font-medium @endif">{{$paquete_destino['destinos']['nombre']}}</span>
                                                    @if ($loop->iteration < count($paquete['paquetes']['paquetes_destinos'])) , @else . @endif
                                                @endforeach
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="border p-6 block group-hover:border-primary text-center transition duration-500">
                                    <div class="font-bold text-gray-500 text-lg mb-4">
                                        {{ $paquete['paquetes']['duracion'] }} {{__('message.pack_par4')}} /
                                        @foreach($paquete['paquetes']['precio_paquetes'] as $precio)
                                            @if($precio['estrellas'] == 2)
                                                @if($precio['precio_d'] > 0)
                                                    <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ {{$precio['precio_d']}} <span class="text-xs">usd</span>
                                                @else
                                                    <span class="text-red-500">{{__('message.button_inquire')}}</span>
                                                @endif
                                            @endif
                                        @endforeach

                                    </div>
                                    <a href="{{route('packages.detail', $paquete['paquetes']['url'])}}" class="btn-secondary">{{__('message.button_detail')}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div x-show="activeTab === 1">
                    {!! $destino->best_time !!}
                </div>
                <div x-show="activeTab === 2">
                    {!! $destino->top_tours !!}
                </div>
                <div x-show="activeTab === 3">
                    {!! $destino->things !!}
                </div>
                <div x-show="activeTab === 4">
                    {!! $destino->weather !!}
                </div>
                <div x-show="activeTab === 5">
                    {!! $destino->airports !!}
                </div>
                <div x-show="activeTab === 6">
                    {!! $destino->hotels !!}
                </div>
                <div x-show="activeTab === 7">
                    {!! $destino->restaurants !!}
                </div>
                <div x-show="activeTab === 8">
                    {!! $destino->payment !!}
                </div>
                <div x-show="activeTab === 9">
                    {!! $destino->festivities !!}
                </div>
                <div x-show="activeTab === 10">
                    {!! $destino->information !!}
                </div>
                <div x-show="activeTab === 11">
                    {!! $destino->places !!}
                </div>

            </div>
        </div>
    </section>

    <section class="container md:hidden">
        <div class="grid ">

                <div>
                    <div class="col-span-4  grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        @foreach($paquetes_api as $paquete)
                            <div class="group">
                                <div class="overflow-hidden relative">
                                    <div class="relative">
                                        <img src="{{$paquete['paquetes']['imagen']}}" alt="sds" class="object-cover w-full h-96 transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                                    </div>
                                    <div class="absolute inset-x-0 bottom-0 w-full p-2">
                                        <div class="bg-primary bg-opacity-90 p-2 text-gray-50 group-hover:bg-opacity-100 transition duration-500 rounded-lg shadow-xl">
                                            <h2 class="font-semibold text-sm">{{ $paquete['paquetes']['titulo'] }}</h2>
                                            <p class="text-xs my-2">
                                                @foreach($paquete['paquetes']['paquetes_destinos'] as $paquete_destino)

                                                    <span class="@if ($paquete_destino['destinos']['id'] == $destino->id) bg-yellow-500 text-gray-800 px-1 font-medium @endif">{{$paquete_destino['destinos']['nombre']}}</span>
                                                    @if ($loop->iteration < count($paquete['paquetes']['paquetes_destinos'])) , @else . @endif
                                                @endforeach
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="border p-6 block group-hover:border-primary text-center transition duration-500">
                                    <div class="font-bold text-gray-500 text-lg mb-4">
                                        {{ $paquete['paquetes']['duracion'] }} {{__('message.pack_par4')}} /
                                        @foreach($paquete['paquetes']['precio_paquetes'] as $precio)
                                            @if($precio['estrellas'] == 2)
                                                @if($precio['precio_d'] > 0)
                                                    <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ {{$precio['precio_d']}} <span class="text-xs">usd</span>
                                                @else
                                                    <span class="text-red-500">{{__('message.button_inquire')}}</span>
                                                @endif
                                            @endif
                                        @endforeach

                                    </div>
                                    <a href="{{route('packages.detail', $paquete['paquetes']['url'])}}" class="btn-secondary">{{__('message.button_detail')}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Best time to visit</h2>
                    {!! $destino->best_time !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Top tours</h2>
                    {!! $destino->top_tours !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Things to do</h2>
                    {!! $destino->things !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Weather</h2>
                    {!! $destino->weather !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Airports</h2>
                    {!! $destino->airports !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Hotels</h2>
                    {!! $destino->hotels !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Restaurants</h2>
                    {!! $destino->restaurants !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Best way of payment</h2>
                    {!! $destino->payment !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Festivities</h2>
                    {!! $destino->festivities !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Other useful information</h2>
                    {!! $destino->information !!}
                </div>
                <div>
                    <h2 class="text-2xl my-4 font-semibold">Best places to visit</h2>
                    {!! $destino->places !!}
                </div>


        </div>
    </section>


        <section class="container grid grid-cols-5 hidden mb-12">

{{--            @foreach($paquetes as $paquete)--}}
{{--                {{$paquete->titulo}}--}}
{{--            @endforeach--}}
            <div class="col-span-1">
                <div class="grid space-y-4 ">
                    @foreach($pais2 as $paises)
                        <div>
                            <h3 class="mb-2 font-semibold">{{$paises->nombre}}</h3>
                            @foreach($destinations->where('idpais', $paises->id) as $destino)
                                <a href="{{route('destinations.destino.show', [$paises, $destino]) }}" class="flex items-center mb-4 gap-3">
                                    <img class="inline-block h-6 w-6 rounded-full" src="{{$destino->imagen}}" alt=""/>
                                    {{$destino->nombre}}
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-4  grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        @foreach($paquetes_api as $paquete)
            <div class="group">
                <div class="overflow-hidden relative">
                    <div class="relative">
                        <img src="{{$paquete['paquetes']['imagen']}}" alt="sds" class="object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                    <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 w-full p-6">
                        <div class="bg-primary bg-opacity-95 p-4 text-gray-50 group-hover:bg-opacity-100 transition duration-500 rounded-lg shadow-xl">
                            <h2 class="text-xl font-bold">{{ $paquete['paquetes']['titulo'] }}</h2>
                            <p class="text-xs my-2">
                                @foreach($paquete['paquetes']['paquetes_destinos'] as $paquete_destino)
                                    {{$paquete_destino['destinos']['nombre']}}
                                    @if ($loop->iteration < count($paquete['paquetes']['paquetes_destinos'])) , @else . @endif
                                @endforeach
                            </p>

                        </div>
                    </div>
                </div>
                <div class="border p-6 block group-hover:border-primary text-center transition duration-500">
                    <div class="font-bold text-gray-500 text-lg mb-4">
                        {{ $paquete['paquetes']['duracion'] }} {{__('message.pack_par4')}} /
                        @foreach($paquete['paquetes']['precio_paquetes'] as $precio)
                            @if($precio['estrellas'] == 2)
                                @if($precio['precio_d'] > 0)
                                    <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ {{$precio['precio_d']}} <span class="text-xs">usd</span>
                                @else
                                    <span class="text-red-500">{{__('message.button_inquire')}}</span>
                                @endif
                            @endif
                        @endforeach

                    </div>
                    <a href="{{route('packages.detail', $paquete['paquetes']['url'])}}" class="btn-secondary">{{__('message.button_detail')}}</a>
                </div>
            </div>
        @endforeach
            </div>
        </section>

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection

