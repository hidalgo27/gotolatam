@extends('layouts.page-layout')

@section('content')
    <section class="-mt-32 h-80vh -z-1 relative">
        <img src="{{ asset('images/team/banner5.webp') }}" alt="" class="h-full w-full object-cover object-top">
        <div class="absolute bottom-0 left-0 p-12">
            <h1 class="text-5xl font-semibold text-gray-50">Our Team</h1>
        </div>
    </section>

    <section class="bg-primary">
        <main class="container py-24 text-gray-50">
            <h1 class="italic text-4xl mb-6 font-playfair">Our Team</h1>
            <div class="xl:w-2/3 gap-2 leading-relaxed">
                <p>
                    The driving force behind GOTOGROUP is our incredible team; an enthusiastic and diverse group of
                    individuals
                    united by a love for Latin America and a belief in the transformative power of travel. We are more than
                    just
                    travel agents; we serve as cultural ambassadors, adventure partners, and committed collaborators in
                    crafting
                    your dream vacation.
                </p>
                <p class="mt-4">
                    For us, travel embodies the essence of making genuine connections: understanding the intricacies of
                    local
                    life, mingling with communities, and discovering a place's true character. This philosophy guides every
                    member
                    of the GOTOGROUP team, from initial planning to on-the-ground support. We're here to create bespoke
                    excursions
                    that showcase Latin America and allow you to experience it firsthand, leaving you with memories that
                    will
                    endure long after you return.
                </p>
                <p class="mt-4">
                    Discover the dedicated individuals who comprise the GOTOGROUP family and are happy to share their love
                    for
                    Latin America with you.
                </p>
            </div>
        </main>
    </section>

    <section class="container py-12">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse($teams as $member)
                <div class="p-4">
                    <a href="{{ route('member', $member['id']) }}">
                        <div class="relative overflow-hidden mb-6 group">
                            <img src="{{ $member['imagen_perfil'] ?? asset('images\team\icono-perfil.webp') }}"
                                class="w-full h-full object-cover transition duration-500 ease-in-out transform group-hover:scale-105"
                                alt="{{ $member['nombre'] }}" />
                        </div>
                        <h3 class="md:text-lg font-semibold">{{ $member['nombre'] }}</h3>
                        <p class="text-xs md:text-sm text-gray-600">{{ $member['cargo'] }}</p>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">No team members available at the moment.</p>
                </div>
            @endforelse
        </div>
    </section>
@endsection
