@extends('layouts.page-layout')
@section('content')
    @foreach($paquetes as $paquete)
        <section class="-mt-32 h-80vh -z-1 relative">
            @foreach($paquete['imagen_paquetes'] as $imagen)
                <img src="{{$imagen['nombre']}}" alt="{{$paquete['titulo']}}" class="h-full w-full object-cover">
            @endforeach
            <div class="absolute bottom-0 left-0 p-12">
                <h1 class="text-3xl md:text-5xl font-semibold mb-3 text-gray-50">{{ $paquete['titulo'] }}</h1>
            </div>
        </section>

        <section class="container mt-12 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2">
                    <div class="">
                        <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>
                        <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>
                        <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                    </div> {{__('message.pack_deta_par1')}}
                </div>
                <div class="">
                    {!! $paquete['descripcion'] !!}
                </div>

                <div class="flex items-center text-lg text-gray-700 font-bold gap-2 mt-12">
                    <div class="c">
{{--                        <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>--}}
{{--                        <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>--}}
                        <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                    </div> {{__('message.pack_deta_par2')}}
                </div>

                <div class="grid grid-cols-1 md:grid-cols-1 ">
                    <div class="col-span-4 md:col-span-4 flex md:gap-3">
                        {{--                    <div class="flex-shrink">--}}

                        {{--                    </div>--}}
                        @php $i = 1; @endphp
                        <div class="grid grid-cols-2 place-content-between md:gap-3">
                            @foreach($paquete['paquetes_destinos'] as $paquete_destino)
                                @foreach($paquete_destino['destinos']['destino_imagen'] as $destino_imagen)
                                    <div class="relative @if (count($paquete['paquetes_destinos'])%2 != 0 AND $i == 1) col-span-2 @endif">
                                        <img src="{{$destino_imagen['nombre']}}" alt="" class="@if (count($paquete['paquetes_destinos'])%2 != 0 AND $i == 1) object-cover h-80 object-bottom w-full @endif">
                                        <div class="absolute inset-x-0 bottom-0 text-sm tracking-wide text-white p-2 font-medium">
                                            {{$paquete_destino['destinos']['nombre']}}
                                        </div>
                                    </div>
                                    @php $i++ @endphp
                                @endforeach
                            @endforeach
                        </div>
                    </div>
{{--                    <div class="grid grid-cols-2 bg-primary flex items-center bg-opacity-30 p-6">--}}
{{--                        @foreach($paquete['paquetes_destinos'] as $paquete_destino)--}}
{{--                        <div class="">--}}

{{--                                <h3 class="font-semibold mt-3">{{$paquete_destino['destinos']['nombre']}}</h3>--}}
{{--                                <div class="text-sm">--}}
{{--                                    {!! $paquete_destino['destinos']['resumen'] !!}--}}
{{--                                </div>--}}

{{--                        </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}
                </div>

                <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2 mt-12">
                    <div class="">
                        <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>
                        <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>
                        <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                    </div> {{__('message.pack_deta_par3')}}
                </div>

                <div class="grid">
                    <div class="col-span-4 md:col-span-4">

                        @foreach($paquete->paquete_itinerario as $section)

                            <article class="mb-4"
                                     @if($loop->first)
                                     x-data="{ open: true }"
                                     @else
                                     x-data="{ open: false }"
                                @endif
                            >
                                <header class="border border-gray-200 px-4 py-2 flex justify-between cursor-pointer bg-gray-100" x-on:click="open = !open">
                                    <h1 class="font-semibold text-sm text-gray-600 "><span class="capitalize">Day {{$loop->iteration}}:</span> {{ucfirst(strtolower($section->itinerarios->titulo))}}</h1>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </header>
                                <div class="bg-white py-2 px-4 border mt-1" x-show="open" x-transition>
                                    <div class="grid grid-cols-1 gap-2 text-sm">
                                        {!! $section->itinerarios->descripcion !!}
                                    </div>
                                </div>
                            </article>
                        @endforeach



                    </div>

                </div>


                @if($paquete['is_p_t'] == 1)
                    <section class="my-12 flex flex-col gap-4">

                        <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2">
                            <div class="">
                                <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>
                                <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>
                                <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                            </div> {{__('message.pack_deta_par4')}}
                        </div>
                        <p>{{__('message.pack_deta_par5')}}</p>
                        <div class="overflow-hidden">
                            <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-scroll">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 font-bold uppercase tracking-wider">
                                        {{__('message.pack_deta_par9')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 font-bold uppercase tracking-wider">
                                        {{__('message.pack_deta_par10')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 font-bold uppercase tracking-wider">
                                        {{__('message.pack_deta_par11')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 font-bold uppercase tracking-wider">
                                        {{__('message.pack_deta_par12')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    @foreach($paquete['precio_paquetes'] as $precio)
                                        @if($precio['precio_d'] > 0)
                                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-500">${{$precio['precio_d']}}<small>USD</small></td>
                                        @else
                                            <td class="px-6 py-4 whitespace-nowrap font-bold text-red-500">{{__('message.button_inquire')}}</td>
                                        @endif
                                    @endforeach

                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <p class="text-sm text-gray-500">{{__('message.pack_deta_par6')}}</p>
                                    </td>
                                </tr>

                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>

                    </section>
                @endif

                <section class="my-12">

                    <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2">
                        <div class="">
                            <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>
                            <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>
                            <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                        </div> {{__('message.pack_deta_par7')}}
                    </div>
                    <div class="">
                        {!! $paquete['incluye'] !!}
                    </div>

                </section>

                <section class="my-12">
                    <div class="flex mb-3 items-center text-lg text-gray-700 font-bold gap-2">
                        <div class="">
                            <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>
                            <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>
                            <span class="inline-block w-5 h-2.5 bg-secondary"></span>
                        </div> {{__('message.pack_deta_par8')}}
                    </div>
                    <div class="">
                        {!! $paquete['noincluye'] !!}
                    </div>
                </section>


            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-3 sticky top-0 top-12">
                    <div class="flex gap-3">
                        <div class="flex-1 border p-3 flex text-xl items-center justify-center">
                            {{ $paquete['duracion'] }} {{__('message.pack_par4')}}
                        </div>
                        <div class="flex-1 border p-3 flex items-center">
                            @foreach($paquete['precio_paquetes'] as $precio)
                                @if($precio['estrellas'] == 2)
                                    @if($precio['precio_d'] > 0)
                                        <div class="text-xl font-semibold text-gray-600">
                                            <span> {{__('message.pack_par5')}} </span>
                                            <span>${{$precio['precio_d']}}</span>
                                            <span class="text-xs"> usd</span>
                                        </div>
                                    @else
                                        <span class="text-red-500 font-bold">{{__('message.button_inquire')}}</span>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="p-6 border">
                        <h2 class="text-2xl font-bold text-gray-600"> {{$paquete['titulo']}}</h2>
                        <div class="mt-3 text-sm text-gray-600">
                            @foreach($paquete['paquetes_destinos'] as $paquete_destino)
                                {{$paquete_destino['destinos']['nombre']}}
                                @if ($loop->iteration < count($paquete['paquetes_destinos'])) , @else . @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="">
                        <a href="#form-dream-adventure" class="btn-secondary font-bold text-center w-full block">{{__('message.button_inquire')}}</a>
                        @if($paquete['codigo_f'])
                            <button class="wtrvl-checkout_button btn-primary block mt-2 w-full mb-2" id="wetravel_button_widget" data-env="https://www.wetravel.com" data-version="v0.2" data-uid="239346" data-uuid="55228689" href="https://www.wetravel.com/checkout_embed?uuid={{$paquete['codigo_f']}}" >Book Now</button>
                        @endif
                    </div>

                    <img src="{{$paquete['mapa']}}" alt="" class="w-full">
                </div>
            </div>

        </section>

{{--        <div class="container mt-12 hidden mb-3">--}}
{{--            <div class="flex items-center text-lg text-gray-700 font-bold gap-2">--}}
{{--                <div class="c">--}}
{{--                    <span class="inline-block w-1 h-2.5 bg-secondary ml-1"></span>--}}
{{--                    <span class="inline-block w-3 h-2.5 bg-secondary ml-1"></span>--}}
{{--                    <span class="inline-block w-5 h-2.5 bg-secondary"></span>--}}
{{--                </div> Destinations--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <section class="flex flex-col hidden gap-4">--}}

{{--            <div class="grid grid-cols-1 md:grid-cols-6 md:gap-3">--}}
{{--                <div class="col-span-4 md:col-span-4 flex md:gap-3">--}}
{{--                    --}}{{--                    <div class="flex-shrink">--}}

{{--                    --}}{{--                    </div>--}}
{{--                    @php $i = 1; @endphp--}}
{{--                    <div class="grid grid-cols-2 place-content-between md:gap-3">--}}
{{--                        @foreach($paquete['paquetes_destinos'] as $paquete_destino)--}}
{{--                            @foreach($paquete_destino['destinos']['destino_imagen'] as $destino_imagen)--}}
{{--                                <div class="relative @if (count($paquete['paquetes_destinos'])%2 != 0 AND $i == 1) col-span-2 @endif">--}}
{{--                                    <img src="{{$destino_imagen['nombre']}}" alt="" class="@if (count($paquete['paquetes_destinos'])%2 != 0 AND $i == 1) object-cover h-80 object-bottom w-full @endif">--}}
{{--                                    <div class="absolute inset-x-0 bottom-0 text-sm tracking-wide text-white p-2 font-medium">--}}
{{--                                        {{$paquete_destino['destinos']['nombre']}}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @php $i++ @endphp--}}
{{--                            @endforeach--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-span-2 md:col-span-2 bg-primary flex items-center bg-opacity-30 p-6">--}}
{{--                    <div class="">--}}
{{--                        @foreach($paquete['paquetes_destinos'] as $paquete_destino)--}}
{{--                            <h3 class="font-semibold mt-3">{{$paquete_destino['destinos']['nombre']}}</h3>--}}
{{--                            <div class="text-sm">--}}
{{--                                {!! $paquete_destino['destinos']['resumen'] !!}--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}





        @livewire('page.form-footer-detail', ['paquete' => $paquete['titulo']], key('paquete'.$paquete['id']))
    @endforeach

        @push('scripts')
            <script src="https://cdn.wetravel.com/master/core-app/assets/embed_checkout.js"></script>
        @endpush
@endsection


