@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/team/banner.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.info_title1')}}</h1>
        </div>
    </section>

{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}

    <section class="grid grid-cols-1 -mt-6 md:grid-cols-2">
        <div class="bg-secondary p-12 grid grid-cols-3">
{{--            <div class="">--}}
{{--                <img src="{{asset('images/fiorella.jpg')}}" alt="">--}}
{{--            </div>--}}
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


    <section class="container mt-12">
        <h2 class="text-center font-bold text-gray-500 md:text-2xl mb-12 xl:text-4xl dark:text-secondary">{{__('message.info_title2')}}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-center">
            <div class="border p-6">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-500 pb-2 dark:text-white mt-8">
                    {{__('message.info_subtitle5')}}
                </p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">
                    {{__('message.info_par8')}}
                </p>
            </div>

            <div class="border ">
                <img src="{{asset('images/team/gotoperu-team1.jpg')}}" alt="" class="h-full w-full object-cover">
            </div>

            <div class="border ">
                <img src="{{asset('images/team/gotoperu-team2.jpg')}}" alt="" class="h-full w-full object-cover">
            </div>


            <div class="border p-6 relative">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-500 pb-2 dark:text-white mt-8">
                    {{__('message.info_subtitle6')}}
                </p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">
                    {{__('message.info_par9')}}
                </p>
            </div>


            <div class="border p-6 relative">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-500 pb-2 dark:text-white mt-8">
                    {{__('message.info_subtitle7')}}
                </p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">
                    {{__('message.info_par10')}}
                </p>
            </div>
            <div class="border ">
                <img src="{{asset('images/team/gotoperu-team3.jpg')}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="border ">
                <img src="{{asset('images/team/gotoperu-team4.jpg')}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="border p-6 relative">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-500 pb-2 dark:text-white mt-8">
                    {{__('message.info_subtitle8')}}
                </p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">
                    {{__('message.info_par11')}}
                </p>
            </div>

            <div class="border p-6 relative">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-500 pb-2 dark:text-white mt-8">
                    {{__('message.info_subtitle9')}}
                </p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">
                    {{__('message.info_par12')}}
                </p>
            </div>

            <div class="border ">
                <img src="{{asset('images/team/gotoperu-team5.jpg')}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="border ">
                <img src="{{asset('images/team/gotoperu-team6.jpg')}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="border p-6 relative">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto object-cover p-4 rounded-full bg-secondary text-green-50 h-20 w-20  border border-white dark:border-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-500 pb-2 dark:text-white mt-8">
                    {{__('message.info_subtitle10')}}
                </p>
                <p class="text-gray-500 dark:text-gray-200 text-sm">
                    {{__('message.info_par13')}}
                </p>
            </div>

        </div>
    </section>
    <section class="mt-12">
        @livewire('page.form-footer')
    </section>

@endsection
