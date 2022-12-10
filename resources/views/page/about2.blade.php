@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/banners/mapi.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.abou_title1')}}</h1>
        </div>
    </section>

{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}

    <section class="container py-12 text-gray-500 text-center">
        <h2 class="text-3xl font-semibold mb-2">{{__('message.abou_title2')}} </h2>
        <p class="">{{__('message.abou_par1')}}</p>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-12">
            <div class="">
                <p>{{__('message.abou_par2')}}</p>
            </div>
            <div class="">

            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2">
        <div class="bg-secondary p-12 grid grid-cols-3">
            <div class=""></div>
            <div class="col-span-2">
                <h2 class="font-bold text-white text-2xl">{{__('message.info_subtitle1')}}: </h2>
                <p class="text-sm italic text-yellow-700 font-medium my-4">{{__('message.info_par1')}} </p>
                <p class="my-4 text-sm font-bold text-yellow-900">{{__('message.info_par2')}}</p>
                <p class="font-bold text-white">{{__('message.info_par3')}}</p>
                <p class="text-xs">{{__('message.info_par4')}}</p>
            </div>
        </div>
        <div class="bg-primary grid grid-cols-1 md:grid-cols-2 gap-6 p-12">
            <div class="">
                <h3 class="font-bold text-white mb-2">{{__('message.info_subtitle2')}}</h3>
                <p class="text-sm text-gray-800">{{__('message.info_par5')}}</p>
            </div>
            <div class="">
                <h3 class="font-bold text-white mb-2">{{__('message.info_subtitle3')}}</h3>
                <p class="text-sm text-gray-800">{{__('message.info_par6')}}</p>
            </div>
            <div class="md:col-span-2">
                <h3 class="font-bold text-white mb-2">{{__('message.info_subtitle4')}}</h3>
                <p class="text-sm text-gray-800">{{__('message.info_par7')}}</p>
            </div>
        </div>
    </section>

    <section class="py-12 text-gray-500 text-center bg-gray-100">
        <div class="container">
        <h2 class="text-3xl font-semibold mb-2">{{__('message.abou_title3')}}</h2>
        <p class="">{{__('message.abou_par3')}}</p>
        <p><p>{{__('message.abou_par4')}} </p></p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            @foreach($teams as $team)
            <div class="text-center mb-8 md:mb-0">
                @if($team->imagen_perfil)
                    <img class="w-48 h-48 rounded-full mx-auto -mb-24" src="{{$team->imagen_perfil}}" alt="{{$team->nombre}}"/>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-48 h-48 rounded-full mx-auto bg-white -mb-24" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                @endif
                <div class="bg-white shadow-lg rounded-lg px-8 pt-32 pb-10 text-gray-400">
                    <h3 class="font-title text-gray-800 text-xl mb-3">
                        {{$team->nombre}}
                    </h3>
                    <p class="font-body mb-4">
                        {{$team->cargo}}
                    </p>
{{--                    <p class="font-body text-sm mb-4">--}}
{{--                        {{$team->actividad}}--}}
{{--                    </p>--}}
{{--                    <a class="font-body text-blue-500 hover:text-gray-800" href="#">--}}
{{--                        {{$team->email}}--}}
{{--                    </a>--}}
                </div>
            </div>
            @endforeach
        </div>
        </div>


    </section>

    <section class="">
        @livewire('page.form-footer')
    </section>

@endsection
