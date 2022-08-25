@props(['paquete'])
<div class="group">
    <div class="overflow-hidden relative">
        <div class="relative">
            <img src="{{$paquete->imagen}}" alt="{{ $paquete['titulo'] }}" class="object-cover h-96 w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            <div class="absolute inset-0 gradient-cicle-gray"></div>
        </div>
        <div class="absolute inset-x-0 bottom-0 w-full p-6">
            <div class="bg-primary bg-opacity-95 p-4 text-gray-50 group-hover:bg-opacity-100 transition duration-500 rounded-lg shadow-xl">
                <h2 class="text-xl font-bold">{{ $paquete['titulo'] }}</h2>
                <p class="text-xs my-2">
                    @foreach($paquete['paquetes_destinos'] as $paquete_destino)
                        {{$paquete_destino['destinos']['nombre']}}
                        @if ($loop->iteration < count($paquete['paquetes_destinos'])) , @else . @endif
                    @endforeach
                </p>


            </div>
        </div>
    </div>

    <div class="border p-6 block group-hover:border-primary text-center transition duration-500">
        <div class="font-bold text-gray-500 dark:text-gray-300 text-lg mb-4">

            <div class="flex -space-x-1 justify-center mb-2">
                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/assistances.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Assistances
                    </div>
                </div>
                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/breakfast.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Breakfast
                    </div>
                </div>
                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/entrances.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Entrances
                    </div>
                </div>

                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/hotels.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Hotels
                    </div>
                </div>

                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/tours.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Tours
                    </div>
                </div>

                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/trains.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Trains
                    </div>
                </div>

                <div x-data="{ tooltip: false }" class="inline-block rounded-full ring-1 m-1 ring-white relative">
                    <img src="{{asset('images/include/transfers.png')}}" alt="{{__('message.serv_item3')}}"  x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"  class="h-6 w-6">
                    <div x-show="tooltip" class="text-xs text-white absolute bg-gray-700 rounded p-1 transform -translate-x-7  z-10">
                        Transfers
                    </div>
                </div>

            </div>
            {{--            <div class="relative flex flex-col items-center group">--}}
            {{--                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">--}}
            {{--                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />--}}
            {{--                </svg>--}}
            {{--                <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 hover:flex">--}}
            {{--                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">A top aligned tooltip.</span>--}}
            {{--                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{ $paquete['duracion'] }} {{__('message.pack_par4')}} /
            @if($paquete['is_p_t'] == 0)

                @if($paquete['precio_tours'] > 0)
                    ${{$paquete['precio_tours']}} <span class="text-sm text-secondary">usd</span>
                @else
                    <span class="text-red-500">{{__('message.pack_par6')}}</span>
                @endif

            @else
                @foreach($paquete['precio_paquetes'] as $precio)
                    @if($precio['estrellas'] == 2)
                        @if($precio['precio_d'] > 0)
                            ${{$precio['precio_d']}} <span class="text-sm text-secondary">usd</span>
                        @else
                            <span class="text-red-500">{{__('message.pack_par6')}}</span>
                        @endif
                    @endif
                @endforeach
            @endif

            {{--            @foreach($paquete['precio_paquetes'] as $precio)--}}
            {{--                @if($precio['estrellas'] == 2)--}}
            {{--                    @if($precio['precio_d'] > 0)--}}
            {{--                        <span class="text-xs align-top">{{__('message.pack_par5')}}</span> $ {{$precio['precio_d']}} <span class="text-xs">usd</span>--}}
            {{--                    @else--}}
            {{--                        <span class="text-red-500">{{__('message.pack_par6')}}</span>--}}
            {{--                    @endif--}}
            {{--                @endif--}}
            {{--            @endforeach--}}

        </div>

        @if($paquete['codigo_f'])
            <button class="wtrvl-checkout_button btn-primary block w-full mb-2" id="wetravel_button_widget" data-env="https://www.wetravel.com" data-version="v0.2" data-uid="239346" data-uuid="{{$paquete['codigo_f']}}" href="https://www.wetravel.com/checkout_embed?uuid={{$paquete['codigo_f']}}" >{{__('message.button_book')}}</button>
        @endif
        <a href="{{route('packages.detail', $paquete['url'])}}" class="btn-secondary block">{{__('message.button_detail')}}</a>
    </div>
</div>
