<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">

    @livewireStyles

    @stack('css')

    {{--    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">--}}
    <style>
        .banner-wrapper {
            /*z-index: 99;*/
            transition: all 300ms ease-in-out;
            width: 100%;
        }
        .banner {
            width: 100%;

            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            /*background: rgba(162, 197, 35, 1);*/
            transition: all 300ms ease-in-out;
        }
        .animateIn{
            transform: translateY(0px);
        }

        .animateOut{
            transform: translateY(-100%);
        }

        .console-container {


        }
        .console-underscore {
            display:inline-block;
            position:relative;
            left:5px;
        }

    </style>
    <script>
        // if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        //     document.querySelector('html').classList.add('dark')
        // } else if (localStorage.theme === 'dark') {
        //     document.querySelector('html').classList.add('dark')
        // }
        // if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        //     let elem = document.getElementById('switchTheme');
        //     document.documentElement.classList.add('dark')
        // } else {
        //     let elem = document.getElementById('switchTheme');
        //     document.documentElement.classList.remove('dark')
        //
        // }

        (function () {
            const html = document.documentElement;
            const btn  = document.getElementById('switchTheme');

            // 1) Al cargar, fuerza modo claro
            html.classList.remove('dark');
            sessionStorage.removeItem('theme');

            // 2) Si alguna parte del código intenta agregar 'dark', la quitamos al instante
            new MutationObserver(() => {
                if (html.classList.contains('dark')) {
                    html.classList.remove('dark');
                }
            }).observe(html, { attributes: true, attributeFilter: ['class'] });

            // 3) El botón ya no activa dark; solo asegura estilos del ícono
            if (btn) {
                btn.classList.remove('text-yellow-500');
                btn.classList.add('text-gray-500');

                btn.addEventListener('click', function (e) {
                    e.preventDefault(); // no hacemos toggle
                    html.classList.remove('dark');
                    sessionStorage.removeItem('theme');
                    // opcional: mostrar un toast "Dark mode disabled"
                });
            }
        })();

    </script>

</head>
<body class="bg-white dark:bg-gray-800">
<div id="app" class="relative">
    {{--    <div class="fixed z-40 p-8">--}}
    {{--        <button onclick="openModal(true)" class="rounded text-gray-50 focus:outline-none">--}}
    {{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
    {{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />--}}
    {{--            </svg>--}}
    {{--        </button>--}}
    {{--    </div>--}}



    <div class="fixed bottom-0 right-0 z-40 py-6 px-7">
        <a href="https://api.whatsapp.com/send?phone=51958123295" target="_blank">
            <span class="flex relative h-10 w-10">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-400 opacity-75"></span>
{{--              <span class="relative inline-flex rounded-full h-10 w-10 bg-gray-500"></span>--}}
            </span>
        </a>
    </div>
    <div class="fixed bottom-0 right-0 z-40 py-5 px-4">
        <a href="https://api.whatsapp.com/send?phone=51958123295" target="_blank">
            <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="w-16">
        </a>
    </div>
    <header>
        <div class="border-b dark:border-gray-900 dark:border-opacity-40  shadow p-4 bg-gray-50 dark:bg-gray-800 items-center flex flex-wrap">
            <div class="">
                <a href="/"><img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" alt="" class="w-full"></a>
            </div>
            <div class="flex-1 p-3 dark:text-gray-400">
                {{--                Go with the Experts--}}
                <div class='console-container'>
                    <span id='text'></span>
                    <div class='console-underscore' id='console'>_</div>
                </div>
            </div>
            <div class="flex justify-end gap-4 items-center invisible sm:visible">
{{--                <button id="switchTheme" class="h-10 w-10 flex justify-center items-center focus:outline-none text-gray-500">--}}
{{--                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>--}}
{{--                </button>--}}
                <a href="#"  class="btn-primary">Inquire Now</a>
                <a href="#"  class="btn-secondary">Subscribe Now</a>
{{--                <subscribe-component></subscribe-component>--}}
                <div class="dark:text-gray-400">
                    <span class="text-xs block text-right">USA/Canada</span>
                    202 246 2282
                </div>
            </div>
        </div>
    </header>

    @php
        $nav_links = [
            [
                'name' => 'Paquetes turísticos',
                'route' => route('packages'),
                'active' => request()->routeIs('packages.*')
            ],
            [
                'name' => 'Only Tours',
                'route' => "#",
                'active' => ""
            ],
            [
                'name' => 'Destination',
                'route' => route('destinations'),
                'active' => request()->routeIs('destinations.*')
            ],
            [
                'name' => 'Holels',
                'route' => route('hotels'),
                'active' => request()->routeIs('hotels')
            ],
            [
                'name' => 'About Us',
                'route' => route('about'),
                'active' => request()->routeIs('about')
            ],
            [
                'name' => 'Reviews',
                'route' => "#",
                'active' => ""
            ],
            [
                'name' => 'Social Responsability',
                'route' => "#",
                'active' => ""
            ],

        ];
    @endphp

    <nav class="banner-wrapper sticky top-0 z-30 hidden sm:inline-block">
        <div class="banner">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gray-50 opacity-90 shadow-lg dark:bg-gray-800">
                <div class="container flex items-center justify-center mx-auto text-gray-600 capitalize dark:text-gray-300">
                    {{--                    <a href="#" class="text-gray-800 text-sm dark:text-gray-200 border-b border-transparent transition duration-500 hover:border-blue-500 mx-1.5 sm:mx-6">Peru Travel Packages</a>--}}
                    @foreach($nav_links as $nav_link)
                        <a href="{{ $nav_link['route'] }}" class="menu-list {{ $nav_link['active'] == 1 ? 'active' : '' }}">{{ $nav_link['name'] }}</a>
                    @endforeach
                </div>
            </div>

        </div>
    </nav>


    {{$slot}}

    <section class="grid gap-8 py-12 mt-12 bg-gray-500 bg-opacity-10 grid-cols-12"><!--.row -->
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/apavit.png" alt="logo apavit" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/apotur.png" alt="logo apotur" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/asta.png"  alt="logo asta" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/expedia.png"  alt="logo expedia" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/facebook.png"  alt="logo facebook" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/meetup.png" alt="logo meetup" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/new.png" alt="logo the new york times" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/peru.png"  alt="logo marca peru" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/prom-peru.png" alt="logo prom peru" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/tripadvisor.png" alt="logo tripadvisor" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/yelp.png" alt="logo yelp" class="w-full">
        </div>
        <div>
            <img src="https://www.gotoperu.com.pe/images/logos/youtube.png" alt="logo youtube" class="w-full">
        </div>
    </section>

    <footer class="relative bg-gray-200 dark:bg-gray-800 text-gray-500 dark:text-gray-50 pb-16">
        {{--        <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-gray-200 dark:text-gray-800" preserveAspectRatio="none" viewBox="0 0 1440 54">--}}
        {{--            <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>--}}
        {{--        </svg>--}}
        <div class="px-24 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-24">
            <div class="text-center mb-20">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-white.png" alt="" class="mx-auto">
                </a>
            </div>


            <div class="grid grid-cols-6 mb-24">
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        Category
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">News</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">World</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Games</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">References</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        Category
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">News</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">World</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Games</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">References</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Web</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">eCommerce</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Business</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Entertainment</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Portfolio</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Media</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Brochure</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Nonprofit</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Educational</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Projects</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        Business
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Infopreneur</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Personal</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Wiki</a>
                        </li>
                        <li>
                            <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Forum</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-secondary mb-6">
                        Category
                    </p>
                    <div class="bg-gray-900 p-4 rounded-lg shadow-inner">
                        <p>
                            As an agent of change, you have the power to change the world.
                        </p>
                        <a href="" class="btn-primary lg:px-4 block text-center mt-4">Contact Us</a>
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

            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
                <p class="text-sm dark:text-gray-100">
                    © Copyright 2021 GotoPeru. All rights reserved.
                </p>
                <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                    <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                            ></path>
                        </svg>
                    </a>
                    <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                            ></path>
                        </svg>
                    </a>
                    <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                            ></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
@livewireScripts

<script src="{{asset('js/app.js')}}"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
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

</script>
<script type="text/javascript">
    // function([string1, string2],target id,[color1,color2])
    consoleText(['Go with the Experts', 'Vamos a Perú', 'Vamos a Italia'], 'text',['#585858','#7F8429','#f9a825']);

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
</script>
<script>
    // document.getElementById('switchTheme').addEventListener('click', function() {
    //
    //     let htmlClasses = document.querySelector('html').classList;
    //     let elem = document.getElementById('switchTheme');
    //     if(localStorage.theme === 'dark') {
    //         elem.classList.remove('text-yellow-500');
    //         elem.classList.add('text-gray-500');
    //         htmlClasses.remove('dark');
    //         localStorage.removeItem('theme')
    //     } else {
    //         elem.classList.add('text-yellow-500');
    //         elem.classList.remove('text-gray-500');
    //         htmlClasses.add('dark');
    //         localStorage.theme = 'dark';
    //     }
    // });
    (function () {
        const html = document.documentElement;
        const btn  = document.getElementById('switchTheme');

        // 1) Al cargar, fuerza modo claro
        html.classList.remove('dark');
        sessionStorage.removeItem('theme');

        // 2) Si alguna parte del código intenta agregar 'dark', la quitamos al instante
        new MutationObserver(() => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
            }
        }).observe(html, { attributes: true, attributeFilter: ['class'] });

        // 3) El botón ya no activa dark; solo asegura estilos del ícono
        if (btn) {
            btn.classList.remove('text-yellow-500');
            btn.classList.add('text-gray-500');

            btn.addEventListener('click', function (e) {
                e.preventDefault(); // no hacemos toggle
                html.classList.remove('dark');
                sessionStorage.removeItem('theme');
                // opcional: mostrar un toast "Dark mode disabled"
            });
        }
    })();
</script>


</body>
</html>
