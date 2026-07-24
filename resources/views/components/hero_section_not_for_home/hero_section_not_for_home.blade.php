{{-- Hero Section --}}
@php
    $badge = $badge ?? 'METRO';
    $badgeSub = $badgeSub ?? 'CATERING & EVENTS';
    $sectionLabel = $sectionLabel ?? null; // e.g. "Latest Events" (small red heading above main heading)
    $heading = $heading ?? 'Premium Catering Services in Cambodia for Corporate, Weddings & Private Events';
    $description =
        $description ??
        'Metro Catering delivers high-quality food, professional event setups, and customized catering solutions for businesses, schools, weddings, and special occasions across Cambodia.';
    $bgImage = $bgImage ?? 'hero_section/hero_section.png';

    // Buttons: pass an array of 1 or 2 buttons.
    // Each button: ['text' => '...', 'link' => '#', 'style' => 'solid' | 'outline']
    $buttons = $buttons ?? [['text' => 'Contact Us', 'link' => '#', 'style' => 'solid']];
@endphp

<section
    class="relative w-full flex flex-col items-center justify-center text-center px-4 py-24 md:py-52 overflow-hidden min-h-[600px] md:min-h-[700px] -mt-[0px] md:-mt-[18px]">



    {{-- Background image --}}
    <img src="{{ asset($bgImage) }}" alt="Metro Catering hero background"
        class="absolute inset-0 w-full h-full object-cover object-center -z-10">

    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/50 -z-10"></div>

    @if ($sectionLabel)
        {{-- Small red label (e.g. "Latest Events") --}}
        <p class="text-[#A80000] font-bold text-[20px] md:text-[28px] mt-[54px] md:mt-[58px]">
            {{ $sectionLabel }}
        </p>
    @else
        {{-- METRO wordmark with flanking lines --}}
        <div class="flex flex-row items-center justify-center gap-4 md:gap-6 mb-2 mt-[54px] md:mt-[58px]">
            <span class="h-px w-16 md:w-24 bg-white/70"></span>
            <div class="flex flex-col items-center">
                <h2 class="text-[#A80000] font-bold text-[24px] md:text-[36px] tracking-[0.3em]">
                    {{ $badge }}
                </h2>
                <p class="text-white text-[14px] tracking-[0.35em] -mt-1">
                    {{ $badgeSub }}
                </p>
            </div>
            <span class="h-px w-16 md:w-24 bg-white/70"></span>
        </div>
    @endif

    {{-- Main heading --}}
    <h1 class="text-white font-semibold text-[30px] md:text-[48px] leading-tight mt-8 max-w-5xl">
        {{ $heading }}
    </h1>

    {{-- Description --}}
    <p class="text-white/90 sm:text-[25px] text-[14px] mt-6 max-w-5xl leading-relaxed">
        {{ $description }}
    </p>

    {{-- Buttons --}}
    <div class="grid mx-auto grid-cols-{{ count($buttons) }} justify-items-center gap-4 mt-8 w-full max-w-[420px]">
        @foreach ($buttons as $button)
            <a href="{{ $button['link'] ?? '#' }}"
                class="w-full max-w-[200px] text-center text-[14px] font-medium px-6 py-3 rounded-full transition duration-300 ease-in-out
                {{ ($button['style'] ?? 'solid') === 'outline'
                    ? 'border border-white text-white hover:bg-white hover:text-[#A80000]'
                    : 'bg-[#A80000] hover:bg-[#ffffff] hover:text-[#A80000] text-white' }}">
                {{ $button['text'] }}
            </a>
        @endforeach
    </div>

</section>
