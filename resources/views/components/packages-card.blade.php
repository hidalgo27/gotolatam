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
