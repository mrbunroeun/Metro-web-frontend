@extends('layouts.app')
@section('content')
    @include('components.hero_section_not_for_home.hero_section_not_for_home', [
        'sectionLabel' => 'About Metro Catering',
        'heading' => 'Premium Catering Services in Cambodia for Corporate, Weddings & Private Events',
        'description' =>
            ' Metro Catering delivers high-quality food, professional event setups, and customized catering solutions for businesses, schools, weddings, and special occasions across Cambodia.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '#', 'style' => 'solid'],
            // ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])
    <section>

        {{-- Company Overview --}}
        <section class="relative w-full">
            <div class="grid grid-cols-2 h-[400px] md:h-[500px]">

                {{-- Left red panel --}}
                <div class="bg-[#A80000] flex flex-col items-center justify-center px-4 sm:px-8 md:px-16 py-6 md:py-0">

                    {{-- Fixed-width inner content container --}}
                    <div class="text-left w-full max-w-[280px] sm:max-w-[340px] md:max-w-[420px]">
                        <p class="text-white sm:text-[40px] text-[20px] font-semibold">Company</p>
                        <h2 class="text-white sm:text-[40px] text-[20px] font-bold mt-1 mb-2">
                            Overview
                        </h2>
                        <p class="text-white/90 sm:text-[16px] text-[13px] leading-snug mb-3">
                            Introduce Metro Catering as a trusted Cambodian catering company specializing in
                            corporate dining and event services.
                        </p>
                        <a href="#"
                            class="inline-flex items-center justify-center bg-black hover:bg-gray-800 active:bg-gray-700 text-white text-[14px] font-medium px-2 py-2.5 min-h-[44px] md:px-6 md:py-2.5 rounded-full w-fit transition duration-300 ease-in-out">
                            Request Quotation
                        </a>
                    </div>

                </div>

                {{-- Right image panel --}}
                <div class="relative h-full overflow-hidden">
                    <img src="{{ asset('home/our_core_services/event_rental_setup.png') }}" alt="Metro Catering food"
                        class="absolute inset-0 w-full h-full object-cover object-center">
                </div>

            </div>

            {{-- Decorative rounded blob blending into page background --}}
            <div
                class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2
        w-17 h-17 md:w-25 md:h-25 rounded-full bg-[#a80000] z-10">
            </div>
        </section>
        {{-- Mission & Vision --}}
        <section class="relative w-full">
            <div class="grid grid-cols-2 h-[400px] md:h-[500px]">

                {{-- Left panel: Mission --}}
                <div class="bg-[#F3F0E9] flex items-center justify-center px-4 sm:px-8 md:px-16 py-6 md:py-0">
                    <div class="flex items-start gap-3 sm:gap-4 w-full max-w-[280px] sm:max-w-[340px] md:max-w-[420px]">
                        <img src="{{ asset('about_us/icons/mision.svg') }}" alt="Mission icon"
                            class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 shrink-0">
                        <div>
                            <h3 class="text-[#A80000] text-[18px] sm:text-[26px] md:text-[32px] font-bold mb-1 sm:mb-2">
                                Mission</h3>
                            <p class="text-gray-700 text-[13px] sm:text-[16px] md:text-[18px] leading-snug">
                                To deliver safe, delicious, and professionally managed catering experiences
                                that bring people together.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right panel: Vision --}}
                <div class="relative bg-[#A80000] flex items-center justify-center px-4 sm:px-8 md:px-16 py-6 md:py-0">

                    {{-- Decorative rounded blob blending into the section above --}}
                    <div
                        class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2
                w-13 h-13 md:w-18 md:h-18 rounded-full bg-[#F3F0E9] hidden">
                    </div>

                    <div class="flex items-start gap-3 sm:gap-4 w-full max-w-[280px] sm:max-w-[340px] md:max-w-[420px]">
                        <img src="{{ asset('about_us/icons/vision.svg') }}" alt="Vision icon"
                            class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 shrink-0">
                        <div>
                            <h3 class="text-white text-[18px] sm:text-[26px] md:text-[32px] font-bold mb-1 sm:mb-2">
                                Vision</h3>
                            <p class="text-white/90 text-[13px] sm:text-[16px] md:text-[18px] leading-snug">
                                To become Cambodia's leading corporate and event catering provider.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Our Core Values --}}
        @php
            $coreValues = [
                ['icon' => 'reliability.svg', 'label' => 'Reliability'],
                ['icon' => 'customer_satisfaction.svg', 'label' => 'Customer Satisfaction'],
                ['icon' => 'innovation.svg', 'label' => 'Innovation'],
                ['icon' => 'hygiene.svg', 'label' => 'Hygiene'],
                ['icon' => 'quality.svg', 'label' => 'Quality'],
            ];
        @endphp

        <section class="py-16 max-w-[600px] mx-auto px-4 text-center font-sans">

            {{-- Top icon + heading --}}
            <img src="{{ asset('about_us/our_core_values/our_core_values.svg') }}" alt="Core Values icon"
                class="w-10 h-10 mx-auto mb-2">
            <h2 class="text-[20px] sm:text-[24px] mb-10 sm:mb-12">
                Core <span class="font-bold text-[#A80000]">Values</span>
            </h2>

            {{-- Cards --}}
            <div class="flex flex-wrap justify-center gap-5 sm:gap-6 max-w-4xl mx-auto">
                @foreach ($coreValues as $value)
                    <div class="bg-[#F3F0E9] rounded-xl w-[150px] sm:w-[170px] pt-8 pb-5 px-3">
                        <img src="{{ asset('about_us/our_core_values/' . $value['icon']) }}"
                            alt="{{ $value['label'] }} icon" class="w-14 h-14 mx-auto -mt-14 mb-3">
                        <p class="text-gray-800 pt-[1.5rem] text-[13px] sm:text-[14px]">{{ $value['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="bg-black w-full">
            <img src="{{ asset('about_us/our_facilities/kitchen_operations.svg') }}" alt="">
            <img src="{{ asset('about_us/our_facilities/food_safety_standards.svg') }}" alt="">
            <img src="{{ asset('about_us/our_facilities/event_equipment.svg') }}" alt="">
            <img src="{{ asset('about_us/our_facilities/warehouse.svg') }}" alt="">
        </section>

    </section>



    {{-- footer --}}
    @include('components.footer', [
        'ctaHeading' => 'Ready to plan your event?',
        'ctaSubtext' => '',
        'ctaButtonText' => 'Contact Us',
        'ctaLink' => url('/contact-us'),
    ])
@endsection
