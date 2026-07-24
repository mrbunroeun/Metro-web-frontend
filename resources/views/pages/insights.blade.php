@extends('layouts.app')
@section('content')
    @php

        $metroCateringFaqs = [
            [
                'question' => 'Can we order both food boxes and coffee breaks for the same event?',
                'answer' =>
                    'Yes. Many clients combine lunch boxes with morning and afternoon refreshment packages to provide a complete catering solution for seminars and workshops.',
            ],
            [
                'question' => 'Can Metro Catering accommodate vegetarian, halal, or allergy requirements?',
                'answer' => '-',
            ],
            [
                'question' => 'Can we add our company logo to the food boxes?',
                'answer' => '-',
            ],
            [
                'question' => 'What is the latest time to confirm the final number of participants?',
                'answer' => '-',
            ],
            [
                'question' => 'Can you deliver food boxes outside Phnom Penh?',
                'answer' => '-',
            ],
            [
                'question' => 'What happens if additional guests arrive on the event day?',
                'answer' => '-',
            ],
        ];

    @endphp
    @include('components.hero_section_not_for_home.hero_section_not_for_home', [
        'sectionLabel' => 'Latest Events',
        'heading' => 'Premium Catering Services in Cambodia for Corporate, Weddings & Private Events',
        'description' =>
            'Metro Catering delivers high-quality food, professional event setups, and customized catering solutions for businesses, schools, weddings, and special occasions across Cambodia.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '#', 'style' => 'solid'],
            ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])


    {{-- Metro Catering Insights --}}
    @php
        $insights = [
            [
                'image' => 'insights_img/girl_holding_plate.png',
                'title' => 'Metro Catering',
                'text' =>
                    'Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet rental and venue setup. Catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup.',
            ],
            [
                'image' => 'insights_img/two_man_talking.png',
                'title' => 'Metro Catering',
                'text' =>
                    'Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet rental and venue setup. Catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup.',
            ],
            [
                'image' => 'insights_img/heathly_food.png',
                'title' => 'Metro Catering',
                'text' =>
                    'Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet rental and venue setup. Catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup.',
            ],
            [
                'image' => 'insights_img/fork.png',
                'title' => 'Metro Catering',
                'text' =>
                    'Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet rental and venue setup. Catering and event solutions from food preparation and buffet services to equipment rental and venue setup. Trusted by companies, organizations, and families, Metro Catering provides complete catering and event solutions from food preparation and buffet services to equipment rental and venue setup.',
            ],
        ];
    @endphp

    <section class="w-full max-w-[100%] sm:max-w-[90%] py-[5rem] mx-auto">
        @foreach ($insights as $insight)
            @php $isOdd = $loop->iteration % 2 !== 0; @endphp

            <div class="relative grid grid-cols-1 min-[1050px]:grid-cols-2">

                @if ($isOdd)
                    {{-- Image top / left --}}
                    <div class="order-1 min-[1050px]:order-1 relative min-h-[260px] md:min-h-[300px] overflow-hidden">
                        <img src="{{ asset($insight['image']) }}" alt="{{ $insight['title'] }}"
                            class="absolute inset-0 w-full h-full object-cover object-center">
                    </div>

                    {{-- Cream text bottom / right --}}
                    <div
                        class="order-2 min-[1050px]:order-2 bg-[#f3f0e9] flex flex-col justify-center px-8 sm:px-10 md:px-12 py-8 md:py-10">
                        <h3 class="text-[#a80000] font-bold text-[20px] sm:text-[22px] mb-3">
                            {{ $insight['title'] }}
                        </h3>
                        <p class="text-[#000000] text-[12px] sm:text-[13px] leading-relaxed">
                            {{ $insight['text'] }}
                        </p>
                    </div>
                @else
                    {{-- Image top / right on desktop, always on top when stacked --}}
                    <div class="order-1 min-[1050px]:order-2 relative min-h-[260px] md:min-h-[300px] overflow-hidden">
                        <img src="{{ asset($insight['image']) }}" alt="{{ $insight['title'] }}"
                            class="absolute inset-0 w-full h-full object-cover object-center">
                    </div>

                    {{-- Red text bottom when stacked, left on desktop --}}
                    <div
                        class="order-2 min-[1050px]:order-1 bg-[#a80000] flex flex-col justify-center px-8 sm:px-10 md:px-12 py-8 md:py-10">
                        <h3 class="text-[#ffffff] font-bold text-[20px] sm:text-[22px] mb-3">
                            {{ $insight['title'] }}
                        </h3>
                        <p class="text-[#ffffff] text-[12px] sm:text-[13px] leading-relaxed">
                            {{ $insight['text'] }}
                        </p>
                    </div>
                @endif

                {{-- Blob: top seam when stacked, centered on the column seam at 2-col --}}
                <div
                    class="absolute top-0 min-[1050px]:top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
            w-13 h-13 md:w-18 md:h-18 rounded-full bg-[#f5a623] z-10">
                </div>

            </div>
        @endforeach
    </section>


    {{-- Frequently Ask Questions --}}
    <x-faqs.faqs :faqs="$metroCateringFaqs" />





    </section>

    {{-- footer --}}
    @include('components.footer', [
        'ctaHeading' => 'Need Food Boxes or Refreshments for Your Next Event?',
        'ctaSubtext' => 'Whether you are organizing a government workshop, corporate seminar, school activity, or executive meeting, 
                                                                                                                                                                Metro Catering provides reliable and professional catering solutions tailored to your needs.',
        'ctaButtonText' => 'Contact Us',
        'ctaLink' => url('/contact-us'),
    ])
@endsection
