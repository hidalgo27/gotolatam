@extends('layouts.page-layout')
@section('content')
<div class="package-detail" data-package-detail>
    @php
        $packageIcons = [
            'heroicon-o-arrow-down' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/> </svg>',
            'heroicon-o-arrow-left' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/> </svg>',
            'heroicon-o-arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/> </svg>',
            'heroicon-o-bell' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/> </svg>',
            'heroicon-o-calendar' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/> </svg>',
            'heroicon-o-check' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/> </svg>',
            'heroicon-o-check-circle' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/> </svg>',
            'heroicon-o-chevron-down' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/> </svg>',
            'heroicon-o-flag' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/> </svg>',
            'heroicon-o-globe-alt' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/> </svg>',
            'heroicon-o-location-marker' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/> <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/> </svg>',
            'heroicon-o-map' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/> </svg>',
            'heroicon-o-minus' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"/> </svg>',
            'heroicon-o-minus-circle' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/> </svg>',
            'heroicon-o-office-building' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/> </svg>',
            'heroicon-o-paper-airplane' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/> </svg>',
            'heroicon-o-star' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/> </svg>',
            'heroicon-o-switch-horizontal' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/> </svg>',
            'heroicon-o-ticket' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/> </svg>',
            'heroicon-o-view-grid' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/> </svg>',
            'heroicon-o-wifi' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/> </svg>',
            'heroicon-s-star' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>',
        ];
        $packageIcon = static function ($name, $classes = '', array $attributes = []) use ($packageIcons) {
            return str_replace('<svg ', '<svg class="' . e($classes) . '" ', $packageIcons[$name] ?? $packageIcons['heroicon-o-check']);
        };
    @endphp
    @php
        $showPricesAndHotels = false;
        $heroDestinations = collect($paquete['paquetes_destinos'] ?? [])
            ->map(function ($destination) {
                $name = data_get($destination, 'destinos.nombre');
                return is_string($name) ? trim($name) : null;
            })
            ->filter()
            ->unique(fn($name) => mb_strtolower($name))
            ->values();
        $heroPrice = ($paquete['is_p_t'] ?? null) == 1
            ? data_get(collect($paquete['precio_paquetes'] ?? [])->firstWhere('estrellas', 3), 'precio_d')
            : ($paquete['precio_tours'] ?? null);
        $precios = collect($paquete->precio_paquetes ?? ($paquete['precio_paquetes'] ?? []));
        $byStars = $precios->keyBy(fn($p) => is_array($p) ? $p['estrellas'] ?? null : $p->estrellas ?? null);
        $packageCategoryPrices = [
            2 => (float) ($paquete->precio_tours ?? 0),
            3 => (float) data_get($byStars->get(3), 'precio_d', 0),
            4 => (float) data_get($byStars->get(4), 'precio_d', 0),
            5 => (float) data_get($byStars->get(5), 'precio_d', 0),
        ];
        $hasPackagePrices = collect($packageCategoryPrices)->contains(fn($price) => $price > 0);
        // Campaign presentation is local to this view; package fields and prices stay unchanged.
        $campaign = $campaign ?? null;
        $heroTitle = filled($campaign->headline ?? null) ? $campaign->headline : $paquete['titulo'];
        $heroCtaLabel = filled($campaign->cta_label ?? null) ? $campaign->cta_label : 'Request a Quote';
        $packageImages = collect($paquete->imagen_paquetes)->filter(fn($image) => filled($image->nombre));
        if ($packageImages->isEmpty()) {
            $packageImages = collect($paquete->paquetes_destinos)->flatMap(function ($destination) {
                return data_get($destination, 'destinos.destino_imagen', []);
            })->filter(fn($image) => filled(data_get($image, 'nombre')));
        }
        if ($packageImages->isEmpty() && filled($paquete->imagen)) {
            $packageImages = collect([['nombre' => $paquete->imagen]]);
        }
        $heroImages = filled($campaign->hero_image ?? null)
            ? collect([['nombre' => $campaign->hero_image]])
            : $packageImages;
        $packageCategories = collect($paquete->paquetes_categoria)->pluck('categoria.nombre')->filter()->unique()->values();
        $hasCampaignPrice = is_numeric($campaign->offer_price ?? null) && $campaign->offer_price > 0;
        $displayPrice = $hasCampaignPrice ? $campaign->offer_price : $heroPrice;
        $hasDisplayPrice = is_numeric($displayPrice) && $displayPrice > 0;
        $showPriceCategories = !($campaign && $hasCampaignPrice && !$hasPackagePrices
            && $campaign->price_category === null);
        $campaignOriginalPrice = $hasCampaignPrice && is_numeric($campaign->original_price ?? null)
            && $campaign->original_price > $displayPrice ? $campaign->original_price : null;
        // Match the existing pricing grid: 2 uses precio_tours; 3/4/5 use estrellas + precio_d.
        $campaignCategoryKey = (string) ($campaign->price_category ?? '');
        $campaignCategoryKey = in_array($campaignCategoryKey, ['2', '3', '4', '5'], true)
            ? (int) $campaignCategoryKey : null;
        $campaignPriceCategory = $hasCampaignPrice
            ? ([2 => 'Tour without hotels', 3 => 'Tourist / 3-star hotels', 4 => 'Superior / 4-star hotels', 5 => 'Luxury / 5-star hotels'][$campaignCategoryKey] ?? null)
            : null;
        $campaignSavings = $campaignOriginalPrice !== null
            ? round((float) $campaignOriginalPrice - (float) $displayPrice, 2) : null;
        $formatDisplayPrice = static function ($price) {
            $price = (float) $price;
            return '$' . number_format($price, $price == (int) $price ? 0 : 2, '.', ',');
        };
        $campaignItems = static function ($items) {
            return collect(is_array($items) ? $items : [])->filter(static function ($item) {
                return is_array($item) && is_string($item['title'] ?? null) && trim($item['title']) !== '';
            })->values();
        };
        $campaignHighlights = $campaignItems(data_get($campaign, 'config.highlights', []));
        $campaignSpecialInclusions = $campaignItems(data_get($campaign, 'config.special_inclusions', []));
        $visibleCampaignHighlights = $campaignHighlights->filter(
            fn($item) => $showPricesAndHotels || ($item['type'] ?? null) !== 'hotels'
        )->values();
        $visibleCampaignSpecialInclusions = $campaignSpecialInclusions->filter(
            fn($item) => $showPricesAndHotels || ($item['type'] ?? null) !== 'hotels'
        )->values();
        // A normal package checkout must not be presented as accepting different offer terms.
        $showPackageBooking = !empty($paquete['codigo_f'])
            && !($campaign && ($hasCampaignPrice || $campaignSpecialInclusions->isNotEmpty()));
    @endphp
    <x-package-hero-card
        :paquete="$paquete" :campaign="$campaign" :hero-images="$heroImages"
        :hero-destinations="$heroDestinations" :hero-title="$heroTitle" :hero-cta-label="$heroCtaLabel"
        :has-campaign-price="$hasCampaignPrice" :has-display-price="$hasDisplayPrice"
        :display-price="$displayPrice" :campaign-original-price="$campaignOriginalPrice"
        :campaign-savings="$campaignSavings" :campaign-price-category="$campaignPriceCategory"
        :show-package-booking="$showPackageBooking" :format-display-price="$formatDisplayPrice"
        :show-prices-and-hotels="$showPricesAndHotels"
    />
    <section id="package-journey" class="package-bridge" aria-labelledby="package-glance-title">
        <div class="container package-shell package-bridge__layout">
            <div class="package-bridge__backdrop bg-gray-700" aria-hidden="true"></div>
            <aside class="package-expert bg-gray-700 text-gray-50" aria-labelledby="package-expert-title">
                <div class="package-expert__terrain bg-line-cover" aria-hidden="true"></div>
                <div class="package-expert__copy">
                    <p class="package-expert__eyebrow text-secondary font-semibold">Book With Confidence</p>
                    <h2 id="package-expert-title" class="package-expert__title font-semibold leading-tight mt-3">
                        <a href="#form-dream-adventure" data-quote-source="advisor" class="hover:text-secondary">
                            Plan with our Latin America experts
                            <x-heroicon-o-arrow-right class="inline-block h-5 w-5" aria-hidden="true" />
                        </a>
                    </h2>
                    <p class="mt-3 text-xs leading-relaxed">Customize this itinerary with our travel advisors.</p>
                </div>
                <img src="/images/team/angie.png" alt="GoToLatam team" class="package-expert__portrait" width="436" height="577">
            </aside>
            <div class="package-glance bg-gray-50" data-package-reveal>
                <div class="package-glance__terrain bg-line-cover" aria-hidden="true"></div>
                <h2 id="package-glance-title" class="flex items-center gap-3 text-lg font-bold text-gray-700 mb-6">
                    <span aria-hidden="true" class="inline-flex items-center gap-1"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span><span class="inline-block w-5 h-2.5 bg-secondary"></span></span> Trip at a glance
                </h2>
                <dl class="package-glance__facts grid grid-cols-2 gap-6">
                    <div class="flex items-center gap-2">
                        <span class="rounded-full bg-primary text-white p-2"><x-heroicon-o-calendar class="h-5 w-5 flex-shrink-0" aria-hidden="true" /></span>
                        <div>
                            <dt class="text-xs text-gray-500">Duration</dt>
                            <dd class="text-sm font-semibold text-gray-700 mt-1">{{ $paquete['duracion'] }} {{ __('message.pack_par4') }}</dd>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="rounded-full bg-primary text-white p-2"><x-heroicon-o-location-marker class="h-5 w-5 flex-shrink-0" aria-hidden="true" /></span>
                        <div>
                            <dt class="text-xs text-gray-500">Travel Style</dt>
                            <dd class="text-sm font-semibold text-gray-700 mt-1">{{ $packageCategories->first() ?: 'On request' }}</dd>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="rounded-full bg-primary text-white p-2"><x-heroicon-o-calendar class="h-5 w-5 flex-shrink-0" aria-hidden="true" /></span>
                        <div>
                            <dt class="text-xs text-gray-500">Destinations</dt>
                            <dd class="text-sm font-semibold text-gray-700 mt-1">{{ $heroDestinations->count() }}</dd>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="rounded-full bg-primary text-white p-2"><x-heroicon-o-flag class="h-5 w-5 flex-shrink-0" aria-hidden="true" /></span>
                        <div>
                            <dt class="text-xs text-gray-500">Group size</dt>
                            <dd class="text-sm font-semibold text-gray-700 mt-1">{{ filled($paquete->group_size) ? $paquete->group_size : 'On request' }}</dd>
                        </div>
                    </div>
                </dl>
                <p class="package-glance__interest flex items-start gap-2 border-t border-gray-200 text-xs leading-relaxed text-gray-500">
                    <span class="text-primary"><x-heroicon-o-star class="h-5 w-5 flex-shrink-0" aria-hidden="true" /></span>
                    <span><span class="font-semibold text-gray-700">Interest:</span> {{ $packageCategories->isNotEmpty() ? $packageCategories->implode(', ') : 'Personalized itinerary' }}</span>
                </p>
            </div>
        </div>
    </section>
@if ($campaign && $visibleCampaignHighlights->isNotEmpty())
    @php
        $campaignIconTypes = [
            'flights' => 'heroicon-o-paper-airplane',
            'international_flights' => 'heroicon-o-paper-airplane',
            'hotels' => 'heroicon-o-office-building',
            'transfers' => 'heroicon-o-switch-horizontal',
            'guided_tours' => 'heroicon-o-map',
            'entrance_tickets' => 'heroicon-o-ticket',
        ];
        $highlightCount = $visibleCampaignHighlights->count();
        $highlightColumns = $highlightCount >= 4
            ? ($highlightCount % 3 === 0 ? 'lg:grid-cols-3' : 'lg:grid-cols-4')
            : ($highlightCount === 3 ? 'lg:grid-cols-3' : ($highlightCount === 2 ? 'lg:grid-cols-2' : 'lg:grid-cols-1'));
    @endphp
    <section aria-labelledby="campaign-highlights-title" class="bg-white">
        <div class="container">
            <div class="border-b border-primary/10 py-8 lg:py-10">
                <h2 id="campaign-highlights-title" class="flex items-center gap-3 text-xs font-semibold uppercase tracking-wider text-gray-700">
                    <span aria-hidden="true" class="inline-flex items-center gap-1"><span class="h-2.5 w-1 bg-secondary"></span><span class="h-2.5 w-3 bg-secondary"></span><span class="h-2.5 w-5 bg-secondary"></span></span>
                    Why this offer
                </h2>
                <ul class="mt-6 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 {{ $highlightColumns }}">
                    @foreach ($visibleCampaignHighlights as $highlight)
                        @php
                            $type = is_string($highlight['type'] ?? null) ? $highlight['type'] : '';
                            $icon = $campaignIconTypes[$type] ?? 'heroicon-o-check-circle';
                        @endphp
                        <li class="flex min-w-0 items-start gap-4">
                            {!! $packageIcon($icon, 'h-7 w-7 flex-shrink-0 text-primary', ['aria-hidden' => 'true']) !!}
                            <div class="min-w-0 break-words">
                                <h3 class="text-base font-semibold leading-snug text-gray-700">{{ $highlight['title'] }}</h3>
                                @if (is_string($highlight['text'] ?? null) && trim($highlight['text']) !== '')
                                    <p class="mt-2 text-sm leading-relaxed text-gray-700/70">{{ $highlight['text'] }}</p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endif
    <section class="package-story" x-data="{ openTab: 1 }">
        <div class="container">
            <div class="package-journey grid grid-cols-1 xl:grid-cols-12 items-start gap-7 pt-9 lg:pt-12 xl:gap-x-10 xl:gap-y-0">
                <section id="package-overview" data-analytics-section="overview" class="package-overview xl:col-span-8 xl:col-start-1 xl:row-start-1" aria-labelledby="package-overview-title" x-show="openTab === 1"
                    x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                    <div class="package-overview__copy bg-white" data-package-reveal>
                        <span aria-hidden="true" class="inline-flex items-center gap-1 mb-6"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span><span class="inline-block w-5 h-2.5 bg-secondary"></span></span>
                        <h2 id="package-overview-title" class="package-overview__title text-3xl font-semibold text-gray-700 mb-4">{{ __('message.pack_deta_par1') }}</h2>
                        <div class="package-overview__text text-base leading-relaxed text-gray-600">
                            {!! $paquete['descripcion'] !!}
                        </div>
                    </div>
                </section>
                <section id="package-itinerary" class="package-route bg-white xl:col-span-8 xl:col-start-1 xl:row-start-2" aria-labelledby="package-itinerary-title" x-show="openTab === 1">
                    <figure class="package-route__map" data-package-reveal>
                        <figcaption class="package-route__label inline-flex items-center gap-2 text-xs font-bold tracking-wider uppercase text-primary">
                            <span aria-hidden="true" class="inline-block w-3 h-2.5 bg-secondary"></span>
                            The journey
                        </figcaption>
                        <a class="venobox" data-gall="myGallery" href="{{ $paquete['mapa'] }}"><img
                                src="{{ $paquete['mapa'] }}" class="w-full object-contain" /></a>
                    </figure>
                    <div class="package-itinerary" data-analytics-section="itinerary">
                        <div class="package-itinerary__layout">
                            <div class="package-itinerary__intro">
                                <div data-package-reveal>
                                    <span aria-hidden="true" class="inline-flex items-center gap-1 mb-6"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span><span class="inline-block w-5 h-2.5 bg-secondary"></span></span>
                                    <div class="package-itinerary__heading">
                                        <h2 id="package-itinerary-title" class="package-itinerary__title text-3xl font-semibold text-gray-700">{{ __('message.pack_deta_par3') }}</h2>
                                        <p class="package-itinerary__duration text-primary">
                                            <x-heroicon-o-calendar class="h-5 w-5 flex-shrink-0" aria-hidden="true" />
                                            <strong class="font-medium">{{ $paquete['duracion'] }}</strong>
                                            {{ __('message.pack_par4') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="package-itinerary__days" x-data="{ selected: 1 }" data-package-reveal>
                                @foreach ($paquete->paquete_itinerario as $section)
                                    @php
                                        $dayImages = $section->itinerarios->itinerario_imagen->filter(fn ($image) => filled($image->nombre));
                                    @endphp
                                    <article class="package-itinerary__day"
                                        :class="{ 'is-open': selected === {{ $loop->iteration }} }">
                                        @unless ($loop->last)
                                            <span class="pointer-events-none absolute inset-0 flex lg:grid lg:grid-cols-12 lg:gap-x-4" aria-hidden="true">
                                                <span class="relative flex w-9 flex-shrink-0 justify-center lg:col-span-1 lg:w-auto">
                                                    <span class="package-itinerary__rail absolute w-px bg-gray-700/20"></span>
                                                    <span class="package-itinerary__route-segment absolute w-px bg-secondary"></span>
                                                </span>
                                            </span>
                                        @endunless
                                        <h3 class="relative">
                                            <button type="button" id="package-day-trigger-{{ $loop->iteration }}"
                                                class="package-itinerary__trigger group flex items-start gap-3 py-4 text-gray-700 lg:grid lg:grid-cols-12 lg:gap-x-4"
                                                :aria-expanded="selected === {{ $loop->iteration }}"
                                                aria-controls="package-day-panel-{{ $loop->iteration }}"
                                                @click="selected !== {{ $loop->iteration }} ? selected = {{ $loop->iteration }} : selected = null">
                                                <span class="relative flex h-9 w-9 flex-shrink-0 items-center justify-center lg:col-span-1 lg:h-11 lg:w-auto">
                                                    <span class="package-itinerary__number relative inline-flex h-9 w-9 flex-col items-center justify-center gap-0 rounded-full border motion-safe:transition-all motion-safe:duration-300 motion-safe:ease-out"
                                                        :class="selected === {{ $loop->iteration }} ? 'bg-secondary border-secondary text-gray-700 lg:h-11 lg:w-11' : 'bg-white border-gray-700/10 text-gray-700 lg:h-10 lg:w-10 lg:group-hover:border-primary/30'">
                                                        <span class="text-sm font-semibold leading-none lg:text-base lg:leading-none">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                                        <span class="text-xss font-medium uppercase tracking-wider leading-none text-gray-700/60">Day</span>
                                                        <span class="pointer-events-none absolute left-full top-1/2 h-px w-3 motion-safe:transition-colors motion-safe:duration-300" aria-hidden="true"
                                                            :class="selected === {{ $loop->iteration }} ? 'bg-secondary' : 'bg-gray-700/20 lg:group-hover:bg-primary/40'"></span>
                                                    </span>
                                                </span>
                                                <span class="package-itinerary__title-row flex min-w-0 flex-1 items-center gap-3 lg:col-span-11">
                                                    <span class="package-itinerary__day-title min-w-0 flex-1 text-base leading-snug text-gray-700"
                                                        :class="selected === {{ $loop->iteration }} ? 'font-semibold lg:text-lg' : 'font-medium'">{{ ucfirst(strtolower($section->itinerarios->titulo)) }}</span>
                                                    <span class="package-itinerary__toggle flex flex-shrink-0 items-center justify-end lg:group-hover:text-secondary motion-safe:transition-colors motion-safe:duration-300" aria-hidden="true"
                                                        :class="selected === {{ $loop->iteration }} ? 'text-secondary' : 'text-primary'">
                                                        <x-heroicon-o-chevron-down class="package-itinerary__chevron h-5 w-5" />
                                                    </span>
                                                </span>
                                            </button>
                                        </h3>
                                        <div id="package-day-panel-{{ $loop->iteration }}" class="package-itinerary__panel"
                                            role="region" aria-labelledby="package-day-trigger-{{ $loop->iteration }}"
                                            :aria-hidden="selected !== {{ $loop->iteration }}"
                                            :inert="selected !== {{ $loop->iteration }}">
                                            <div class="package-itinerary__panel-inner grid grid-cols-1 pl-12 lg:grid-cols-12 lg:gap-x-4 lg:pl-0">
                                                <div class="package-itinerary__body relative lg:col-span-11 lg:col-start-2">
                                                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 lg:gap-6">
                                                        <div class="package-itinerary__text font-normal text-gray-600 {{ $dayImages->isNotEmpty() ? 'lg:col-span-8' : 'lg:col-span-12' }}">
                                                            {!! $section->itinerarios->descripcion !!}
                                                        </div>
                                                        @if ($dayImages->isNotEmpty())
                                                            <div class="space-y-3 lg:col-span-4">
                                                                @foreach ($dayImages as $imagen)
                                                                    <img src="{{ $imagen->nombre }}" alt="{{ $imagen->alt }}" class="package-itinerary__image w-full object-cover" loading="lazy">
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="package-commercial xl:col-span-4 xl:col-start-9 xl:row-start-1 xl:row-span-3" aria-labelledby="package-trip-title">
                    <div class="package-commercial__content bg-gray-50">
                        <div class="package-commercial__summary bg-gray-700 text-white p-6 md:p-8">
                            <h2 id="package-trip-title" class="package-commercial__eyebrow text-xs font-bold tracking-wider uppercase text-secondary">Plan your journey</h2>
                            <p class="package-commercial__duration text-sm font-semibold tracking-wider uppercase text-white">{{ $paquete['duracion'] }} {{ __('message.pack_par4') }}</p>
                            @if ($showPricesAndHotels)
                            @if ($campaignOriginalPrice !== null)
                                <p class="mt-3 text-xs text-white/80">Was <del>{{ $formatDisplayPrice($campaignOriginalPrice) }}</del></p>
                            @endif
                            @if ($hasDisplayPrice)
                                <p class="package-commercial__price text-white">
                                    <span class="text-xs">{{ $campaignOriginalPrice !== null ? 'Now' : 'From' }}</span>
                                    <strong class="text-5xl md:text-6xl font-semibold leading-tight">{{ $formatDisplayPrice($displayPrice) }}</strong>
                                    <span class="text-xs">per person USD</span>
                                </p>
                                @if ($campaignSavings > 0)
                                    <p class="mt-3 text-xs text-white/80">Save {{ $formatDisplayPrice($campaignSavings) }} per person</p>
                                @endif
                            @else
                                <p class="package-commercial__price-note text-sm text-white/80">Contact us for pricing</p>
                            @endif
                            @endif
                            @if ($heroDestinations->isNotEmpty())
                                <p class="package-commercial__destinations text-xs text-white/80">{{ $heroDestinations->implode(' • ') }}</p>
                            @endif
                            <div class="package-commercial__actions">
                                <a href="#form-dream-adventure" data-quote-source="rail" class="btn-secondary text-center">Request a Quote</a>
                                @if ($showPackageBooking)
                                    <button type="button" class="package-commercial__book text-xs text-white/80 underline hover:text-secondary"
                                        data-book-source="rail" @click="document.getElementById('wetravel_button_widget').click()">Book Now</button>
                                @endif
                            </div>
                        </div>
                        <div class="package-commercial__availability p-6 md:p-8">
                            <h3 class="flex items-center gap-3 text-lg font-bold text-gray-700">
                                <span aria-hidden="true" class="inline-flex items-center gap-1"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span></span>
                                Availability
                            </h3>
                            <div class="text-sm text-gray-600">
                                <div class="pb-3 text-xs text-gray-500">
                                    <div class="">
                                        Available through
                                    </div>
                                    <div class="mt-1 text-lg font-semibold text-gray-700">
                                        December 2026
                                    </div>
                                </div>
                                <div class="package-commercial__status">
                                    <div class="package-commercial__status-label">
                                        Group Tours
                                    </div>
                                    <div class="package-commercial__status-value text-sm font-semibold text-primary">
                                        Available
                                    </div>
                                </div>
                                <div class="package-commercial__status">
                                    <div
                                        class="package-commercial__status-label">
                                        Private Tours
                                    </div>
                                    <div class="package-commercial__status-value text-sm font-semibold text-primary">
                                        Available
                                    </div>
                                </div>
                                <div class="package-commercial__status">
                                    <div
                                        class="package-commercial__status-label"> Solo Travelers
                                    </div>
                                    <div class="package-commercial__status-value text-sm font-semibold text-primary">
                                        @foreach ($paquete['precio_paquetes'] as $precio)
                                            @if ($precio['estrellas'] == 3)
                                                @if ($precio['precio_s'] > 0)
                                                    @if ($showPricesAndHotels)
                                                    <div class="text-4xl font-semibold text-gray-600">
                                                    </div>
                                                    @else
                                                        Available
                                                    @endif
                                                @else
                                                    <span
                                                        class="text-gray-600 font-semibold">{{ __('message.button_inquire') }}</span>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="package-commercial__trust text-primary">
                        <div class="package-commercial__trust-strip" aria-label="Independent review platforms">
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html"
                                target="_blank" rel="noopener noreferrer" aria-label="GoToLatam reviews on Tripadvisor">
                                <img src="https://www.tripadvisor.com.pe/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg"
                                    alt="Tripadvisor" loading="lazy">
                            </a>
                            <a href="{{ route('reviews') }}" target="_blank" rel="noopener noreferrer"
                                aria-label="GoToLatam reviews on Trustpilot">
                                <span class="package-commercial__trust-wordmark">
                                    <img src="{{ asset('images/logos/trust2.png') }}" alt="Trustpilot" width="385" height="230" loading="lazy">
                                </span>
                            </a>
                            <a href="{{ route('reviews') }}"
                                target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-gray-600 hover:text-primary">
                                Traveler Reviews
                            </a>
                        </div>
                    </div>
                    <nav class="package-section-nav text-gray-700" aria-label="Explore this trip">
                        <p class="flex items-center gap-3 text-base font-bold tracking-wider uppercase text-gray-700">
                            <span aria-hidden="true" class="inline-flex items-center gap-1"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span></span>
                            Explore this trip
                        </p>
                        <ul class="package-section-nav__links border-l border-gray-200">
                            <li>
                                <a href="#package-overview" class="text-base text-gray-500 hover:text-gray-700" aria-current="location">
                                    <span class="package-section-nav__marker bg-secondary" aria-hidden="true"></span>
                                    <x-heroicon-o-flag class="package-section-nav__icon h-5 w-5 flex-shrink-0 text-primary" aria-hidden="true" />
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li>
                                <a href="#package-itinerary" class="text-base text-gray-500 hover:text-gray-700">
                                    <span class="package-section-nav__marker bg-secondary" aria-hidden="true"></span>
                                    <x-heroicon-o-calendar class="package-section-nav__icon h-5 w-5 flex-shrink-0 text-primary" aria-hidden="true" />
                                    <span>Itinerary</span>
                                </a>
                            </li>
                            @if ($showPricesAndHotels && $showPriceCategories)
                            <li>
                                <a href="#package-prices" class="text-base text-gray-500 hover:text-gray-700">
                                    <span class="package-section-nav__marker bg-secondary" aria-hidden="true"></span>
                                    <x-heroicon-o-star class="package-section-nav__icon h-5 w-5 flex-shrink-0 text-primary" aria-hidden="true" />
                                    <span>Prices &amp; Hotels</span>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="#package-included" class="text-base text-gray-500 hover:text-gray-700">
                                    <span class="package-section-nav__marker bg-secondary" aria-hidden="true"></span>
                                    <x-heroicon-o-check class="package-section-nav__icon h-5 w-5 flex-shrink-0 text-primary" aria-hidden="true" />
                                    <span>What's Included</span>
                                </a>
                            </li>
                            @if ($showPricesAndHotels && !$showPriceCategories)
                                <li>
                                    <a href="#hotels" class="text-base text-gray-500 hover:text-gray-700">
                                        <span class="package-section-nav__marker bg-secondary" aria-hidden="true"></span>
                                        <x-heroicon-o-star class="package-section-nav__icon h-5 w-5 flex-shrink-0 text-primary" aria-hidden="true" />
                                        <span>Hotels</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </aside>
                @if ($showPricesAndHotels && $showPriceCategories)
                <div id="package-prices" data-analytics-section="prices" class="package-prices xl:col-span-8 xl:col-start-1 xl:row-start-3">
            @php
                // orden como tu imagen
                $order = [2, 3, 4, 5];
                // etiquetas
                $labels = [
                    2 => 'Tour (without Hotels)',
                    3 => 'Tourist',
                    4 => 'Superior',
                    5 => 'Luxury',
                ];
                // formateo
                $fmt = function ($n) {
                    $n = (int) $n;
                    return $n > 0 ? '$' . number_format($n, 0) : null; // null => "Inquire Now"
                };
            @endphp
            <section class="mt-10 mb-10 lg:mt-12 lg:mb-12" aria-labelledby="package-prices-title">
                <div class="bg-gray-700 px-5 py-6 lg:px-6 lg:pt-7 lg:pb-10">
                    <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-secondary">Prices per person</p>
                    <h2 id="package-prices-title" class="text-3xl font-semibold text-white">Prices by hotel category</h2>
                </div>
                <div class="relative grid grid-cols-12 gap-0 mt-4 overflow-hidden rounded-none border border-gray-200 bg-white lg:-mt-4 lg:mx-4">
                    @foreach ($order as $star)
                        @php
                            $row = $byStars->get($star);
                            $priceRaw = $packageCategoryPrices[$star];
                            $price = $priceRaw > 0 ? $formatDisplayPrice($priceRaw) : 'Inquire Now';
                            $hasPrice = $priceRaw > 0;
                            $isCampaignCategory = $hasCampaignPrice && $campaignCategoryKey === $star;
                        @endphp
                        <div class="col-span-12 md:col-span-6 lg:col-span-3 min-w-0 border-gray-200 p-4 text-center transition-colors duration-200 lg:border-t-0 lg:hover:bg-gray-50
                            {{ $loop->first ? '' : 'border-t lg:border-l' }}
                            {{ $loop->iteration <= 2 ? 'md:border-t-0' : '' }}
                            {{ $loop->even ? 'md:border-l' : '' }}{{ $isCampaignCategory ? ' bg-secondary/5' : '' }}">
                            <div class="flex h-12 flex-col items-center justify-center gap-1">
                                <h3 class="text-base font-semibold leading-snug text-gray-700">{{ $labels[$star] ?? $star . ' Stars' }}</h3>
                                @if ($star !== 2 && $row)
                                    <p class="flex items-center gap-1 text-xs font-normal text-primary">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/> </svg>
                                        <span>{{ $star }}-star hotels</span>
                                    </p>
                                @endif
                            </div>
                            @if ($isCampaignCategory)
                                <div class="mt-3">
                                    <p class="mb-2 flex items-center justify-center gap-2 text-xs font-semibold uppercase tracking-wider text-gray-700">
                                        <span aria-hidden="true" class="h-2 w-2 bg-secondary"></span>
                                        Special offer
                                    </p>
                                    @if ($campaignOriginalPrice !== null)
                                        <p class="mb-1 text-xs text-gray-700/60">Was <del>{{ $formatDisplayPrice($campaignOriginalPrice) }}</del></p>
                                    @endif
                                    <p class="text-2xl font-semibold leading-8 tabular-nums text-secondary">
                                        {{ $formatDisplayPrice($displayPrice) }}
                                    </p>
                                    <p class="mt-1 h-10 text-sm font-normal leading-5 text-gray-500">
                                        @if ($star === 2)
                                            per person
                                        @else
                                            per person <span class="block text-xs leading-5">(double/triple)</span>
                                        @endif
                                    </p>
                                </div>
                            @else
                                <div class="mt-3">
                                    <div class="mb-1 h-4 text-xs font-normal text-gray-500">
                                        @if ($hasPrice)
                                            From
                                        @endif
                                    </div>
                                    <p class="font-semibold leading-8 tabular-nums {{ $hasPrice ? 'text-2xl text-secondary' : 'text-lg text-primary' }}">
                                        {{ $price }}
                                    </p>
                                    <p class="mt-1 h-10 text-sm font-normal leading-5 text-gray-500">
                                        @if ($star === 2)
                                            per person
                                        @else
                                            per person <span class="block text-xs leading-5">(double/triple)</span>
                                        @endif
                                    </p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <p class="mt-4 text-xs leading-relaxed text-gray-500 lg:mx-4">
                    Prices shown in USD per person. Subject to availability and change without prior notice.
                </p>
            </section>
                </div>
                @endif
            </div>
        </div>
    </section>
@if ($campaign && $visibleCampaignSpecialInclusions->isNotEmpty())
    @php
        $campaignIconTypes = [
            'flights' => 'heroicon-o-paper-airplane',
            'international_flights' => 'heroicon-o-paper-airplane',
            'hotels' => 'heroicon-o-office-building',
            'transfers' => 'heroicon-o-switch-horizontal',
            'guided_tours' => 'heroicon-o-map',
            'entrance_tickets' => 'heroicon-o-ticket',
        ];
    @endphp
    <section aria-labelledby="campaign-inclusions-title" class="bg-secondary/5">
        <div class="container">
            <div class="grid grid-cols-1 gap-8 py-10 lg:grid-cols-12 lg:gap-10 lg:py-12">
                <header class="border-l-2 border-secondary pl-5 lg:col-span-4">
                    @if (filled($campaign->offer_label))
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-primary">{{ $campaign->offer_label }}</p>
                    @endif
                    <h2 id="campaign-inclusions-title" class="text-2xl font-semibold leading-tight text-gray-700">Special offer includes</h2>
                    <p class="mt-3 text-sm leading-relaxed text-gray-700/70">These extras apply only to this offer. Standard package inclusions and exclusions follow below.</p>
                </header>
                <ul class="grid grid-cols-1 content-start gap-x-8 gap-y-6 lg:col-span-8 {{ $visibleCampaignSpecialInclusions->count() > 1 ? 'md:grid-cols-2' : '' }}">
                    @foreach ($visibleCampaignSpecialInclusions as $inclusion)
                        @php
                            $type = is_string($inclusion['type'] ?? null) ? $inclusion['type'] : '';
                            $icon = $campaignIconTypes[$type] ?? 'heroicon-o-check-circle';
                        @endphp
                        <li class="flex min-w-0 items-start gap-4">
                            {!! $packageIcon($icon, 'h-7 w-7 flex-shrink-0 text-primary', ['aria-hidden' => 'true']) !!}
                            <div class="min-w-0 break-words">
                                <h3 class="text-base font-semibold leading-snug text-gray-700">{{ $inclusion['title'] }}</h3>
                                @if (is_string($inclusion['description'] ?? null) && trim($inclusion['description']) !== '')
                                    <p class="mt-2 text-sm leading-relaxed text-gray-700/70">{{ $inclusion['description'] }}</p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endif
    @php
        $hasIncluye = !empty($paquete['incluye']);
        $hasNoIncluye = !empty($paquete['noincluye']);
        // Add Blade Heroicons without replacing the stored list content or its emphasis.
        $renderCoverageList = static function ($html, $icon, $color) use ($packageIcon) {
            $marker = $packageIcon($icon, 'package-coverage__marker ' . $color, ['aria-hidden' => 'true']);
            return preg_replace_callback('/<li\b[^>]*>/i', static fn($match) => $match[0] . $marker, $html);
        };
    @endphp
    <section id="package-included" data-analytics-section="included" class="relative bg-gray-50" aria-labelledby="package-coverage-title">
        <div class="container">
            <div class="relative z-10 py-16 lg:py-20 xl:pb-0">
                <header class="package-coverage__intro mb-10" data-package-reveal>
                    <span aria-hidden="true" class="inline-flex items-center gap-1 mb-6"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span><span class="inline-block w-5 h-2.5 bg-secondary"></span></span>
                    <h2 id="package-coverage-title" class="text-3xl font-semibold text-gray-700 mb-4">What's included in your journey</h2>
                </header>
                <div class="package-coverage__details grid grid-cols-12 items-stretch gap-y-8 xl:gap-x-6" data-package-reveal>
                    <div class="package-coverage__included col-span-12 {{ $hasNoIncluye ? 'xl:col-span-5' : 'xl:col-span-9' }} min-w-0 xl:pb-20">
                        <div class="mb-6 flex items-center gap-3">
                            <svg class="h-6 w-6 flex-shrink-0 text-primary" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/> </svg>
                            <h3 class="text-2xl font-semibold text-gray-700">Included</h3>
                        </div>
                        @if ($hasIncluye)
                            <div class="package-coverage__content text-base font-normal leading-relaxed text-gray-600">
                                {!! $renderCoverageList($paquete['incluye'], 'heroicon-o-check', 'text-primary') !!}
                            </div>
                        @else
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5 text-center sm:grid-cols-4">
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/assistances.png') }}"
                                        alt="{{ __('message.serv_item2') }}" class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item2') }}</p>
                                </div>
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/breakfast.png') }}"
                                        alt="{{ __('message.serv_item3') }}" class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item3') }}</p>
                                </div>
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/entrances.png') }}"
                                        alt="{{ __('message.serv_item4') }}" class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item4') }}</p>
                                </div>
                                @if ($showPricesAndHotels)
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/hotels.png') }}" alt="{{ __('message.serv_item6') }}"
                                        class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item6') }}</p>
                                </div>
                                @endif
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/tours.png') }}" alt="{{ __('message.serv_item7') }}"
                                        class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item7') }}</p>
                                </div>
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/trains.png') }}" alt="{{ __('message.serv_item8') }}"
                                        class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item8') }}</p>
                                </div>
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/transfers.png') }}"
                                        alt="{{ __('message.serv_item9') }}" class="mx-auto h-10 w-10 object-contain">
                                    <p class="text-xs">{{ __('message.serv_item9') }}</p>
                                </div>
                                <div class="space-y-2">
                                    <img src="{{ asset('images/include/flight.png') }}" alt="{{ __('message.serv_item5') }}"
                                        class="mx-auto h-10 w-10 object-contain grayscale">
                                    <p class="text-xs">{{ __('message.serv_item5') }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    @if ($hasNoIncluye)
                        <div class="package-coverage__excluded col-span-12 xl:col-span-4 min-w-0 border-t border-gray-200/60 pt-8 xl:border-t-0 xl:border-l xl:pt-0 xl:pl-6 xl:pb-20">
                            <div class="mb-6 flex items-center gap-3">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-700" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/> </svg>
                                <h3 class="text-2xl font-semibold text-gray-700">Not Included</h3>
                            </div>
                            <div class="package-coverage__content text-base font-normal leading-relaxed text-gray-600">
                                {!! $renderCoverageList($paquete['noincluye'], 'heroicon-o-minus', 'text-gray-500') !!}
                            </div>
                        </div>
                    @endif
                    <aside class="relative col-span-12 xl:col-span-3 min-w-0 h-full overflow-hidden flex flex-col bg-gray-700 text-white sm:flex-row xl:flex-col xl:self-stretch">
                        <div class="min-w-0 p-6 pb-0 sm:flex-1 sm:pb-6 xl:flex-none xl:pb-0">
                            <p class="text-xs font-semibold uppercase tracking-wider text-secondary">Personalized Service</p>
                            <h3 class="mt-2 text-lg font-semibold leading-snug">
                                <a href="#form-dream-adventure" data-quote-source="final" class="inline-flex items-start gap-2 transition-colors duration-200 hover:text-secondary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">
                                    <span>Plan with our Latin America experts</span>
                                    <svg class="mt-1 h-4 w-4 flex-shrink-0" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/> </svg>
                                </a>
                            </h3>
                            <p class="mt-3 text-sm leading-relaxed text-white/75">Customize this itinerary with our travel advisors.</p>
                        </div>
                        <div class="mt-2 flex flex-1 items-end justify-center sm:mt-0 sm:flex-none sm:justify-end xl:mt-0 xl:block xl:h-96 xl:flex-none">
                            <img src="{{ asset('images/team/pabel2.png') }}" alt="Pabel, GoToLatam team"
                                class="block h-72 w-auto max-w-full object-contain object-bottom xl:absolute xl:bottom-0 xl:left-1/2 xl:h-80 xl:origin-bottom xl:-translate-x-1/2 xl:scale-110" width="433" height="577" loading="lazy">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="pointer-events-none absolute inset-0 bg-line-cover bg-cover bg-no-repeat opacity-10" aria-hidden="true"></div>
    </section>
    @if ($showPricesAndHotels)
    <section class="bg-white" x-data="{ openDes: 1 }" id="hotels" data-analytics-section="recommended_hotels" aria-labelledby="package-hotels-title">
        <div class="container">
            <div class="py-16 lg:py-20">
                <header class="grid grid-cols-12 items-end gap-y-2">
                    <div class="col-span-12 md:col-span-8">
                        <span aria-hidden="true" class="inline-flex items-center gap-1 mb-6"><span class="inline-block w-1 h-2.5 bg-secondary"></span><span class="inline-block w-3 h-2.5 bg-secondary"></span><span class="inline-block w-5 h-2.5 bg-secondary"></span></span>
                        <h2 id="package-hotels-title" class="text-3xl font-semibold text-gray-700 mb-4">Recommended Hotels</h2>
                    </div>
                    <div class="col-span-12 flex min-w-0 md:col-span-4 md:justify-end md:pb-4">
                        @foreach ($paquete['paquetes_destinos'] as $paquete_destino)
                            <div class="flex items-center gap-4 text-gray-700" data-hotel-controls="{{ $loop->iteration }}"
                                x-show="openDes === {{ $loop->iteration }}" @if (!$loop->first) x-cloak @endif>
                                <span class="text-xs tabular-nums text-gray-500" data-hotel-counter aria-live="polite" aria-atomic="true">
                                    <span data-hotel-current>01</span><span class="mx-2 text-gray-300" aria-hidden="true">/</span><span data-hotel-total></span>
                                </span>
                                <div class="flex items-center gap-2">
                                    <button type="button" data-hotel-prev aria-label="Previous hotel"
                                        class="inline-flex h-10 w-10 items-center justify-center border border-gray-200 transition-colors duration-200 lg:hover:border-secondary lg:hover:text-secondary disabled:cursor-default disabled:opacity-30 focus-visible:outline focus-visible:outline-2 focus-visible:outline-secondary">
                                        <svg class="h-5 w-5" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/> </svg>
                                    </button>
                                    <button type="button" data-hotel-next aria-label="Next hotel"
                                        class="inline-flex h-10 w-10 items-center justify-center border border-gray-200 transition-colors duration-200 lg:hover:border-secondary lg:hover:text-secondary disabled:cursor-default disabled:opacity-30 focus-visible:outline focus-visible:outline-2 focus-visible:outline-secondary">
                                        <svg class="h-5 w-5" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/> </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </header>
                <nav class="mt-6 overflow-x-auto" aria-label="Hotel destinations">
                    <ul class="flex w-max min-w-full items-center">
                        @foreach ($paquete['paquetes_destinos'] as $paquete_destino)
                            <li class="flex flex-shrink-0 items-center">
                                <button type="button" id="hotel-destination-tab-{{ $loop->iteration }}"
                                    @click="openDes = {{ $loop->iteration }}; $nextTick(() => $dispatch('package-hotels-change', { destination: {{ $loop->iteration }} }))"
                                    :aria-pressed="openDes === {{ $loop->iteration }}"
                                    aria-controls="hotel-destination-panel-{{ $loop->iteration }}"
                                    class="relative inline-flex items-center whitespace-nowrap py-4 pl-8 pr-3 text-base transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary"
                                    :class="openDes === {{ $loop->iteration }} ? 'text-gray-700 font-semibold' : 'text-gray-500 font-medium lg:hover:text-primary'">
                                    <span x-show="openDes === {{ $loop->iteration }}" @if (!$loop->first) x-cloak @endif class="absolute left-2 top-1/2 -translate-y-1/2" aria-hidden="true">
                                        <svg class="h-4 w-4 text-primary"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/> <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/> </svg>
                                    </span>
                                    {{ $paquete_destino['destinos']['nombre'] }}
                                    <span aria-hidden="true" class="absolute inset-x-3 bottom-0 h-0.5 origin-left bg-secondary transition-transform duration-200 motion-reduce:transition-none"
                                        :class="openDes === {{ $loop->iteration }} ? 'scale-x-100' : 'scale-x-0'"></span>
                                </button>
                                @if (!$loop->last)
                                    <span class="mx-2 h-px w-6 flex-shrink-0 bg-gray-200 sm:mx-4 sm:w-10" aria-hidden="true"></span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
                @php
                    $hotelAmenityIcons = [
                        'internet' => 'heroicon-o-globe-alt',
                        'wifi' => 'heroicon-o-wifi',
                        'wi-fi' => 'heroicon-o-wifi',
                        'room service' => 'heroicon-o-bell',
                    ];
                @endphp
                <div class="relative isolate mt-10 grid grid-cols-12 lg:mt-14">
                    <div class="relative z-10 col-span-12 col-start-1 row-start-1 min-w-0">
                        @foreach ($paquete['paquetes_destinos'] as $paquete_destino)
                            <div id="hotel-destination-panel-{{ $loop->iteration }}" role="region"
                                data-hotel-destination="{{ $loop->iteration }}"
                                aria-labelledby="hotel-destination-tab-{{ $loop->iteration }}"
                                x-show="openDes === {{ $loop->iteration }}"
                                @if (!$loop->first) x-cloak @endif
                                x-transition:enter="transition duration-200 ease-out motion-reduce:transition-none"
                                x-transition:enter-start="opacity-0 motion-safe:translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="min-w-0">
                                <div class="package-hotels__carousel swiper min-w-0" aria-label="Hotels in {{ $paquete_destino['destinos']['nombre'] }}">
                                    <div class="swiper-wrapper">
                                        @foreach ($hoteles_destinos->where('iddestinos', $paquete_destino->destinos->id)->take(3) as $hoteles_destino)
                                            @php
                                                $hotel = $hoteles_destino->hotel;
                                                $services = array_filter(array_map('trim', explode(',', (string) $hotel->servicios)));
                                            @endphp
                                            <article class="swiper-slide group min-w-0">
                                                @if (filled($hotel->imagen))
                                                    <div class="aspect-w-16 aspect-h-10 flex-shrink-0 overflow-hidden rounded-none bg-gray-50">
                                                        <img src="{{ $hotel->imagen }}" alt="{{ $hotel->nombre }}" loading="lazy"
                                                            class="w-full h-full object-cover transition-transform duration-500 motion-reduce:transition-none motion-safe:lg:group-hover:scale-105">
                                                    </div>
                                                @endif
                                                <div class="relative z-10 w-11/12 self-start border border-gray-200/70 bg-white p-4 sm:w-5/6 sm:p-5 {{ filled($hotel->imagen) ? '-mt-6' : '' }}">
                                                    <h3 class="text-lg font-semibold leading-snug text-gray-700 break-words">{{ $hotel->nombre }}</h3>
                                                    @if ($hotel->estrellas > 0)
                                                        <div class="mt-2 flex gap-1" role="img" aria-label="{{ $hotel->estrellas }} stars">
                                                            @for ($i = 0; $i < $hotel->estrellas; $i++)
                                                                <svg class="h-3.5 w-3.5 text-secondary" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                                            @endfor
                                                        </div>
                                                    @endif
                                                    @if (filled($hotel->direccion))
                                                        <p class="mt-2.5 flex items-start gap-2 text-xs leading-relaxed text-gray-500 sm:text-sm">
                                                            <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-primary" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/> <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/> </svg>
                                                            <span>{{ $hotel->direccion }}</span>
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="flex min-w-0 flex-1 flex-col pt-5">
                                                    <div class="package-hotel-description text-base font-normal leading-relaxed text-gray-600     ">
                                                        {!! $hotel->descripcion !!}
                                                    </div>
                                                    @if ($services)
                                                        <ul class="mt-5 flex flex-wrap gap-x-3 gap-y-2" aria-label="Hotel amenities">
                                                            @foreach ($services as $service)
                                                                @php $amenityIcon = $hotelAmenityIcons[mb_strtolower($service, 'UTF-8')] ?? null; @endphp
                                                                <li class="inline-flex min-w-0 max-w-full items-baseline gap-3 text-sm font-medium leading-6 text-gray-600">
                                                                    <span class="inline-flex min-w-0 items-center gap-2">
                                                                        @if ($amenityIcon)
                                                                            {!! $packageIcon($amenityIcon, 'h-4 w-4 flex-shrink-0 text-primary', ['aria-hidden' => 'true']) !!}
                                                                        @endif
                                                                        <span class="min-w-0 break-words">{{ $service }}</span>
                                                                    </span>
                                                                    @if (!$loop->last)
                                                                        <span class="flex-shrink-0 text-primary/50" aria-hidden="true">·</span>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    @if (filled($hotel->url))
                                                        <div class="mt-auto pt-6">
                                                            <a href="{{ $hotel->url }}" target="_blank" rel="noopener noreferrer"
                                                                class="group inline-flex items-center gap-2 text-sm font-semibold text-primary underline-offset-4 decoration-primary/40 transition-colors duration-200 hover:underline hover:text-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                                                View hotel
                                                                <svg class="h-4 w-4 transition-transform duration-200 motion-safe:group-hover:translate-x-0.5" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/> </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-10 text-center lg:mt-12">
                    <a href="{{ route('hotels') }}" class="btn-secondary inline-flex">View more hotels</a>
                </div>
            </div>
        </div>
    </section>
    @endif
    @livewire('page.form-footer-detail', [
        'paquete' => $paquete['titulo'],
        'packageDuration' => $paquete['duracion'],
        'packageId' => (int) $paquete['id'],
        'packageSlug' => $paquete['url'],
        'campaignId' => $campaign ? (int) $campaign->id : null,
        'campaignSlug' => $campaign->slug ?? null,
    ], key('paquete' . $paquete['id'] . ($campaign ? '-campaign-' . $campaign->id : '')))
</div>
@once
    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    @endpush
    @push('scripts')
        <script>
            (() => {
                const controls = document.querySelector('.package-hero__gallery-controls');
                const mobileHeader = document.querySelector('[data-mobile-site-header]');
                if (!controls || !mobileHeader) return;
                const hero = controls.closest('.package-hero');
                const mobile = window.matchMedia('(max-width: 767px)');
                const positionCounter = () => {
                    if (!mobile.matches) {
                        controls.style.removeProperty('--package-gallery-header-overlap');
                        return;
                    }
                    // Measure the shared fixed header; its bounds stay stable when the drawer opens.
                    const heroTop = hero.getBoundingClientRect().top + window.scrollY;
                    const overlap = mobileHeader.getClientRects().length
                        ? Math.max(0, mobileHeader.getBoundingClientRect().bottom - heroTop)
                        : 0;
                    controls.style.setProperty('--package-gallery-header-overlap', `${overlap}px`);
                };
                positionCounter();
                window.addEventListener('resize', positionCounter, { passive: true });
                window.addEventListener('load', positionCounter, { once: true });
            })();
        </script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.wetravel.com/master/core-app/assets/embed_checkout.js"></script>
        <script>
            new VenoBox({
                selector: '.venobox'
            });
            var swiper = new Swiper(".mySwiper", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            var swiper = new Swiper(".slider-featured", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            function updatePackageGallery(swiper) {
                const counter = swiper.el.closest('.package-hero').querySelector('.package-hero__pagination');
                const total = swiper.slides.length;
                counter.hidden = total === 0;
                if (!total) return;
                const current = swiper.realIndex + 1;
                counter.querySelector('[data-package-slide-current]').textContent = String(current).padStart(2, '0');
                counter.querySelector('[data-package-slide-total]').textContent = String(total).padStart(2, '0');
                counter.style.setProperty('--package-gallery-progress', current / total);
                counter.setAttribute('aria-label', `Image ${current} of ${total}`);
            }
            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 1,
                spaceBetween: 0,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                speed: 900,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                on: {
                    init: updatePackageGallery,
                    slideChange: updatePackageGallery,
                },
            });
        </script>
        <script>
            (() => {
                const section = document.getElementById('hotels');
                if (!section || typeof Swiper === 'undefined') return;
                const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                const activateDestination = (destination) => {
                    const panel = section.querySelector(`[data-hotel-destination="${destination}"]`);
                    if (!panel) return;
                    const carousel = panel.querySelector('.package-hotels__carousel');
                    const controls = section.querySelector(`[data-hotel-controls="${destination}"]`);
                    if (carousel.swiper) {
                        carousel.swiper.update();
                        carousel.swiper.slideTo(0, 0);
                        return;
                    }
                    const updateCounter = (instance) => {
                        const total = instance.slides.length;
                        const current = total ? instance.realIndex + 1 : 0;
                        controls.hidden = total === 0;
                        const counter = controls.querySelector('[data-hotel-counter]');
                        counter.querySelector('[data-hotel-current]').textContent = String(current).padStart(2, '0');
                        counter.querySelector('[data-hotel-total]').textContent = String(total).padStart(2, '0');
                        counter.setAttribute('aria-label', `Hotel ${current} of ${total}`);
                    };
                    new Swiper(carousel, {
                        slidesPerView: 1,
                        spaceBetween: 24,
                        speed: reducedMotion ? 0 : 350,
                        watchOverflow: true,
                        breakpoints: {
                            768: { slidesPerView: 1.5, spaceBetween: 24 },
                            1024: { slidesPerView: 2, spaceBetween: 32 },
                        },
                        navigation: {
                            prevEl: controls.querySelector('[data-hotel-prev]'),
                            nextEl: controls.querySelector('[data-hotel-next]'),
                        },
                        on: {
                            init: updateCounter,
                            slideChange: updateCounter,
                        },
                    });
                };
                section.addEventListener('package-hotels-change', (event) => {
                    activateDestination(event.detail.destination);
                });
                activateDestination(1);
            })();
        </script>
        <script>
            (() => {
                const nav = document.querySelector('.package-section-nav');
                if (!nav) return;
                const items = Array.from(nav.querySelectorAll('a[href^="#"]'))
                    .map(link => ({ link, section: document.getElementById(link.hash.slice(1)) }))
                    .filter(item => item.section);
                if (!items.length) return;
                const setActive = (active) => items.forEach(item => {
                    if (item === active) item.link.setAttribute('aria-current', 'location');
                    else item.link.removeAttribute('aria-current');
                });
                const updateActive = () => {
                    const marker = window.innerHeight * .4;
                    const active = items.filter(item => item.section.getBoundingClientRect().top <= marker).pop();
                    setActive(active || items[0]);
                };
                items.forEach(item => item.link.addEventListener('click', event => {
                    if (event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;
                    event.preventDefault();
                    setActive(item);
                    item.section.scrollIntoView({
                        behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
                        block: 'start'
                    });
                }));
                const desktop = window.matchMedia('(min-width: 1280px)');
                let observer;
                const observeSections = () => {
                    if (observer) observer.disconnect();
                    if (!desktop.matches) return;
                    updateActive();
                    if (!('IntersectionObserver' in window)) return;
                    observer = new IntersectionObserver(updateActive, { rootMargin: '0px 0px -60% 0px', threshold: 0 });
                    items.forEach(item => observer.observe(item.section));
                };
                desktop.addEventListener('change', observeSections);
                observeSections();
            })();
        </script>
    @endpush
@endonce


@push('scripts')
    @php
        $packageTrackingContext = [
            'page_type' => $campaign ? 'offer' : 'package',
            'package_id' => (int) $paquete['id'],
            'package_slug' => $paquete['url'],
            'offer_campaign_id' => $campaign ? (int) $campaign->id : null,
            'offer_slug' => $campaign->slug ?? null,
        ];
    @endphp
    <script>
        (() => {
            const initialize = () => {
                if (window.GotoLatamPackageTracking) return;
                const page = @json($packageTrackingContext);
                const packagePrefix = @json('/' . __('message.url_1') . '/');
                const root = document.querySelector('[data-package-detail]');
                const quoteRoot = root ? root.querySelector('[data-quote-form="detail"]') : null;
                if (!root || !quoteRoot) return;
                const queryKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid', 'fbclid'];
                const landingTypes = ['home', 'package', 'offer', 'other'];
                const storageKey = 'gotolatam_package_attribution_v1';
                const sources = ['hero', 'header', 'header_mobile', 'mobile_drawer', 'sticky_nav', 'advisor', 'footer', 'floating', 'rail', 'final', 'form'];
                const query = new URLSearchParams(window.location.search);
                const normalize = (value, key) => {
                    if (typeof value !== 'string') return null;
                    if (key === 'gclid' || key === 'fbclid') {
                        return value && Array.from(value).length <= 512 && !/[<>\x00-\x20\x7F]/u.test(value) ? value : null;
                    }
                    const clean = value.replace(/<[^>]*>/g, '').replace(/[\x00-\x1F\x7F]+/g, ' ').trim();
                    return clean ? Array.from(clean).slice(0, 255).join('') : null;
                };
                const inferLandingType = path => path === '/' ? 'home'
                    : (path.startsWith('/offers/') ? 'offer' : (path.startsWith(packagePrefix) ? 'package' : 'other'));
                const currentTouch = {
                    first_landing_type: inferLandingType(window.location.pathname),
                    first_landing_path: window.location.pathname,
                };
                queryKeys.forEach(key => { currentTouch[key] = normalize(query.get(key), key); });
                const validTouch = touch => touch && landingTypes.includes(touch.first_landing_type)
                    && typeof touch.first_landing_path === 'string' && touch.first_landing_path.length <= 1024
                    && touch.first_landing_path.startsWith('/') && !touch.first_landing_path.startsWith('//')
                    && !/[<>?#\x00-\x1F\x7F]/u.test(touch.first_landing_path);
                let firstTouch = currentTouch;
                try {
                    const stored = JSON.parse(sessionStorage.getItem(storageKey) || 'null');
                    if (validTouch(stored)) {
                        firstTouch = {
                            first_landing_type: stored.first_landing_type,
                            first_landing_path: stored.first_landing_path,
                        };
                        queryKeys.forEach(key => { firstTouch[key] = normalize(stored[key], key); });
                    }
                    sessionStorage.setItem(storageKey, JSON.stringify(firstTouch));
                } catch (error) {}
                let ctaSource = 'form';
                const component = window.Livewire ? window.Livewire.find(quoteRoot.getAttribute('wire:id')) : null;
                if (component) component.set('firstTouch', firstTouch, true);
                const push = (event, values = {}) => {
                    window.dataLayer = window.dataLayer || [];
                    const payload = { event, ...page, ...values };
                    Object.keys(payload).forEach(key => {
                        if (payload[key] === null || payload[key] === undefined || payload[key] === '') delete payload[key];
                    });
                    window.dataLayer.push(payload);
                };
                window.GotoLatamPackageTracking = {
                    getFirstTouch: () => ({ ...firstTouch }),
                    getCtaSource: () => ctaSource,
                    pageContext: () => ({ ...page }),
                    push,
                };
                push('gtl_content_view', { first_landing_type: firstTouch.first_landing_type });
                document.addEventListener('click', event => {
                    if (!(event.target instanceof Element)) return;
                    const quote = event.target.closest('[data-quote-source], a[href="#form-dream-adventure"]');
                    if (quote) {
                        const requestedSource = quote.dataset.quoteSource
                            || (quote.closest('header') ? 'header' : (quote.closest('.fixed') ? 'floating'
                                : (quote.closest('nav') ? 'sticky_nav' : (quote.closest('footer') ? 'footer' : 'form'))));
                        ctaSource = sources.includes(requestedSource) ? requestedSource : 'form';
                        if (component) component.set('ctaSource', ctaSource, true);
                        push('gtl_cta_click', { cta_name: 'request_quote', cta_source: ctaSource });
                        if (quote.matches('a[href="#form-dream-adventure"]') && event.button === 0
                            && !event.metaKey && !event.ctrlKey && !event.shiftKey && !event.altKey) {
                            event.preventDefault();
                            quoteRoot.scrollIntoView({
                                behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
                                block: 'start',
                            });
                        }
                    }
                    const booking = event.target.closest('[data-book-source]');
                    if (booking && event.isTrusted) {
                        push('gtl_cta_click', { cta_name: 'book_now', cta_source: booking.dataset.bookSource });
                    }
                });
                let formStarted = false;
                const trackFormStart = event => {
                    if (formStarted || !event.target.matches('input:not([type=hidden]), select, textarea')) return;
                    formStarted = true;
                    push('gtl_lead_form_start', { cta_source: ctaSource });
                };
                quoteRoot.addEventListener('focusin', trackFormStart);
                quoteRoot.addEventListener('change', trackFormStart);
                let stepOneTracked = false;
                quoteRoot.addEventListener('click', event => {
                    if (stepOneTracked || !event.target.closest('[data-quote-next]')) return;
                    stepOneTracked = true;
                    push('gtl_lead_step_1_complete', { cta_source: ctaSource });
                });
                const leadEvents = new Set();
                window.addEventListener('gotolatam:generate-lead', event => {
                    const data = event.detail || {};
                    if (!data.lead_event_id || leadEvents.has(data.lead_event_id)) return;
                    leadEvents.add(data.lead_event_id);
                    const allowed = ['lead_event_id', 'first_landing_type', 'conversion_page_type', 'package_id',
                        'package_slug', 'offer_slug', 'cta_source', 'number_travelers', 'hotel_category'];
                    const values = {};
                    allowed.forEach(key => { if (data[key] !== undefined) values[key] = data[key]; });
                    push('generate_lead', values);
                });
                if ('IntersectionObserver' in window) {
                    const viewed = new Set();
                    const sections = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                            if (!entry.isIntersecting) return;
                            const name = entry.target.dataset.analyticsSection;
                            if (!viewed.has(name)) {
                                viewed.add(name);
                                push('gtl_section_view', { section_name: name });
                            }
                            sections.unobserve(entry.target);
                        });
                    }, { threshold: .15 });
                    root.querySelectorAll('[data-analytics-section]').forEach(section => sections.observe(section));
                    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                        const reveals = new IntersectionObserver(entries => {
                            entries.forEach(entry => {
                                if (!entry.isIntersecting) return;
                                entry.target.classList.remove('package-reveal-pending');
                                reveals.unobserve(entry.target);
                            });
                        }, { threshold: 0 });
                        root.querySelectorAll('[data-package-reveal]').forEach(section => {
                            if (section.getBoundingClientRect().top < window.innerHeight) return;
                            section.classList.add('package-reveal-pending');
                            reveals.observe(section);
                        });
                    }
                }
            };
            if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initialize, { once: true });
            else initialize();
        })();
    </script>
@endpush

@endsection
