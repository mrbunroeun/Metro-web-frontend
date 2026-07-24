@extends('layouts.app')
@section('content')
    @php
        $offerImages = [
            ['src' => 'canteen_catering.png', 'alt' => 'Canteen catering'],
            ['src' => 'corporate_buffet_catering.png', 'alt' => 'Corporate buffet catering'],
            ['src' => 'event_rental_setup.png', 'alt' => 'Event rental setup'],
            ['src' => 'mobile_catering.png', 'alt' => 'Mobile catering'],
        ];

        $offerItems = [
            'Daily breakfast, lunch, and dinner services',
            'Factory and industrial canteen management',
            'School and university meal programs',
            'Office employee dining solutions',
            'Menu planning and nutrition consultation',
            'Food safety and hygiene compliance',
        ];
        $serveRows = [
            [
                'left' => [
                    'title' => 'Factories & Industrial Parks',
                    'lead' => 'Daily meals for:',
                    'items' => [
                        'Garment factories',
                        'Footwear manufacturers',
                        'Electronics factories',
                        'Food processing plants',
                        'Special Economic Zones (SEZs)',
                    ],
                ],
                'right' => [
                    'title' => 'Schools & Educational Institutions',
                    'lead' => 'Providing:',
                    'items' => ['Student lunches', 'Teacher meals', 'Boarding school dining', 'University cafeterias'],
                ],
            ],
            [
                'left' => [
                    'title' => 'Corporate Offices',
                    'lead' => 'Daily meal solutions for:',
                    'items' => [
                        'Corporate headquarters',
                        'Banks',
                        'Technology companies',
                        'BPO and call centers',
                        'Co-working spaces',
                    ],
                ],
                'right' => [
                    'title' => 'Hospitals & Healthcare Facilities',
                    'lead' => 'Supplying:',
                    'items' => ['Patient meals', 'Medical staff meals', 'Visitor cafeterias', 'Healthcare events'],
                ],
            ],
            [
                'left' => [
                    'title' => 'Government Institutions',
                    'lead' => 'Long-term contracts for:',
                    'items' => [
                        'Ministries',
                        'Municipal offices',
                        'Public agencies',
                        'Training institutes',
                        'Government events and workshops',
                    ],
                ],
                'right' => [
                    'title' => 'Construction & Infrastructure Projects',
                    'lead' => 'Providing meals for:',
                    'items' => [
                        'Construction workers',
                        'Engineering teams',
                        'Hydropower projects',
                        'Mining operations',
                        'Remote development sites',
                    ],
                ],
            ],
            [
                'left' => null,
                'right' => [
                    'title' => 'Military & Security Organizations',
                    'lead' => 'Potential customers include:',
                    'items' => ['Military camps', 'Police academies', 'Training centers', 'Public safety institutions'],
                ],
            ],
        ];
        $whyChooseUsPoints = [
            ['text' => 'Experienced large-scale food operations'],
            ['text' => 'Professional kitchen and serving staff'],
            ['text' => 'Consistent meal quality and taste'],
            ['text' => 'Strict food safety standards'],
            ['text' => 'Flexible menus based on customer requirements'],
        ];
    @endphp

    @include('components.hero_section_not_for_home.hero_section_not_for_home', [
        'sectionLabel' => 'Canteen Catering Services',
        'heading' => 'Professional Canteen Catering Services in Cambodia',
        'description' =>
            ' Metro Catering provides reliable daily meal management solutions for factories, schools, universities, hospitals, offices, and institutions across Cambodia. We deliver nutritious, hygienic, and affordable meals designed to meet the needs of large workforces and communities.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '/contact-us', 'style' => 'solid'],
            // ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])
    <section>


        {{-- What We Offer --}}
        <section class="bg-[#A80000] font-sans py-16 pt-[5rem] pb-[10rem] ">
            <div class="max-w-6xl px-[3rem] mx-auto flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-36">

                {{-- Image grid --}}
                <div class="grid grid-cols-2 gap-3 sm:gap-4 w-full max-w-[420px] lg:max-w-[440px] shrink-0 mx-auto lg:mx-0">
                    @foreach ($offerImages as $image)
                        <img src="{{ asset('home/our_core_services/' . $image['src']) }}" alt="{{ $image['alt'] }}"
                            class="w-full h-[130px] sm:h-[160px] object-cover">
                    @endforeach
                </div>

                {{-- Content --}}
                <div class="w-full max-w-[420px] lg:max-w-none lg:flex-1 text-left mx-auto lg:mx-0">
                    <h2 class="text-[24px] sm:text-[32px] lg:text-[36px] font-light mb-5 sm:mb-6 text-[#FFFFFF] text-left">
                        What We Offer
                    </h2>

                    <ul class="space-y-2 sm:space-y-3 mb-8 text-left">
                        @foreach ($offerItems as $item)
                            <li class="text-[15px] sm:text-[16px] text-[#FFFFFF] flex gap-2 text-left">
                                <span>•</span> {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="text-left">
                        <a href="/contact-us"
                            class=" bg-black hover:bg-[#ffffff] active:bg-gray-700 text-white hover:text-[#000000]  text-[15px] font-medium rounded-full px-6 py-3  transition duration-300 ease-in-out ">
                            Request Quotation
                        </a>
                    </div>
                </div>

            </div>
        </section>


        {{-- Who We Serve --}}
        <section class="relative sm:mb-[10rem] mb-[5rem] mt-[-5rem] w-full max-w-full md:max-w-[80%] mx-auto font-sans">
            <div class="grid grid-cols-2 min-h-[300px]">

                {{-- Left image panel --}}
                <div class="relative h-full overflow-hidden">
                    <img src="{{ asset('under_hero/food.png') }}" alt="Catering buffet spread"
                        class="absolute inset-0 w-full h-full object-cover object-center">
                </div>

                {{-- Right red panel --}}
                <div class="bg-[#f3f0e9] flex flex-col items-center justify-center pl-8 pr-2 sm:px-8 md:px-16 py-6 md:py-0">

                    {{-- Fixed-width inner content container --}}
                    <div class="text-left w-full max-w-[200px] sm:max-w-[340px] md:max-w-[420px]">
                        <p class="text-[#a80000] text-[20px] sm:text-[28px] md:text-[36px] font-semibold">Who We Serves</p>

                        <p class="text-[#060606] text-[15px] sm:text-[15px] md:text-[14px] leading-snug md:leading-relaxed">
                            Metro Catering provides professional canteen management and daily meal supply services for
                            factories, industrial parks, schools, universities, hospitals, corporate offices, government
                            institutions, and large organizations across Cambodia. We deliver nutritious, hygienic, and
                            cost-effective meals tailored to workforce and community needs.
                        </p>
                    </div>

                </div>

            </div>

            {{-- Decorative rounded blob blending into page background --}}
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
w-13 h-13 md:w-18 md:h-18 rounded-full bg-[#f3f0e9] z-10">
            </div>
        </section>



        {{-- Factories & Industrial Parks --}}
        <section class=" relative font-sans max-w-5xl mt-[3rem] sm:mt-[-3rem] mx-auto px-4 py-16">

            {{-- ============ DESKTOP (2-column, center line) ============ --}}
            <div class="hidden lg:block relative">
                {{-- vertical line down the center --}}
                <div class="absolute left-1/2 top-0 bottom-0 w-[5px] bg-[#f3f0e9] -translate-x-1/2"></div>

                @foreach ($serveRows as $row)
                    <div class="relative grid grid-cols-2 gap-x-20 {{ !$loop->last ? 'mb-14' : '' }}">

                        {{-- circle aligned with the title of this row --}}
                        <div class="absolute left-1/2 top-0 -translate-x-1/2 w-14 h-14 rounded-full bg-[#f3f0e9] z-10">
                        </div>

                        {{-- left column: text aligns right, toward the center --}}
                        <div class="text-right">
                            @if ($row['left'])
                                <p class="text-[#a80000] text-[20px] font-bold mb-3">{{ $row['left']['title'] }}</p>
                                <p class="text-[#060606] text-[15px] font-semibold mb-1">{{ $row['left']['lead'] }}</p>
                                <ul class="text-[#060606] text-[15px] space-y-0.5">
                                    @foreach ($row['left']['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        {{-- right column: text aligns left, away from the center --}}
                        <div class="text-left">
                            @if ($row['right'])
                                <p class="text-[#a80000] text-[20px] font-bold mb-3">{{ $row['right']['title'] }}</p>
                                <p class="text-[#060606] text-[15px] font-semibold mb-1">{{ $row['right']['lead'] }}</p>
                                <ul class="text-[#060606] text-[15px] space-y-0.5">
                                    @foreach ($row['right']['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- ============ MOBILE (single column, left line) ============ --}}
            <div class="lg:hidden relative space-y-10">
                {{-- vertical line aligned with circle column --}}
                <div class="absolute left-6 top-0 bottom-0 w-[5px] bg-[#f3f0e9] -translate-x-1/2"></div>

                @php
                    // flatten rows into a single ordered list for mobile
                    $flatItems = collect($serveRows)->flatMap(fn($row) => array_filter([$row['left'], $row['right']]));
                @endphp

                @foreach ($flatItems as $entry)
                    <div class="relative flex gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-full bg-[#f3f0e9] z-10"></div>
                        <div class="text-left">
                            <p class="text-[#a80000] text-[18px] font-bold mb-2">{{ $entry['title'] }}</p>
                            <p class="text-[#060606] text-[15px] font-semibold mb-1">{{ $entry['lead'] }}</p>
                            <ul class="text-[#060606] text-[15px] space-y-0.5">
                                @foreach ($entry['items'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>


        {{-- Why Choose Metro Catering --}}
        <section class="relative w-full overflow-hidden">

            {{-- Background image --}}
            <img src="{{ asset('home/why_choose_metro/bg_img.png') }}" alt="Metro Catering hero background"
                class="absolute inset-0 w-full h-full object-cover object-center -z-10">

            {{-- Dark overlay for text readability --}}
            <div class="absolute inset-0 bg-black/60 -z-10"></div>

            <div
                class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 px-4 sm:px-8 lg:px-16 py-16 sm:py-20 lg:py-24 max-w-6xl mx-auto">

                {{-- Left heading --}}
                <div class="text-center lg:text-left shrink-0 lg:w-[340px]">
                    <h2 class="text-white text-[30px] sm:text-[36px] leading-snug">
                        Why Choose
                        <span class="block font-bold">Metro Catering?</span>
                    </h2>
                </div>

                {{-- Right checklist --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6 w-full">
                    @foreach ($whyChooseUsPoints as $point)
                        <div class="flex items-start gap-3">
                            <span
                                class="flex items-center justify-center w-6 h-6 rounded-full bg-[#A80000] shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white"
                                    class="w-3.5 h-3.5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 5.29a1 1 0 010 1.415l-7.09 7.09a1 1 0 01-1.414 0L4.296 9.89a1 1 0 111.414-1.414l3.198 3.198 6.383-6.384a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-white text-[14px] sm:text-[16px] leading-snug">{{ $point['text'] }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>



        {{-- Frequently

Ask Questions --}}
        @php
            $metroCateringFaqs = [
                [
                    'question' => 'Can Metro Catering serve meals for different shifts, including night shifts?',
                    'answer' =>
                        'Yes. We can arrange breakfast, lunch, dinner, and night-shift meals according to your operating schedule. Many factories and industrial facilities require multiple meal sessions, and our team can support 24-hour operations when needed.',
                ],
                [
                    'question' => 'Can you provide separate menus for office staff and factory workers?',
                    'answer' => '-',
                ],
                [
                    'question' => 'How far in advance do we need to arrange a long-term canteen contract?',
                    'answer' => '-',
                ],
                [
                    'question' => 'What happens if the number of employees changes from day to day?',
                    'answer' => '-',
                ],
                [
                    'question' => 'If our company already has a kitchen, can Metro Catering operate it?',
                    'answer' => '-',
                ],
                [
                    'question' =>
                        'Can Metro Catering handle emergency meal requests for overtime work or special events?',
                    'answer' => '-',
                ],
            ];
        @endphp

        <x-faqs.faqs :faqs="$metroCateringFaqs" />



    </section>

    {{-- footer --}}
    @include('components.footer', [
        'ctaHeading' => 'Looking for a long-term canteen partner?',
        'ctaSubtext' => 'Contact our team for a customized proposal.',
        'ctaButtonText' => 'Contact Us',
        'ctaLink' => url('/contact-us'),
    ])
@endsection
