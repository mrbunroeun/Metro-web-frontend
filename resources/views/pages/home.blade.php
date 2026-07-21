@extends('layouts.app')
@section('content')
    <section class="w-full flex flex-col items-center justify-center text-center px-4 py-24 md:py-32">
        <img src="{{ asset('hero_section/hero_section.png') }}" alt="">


        {{-- METRO wordmark with flanking lines --}}
        <div class="flex flex-row items-center justify-center gap-4 md:gap-6 mb-2">
            <span class="h-px w-16 md:w-24 bg-white/70"></span>
            <div class="flex flex-col items-center">
                <h2 class="text-[#B00000] font-bold text-2xl md:text-3xl tracking-[0.3em]">
                    METRO
                </h2>
                <p class="text-white text-[10px] md:text-xs tracking-[0.35em] -mt-1">
                    CATERING &amp; EVENTS
                </p>
            </div>
            <span class="h-px w-16 md:w-24 bg-white/70"></span>
        </div>

        {{-- Main heading --}}
        <h1 class="text-white font-semibold text-3xl md:text-5xl leading-tight mt-8 max-w-3xl">
            Premium Catering Services in Cambodia for Corporate, Weddings &amp; Private Events
        </h1>

        {{-- Description --}}
        <p class="text-white/90 text-sm md:text-base mt-6 max-w-2xl leading-relaxed">
            Metro Catering delivers high-quality food, professional event setups, and customized
            catering solutions for businesses, schools, weddings, and special occasions across Cambodia.
        </p>

        {{-- Contact Us button --}}
        <a href="#"
            class="mt-8 bg-[#B00000] hover:bg-[#8f0000] text-white text-sm font-medium px-8 py-3 rounded-full transition duration-300 ease-in-out">
            Contact Us
        </a>

    </section>
@endsection
