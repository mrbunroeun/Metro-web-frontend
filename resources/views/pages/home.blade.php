@extends('layouts.app')
@section('content')
    <section class="h-[3000px]">



        {{-- hero section --}}
        <section
            class="relative w-full flex flex-col items-center justify-center text-center px-4 py-24 md:py-32 overflow-hidden min-h-[600px] md:min-h-[700px] -mt-[54px] md:-mt-[58px]">

            {{-- Background image --}}
            <img src="{{ asset('hero_section/hero_section.png') }}" alt="Metro Catering hero background"
                class="absolute inset-0 w-full h-full object-cover object-center -z-10">

            {{-- Dark overlay for text readability --}}
            <div class="absolute inset-0 bg-black/50 -z-10"></div>

            {{-- METRO wordmark with flanking lines --}}
            <div class="flex flex-row items-center justify-center gap-4 md:gap-6 mb-2 mt-[54px] md:mt-[58px]">
                <span class="h-px w-16 md:w-24 bg-white/70"></span>
                <div class="flex flex-col items-center">
                    <h2 class="text-[#B00000] font-bold text-2xl md:text-4xl tracking-[0.3em]">
                        METRO
                    </h2>
                    <p class="text-white text-[10px] md:text-xs tracking-[0.35em] -mt-1">
                        CATERING &amp; EVENTS
                    </p>
                </div>
                <span class="h-px w-16 md:w-24 bg-white/70"></span>
            </div>

            {{-- Main heading --}}
            <h1 class="text-white font-semibold text-3xl md:text-5xl leading-tight mt-8 max-w-5xl">
                Premium Catering Services in Cambodia for Corporate, Weddings &amp; Private Events
            </h1>

            {{-- Description --}}
            <p class="text-white/90 sm:text-[25px] text-[14px]  mt-6 max-w-5xl leading-relaxed">
                Metro Catering delivers high-quality food, professional event setups, and customized
                catering solutions for businesses, schools, weddings, and special occasions across Cambodia.
            </p>

            {{-- Contact Us button --}}
            <a href="#"
                class="mt-8 bg-[#B00000] hover:bg-[#8f0000] text-white text-sm font-medium px-8 py-3 rounded-full transition duration-300 ease-in-out">
                Contact Us
            </a>

        </section>



        {{-- About Metro Catering --}}
        <section class="relative w-full mb-[20rem]">
            <div class="grid grid-cols-2 h-[400px] md:h-[500px]">

                {{-- Left red panel --}}
                <div class="bg-[#B00000] flex flex-col items-center justify-center px-4 sm:px-8 md:px-16 py-6 md:py-0">

                    {{-- Fixed-width inner content container --}}
                    <div class="text-left w-full max-w-[280px] sm:max-w-[340px] md:max-w-[420px]">
                        <p class="text-white sm:text-[40px] text-[20px] font-semibold">About</p>
                        <h2 class="text-white sm:text-[40px] text-[20px] font-bold mt-1 mb-2">
                            Metro Catering
                        </h2>
                        <p class="text-white/90 sm:text-[20px] text-[14px] leading-snug mb-3">
                            Trusted by companies, organizations, and families, Metro Catering
                            provides complete catering and event solutions from food preparation
                            and buffet services to equipment rental and venue setup.
                        </p>
                        <a href="#"
                            class="inline-flex items-center justify-center bg-black hover:bg-gray-800 active:bg-gray-700 text-white text-[14px] font-medium px-2 py-2.5 min-h-[44px] md:px-6 md:py-2.5 rounded-full w-fit transition duration-300 ease-in-out">
                            Request Quotation
                        </a>
                    </div>

                </div>

                {{-- Right image panel --}}
                <div class="relative h-full overflow-hidden">
                    <img src="{{ asset('under_hero/food.png') }}" alt="Metro Catering food"
                        class="absolute inset-0 w-full h-full object-cover object-center">
                </div>

            </div>

            {{-- Decorative rounded blob blending into page background --}}
            <div
                class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2
        w-10 h-10 md:w-14 md:h-14 rounded-full bg-white z-10">
            </div>
        </section>


        {{-- Our Core Services --}}
        <section class="py-8 sm:py-12 lg:py-16 px-4 sm:px-6 lg:px-8">

            {{-- Title --}}
            <div class="text-center mb-8 sm:mb-10 lg:mb-12">
                <h2 class="text-2xl md:text-3xl font-medium text-gray-800">
                    Our <span class="text-[#B00000] font-bold">Core Services</span>
                </h2>
            </div>

            {{-- Cards --}}
            <div
                class="grid justify-start gap-6
                grid-cols-[repeat(auto-fit,minmax(clamp(140px,40vw,200px),1fr))]
                max-w-[1280px] mx-auto">
                <x-home.our_core_services number="01" title="Canteen Catering" image="under_hero/food.png" />
                <x-home.our_core_services number="02" title="Mobile Catering" image="under_hero/food.png" />
                <x-home.our_core_services number="03" title="Food Box & Light Refreshment Catering"
                    image="under_hero/food.png" />
                <x-home.our_core_services number="04" title="Corporate Buffet Catering" image="under_hero/food.png" />
                <x-home.our_core_services number="05" title="Event Rental & Setup" image="under_hero/food.png" />
            </div>

            {{-- Button --}}
            <div class="flex justify-center mt-8 sm:mt-10 lg:mt-12">
                <a href="#"
                    class="inline-block px-8 py-3 rounded-full border border-[#B00000] text-[#B00000] font-medium text-sm
                   transition-colors duration-300 hover:bg-[#B00000] hover:text-white">
                    Explore All Services
                </a>
            </div>

        </section>




    </section>
@endsection
