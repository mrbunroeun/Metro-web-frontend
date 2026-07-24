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
        'sectionLabel' => 'Insights',
        'heading' => 'Premium Catering Services in Cambodia for Corporate, Weddings & Private Events',
        'description' => '
                                Metro Catering delivers high-quality food, professional event setups, and customized catering solutions for businesses, schools, weddings, and special occasions across Cambodia.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '#', 'style' => 'solid'],
            ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])


    {{-- Featured Food Box --}}
    @php
        $featuredEvents = [
            [
                'title' => 'Featured Food Box & Refreshment Events',
                'lines' => [
                    'Ministry Training Workshop',
                    'Location: Phnom Penh',
                    'Guests: 250 participants',
                    'Services: Business Lunch Boxes + Coffee Break',
                ],
            ],
            // add more events here...
        ];
    @endphp

    {{-- Featured Food Box --}}
    <section class="relative w-full max-w-full md:max-w-[80%] mx-auto font-sans">
        <div class="grid grid-cols-1 md:grid-cols-2 min-h-[220px]">

            {{-- Left image panel --}}
            <div class="relative min-h-[220px] sm:min-h-[260px] md:h-auto overflow-hidden">
                <img src="{{ asset('girl_holding_plate/girl_holding_plate.png') }}" alt="Catering staff serving guests"
                    class="absolute inset-0 w-full h-full object-cover object-center">

                {{-- Blob: mobile only, stuck to bottom-center of the image --}}
                <div
                    class="md:hidden absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2
            w-[52px] h-[52px] rounded-full bg-[#f3f0e9] z-10">
                </div>
            </div>

            {{-- Right cream panel --}}
            <div class="bg-[#f3f0e9] flex flex-col justify-center px-6 sm:px-10 md:px-14 py-6 md:py-8">

                <div class="w-full max-w-[460px] space-y-6">
                    @foreach ($featuredEvents as $event)
                        <div>
                            <p class="text-[#a80000] font-bold text-[16px] sm:text-[17px] leading-snug mb-1">
                                {{ $event['title'] }}
                            </p>
                            @foreach ($event['lines'] as $line)
                                <p class="text-[#060606] text-[13px] sm:text-[14px] leading-snug">
                                    {{ $line }}
                                </p>
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

        {{-- Blob: desktop only, centered on the section seam --}}
        <div
            class="hidden md:block absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
    w-[72px] h-[72px] rounded-full bg-[#f3f0e9] z-10">
        </div>

    </section>



    @php
        $packages = [
            [
                'number' => '01',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '02',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '03',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '04',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '05',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '06',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '07',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            [
                'number' => '08',
                'image' => asset('catering_services/menu/lorem_insume.png'),
                'title' => 'Lorem Insume',
                'description' =>
                    'Metro Catering provides ready-to-serve food boxes and coffee break refreshments designed for organizations that require efficient meal distribution without compromising quality and presentation.',
                'link' => '#',
            ],
            // add more packages here...
        ];
    @endphp

    <div class="bg-white py-16 px-4">
        <div
            class="grid items-stretch justify-center gap-4 max-w-[1300px] mx-auto grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
            @foreach ($packages as $package)
                <div class="font-sans bg-[#f3f0e9] overflow-hidden shadow-sm h-full flex flex-col">
                    {{-- Image with number badge --}}
                    <div class="relative bg-[#ffffff] pb-[5px] shrink-0">
                        <img src="{{ $package['image'] }}" alt="{{ $package['title'] }}"
                            class="w-full h-[160px] md:h-[130px] object-cover bg-[#d6d6d6]">
                        <div
                            class="absolute -bottom-5 right-4 w-11 h-11 rounded-full bg-[#a80000] shadow-md flex items-center justify-center">
                            <span class="text-white text-[15px] font-semibold">
                                {{ $package['number'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Title + description + button --}}
                    <div class="px-5 pt-8 pb-6 flex-grow flex flex-col">
                        <p class="text-[#060606] text-[17px] font-bold leading-snug mb-3">
                            {{ $package['title'] }}
                        </p>
                        <p class="text-[#060606] text-[14px] leading-relaxed mb-6">
                            {{ $package['description'] }}
                        </p>

                        <div class="mt-auto flex justify-center">
                            <a href="/latest-events-detail"
                                class="inline-block bg-[#a80000] text-white text-[14px] font-semibold rounded-full sm:px-8 px-4 py-2.5 hover:bg-[#8f0000] transition-colors">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


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
