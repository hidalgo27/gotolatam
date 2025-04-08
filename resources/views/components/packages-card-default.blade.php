@props(['paquete'])
<a href="{{route('packages.detail', $paquete['url'])}}" class="group flex flex-col">
    <div class="overflow-hidden relative ">

            <img src="{{$paquete->imagen}}" alt="{{ $paquete['titulo'] }}" class="h-16r object-cover w-full transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            <div class="absolute inset-0 gradient-cicle-gray"></div>

    </div>
    <div class="border p-3 relative bg-gray-50 dark:bg-gray-800 dark:border-gray-700 block group-hover:border-primary text-center transition duration-500 flex-1 flex flex-col">
        <div class="absolute inset-x-0 -top-11 w-3/5 mx-auto p-6">
            <div class="bg-secondary text-sm font-semibold shadow-lg p-2 text-white group-hover:bg-opacity-100 transition duration-500 rounded-lg">
                @foreach($paquete->paquetes_categoria as $category)
                    {{$category->categoria->nombre}}
                @endforeach
{{--                <p class="text-xs my-2">--}}

{{--                    @foreach($paquete['paquetes_destinos'] as $paquete_destino)--}}
{{--                        {{$paquete_destino['destinos']['nombre']}}--}}
{{--                        @if ($loop->iteration < count($paquete['paquetes_destinos'])) , @else . @endif--}}
{{--                    @endforeach--}}
{{--                </p>--}}

            </div>
        </div>
        <div class="font-semibold text-primary pt-6">
            {{ $paquete['duracion'] }} {{__('message.pack_par4')}} / {{ $paquete['duracion'] -1  }} Nights
        </div>
        @if($paquete['codigo_f'] AND $paquete['is_p_t'] == 0)
            <button class="wtrvl-checkout_button btn-primary block w-full mb-2" id="wetravel_button_widget" data-env="https://www.wetravel.com" data-version="v0.2" data-uid="239346" data-uuid="55228689" href="https://www.wetravel.com/checkout_embed?uuid={{$paquete['codigo_f']}}" >{{__('message.button_book')}}</button>
        @endif

        <h2 class="text-xl text-gray-500 font-bold mt-2 mb-6">{{ $paquete['titulo'] }}</h2>

        <div class="font-semibold text-gray-600 dark:text-gray-300 text-3xl mt-auto">
            <div class="text-xs text-gray-400">Price p.p. from</div>
            @foreach($paquete['precio_paquetes'] as $precio)
                @if($precio['estrellas'] == 3)
                    @if($precio['precio_d'] > 0)
                         ${{$precio['precio_d']}} <span class="text-sm text-secondary">usd</span>
                    @else
                        <span class="text-red-500">{{__('message.pack_par6')}}</span>
                    @endif
                @endif
            @endforeach
        </div>

{{--        <a href="{{route('packages.detail', $paquete['url'])}}" class="block text-sm mt-5 font-semibold text-blue-500">{{__('message.button_detail')}}</a>--}}
        <span class="block text-sm mt-5 font-semibold text-blue-500">{{__('message.button_detail')}}</span>
    </div>
</a>
