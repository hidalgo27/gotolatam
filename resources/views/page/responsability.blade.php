@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/banners/mapi.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.resp_title1')}}</h1>
        </div>
    </section>
{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}
    <section class="container py-12 text-gray-500 text-center">
        <p class="">{{__('message.resp_part1')}}</p>
{{--        <p class="my-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet beatae commodi doloremque est eveniet expedita id ipsam labore magnam maxime, minima nemo nihil porro quaerat rem ullam. A, earum?</p>--}}
{{--        <div class="text-gray-600 text-xl font-medium">--}}
{{--            Trabajaremos de acuerdo con su agenda y sus intereses de viaje para construir juntos los planes de viaje más exclusivos.--}}
{{--        </div>--}}
    </section>

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection
