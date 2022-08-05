@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{$categories->imagen_banner}}" alt="" class="h-full w-full object-cover">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{$categories->nombre}} Packages</h1>
        </div>
    </section>

    {{--    <div class="hidden md:inline-block">--}}
    {{--        @livewire('page.form-home')--}}
    {{--    </div>--}}

    <section class="container py-12 text-gray-500 text-center mx-auto">
{{--        <p>{{__('message.dest_deta_par1')}}</p>--}}
        <p>The following travel Peru packages could be a reference and inspiration for your ideal peruvian vacation. No matter the type of adventure you are seeking, GOTOPERU has a trip for you. Hoping to see Llamas? Check! .Want an active Inca Trail hiking trip? Check! How about a Ceviche in Lima? Check! .How about a trip for you, your kiddos, and Grandma and Grandpa? Contact us today with a short description of your ideal Peru trip and we will make it happen.</p>
    </section>



    <section class="container grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

        {{--        @foreach($paquetes as $paquete)--}}
        {{--            {{$paquete->titulo}}--}}
        {{--        @endforeach--}}
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
{{--                                @foreach($paquete['paquetes']['paquetes_destinos'] as $paquete_destino)--}}
{{--                                    {{$paquete_destino['destinos']['nombre']}}--}}
{{--                                    @if ($loop->iteration < count($paquete['paquetes']['paquetes_destinos'])) , @else . @endif--}}
{{--                                @endforeach--}}
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
    </section>

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection

