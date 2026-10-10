@props([
    'paquete', 'campaign' => null, 'heroImages' => [], 'heroDestinations',
    'heroTitle', 'heroCtaLabel' => 'Request a Quote', 'hasCampaignPrice' => false,
    'hasDisplayPrice' => false, 'displayPrice' => null, 'campaignOriginalPrice' => null,
    'campaignSavings' => null, 'campaignPriceCategory' => null,
    'showPackageBooking' => false, 'formatDisplayPrice', 'showPricesAndHotels' => true,
])

<section class="package-hero bg-gray-900 text-gray-50{{ $campaign ? ' campaign-hero' : '' }}" aria-labelledby="package-hero-title">
        <div class="swiper mySwiper2 package-hero__gallery">
            <div class="swiper-wrapper">
                @foreach ($heroImages as $destino_imagen)
                    <div class="swiper-slide">
                        <img src="{{ $destino_imagen['nombre'] }}" alt="{{ $heroTitle }}"
                            class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="package-hero__shade" aria-hidden="true"></div>

        <div class="container package-shell package-hero__content">
            <div class="package-hero__identity">
                @if (!$campaign)
                    <p class="package-hero__duration inline-flex items-center gap-2 text-sm font-semibold">
                        <svg class="h-5 w-5 flex-shrink-0 text-secondary" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/> </svg>
                        {{ $paquete['duracion'] }} {{ __('message.pack_par4') }}
                    </p>
                @elseif (filled($campaign->offer_label))
                    <p class="campaign-hero__eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-wider text-secondary">
                        <span aria-hidden="true" class="inline-flex flex-shrink-0 items-center gap-1"><span class="h-2.5 w-1 bg-secondary"></span><span class="h-2.5 w-3 bg-secondary"></span><span class="h-2.5 w-5 bg-secondary"></span></span>
                        {{ $campaign->offer_label }}
                    </p>
                @endif
                <h1 id="package-hero-title" class="package-hero__title font-semibold drop-shadow">{{ $heroTitle }}</h1>
                @if (filled($campaign->subtitle ?? null))
                    <p class="campaign-hero__subtitle mt-4 text-base leading-relaxed text-white/90">{{ $campaign->subtitle }}</p>
                @endif
                @if ($campaign)
                    <div class="campaign-hero__metadata mt-5 flex flex-wrap items-start gap-x-5 gap-y-2 text-xs leading-relaxed text-white/80">
                        <p class="package-hero__duration inline-flex flex-shrink-0 items-center gap-2">
                            <svg class="h-4 w-4 flex-shrink-0 text-secondary" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/> </svg>
                            {{ $paquete['duracion'] }} {{ __('message.pack_par4') }}
                        </p>
                        @if ($heroDestinations->isNotEmpty())
                            <div class="package-hero__destinations flex min-w-0 items-start gap-2">
                                <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/> <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/> </svg>
                                <p>{{ $heroDestinations->implode(' • ') }}</p>
                            </div>
                        @endif
                    </div>
                @elseif ($heroDestinations->isNotEmpty())
                    <div class="package-hero__destinations flex items-start gap-2 leading-relaxed">
                        <svg class="h-5 w-5 flex-shrink-0" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/> <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/> </svg>
                        <p>{{ $heroDestinations->implode(' • ') }}</p>
                    </div>
                @endif

                @if ($showPricesAndHotels)
                <div class="package-hero__offer text-sm">
                    @if ($hasCampaignPrice)
                        <div class="flex flex-wrap items-end gap-x-7 gap-y-4">
                            @if ($campaignOriginalPrice !== null)
                                <div class="pb-1 text-white/70">
                                    <span class="mb-1 block text-xs uppercase tracking-wider">Was</span>
                                    <del class="text-lg tabular-nums">{{ $formatDisplayPrice($campaignOriginalPrice) }}</del>
                                </div>
                            @endif
                            <div>
                                <span class="mb-1 block text-xs uppercase tracking-wider text-white/80">{{ $campaignOriginalPrice !== null ? 'Now' : 'From' }}</span>
                                <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                                    <strong class="text-4xl font-semibold leading-tight tabular-nums text-secondary sm:text-5xl">{{ $formatDisplayPrice($displayPrice) }}</strong>
                                    <span class="text-xs text-white/80">per person USD</span>
                                </div>
                            </div>
                        </div>
                        @if ($campaignSavings > 0)
                            <p class="mt-3 text-sm text-white/90">Save <span class="font-semibold">{{ $formatDisplayPrice($campaignSavings) }}</span> per person</p>
                        @endif
                        @if ($campaignPriceCategory)
                            <p class="mt-2 text-xs text-white/70">{{ $campaignPriceCategory }}</p>
                        @endif
                    @elseif ($hasDisplayPrice)
                        <p class="flex flex-wrap items-baseline gap-2">
                            <span>From</span>
                            <strong class="text-2xl font-semibold">{{ $formatDisplayPrice($displayPrice) }}</strong>
                            <span>per person <span class="text-xs">USD</span></span>
                        </p>
                    @else
                        <p class="package-hero__pricing-note text-xs">Contact us for pricing</p>
                    @endif
                </div>
                @endif

                <div class="package-hero__actions">
                    <a href="#form-dream-adventure" data-quote-source="hero" class="btn-secondary text-center">{{ $heroCtaLabel }}</a>
                    @if ($showPackageBooking)
                        <button class="wtrvl-checkout_button btn-white inline-flex items-center justify-center" id="wetravel_button_widget" data-book-source="hero"
                            data-env="https://www.wetravel.com" data-version="v0.2" data-uid="239346"
                            data-uuid="{{ $paquete['codigo_f'] }}"
                            href="https://www.wetravel.com/checkout_embed?uuid={{ $paquete['codigo_f'] }}">Book
                            Now</button>
                    @endif
                </div>

                <a href="#package-journey" class="package-hero__scroll inline-flex items-center gap-3 text-xs hover:text-secondary">
                    <span>Explore the journey</span>
                    <svg class="h-5 w-5" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/> </svg>
                </a>
            </div>
        </div>

        <div class="package-hero__gallery-controls">
            @foreach ($heroImages as $destino_imagen)
                <a class="venobox @if ($loop->first) btn-white inline-flex items-center gap-2 @endif"
                    data-gall="packageHeroGallery" href="{{ $destino_imagen['nombre'] }}"
                    data-title="{{ $heroTitle }}" @if (!$loop->first) hidden @endif>
                    @if ($loop->first)
                        <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/> </svg>
                        View Gallery
                    @endif
                </a>
            @endforeach
            <div class="package-hero__pagination text-xs font-semibold" role="group" aria-label="Gallery position" hidden>
                <span data-package-slide-current></span>
                <span class="package-hero__progress" aria-hidden="true"><span class="package-hero__progress-fill bg-secondary"></span></span>
                <span data-package-slide-total></span>
            </div>
        </div>
    </section>
