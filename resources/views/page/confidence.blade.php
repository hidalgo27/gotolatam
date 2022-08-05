@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/banners/mapi.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.confi_title1')}}</h1>
        </div>
    </section>
{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}
    <section class="container mt-12">
        <h2 class="text-center font-bold text-gray-500 md:text-2xl mb-12 xl:text-4xl dark:text-secondary">{{__('message.confi_title2')}}</h2>
        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="https://picsum.photos/700/450" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle1')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par1')}}</p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par2')}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="{{asset('images/banners/confidence/safe-transportation.jpg')}}" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle2')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par3')}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="{{asset('images/banners/confidence/quality-checked.jpg')}}" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle3')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par4')}}</p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par5')}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="{{asset('images/banners/confidence/handpicked.jpg')}}" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle4')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par6')}}</p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par7')}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="{{asset('images/banners/confidence/experienced-tour-guides.jpg')}}" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle5')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par8')}}</p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par9')}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="https://picsum.photos/700/454" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle6')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par10')}}</p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par11')}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 border mb-6">
            <div class="col-span-2">
                <img src="{{asset('images/banners/confidence/24.jpg')}}" alt="" class="object-cover h-full w-full">
            </div>
            <div class="col-span-3 p-12">
                <h3 class="font-bold text-gray-500 pb-4 text-xl dark:text-white">{{__('message.confi_subtitle7')}}</h3>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par12')}}</p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">{{__('message.confi_par13')}}</p>
            </div>
        </div>


    </section>

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection

