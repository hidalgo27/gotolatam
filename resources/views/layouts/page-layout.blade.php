<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('message.seo_title')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">

    @livewireStyles

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="google-site-verification" content="RKqlAT_PUqYYY0MkFZc-h48BgcRpUvekk7ZGAojEjHA" />
    <meta name="p:domain_verify" content="da6ce019431809801f9c598831381786"/>


    @stack('css')


    {{--    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">--}}

    <script>
        // if (sessionStorage.theme === 'dark' || (!'theme' in sessionStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        //     document.querySelector('html').classList.add('dark')
        // } else if (sessionStorage.theme === 'dark') {
        //     document.querySelector('html').classList.add('dark')
        // }
        if (sessionStorage.theme === 'dark' || (!('theme' in sessionStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            let elem = document.getElementById('switchTheme');
            document.documentElement.classList.add('dark')
        } else {
            let elem = document.getElementById('switchTheme');
            document.documentElement.classList.remove('dark')

        }

        // window.addEventListener('load', function (){
        //     document.getElementById('preload').classList.add('hidden');
        // })


    </script>

    <style>
        .preload {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #151515;
            z-index: 1000000000;
        }

        .pulse {
            position: relative;
            left: 50%;
            top: 50vh;
            margin-left: -40px;
            margin-top: -40px;
        }
        .pulse:before, .pulse:after {
            content: "";
            border: 5px solid #323232;
            width: 80px;
            height: 80px;
            border-radius: 500px;
            position: absolute;
        }
        .pulse:before {
            animation: pulse-outer 0.8s ease-in infinite;
        }
        .pulse:after {
            animation: pulse-inner 0.8s linear infinite;
        }

        @keyframes pulse-outer {
            0% {
                opacity: 1;
                filter: alpha(opacity=100);
            }
            50% {
                opacity: 0.5;
                filter: alpha(opacity=50);
            }
            100% {
                opacity: 0;
                filter: alpha(opacity=0);
            }
        }
        @keyframes pulse-inner {
            0% {
                transform: scale(0);
                opacity: 0;
                filter: alpha(opacity=0);
            }
            100% {
                transform: scale(1);
                opacity: 1;
                filter: alpha(opacity=100);
            }
        }

    </style>

</head>
<body class="bg-white dark:bg-gray-800 dark:text-gray-400 relative">
{{--<div class="preload" id="preload">--}}
{{--    <div class="pulse"></div>--}}
{{--</div>--}}
@php

    $nav_links = [
        [
            'id' => '1',
            'name' => 'Home',
            'state' => '1',
            'route' => route('home'),
            'active' => request()->routeIs('home'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>',
                    'nav_sub_links' => []

        ],

        [
            'id' => '2',
            'name' => __('message.nav_item1'),
            'state' => '2',
            'route' => route('packages.all'),
            'active' => request()->routeIs('packages.*'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>',
            'nav_sub_links' => []
        ],
        [
            'id' => '3',
            'name' => __('message.nav_item3'),
            'state' => '2',
            'route' => route('destinations.all'),
            'active' => request()->routeIs('destinations.*'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>',
                    'nav_sub_links' =>[]
        ],

        [
            'id' => '5',
            'name' => 'About us',
            'state' => '3',
            'route' => route('about'),
            'active' => request()->routeIs('about'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>',
           'nav_sub_links' =>
                [
                    $sub_data =
                    [
                        [
                            'name' =>'About Us',
                            'state' => '1',
                            'route' => route('about'),
                            'active' => request()->routeIs('about'),
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>'
                        ],
                        [
                            'name' =>__('message.nav_sub_item1'),
                            'state' => '1',
                            'route' => route('book'),
                            'active' => request()->routeIs('book'),
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>'
                        ],
                        [
                            'name' => __('message.nav_sub_item2'),
                            'state' => '3',
                            'route' => route('confidence'),
                            'active' => request()->routeIs('confidence'),
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>'
                        ],
                        [
                            'name' => __('message.nav_sub_item3'),
                            'state' => '3',
                            'route' => route('conditions'),
                            'active' => request()->routeIs('conditions'),
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>'
                        ],
                        [
                            'name' => __('message.nav_sub_item5'),
                            'state' => '3',
                            'route' => route('blog'),
                            'active' => request()->routeIs('blog'),
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>'
                        ]
                    ]
                ]

        ],

        [
            'id' => '3',
            'name' => 'FAQ',
            'state' => '2',
            'route' => route('faq'),
            'active' => request()->routeIs('faq'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>',
                    'nav_sub_links' =>[]
        ]

    ];

@endphp


{{--],--}}
{{--,--}}
{{--[--}}
{{--'name' => __('message.nav_sub_item4'),--}}
{{--'state' => '3',--}}
{{--'route' => route('about'),--}}
{{--'active' => request()->routeIs('about'),--}}
{{--'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />--}}
{{--</svg>'--}}
{{--],--}}
{{--[--}}
{{--'id' => '4',--}}
{{--'name' => __('message.nav_item4'),--}}
{{--'state' => '3',--}}
{{--'route' => route('hotels'),--}}
{{--'active' => request()->routeIs('hotels'),--}}
{{--'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />--}}
{{--</svg>',--}}
{{--'nav_sub_links' => []--}}
{{--],--}}
{{--[--}}
{{--'id' => '6',--}}
{{--'name' => __('message.nav_item6'),--}}
{{--'state' => '3',--}}
{{--'route' => route('reviews'),--}}
{{--'active' => request()->routeIs('reviews'),--}}
{{--'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--</svg>',--}}
{{--'nav_sub_links' => []--}}
{{--],--}}
{{--[--}}
{{--'name' => __('message.nav_item7'),--}}
{{--'state' => '3',--}}
{{--'route' => route('responsability'),--}}
{{--'active' => request()->routeIs('responsability'),--}}
{{--'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />--}}
{{--</svg>',--}}
{{--'nav_sub_links' => []--}}
{{--],--}}
{{--[--}}
{{--'name' => __('message.nav_item2'),--}}
{{--'state' => '2',--}}
{{--'route' => route('tours'),--}}
{{--'active' => request()->routeIs('tours'),--}}
{{--'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />--}}
{{--</svg>',--}}
{{--'nav_sub_links' => []--}}
{{--],--}}

{{--    <div class="fixed bottom-0 right-0 z-40 py-6 px-7 mb-24 sm:mb-0 sm:inline-flex">--}}
{{--        <a href="https://api.whatsapp.com/send?phone=51936241194" target="_blank">--}}
{{--            <span class="flex relative h-10 w-10">--}}
{{--              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-400 opacity-75"></span>--}}
{{--            </span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="fixed bottom-0 right-0 z-40 py-5 px-4 mb-24 sm:mb-0 sm:inline-flex">--}}
{{--        <a href="https://api.whatsapp.com/send?phone=51936241194" target="_blank">--}}
{{--            <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="w-16">--}}
{{--        </a>--}}
{{--    </div>--}}


<div class="fixed bottom-0 right-0 z-40 py-6 px-7 sm:inline-flex mb-24 md:mb-0">
    <a href="https://api.whatsapp.com/send?phone=51936241194" target="_blank">
            <span class="flex relative h-10 w-10">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-400 opacity-75"></span>
            </span>
    </a>
</div>
<div class="fixed bottom-0 right-0 z-40 py-5 px-4 sm:inline-flex mb-24 md:mb-0">
    <a href="https://api.whatsapp.com/send?phone=51936241194" target="_blank">
        <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="w-16">
    </a>
</div>

<div x-data="{menu: false}">
    <div class="fixed bg-12 bottom-0 w-full z-30 sm:hidden">
{{--        @livewire('page.form-inquire')--}}
        <a href="#form-dream-adventure" class="btn-primary text-center w-full block">{{__('message.button_book')}}</a>
        <div class="menu-movil bg-gray-50 dark:bg-gray-800 flex gap-4 w-full mx-auto grid grid-cols-5 gap-3 text-center">
            @foreach($nav_links as $nav_link_m)
                @if($nav_link_m['state'] == 1 OR $nav_link_m['state'] == 2)
                    <div class="{{ $nav_link_m['active'] == 1 ? 'active' : '' }}">
                        <a href="{{ $nav_link_m['route'] }}" class="py-4 block">
                            {!! $nav_link_m['icon'] !!}
                        </a>
                    </div>
                @endif

            @endforeach
            <div class="cursor-pointer flex items-center" @click="menu = !menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                </svg>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 right-0 mb-16 w-9/12 mr-1 rounded-lg bg-gray-50 z-50" x-show="menu" x-transition x-on:click.away="menu = false" x-data="{menu2 : false}">
        @foreach($nav_links as $nav_link)
            @if($nav_link['nav_sub_links'])

                <span @click="menu2 = !menu2" class="w-full text-sm flex inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-700 hover:text-secondary menu-pop  {{ $nav_link['active'] == 1 ? 'active' : '' }}">
                    <span class="mr-2">
                    {!! $nav_link['icon'] !!}
                </span>
                                        {{ $nav_link['name'] }}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>

                <div class="bg-gray-200 absolute top-0 rounded-lg mt-16 w-72 z-50 shadow-lg" x-show="menu2" x-on:click.away="menu2 = false" x-transition>
                    <div class="font-bold text-gray-500 flex justify-between text-xs px-5 py-3">INFORMATION
                        <span class="ml-auto cursor-pointer" @click="menu2 = !menu2">X</span>
                    </div>


                    @foreach($nav_link['nav_sub_links'] as $nav_sub)

                        @foreach($sub_data as $sub_data_item)

                            <a href="{{ $sub_data_item['route'] }}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop {{ $sub_data_item['active'] == 1 ? 'active' : '' }}">
                                                    <span class="mr-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </span>
                                <span class="">
                                                        {{ $sub_data_item['name'] }}
                                                    </span>
                            </a>
                        @endforeach

                    @endforeach
                </div>
            @else
            <a href="{{ $nav_link['route'] }}" class="w-full text-sm flex inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-700 hover:text-secondary menu-pop {{ $nav_link['active'] == 1 ? 'active' : '' }}">
                <span class="mr-2">
                    {!! $nav_link['icon'] !!}
                </span>
                <span class="">
                    {{ $nav_link['name'] }}
                </span>
            </a>
            @endif
        @endforeach
    </div>

</div>

    <header>
        <div class="border-b dark:border-gray-900 dark:border-opacity-40  shadow p-4 bg-gray-50  items-center flex flex-wrap">
            <div class="mx-auto">
                <a href="/"><img src="https://gotolatam.s3.us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" alt="" class="w-full"></a>
            </div>
            <div class="flex-1 p-3 dark:text-gray-400 hidden sm:inline-block">
                <div class='console-container'>
                    <span id='text'></span>
                    <div class='console-underscore' id='console'>_</div>
                </div>
            </div>
            <div class="flex justify-end gap-4 items-center hidden sm:inline-flex">
                info@gotolatam.com
                <button id="switchTheme" class="h-10 w-10 flex justify-center items-center focus:outline-none text-gray-500">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>
                </button>

{{--                @livewire('page.form-inquire')--}}
{{--                @livewire('page.form-subscribe')--}}
                <a href="#form-dream-adventure" class="btn-secondary text-center">{{__('message.button_inquire')}}</a>
                <div class="dark:text-gray-400">
                    <span class="text-xs block text-right">US</span>
                    (202) 491-1478
                </div>
            </div>
        </div>
    </header>



    <nav class="banner-wrapper top-0 z-30 sticky">
        <div class="banner">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gray-50 opacity-90 shadow-lg dark:bg-gray-800 hidden md:inline-flex">
                <div class="container flex items-center justify-center mx-auto text-gray-600 capitalize relative" x-data="{menu : false, menu2: false, menu3: false}">
{{--                                        <a href="#" class="text-gray-800 text-sm dark:text-gray-200 border-b border-transparent transition duration-500 hover:border-blue-500 mx-1.5 sm:mx-6">Peru Travel Packages</a>--}}
                    <span @click="menu2 = !menu2" class="dark:text-gray-400 flex items-center menu-list block cursor-pointer {{ $nav_link['active'] == 1 ? 'active' : '' }}">
                                        By Country
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                    <div class="bg-gray-50 absolute top-0 left-0 rounded-lg mt-16 w-72 z-50 shadow" x-show="menu2" x-on:click.away="menu2 = false" x-transition>
                        <p class="font-bold text-gray-500 text-xs px-5 py-3">DESTINATIONS</p>



                        @foreach($pais2 as $paises)
                        <a href="{{ route('destinations.show', $paises) }}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop">
                            <div class="mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div class="">
                                {{ucwords(strtolower($paises->nombre))}}
                            </div>
                        </a>
                        @endforeach
                    </div>


                    <div class="relative">
                    <span @click="menu3 = !menu3" class="dark:text-gray-400 flex items-center menu-list block cursor-pointer {{ $nav_link['active'] == 1 ? 'active' : '' }}">
                                        Multi Countries
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                    <div class="bg-gray-50 absolute top-0 rounded-lg mt-16 w-72 z-50 shadow" x-show="menu3" x-on:click.away="menu3 = false" x-transition>
                        <p class="font-bold text-gray-500 text-xs px-5 py-3">INCLUDED</p>


                            <a href="{{route('country.show', 2)}}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop">
                                <div class="mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                                <div class="">
                                    2 Countries
                                </div>
                            </a>
                        <a href="{{route('country.show', 3)}}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop">
                            <div class="mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div class="">
                                3 Countries
                            </div>
                        </a>

                        <a href="{{route('country.show', 4)}}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop">
                            <div class="mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div class="">
                                4 Countries
                            </div>
                        </a>

                        <a href="{{route('packages.all')}}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop">
                            <div class="mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div class="">
                                All Packages
                            </div>
                        </a>

                    </div>
                    </div>

{{--                    <a href="{{route('country.show', 2)}}" class="dark:text-gray-400 menu-list block relative">--}}
{{--                        2 Countries--}}
{{--                    </a>--}}
{{--                    <a href="{{route('country.show', 3)}}" class="dark:text-gray-400 menu-list block relative">--}}
{{--                        3 Countries--}}
{{--                    </a>--}}
{{--                    <a href="{{route('country.show', 4)}}" class="dark:text-gray-400 menu-list block relative">--}}
{{--                        4 Countries--}}
{{--                    </a>--}}
                    @foreach($nav_links as $nav_link)
                        @if($nav_link['state'] > 1)
                            <div class="relative" >


                             @if($nav_link['nav_sub_links'])
                                    <span @click="menu = !menu" class="dark:text-gray-400 flex items-center menu-list block cursor-pointer {{ $nav_link['active'] == 1 ? 'active' : '' }}">
                                        {{ $nav_link['name'] }}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                <div class="bg-gray-50 absolute top-0 rounded-lg mt-16 w-72 z-50 shadow" x-show="menu" x-on:click.away="menu = false" x-transition>
                                    <p class="font-bold text-gray-500 text-xs px-5 py-3">INFORMATION</p>


                                    @foreach($nav_link['nav_sub_links'] as $nav_sub)

                                        @foreach($sub_data as $sub_data_item)

                                            <a href="{{ $sub_data_item['route'] }}" class="w-full text-sm flex items-center inline-flex transition-colors duration-200 block px-4 py-2 text-normal text-gray-500 rounded hover:bg-gray-700 hover:text-secondary menu-pop {{ $sub_data_item['active'] == 1 ? 'active' : '' }}">
                                                    <span class="mr-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </span>
                                                <span class="">
                                                        {{ $sub_data_item['name'] }}
                                                    </span>
                                            </a>
                                        @endforeach

                                    @endforeach
                                </div>
                                @else
                                    <a href="{{ $nav_link['route'] }}" class="dark:text-gray-400 menu-list block relative {{ $nav_link['active'] == 1 ? 'active' : '' }}">

                                        {{ $nav_link['name'] }}
                                    </a>
                                @endif
                            </div>

                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </nav>


    @yield('content')
{{--    {{$slot}}--}}

<section class="grid gap-12 bg-gray-100 py-6 grid-cols-8 dark:bg-gray-600 hidden md:inline-flex"><!--.row -->
    <div>
        <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/asta.png')}}"  alt="logo asta" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/expedia.png')}}"  alt="logo expedia" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/peru.png')}}"  alt="logo marca peru" class="px-3 w-full">
    </div>
    <div>
        <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="px-3 w-full">
    </div>
    {{--        <div>--}}
    {{--            <img src="https://www.gotoperu.com.pe/images/logos/tripadvisor.png" alt="logo tripadvisor" class="w-full dark:filter dark:grayscale">--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <img src="https://www.gotoperu.com.pe/images/logos/yelp.png" alt="logo yelp" class="w-full dark:filter dark:grayscale">--}}
    {{--        </div>--}}
</section>

    <footer class="relative bg-gray-800 dark:bg-gray-800 text-gray-500 dark:text-gray-50 pb-16">
        {{--        <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-gray-200 dark:text-gray-800" preserveAspectRatio="none" viewBox="0 0 1440 54">--}}
        {{--            <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>--}}
        {{--        </svg>--}}
        <div class="container pt-12">
            <div class="text-center mb-20  p-6">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <img src="{{asset('images/logos/logo-gotolatam-white.png')}}" alt="" class="mx-auto">
                </a>
                <span class="text-white px-3">part of</span>
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <img src="{{asset('images/logos/logo-gotoperu-white.png')}}" alt="" class="mx-auto">
                </a>
                <p class="mt-4 font-semibold text-secondary">CONTACT US ALSO VIA EMAIL: travel@gotolatam.com</p>
            </div>
            <div class="grid grid-cols-2 gap-4 dark:text-gray-300 md:grid-cols-5 mb-24">
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        {{__('message.nav_item1')}}
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{route('country.show', 2)}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">2 Countries</a>
                        </li>
                        <li>
                            <a href="{{route('country.show', 3)}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">3 Countries</a>
                        </li>
                        <li>
                            <a href="{{route('country.show', 4)}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">4 Countries</a>
                        </li>
                        <li>
                            <a href="{{route('packages.all')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">All Packages</a>
                        </li>
                        <li>
{{--                            @livewire('page.form-inquire')--}}
                        </li>

                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        {{__('message.nav_item3')}}
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{route('destinations.show', 'peru')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Peru</a>
                        </li>
                        <li>
                            <a href="{{route('destinations.show', 'colombia')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Colombia</a>
                        </li>
                        <li>
                            <a href="{{route('destinations.show', 'ecuador')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Ecuador</a>
                        </li>
                        <li>
                            <a href="{{route('destinations.show', 'chile')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Chile</a>
                        </li>
                        <li>
                            <a href="{{route('destinations.show', 'bolivia')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Bolivia</a>
                        </li>
                        <li>
                            <a href="{{route('destinations.show', 'argentina')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Argentina</a>
                        </li>
                        <li>
                            <a href="{{route('destinations.show', 'brasil')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Brasil</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">{{__('message.nav_item4')}}</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{route('hotels')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">2 {{__('message.foorer_par2')}}</a>
                        </li>
                        <li>
                            <a href="{{route('hotels')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">3 {{__('message.foorer_par2')}}</a>
                        </li>
                        <li>
                            <a href="{{route('hotels')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">4 {{__('message.foorer_par2')}}</a>
                        </li>
                        <li>
                            <a href="{{route('hotels')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">5 {{__('message.foorer_par2')}}</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        {{__('message.nav_item8')}}
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{route('book')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">{{__('message.nav_sub_item1')}}</a>
                        </li>
                        <li>
                            <a href="{{route('confidence')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">{{__('message.nav_sub_item2')}}</a>
                        </li>
                        <li>
                            <a href="{{route('conditions')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">{{__('message.nav_sub_item3')}}</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">{{__('message.nav_sub_item4')}}</a>
                        </li>
                        <li>
                            <a href="{{route('faq')}}" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">{{__('message.nav_sub_item6')}}</a>
                        </li>
                    </ul>
                </div>
                <div>

                    <div class="bg-gray-900 p-4 rounded-lg shadow-inner">
{{--                        <p class="mb-2 text-gray-300">--}}
{{--                            {{__('message.footer_par1')}}--}}
{{--                            Contact a South America travel expert--}}
{{--                            We always aim to reply within 24 hours.--}}
{{--                        </p>--}}
                        <img src="{{asset('images/fiorella.jpg')}}" alt="">
                        <a href="#form-dream-adventure" class="btn-primary lg:px-4 block text-center ">Contact Us</a>
{{--                                                    @livewire('page.form-inquire')--}}
                    </div>
                </div>

                {{--                <div class="md:max-w-md lg:col-span-2">--}}
                {{--                    <div class="mt-4 lg:max-w-sm">--}}
                {{--                        <p class="text-sm text-deep-purple-50">--}}
                {{--                            As an agent of change, you have the power to change the world.--}}
                {{--                        </p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

            <div class="flex flex-col justify-between pt-5 sm:flex-row">
                <p class="text-sm dark:text-gray-300">
                    <span class="font-semibold">PERU MAIN OFFICE:</span>  Avenida El Sol 449 . Cusco , Cusco , Peru | <span class="font-semibold">USA OFFICE:</span>  501 E Kennedy Blvd, Tampa, FL 33602
                </p>
            </div>

            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-500 sm:flex-row">
                <p class="text-sm dark:text-gray-300">
                    © Copyright 2021 GotoPeru. All rights reserved.
                </p>
{{--                <div class="flex items-center mt-4 space-x-4 sm:mt-0">--}}
{{--                    <a href="/" class="transition-colors duration-300 text-blue-100 hover:text-blue-400">--}}
{{--                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">--}}
{{--                            <path--}}
{{--                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"--}}
{{--                            ></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                    <a href="/" class="transition-colors duration-300 text-gray-300 hover:text-gray-600">--}}
{{--                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">--}}
{{--                            <circle cx="15" cy="15" r="4"></circle>--}}
{{--                            <path--}}
{{--                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"--}}
{{--                            ></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                    <a href="/" class="transition-colors duration-300 text-blue-400 hover:text-blue-600">--}}
{{--                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">--}}
{{--                            <path--}}
{{--                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"--}}
{{--                            ></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </footer>
@livewireScripts


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('vendor/intl-tel-input/build/js/utils.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
@stack('scripts')
<script>
    (() => {
        'use strict';

        let refOffset = 0;
        const bannerHeight = 77;
        const bannerWrapper = document.querySelector('.banner-wrapper');
        const banner = document.querySelector('.banner');

        const handler = () => {
            const newOffset = window.scrollY || window.pageYOffset;

            if (newOffset > bannerHeight) {
                if (newOffset > refOffset) {
                    bannerWrapper.classList.remove('animateIn');
                    bannerWrapper.classList.add('animateOut');
                } else {
                    bannerWrapper.classList.remove('animateOut');
                    bannerWrapper.classList.add('animateIn');
                }
                // banner.style.background = 'rgba(162, 197, 35, 0.6)';
                refOffset = newOffset;
            } else {
                // banner.style.backgroundColor = 'rgba(162, 197, 35, 1)';
            }
        };

        window.addEventListener('scroll', handler, false);
    })();

    // function([string1, string2],target id,[color1,color2])
    consoleText(['Part of gotoperu group','Go to Peru', 'Go to Ecuador', 'Go to Chile', 'Go to Colombia', 'Go to Brasil', 'Go to Argentina', 'Go to Bolivia'], 'text',['#f9a825','#585858','#7F8429','#f9a825']);

    function consoleText(words, id, colors) {
        if (colors === undefined) colors = ['#fff'];
        var visible = true;
        var con = document.getElementById('console');
        var letterCount = 1;
        var x = 1;
        var waiting = false;
        var target = document.getElementById(id)
        target.setAttribute('style', 'color:' + colors[0])
        window.setInterval(function() {

            if (letterCount === 0 && waiting === false) {
                waiting = true;
                target.innerHTML = words[0].substring(0, letterCount)
                window.setTimeout(function() {
                    var usedColor = colors.shift();
                    colors.push(usedColor);
                    var usedWord = words.shift();
                    words.push(usedWord);
                    x = 1;
                    target.setAttribute('style', 'color:' + colors[0])
                    letterCount += x;
                    waiting = false;
                }, 1000)
            } else if (letterCount === words[0].length + 1 && waiting === false) {
                waiting = true;
                window.setTimeout(function() {
                    x = -1;
                    letterCount += x;
                    waiting = false;
                }, 1000)
            } else if (waiting === false) {
                target.innerHTML = words[0].substring(0, letterCount)
                letterCount += x;
            }
        }, 100)
        window.setInterval(function() {
            if (visible === true) {
                con.className = 'console-underscore hidden'
                visible = false;

            } else {
                con.className = 'console-underscore'

                visible = true;
            }
        }, 400)
    }

    document.getElementById('switchTheme').addEventListener('click', function() {

        let htmlClasses = document.querySelector('html').classList;
        let elem = document.getElementById('switchTheme');
        if(sessionStorage.theme === 'dark') {
            elem.classList.remove('text-yellow-500');
            elem.classList.add('text-gray-500');
            htmlClasses.remove('dark');
            sessionStorage.removeItem('theme')
        } else {
            elem.classList.add('text-yellow-500');
            elem.classList.remove('text-gray-500');
            htmlClasses.add('dark');
            sessionStorage.theme = 'dark';
        }
    });

</script>
<!-- begin olark code -->
{{--<script type="text/javascript">--}}
{{--    ;(function(o,l,a,r,k,y){if(o.olark)return;--}}
{{--        r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];--}}
{{--        y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);--}}
{{--        y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};--}}
{{--        y.extend=function(i,j){y("extend",i,j)};--}}
{{--        y.identify=function(i){y("identify",k.i=i)};--}}
{{--        y.configure=function(i,j){y("configure",i,j);k.c[i]=j};--}}
{{--        k=y._={s:[],t:[+new Date],c:{},l:a};--}}
{{--    })(window,document,"static.olark.com/jsclient/loader.js");--}}
{{--    /* Add configuration calls below this comment */--}}
{{--    olark.identify('3451-852-10-3654');</script>--}}
<!-- end olark code -->

</body>
</html>
