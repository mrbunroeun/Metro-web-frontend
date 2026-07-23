@extends('layouts.app')
@section('content')
    @php
        $whoWeServe = [
            [
                'title' => 'Corporate Offices',
                'items' => ['Internal meetings', 'Employee training', 'Board meetings', 'Company celebrations'],
            ],
            [
                'title' => 'Government Institutions',
                'items' => ['Workshops', 'Official conferences', 'Public consultations', 'Ministry events'],
            ],
            [
                'title' => 'Schools & Universities',
                'items' => ['Student programs', 'Teacher workshops', 'Graduation ceremonies', 'Academic conferences'],
            ],
            [
                'title' => 'NGOs & International Organizations',
                'items' => ['Internal meetings', 'Employee training', 'Board meetings', 'Company celebrations'],
            ],
            [
                'title' => 'Banks & Embassies',
                'items' => ['Executive meetings', 'VIP receptions', 'Diplomatic events'],
            ],
            // add more segments here...
        ];

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
        'sectionLabel' => 'Food Box & Refreshments',
        'heading' => 'Professional Food Box & Refreshment Catering Services in Cambodia',
        'description' =>
            'Convenient, hygienic, and delicious food boxes and refreshment packages for meetings, seminars, training programs, schools, government institutions, and corporate events across Cambodia.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '#', 'style' => 'solid'],
            ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])


    {{-- Overview --}}
    <section class="relative w-full">
        <div class="grid grid-cols-2 min-h-[300px] md:min-h-[380px]">

            {{-- Left dark panel --}}
            <div class="bg-[#1a1a1a] flex flex-col items-center justify-center px-4 sm:px-8 md:px-16 py-6 md:py-0">

                {{-- Fixed-width inner content container --}}
                <div class="text-left w-full max-w-[280px] sm:max-w-[340px] md:max-w-[460px]">
                    <h2 class="text-white sm:text-[32px] text-[20px] font-bold mb-3">
                        Overview
                    </h2>
                    <p class="text-white/90 sm:text-[15px] text-[13px] leading-snug mb-3">
                        Metro Catering provides ready-to-serve food boxes and coffee break
                        refreshments designed for organizations that require efficient meal
                        distribution without compromising quality and presentation.
                    </p>
                    <p class="text-white/90 sm:text-[15px] text-[13px] leading-snug mb-4">
                        From executive meetings and workshops to school programs and
                        government conferences, our team delivers customized meal solutions
                        with flexible menus, timely delivery, and professional service.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center border border-white/40 hover:bg-white hover:text-[#1a1a1a] active:bg-white/90 text-white text-[13px] font-medium px-5 py-2.5 min-h-[40px] rounded-full w-fit transition duration-300 ease-in-out">
                        Request Quotation
                    </a>
                </div>

            </div>

            {{-- Right image panel --}}
            <div class="relative h-full overflow-hidden">
                <img src="{{ asset('under_hero/food.png') }}" alt="Metro Catering food boxes"
                    class="absolute inset-0 w-full h-full object-cover object-center">
            </div>

        </div>
    </section>

    {{-- Booking Requirement --}}
    <section
        class="relative sm:mb-[10rem] mb-[4rem] w-full sm:max-w-[80%] max-w-[95%] mx-auto bg-[#a80000] h-[200px] overflow-visible">
        <div class="max-w-6xl mx-auto h-full flex items-center px-4 sm:px-8">

            {{-- Girl image — taller than the section, overflows top & bottom --}}
            <img src="{{ asset('girl_hold_phone/girl_hold_phone.png') }}" alt="Woman holding phone with coffee tray"
                class="relative sm:bottom-[1.6rem] bottom-[-0.6rem] h-[180px] sm:h-[250px] w-auto shrink-0">

            {{-- Booking text --}}
            <div class="pl-6 sm:pl-10">
                <p class="text-[#ffffff] text-[15px] sm:text-[26px] font-bold mb-1">
                    Booking Requirement:
                </p>
                <p class="text-[#ffffff] text-[15px] sm:text-[20px] leading-snug">
                    Minimum 25 participants with at least 3 days advance notice.
                </p>
            </div>

        </div>

        {{-- Decorative rounded notch at top-center seam --}}
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2
w-13 h-13 md:w-18 md:h-18 rounded-full bg-[#a80000] z-10">
        </div>
    </section>



    <section>
        <div
            class="flex  gap-2 justify-center bg-[#f3f0e9] pt-10 text-[#a80000] md:text-[30px] sm:text-[25px] text-[20px] font-bold">
            <h1 class="font-normal">Equipment </h1>
            <h1>Categories</h1>
        </div>

        {{-- What We Serve --}}
        @php

            $packages = [
                [
                    'number' => '01',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Standard Food Box',
                    'price' => '$3.50 / Person',
                    'note' => 'Minimum: 25 Boxes',
                    'includes' => ['1 Main Dish', 'Steamed Rice', 'Seasonal Fruit', 'Drinking Water'],
                    'perfectFor' => ['Factory meetings', 'NGO activities', 'School programs', 'Community events'],
                ],
                [
                    'number' => '02',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Standard Food Box',
                    'price' => '$5/ Person',
                    'note' => 'Minimum: 25 Boxes',
                    'includes' => ['1 Main Dish', 'Steamed Rice', 'Seasonal Fruit', 'Drinking Water'],
                    'perfectFor' => ['Factory meetings', 'NGO activities', 'School programs', 'Community events'],
                ],
                [
                    'number' => '03',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Executive Food Box',
                    'price' => '$8/ Person',
                    'note' => 'Minimum: 25 Boxes',
                    'includes' => ['1 Main Dish', 'Steamed Rice', 'Seasonal Fruit', 'Drinking Water'],
                    'perfectFor' => ['Factory meetings', 'NGO activities', 'School programs', 'Community events'],
                ],
                [
                    'number' => '04',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Refreshment & Coffee Break Packages ',
                    'price' => 'Basic Refreshment Package
$2 / Person',
                    'note' => '',
                    'includes' => ['1 Main Dish', 'Steamed Rice', 'Seasonal Fruit', 'Drinking Water'],
                    'perfectFor' => ['Factory meetings', 'NGO activities', 'School programs', 'Community events'],
                ],
                [
                    'number' => '05',
                    'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
                    'title' => 'Business Coffee Break',
                    'price' => '$4 / Person',
                    'note' => '', // zero-width char, keeps the line's height even when "empty"
        'includes' => ['1 Main Dish', 'Steamed Rice', 'Seasonal Fruit', 'Drinking Water'],
        'perfectFor' => ['Factory meetings', 'NGO activities', 'School programs', 'Community events'],
    ],
    [
        'number' => '06',
        'image' => asset('catering_services/mobile_catering/corporate_mobile_package.png'),
        'title' => 'Premium Seminar Refreshment',
        'price' => '$6 / Person',
        'note' => '',
        'includes' => ['1 Main Dish', 'Steamed Rice', 'Seasonal Fruit', 'Drinking Water'],
        'perfectFor' => ['Factory meetings', 'NGO activities', 'School programs', 'Community events'],
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
                        :price="$package['price']" :note="$package['note']" :includes="$package['includes'] ?? []" :perfectFor="$package['perfectFor'] ?? []" :suitableFor="$package['suitableFor'] ?? []"
                        :list="$package['list'] ?? []" />
                @endforeach
            </div>
        </div>


        {{-- Menu Options --}}
        @php
            $menuOptions = [
                [
                    'number' => '01',
                    'image' => asset('catering_services/menu/khmer_favorites.png'),
                    'title' => 'Khmer Favorites',
                    'items' => [
                        'Chicken Amok',
                        'Beef Lok Lak',
                        'Stir-Fried Vegetables',
                        'Fried Rice',
                        'Grilled Chicken with Rice',
                        'Fish Curry',
                    ],
                ],
                [
                    'number' => '02',
                    'image' => asset('catering_services/menu/international_options.png'),
                    'title' => 'International Options',
                    'items' => [
                        'Teriyaki Chicken',
                        'Pasta Bolognese',
                        'Grilled Fish Fillet',
                        'Caesar Salad',
                        'Roasted Chicken',
                        'Beef Stroganoff',
                    ],
                ],
                [
                    'number' => '03',
                    'image' => asset('catering_services/menu/snack_pastry.png'),
                    'title' => 'Snack & Pastry Selections',
                    'items' => [
                        'Mini Sandwiches',
                        'Croissants',
                        'Spring Rolls',
                        'Khmer Desserts',
                        'Muffins',
                        'Fresh Fruits',
                        'Cookies',
                        'Traditional Rice Cakes',
                    ],
                ],
                // add more menu options here...
            ];
        @endphp

        <div class="bg-white py-16 px-4">
            <h2 class="text-[#a80000] text-[28px] md:text-[40px] font-bold text-center mb-12">
                Menu Options
            </h2>

            <div class="grid items-stretch justify-center gap-4 max-w-[700px] mx-auto grid-cols-2 md:grid-cols-3">
                @foreach ($menuOptions as $option)
                    <div class="font-sans bg-[#f3f0e9] overflow-hidden shadow-sm h-full flex flex-col">
                        {{-- Image with number badge --}}
                        <div class="relative  bg-[#ffffff] pb-[5px] shrink-0">
                            <img src="{{ $option['image'] }}" alt="{{ $option['title'] }}"
                                class="w-full h-[160px] md:h-[130px] object-cover bg-[#d6d6d6]">
                            <div
                                class="absolute -bottom-5 right-4 w-11 h-11 rounded-full bg-[#a80000] shadow-md flex items-center justify-center">
                                <span class="text-white text-[15px] font-semibold">
                                    {{ $option['number'] }}
                                </span>
                            </div>
                        </div>

                        {{-- Title + list --}}
                        <div class="px-5 pt-8 pb-6 flex-grow">
                            <p class="text-[#a80000] text-[15px] font-bold leading-snug mb-3">
                                {{ $option['title'] }}
                            </p>
                            <ul class="text-[#060606] text-[15px] leading-relaxed list-disc pl-4">
                                @foreach ($option['items'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        {{-- who we serve --}}
        <section class="relative bg-[#A80000] py-12 lg:py-0 lg:h-[560px] px-4 overflow-hidden font-sans">

            <div class="flex flex-col items-center lg:block max-w-5xl mx-auto lg:h-full">

                {{-- Waiter image --}}
                <img src="{{ asset('the_cheft/the_cheft.png') }}" alt="Catering waiter"
                    class="static mx-auto mb-8
            lg:absolute lg:bottom-0 lg:left-4 lg:mb-0
            h-[360px] sm:h-[390px] md:h-[420px] lg:h-full lg:max-h-[560px]
            w-auto object-contain lg:z-10">

                {{-- Heading + Cards --}}
                <div class="relative z-0 flex flex-col items-center lg:h-full lg:justify-center lg:pl-[380px]">

                    {{-- Heading --}}
                    <h2 class="text-white text-[24px] sm:text-[32px] font-bold text-center mb-1">
                        Who We Serve
                    </h2>
                    <p class="text-white text-[15px] text-center mb-6">
                        Metro Catering supports:
                    </p>

                    {{-- Cards --}}
                    <div class="flex flex-wrap justify-center gap-4 max-w-[650px]">
                        @foreach ($whoWeServe as $segment)
                            <div
                                class="bg-[#8f0000] rounded-xl pt-4 pb-4 px-4
                        w-[calc(50%-8px)] md:w-[calc(33.333%-11px)]">
                                <p class="text-white font-bold text-[15px] leading-snug mb-2">
                                    {{ $segment['title'] }}
                                </p>
                                <ul class="text-white text-[13px] leading-snug list-disc pl-4 opacity-90">
                                    @foreach ($segment['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </section>
        {{-- Who We Serve --}}
        @php
            $whoWeServeLeft = ['Weddings', 'Government events', 'Conferences', 'Exhibitions'];
            $whoWeServeRight = ['Product launches', 'Corporate dinners', 'Universities', 'Community events'];
        @endphp
        <section class="relative w-full sm:mb-[10rem] mb-[5rem] max-w-full md:max-w-[80%] mx-auto font-sans">
            <div class="grid grid-cols-2 min-h-[300px]">

                {{-- Left image panel --}}
                <div class="relative mx-auto h-full overflow-hidden">
                    <img src="{{ asset('under_hero/food.png') }}" alt="Catering buffet spread"
                        class="absolute inset-0 w-full h-full object-cover object-center">
                </div>

                {{-- Right red panel --}}
                <div class="bg-[#a80000] flex flex-col items-center justify-center pl-8 pr-2 sm:px-8 md:px-16 py-6 md:py-0">

                    {{-- Fixed-width inner content container --}}
                    <div class="text-left w-full max-w-[200px] sm:max-w-[340px] md:max-w-[420px]">
                        <p class="text-[#ffffff] text-[20px] sm:text-[28px] md:text-[40px] font-bold mb-4">Who We Serve</p>

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
