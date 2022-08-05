@extends('layouts.page-layout')
@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{asset('images/banners/mapi.jpg')}}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">{{__('message.book_title1')}}</h1>
        </div>
    </section>
{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}
    <section class="container mt-12">
        <h2 class="text-center font-bold text-gray-500 md:text-2xl mb-12 xl:text-4xl dark:text-secondary">{{__('message.book_title2')}}</h2>
        <div class="grid grid-cols-1">
            <article class="mb-4" x-data="{ open: false }">
                <header class="border border-gray-200 px-4 py-2 flex justify-between cursor-pointer bg-gray-100" x-on:click="open = !open">
                    <h1 class="font-semibold text-sm text-gray-600 ">{{__('message.book_subtitle1')}}</h1>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </header>
                <div class="bg-white py-2 px-4 border mt-1" x-show="!open" x-transition>
                    <div class="grid grid-cols-1 gap-2 text-sm">
                       <p>{{__('message.book_par1')}}</p>
                       <p>{{__('message.book_par2')}}</p>
                       <p>{{__('message.book_par3')}}</p>
                       <p>{{__('message.book_par4')}}</p>
                    </div>
                </div>
            </article>

            <article class="mb-4" x-data="{ open: false }">
                <header class="border border-gray-200 px-4 py-2 flex justify-between cursor-pointer bg-gray-100" x-on:click="open = !open">
                    <h1 class="font-semibold text-sm text-gray-600 ">{{__('message.book_subtitle2')}}</h1>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </header>
                <div class="bg-white py-2 px-4 border mt-1" x-show="open" x-transition>
                    <div class="grid grid-cols-1 gap-2 text-sm">
                        <p>{{__('message.book_par5')}}</p>
                        <p>{{__('message.book_par6')}}</p>
                        <ul>
                            <li>{{__('message.book_par7')}}</li>
                            <li>{{__('message.book_par8')}}</li>
                            <li>{{__('message.book_par9')}}</li>
                        </ul>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
@endsection

