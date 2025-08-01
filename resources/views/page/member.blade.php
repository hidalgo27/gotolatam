{{-- resources/views/page/team-member.blade.php --}}
@extends('layouts.page-layout')

@section('content')
    <section class="container py-24 flex flex-col lg:flex-row gap-8 items-center">
        <main class="lg:w-2/3">
            <h1 class="italic text-4xl mb-6 font-playfair">{{ $member->nombre }}</h1>
            <div class="gap-2 leading-relaxed">
                @if ($member->cargo)
                    <p class="text-xl">{{ $member->cargo }}</p>
                @endif

                {{-- @if ($member->actividad)
                    <p class="mt-4 italic font-bold leading-relaxed tracking-wide">
                        {{ $member->actividad }}
                    </p>
                @endif --}}

                @if ($member->descripcion)
                    <p class="mt-4">{{ $member->descripcion }}</p>
                @endif

                @if ($member->favorite_travel_memory || $member->fun_facts || $member->favorite_quote)
                    <ul class="mt-4 space-y-2 list-disc pl-5">
                        @if ($member->favorite_travel_memory)
                            <li>
                                <span class="font-bold">FAVORITE TRAVEL MEMORY:</span>
                                {{ $member->favorite_travel_memory }}
                            </li>
                        @endif

                        @if ($member->fun_facts)
                            <li>
                                <span class="font-bold">FUN FACT:</span>
                                {{ $member->fun_facts }}
                            </li>
                        @endif

                        @if ($member->favorite_quote)
                            <li>
                                <span class="font-bold">FAVORITE QUOTE:</span>
                                {{ $member->favorite_quote }}
                            </li>
                        @endif
                    </ul>
                @endif

                @if ($member->frase)
                    <p class="italic font-light mt-4">{{ $member->frase }}</p>
                @endif
            </div>
        </main>

        <aside class="lg:w-1/3 flex items-center justify-center">
            <img src="{{ $member->imagen_perfil ?? asset('images\team\icono-perfil.webp') }}"
                class="w-full max-w-md h-auto rounded-sm object-cover"
                alt="{{ $member->nombre ? $member->nombre . ' photo' : 'Team member photo' }}" />
        </aside>
    </section>
@endsection
