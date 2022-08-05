@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/destinations/arequipa.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.hote_title1')}}</h1>
        </div>
    </section>

    <section class="container py-12 text-gray-500 text-center">
        <p class="">{{__('message.hote_par1')}}</p>
{{--        <p class="my-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet beatae commodi doloremque est eveniet expedita id ipsam labore magnam maxime, minima nemo nihil porro quaerat rem ullam. A, earum?</p>--}}
{{--        <div class="text-gray-600 text-xl font-medium">--}}
{{--            Trabajaremos de acuerdo con su agenda y sus intereses de viaje para construir juntos los planes de viaje más exclusivos.--}}
{{--        </div>--}}
    </section>
{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}
    <div class="container">
    @foreach($hotels as $hotel)
        <div class="grid grid-cols-3 gap-4 mb-4 border">
            <div class="col-span-1">
{{--                @if($hotel->imagen)--}}
{{--                    <img src="{{$hotel->imagen}}" alt="{{$hotel->nombre}}" class="object-cover w-full h-full">--}}
{{--                @else--}}
                    <img src="{{$hotel->imagen}}" alt="" class="object-cover w-full h-full">
{{--                @endif--}}

            </div>
            <div class="col-span-2 p-6">
                <h3 class="font-bold text-gray-500">{{$hotel->nombre}}</h3>
                <div class="flex">
                    @for($i=0; $i < $hotel->estrellas; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
                <div class="pt-2 flex text-sm mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="ml-2">{{$hotel->direccion}}</p>
                </div>

                @php $services = explode(',', $hotel->servicios); @endphp
                <p class="text-gray-500"><b>{{__('message.hote_subtitle1')}}:</b></p>

                    @foreach($services as $service)
                        <div class="flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{$service}}
                        </div>
                    @endforeach

                <div class="flex mt-6 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <a href="{{$hotel->url}}" class="btn btn-outline-secondary text-blue-600 ml-2" target="_blank">{{ucfirst(strtolower($hotel->nombre))}}</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection
