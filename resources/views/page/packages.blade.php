@extends('layouts.page-layout')
@section('content')
<section class="-mt-20 h-75vh -z-1 relative">
    <img src="{{asset('images/banners/country/calafate.jpg')}}" alt="" class="h-full w-full object-cover object-top">
    <div class="absolute bottom-0 left-0 p-12">
        <h1 class="text-5xl font-semibold text-gray-50">{{__('message.pack_title1')}}</h1>
    </div>
</section>
{{--    <div class="hidden md:inline-block">--}}
{{--        @livewire('page.form-home')--}}
{{--    </div>--}}

<section class="container py-12 text-gray-500 text-center mx-auto">
    <p>South America has a unique combination of breathtaking landscapes and fascinating peoples that can't be found anywhere else on Earth. The highest waterfall, longest mountain range, and largest rainforest can all be found on the world's fourth largest continent, which is also home to beautiful beaches, historic towns, and modern metropolises. One of the highlights of your life will be the adventure of a lifetime that is traveling through South America.</p>
{{--    <p class="text-sm">{{__('message.pack_par1')}}</p>--}}
{{--    <p class="text-sm my-6">{{__('message.pack_par2')}}</p>--}}
{{--    <p>{{__('message.pack_par3')}}</p>--}}
</section>

<section class="container grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    @foreach($paquetes as $paquete)
        <x-packages-card :paquete="$paquete"></x-packages-card>
    @endforeach
</section>
    <section class="mt-12">
        @livewire('page.form-footer')
    </section>
    @push('scripts')
        <script src="https://cdn.wetravel.com/master/core-app/assets/embed_checkout.js"></script>
    @endpush

@endsection
