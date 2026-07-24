@extends('layouts.app')
@section('content')
    @php

        $metroCateringFaqs = [
            [
                'question' => 'Do you rent equipment without catering services?',
                'answer' => 'Yes. Equipment rental can be booked independently.',
            ],
            [
                'question' => '  Who handles installation and dismantling?',
                'answer' => '-',
            ],
            [
                'question' => '  Can equipment be delivered outside Phnom Penh?',
                'answer' => '-',
            ],
            [
                'question' => '  Is there a minimum rental amount?',
                'answer' => '-',
            ],
            [
                'question' => '  What happens if equipment is damaged during the event?',
                'answer' => '-',
            ],
            [
                'question' => '  Can you provide complete event packages including food and equipment?',
                'answer' => '-',
            ],
        ];
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
            ['text' => 'One-stop event solution  '],
            ['text' => 'Professional installation team  '],
            ['text' => 'High-quality equipment  '],
            ['text' => 'Nationwide support  '],
            ['text' => 'Flexible rental packages  '],
        ];
    @endphp
    @include('components.hero_section_not_for_home.hero_section_not_for_home', [
        'sectionLabel' => 'Event Equipment Rental',
        'heading' => 'Event Equipment Rental &
                                                                                                    Setup Services',
        'description' =>
            'Metro Catering offers complete event equipment solutions, allowing clients to organize successful events with one trusted partner.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '/contact-us', 'style' => 'solid'],
            // ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])
    <section>
        <div
            class="flex  gap-2 justify-center bg-[#f3f0e9] pt-10 text-[#a80000] md:text-[36px] sm:text-[25px] text-[20px] font-bold">
            <h1 class="font-normal">Equipment </h1>
            <h1>Categories</h1>
        </div>

        {{-- What We Serve --}}
        @php
            $packages = [
                [
                    'number' => '01',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Tables & Chairs',
                    'price' => '',
                    'note' => '',
                    'lists' => [
                        'Banquet tables',
                        'VIP tables',
                        'Conference tables',
                        'Plastic chairs',
                        'Banquet chairs',
                        'Cocktail tables',
                    ],
                ],
                [
                    'number' => '02',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Tents & Structures',
                    'price' => '',
                    'note' => '',
                    'lists' => [
                        'Banquet tables',
                        'VIP tables',
                        'Conference tables',
                        'Plastic chairs',
                        'Banquet chairs',
                        'Cocktail tables',
                    ],
                ],
                [
                    'number' => '03',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Dining Equipment',
                    'price' => '',
                    'note' => '',
                    'lists' => [
                        'Banquet tables',
                        'VIP tables',
                        'Conference tables',
                        'Plastic chairs',
                        'Banquet chairs',
                        'Cocktail tables',
                    ],
                ],
                [
                    'number' => '04',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Audio & Visual',
                    'price' => '',
                    'note' => '',
                    'lists' => [
                        'Banquet tables',
                        'VIP tables',
                        'Conference tables',
                        'Plastic chairs',
                        'Banquet chairs',
                        'Cocktail tables',
                    ],
                ],
                [
                    'number' => '05',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Decorations',
                    'price' => '',
                    'note' => '',
                    'lists' => [
                        'Banquet tables',
                        'VIP tables',
                        'Conference tables',
                        'Plastic chairs',
                        'Banquet chairs',
                        'Cocktail tables',
                    ],
                ],

                // add more packages here...
            ];
        @endphp
        <div class="bg-[#f3f0e9]">
            <div
                class="grid items-start justify-center gap-2 max-w-[1400px] mx-auto px-2 py-16
        grid-cols-[repeat(auto-fit,180px)]
        sm:grid-cols-[repeat(auto-fit,190px)]
        md:grid-cols-[repeat(auto-fit,190px)]
        lg:grid-cols-[repeat(auto-fit,190px)]
        xl:grid-cols-[repeat(auto-fit,190px)]">
                @foreach ($packages as $package)
                    <x-products_package.products_package :number="$package['number']" :image="$package['image']" :title="$package['title']"
                        :price="$package['price']" :note="$package['note']" :list="$package['lists'] ?? []" />
                @endforeach
            </div>
        </div>

        {{-- Who We Serve --}}
        @php
            $whoWeServeLeft = ['Weddings', 'Government events', 'Conferences', 'Exhibitions'];
            $whoWeServeRight = ['Product launches', 'Corporate dinners', 'Universities', 'Community events'];
        @endphp
        <section class="relative w-full sm:mb-[10rem] mb-[5rem] max-w-full md:max-w-[80%] mx-auto font-sans">
            <div class="grid grid-cols-2 min-h-[300px]">

                {{-- Left image panel --}}
                <div class="relative h-full overflow-hidden">
                    <img src="{{ asset('under_hero/food.png') }}" alt="Catering buffet spread"
                        class="absolute inset-0 w-full h-full object-cover object-center">
                </div>

                {{-- Right red panel --}}
                <div class="bg-[#a80000] flex flex-col items-center justify-center pl-8 pr-2 sm:px-8 md:px-16 py-6 md:py-0">

                    {{-- Fixed-width inner content container --}}
                    <div class="text-left w-full max-w-[200px] sm:max-w-[340px] md:max-w-[420px]">
                        <p class="text-[#ffffff] text-[20px] sm:text-[28px] md:text-[36px] font-bold mb-4">Who We Serve</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-1">
                            <ul class="space-y-1">
                                @foreach ($whoWeServeLeft as $item)
                                    <li class="text-[#ffffff] text-[15px] flex gap-1">
                                        <span>•</span> {{ $item }}
                                    </li>
                                @endforeach
                            </ul>

                            <ul class="space-y-1">
                                @foreach ($whoWeServeRight as $item)
                                    <li class="text-[#ffffff] text-[15px] flex gap-1">
                                        <span>•</span> {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            {{-- Decorative rounded blob blending into page background --}}
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
w-13 h-13 md:w-18 md:h-18 rounded-full bg-[#a80000] z-10">
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



        {{-- Frequently Ask Questions --}}



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
