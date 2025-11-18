{{-- resources/views/components/package-hero-card.blade.php --}}

@props([
    'categoryChips'      => [],   // opcional, por ahora lo usaremos vacío
    'extraCount'         => null,
    'title'              => '',
    'subtitle'           => null,
    'daysLabel'          => null,
    'priceLabel'         => null,
    'cta'                => 'Get a Quote',
    'ctaSecondaryLabel'  => null,
    'ctaSecondaryTo'     => null,
    'termsTo'            => null,
])

<div class="absolute z-20 bottom-12 left-1/2 -translate-x-1/2 w-[94vw] sm:w-auto sm:left-10 sm:translate-x-0">
    <article
        class="flex flex-col sm:flex-row items-start sm:items-center justify-between
               gap-4 sm:gap-6 md:gap-10
               rounded-3xl ring-1 ring-quaternary ring-opacity-20
               bg-quaternary bg-opacity-10
               backdrop-blur-sm text-white
               shadow-[0_20px_60px_rgba(0,0,0,.35)]
               p-5 sm:p-6 md:p-8 relative overflow-hidden max-w-[96vw] sm:max-w-4xl"
    >
        {{-- halo/acento --}}
        <div class="pointer-events-none absolute -top-16 -left-16 w-48 h-48 rounded-full bg-quaternary bg-opacity-10 blur-2xl"></div>

        {{-- Columna izquierda --}}
        <div class="flex-1 min-w-0">
            {{-- Chips de categorías (por ahora puedes pasar []) --}}
            @if (!empty($categoryChips))
                <div class="mb-2 flex flex-wrap items-center gap-2">
                    @foreach ($categoryChips as $c)
                        @php
                            // soportar array o objeto
                            $slug = is_array($c) ? ($c['slug'] ?? '') : ($c->slug ?? '');
                            $name = is_array($c) ? ($c['name'] ?? '') : ($c->name ?? '');
                        @endphp

                        <a
                            href="{{ url('/category/' . $slug) }}"
                            class="chip chip-ghost-white"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="w-3.5 h-3.5">
                                <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/>
                                <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/>
                            </svg>
                            <span class="uppercase">{{ $name }}</span>
                        </a>
                    @endforeach

                    @if (!empty($extraCount))
                        <span
                            class="inline-flex items-center rounded-full bg-white/25 ring-1 ring-white/30 px-2 py-0.5 text-[11px] font-semibold text-neutral-800"
                        >
                            +{{ $extraCount }}
                        </span>
                    @endif
                </div>
            @endif

            {{-- Título + subtítulo --}}
            <h1
                class="font-serif text-md sm:text-3xl font-semibold leading-snug  tracking-wide drop-shadow-[0_2px_10px_rgba(0,0,0,.25)]"
            >
                {{ $title }}
            </h1>

            @if (!empty($subtitle))
                <p class="md:text-sm text-xs text-white/80 ">
                    {{ $subtitle }}
                </p>
            @endif

            {{-- Días --}}
            @if (!empty($daysLabel))
                <div class="mt-2 text-xs sm:text-sm text-white/80">
                    {{ $daysLabel }}
                </div>
            @endif
        </div>

        {{-- Columna derecha: precio + botones --}}
        <div class="flex md:flex-col items-center justify-between w-full md:w-auto md:items-end text-right shrink-0">
            @if (!empty($priceLabel))
                <div class="text-right">
                    <div class="text-[11px] uppercase tracking-wide text-white/80">
                        Price p.p. from
                    </div>
                    <div class="flex items-baseline justify-end gap-1">
                        <span class="text-xl sm:text-4xl font-extrabold">
                            $ {{ is_numeric($priceLabel) ? number_format($priceLabel, 0, '.', ',') : $priceLabel }}
                        </span>
                        <span class="text-[11px] uppercase text-white/70">
                            USD
                        </span>
                    </div>
                </div>
            @endif

            {{-- Botones --}}
            <div class="mt-3 flex items-center gap-2">
                <button
                    type="button"
                    class="btn btn-secondary btn-lg"
                    onclick="document.getElementById('form-dream-adventure')?.scrollIntoView({ behavior: 'smooth', block: 'start' });"
                >
                    {{ $cta }}
                </button>

                @if (!empty($ctaSecondaryLabel) && !empty($ctaSecondaryTo))
                    <a
                        href="{{ $ctaSecondaryTo }}"
                        class="btn btn-quaternary btn-lg"
                    >
                        {{ $ctaSecondaryLabel }}
                    </a>
                @endif
            </div>

            @if (!empty($termsTo))
                <a
                    href="{{ $termsTo }}"
                    class="btn-link btn-link-sm mt-1 btn-link-secondary"
                >
                    See terms
                </a>
            @endif
        </div>
    </article>
</div>
