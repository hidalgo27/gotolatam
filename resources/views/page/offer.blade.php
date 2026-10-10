@extends('page.detail')

@push('meta')
    <meta name="robots" content="noindex,follow">
    <link rel="canonical" href="{{ route('offers.show', ['packageSlug' => $paquete->url, 'campaignSlug' => $campaign->slug]) }}">
@endpush
