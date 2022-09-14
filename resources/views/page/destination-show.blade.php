@extends('layouts.page-layout')
@section('content')

    <section class="-mt-32 h-80vh -z-1 relative">
{{--        @foreach($destinations->destino_imagen as $imagen)--}}
            <img src="{{$pais->imagen}}" alt="" class="h-full w-full object-cover">
{{--        @endforeach--}}

        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{$pais->nombre}} Travel Packages</h1>
        </div>
    </section>

{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}

    <section class="container py-12 text-gray-500 text-center mx-auto">
{{--        <p>{{__('message.dest_deta_par1')}}</p>--}}
        {!! $pais->descripcion !!}
    </section>


    <section class="container grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
        @foreach($destinations as $destination)
            <article class="grid grid-cols-1 place-content-between mb-6 border-r border-l dark:border-gray-700">
                <div class="w-full">
                    <figure class="overflow-hidden relative">
                        <img src="{{$destination->imagen}}" alt="" class="bg-cover h-full w-full">
                        <div class="absolute inset-0 gradient-cicle-gray"></div>
                    </figure>

                    <div class="w-full p-6 mt-4 mb-5 text-center">
                        <div class="">
                            {{--                        <h2 class="">{{ Str::limit($destination->nombre, 40) }}</h2>--}}
                            <h2 class="text-xl font-bold mb-4 text-center text-gray-600 dark:text-gray-300">{{$destination->nombre}}</h2>
                            <p class="text-sm text-gray-500 dark:text-gray-200">{{$destination->resumen}}</p>
                        </div>
                        {{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fuga repellat reprehenderit sint vero. Eum maxime minima, nobis numquam optio quasi quidem quo ratione sunt totam vel velit voluptatem voluptatum?--}}
                    </div>
                </div>
                <div class="w-full">
                    <a href="{{ route('destinations.destino.show', [$pais, $destination]) }}" class="btn-secondary block text-center mt-2">{{__('message.button_all')}}</a>
{{--                    <a href="{{route('packages.detail', $paquete['paquetes']['url'])}}" class="btn-secondary">{{__('message.button_detail')}}</a>--}}
                </div>
            </article>

        @endforeach
    </section>


{{--    <section class="container grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">--}}

{{--        @foreach($paquetes as $paquete)--}}
{{--            {{$paquete->titulo}}--}}
{{--        @endforeach--}}
{{--    @foreach($paquetes_api as $paquete)--}}
{{--        <div class="group">--}}
{{--            <div class="overflow-hidden relative">--}}
{{--                <div class="relative">--}}
{{--                    <img src="{{$paquete['paquetes']['imagen']}}" alt="sds" class="object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>--}}
{{--                <div class="absolute inset-0 gradient-cicle-gray"></div>--}}
{{--                </div>--}}
{{--                <div class="absolute inset-x-0 bottom-0 w-full p-6">--}}
{{--                    <div class="bg-primary bg-opacity-95 p-4 text-gray-50 group-hover:bg-opacity-100 transition duration-500 rounded-lg shadow-xl">--}}
{{--                        <h2 class="text-xl font-bold">{{ $paquete['paquetes']['titulo'] }}</h2>--}}
{{--                        <p class="text-xs my-2">--}}
{{--                            @foreach($paquete['paquetes']['paquetes_destinos'] as $paquete_destino)--}}
{{--                                {{$paquete_destino['destinos']['nombre']}}--}}
{{--                                @if ($loop->iteration < count($paquete['paquetes']['paquetes_destinos'])) , @else . @endif--}}
{{--                            @endforeach--}}
{{--                        </p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="border p-6 block group-hover:border-primary text-center transition duration-500">--}}
{{--                <div class="font-bold text-gray-500 text-lg mb-4">--}}
{{--                    {{ $paquete['paquetes']['duracion'] }} {{__('message.pack_par4')}} /--}}
{{--                    @foreach($paquete['paquetes']['precio_paquetes'] as $precio)--}}
{{--                        @if($precio['estrellas'] == 2)--}}
{{--                            @if($precio['precio_d'] > 0)--}}
{{--                                <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ {{$precio['precio_d']}} <span class="text-xs">usd</span>--}}
{{--                            @else--}}
{{--                                <span class="text-red-500">{{__('message.button_inquire')}}</span>--}}
{{--                            @endif--}}
{{--                        @endif--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--                <a href="{{route('packages.detail', $paquete['paquetes']['url'])}}" class="btn-secondary">{{__('message.button_detail')}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--    </section>--}}

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection

