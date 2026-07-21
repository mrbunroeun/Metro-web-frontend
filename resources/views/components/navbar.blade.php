{{-- Fixed wrapper for top bar + navbar --}}
<div class="fixed top-0 left-0 w-full z-40">

    {{-- Top info bar --}}
    <section
        class="w-full h-[38px] md:h-[50px] bg-[#B00000] flex flex-row justify-center md:gap-[50rem] sm:gap-[20rem] gap-[10rem] items-center">
        <p class="text-white text-[11px] md:text-xs font-light">
            Address
        </p>
        <a href="tel:0123132277"
            class="text-white text-[11px] md:text-xs font-light hover:opacity-80 transition duration-300 ease-in-out">
            012 31 32 77
        </a>
    </section>

    {{-- Floating navbar --}}
    <section x-data="{ mobileOpen: false }" class="relative mt-10 md:mt-12 z-30">
        <div
            class="grid grid-cols-[auto_1fr_auto] items-center mx-auto rounded-full bg-white/95 backdrop-blur-md shadow-xl w-[90%] md:w-[80%] px-6 md:px-10 h-16 md:h-[70px] transition duration-300 ease-in-out">

            {{-- Logo (left) --}}
            <img src="{{ asset('logo/metro_log.svg') }}" alt="Metro Catering Logo" class="h-8 md:h-10 w-auto shrink-0">

            {{-- Desktop links (centered) --}}
            <div class="hidden lg:flex flex-row items-center justify-center gap-10 text-base">
                <a href="#" class="text-[#B00000] transition duration-300 ease-in-out">
                    Home
                </a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    About Metro Catering
                </a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    Catering Services
                </a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    Latest Events
                </a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    Insights
                </a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    Career
                </a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    Contact Us
                </a>
            </div>

            {{-- Mobile hamburger (right) --}}
            <button @click="mobileOpen = !mobileOpen"
                class="lg:hidden flex flex-col justify-center items-center gap-[5px] w-10 h-10 rounded-full hover:bg-black/5 transition duration-300 ease-in-out ml-auto">
                <span class="block w-5 h-[2px] bg-gray-800 transition duration-300 ease-in-out"
                    :class="mobileOpen ? 'rotate-45 translate-y-[7px]' : ''"></span>
                <span class="block w-5 h-[2px] bg-gray-800 transition duration-300 ease-in-out"
                    :class="mobileOpen ? 'opacity-0' : 'opacity-100'"></span>
                <span class="block w-5 h-[2px] bg-gray-800 transition duration-300 ease-in-out"
                    :class="mobileOpen ? '-rotate-45 -translate-y-[7px]' : ''"></span>
            </button>
        </div>

        {{-- Mobile slide-down menu (unchanged) --}}
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" x-cloak
            class="lg:hidden mx-auto w-[90%] md:w-[80%] bg-white/95 backdrop-blur-md rounded-3xl shadow-xl mt-2 px-6 py-4">
            <div class="flex flex-col gap-3 text-base">
                <a href="#" class="text-[#B00000] transition duration-300 ease-in-out">Home</a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">About
                    Metro Catering</a>
                <a href="#"
                    class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Catering Services</a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Latest
                    Events</a>
                <a href="#"
                    class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Insights</a>
                <a href="#"
                    class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Career</a>
                <a href="#" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Contact
                    Us</a>
            </div>
        </div>
    </section>

</div>

{{-- Spacer so page content doesn't hide behind the fixed navbar --}}
<div class="h-[54px] md:h-[58px]"></div>
