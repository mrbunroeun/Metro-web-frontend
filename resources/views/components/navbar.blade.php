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
    <section class="relative mt-10 md:mt-12 z-30">

        <div
            class="grid grid-cols-[auto_1fr_auto] items-center mx-auto rounded-full bg-white/95 backdrop-blur-md shadow-xl w-[90%] md:w-[80%] px-6 md:px-10 h-13 md:h-[60px] transition duration-300 ease-in-out">

            {{-- Logo (left) --}}
            <img src="{{ asset('logo/metro_log.svg') }}" alt="Metro Catering Logo" class="h-8 md:h-10 w-auto shrink-0">

            {{-- Desktop links (centered) --}}
            <div class="hidden lg:flex flex-row items-center justify-center gap-10 text-base">
                <a href="/" class="text-[#B00000] transition duration-300 ease-in-out">Home</a>
                <a href="/about-us" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">About
                    Metro Catering</a>

                {{-- Catering Services dropdown (desktop) --}}
                <div class="relative" id="cateringDropdown">
                    <button type="button"
                        class="flex items-center gap-1 text-[#B00000] font-bold transition duration-300 ease-in-out focus:outline-none">
                        Catering Services
                        <svg id="cateringChevron" class="w-3.5 h-3.5 transition-transform duration-500 ease-in-out"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Dropdown panel --}}
                    <div id="cateringPanel"
                        class="absolute left-1/2 -translate-x-1/2 mt-4 w-64 bg-white rounded-2xl shadow-xl overflow-hidden
                               opacity-0 -translate-y-2 pointer-events-none transition-all duration-500 ease-in-out">
                        <a href="/canteen-catering-services"
                            class="dropdown-link block px-5 py-3 transition-colors duration-300 ease-in-out
                                   {{ request()->is('canteen-catering-services') ? 'active' : 'text-gray-700' }}">
                            Canteen Catering Services
                        </a>
                        <a href="/mobile-catering"
                            class="dropdown-link block px-5 py-3 transition-colors duration-300 ease-in-out
                                   {{ request()->is('mobile-catering') ? 'active' : 'text-gray-700' }}">
                            Mobile Catering
                        </a>
                        <a href="/corporate-buffet-catering"
                            class="dropdown-link block px-5 py-3 transition-colors duration-300 ease-in-out
                                   {{ request()->is('corporate-buffet-catering') ? 'active' : 'text-gray-700' }}">
                            Corporate Buffet Catering
                        </a>
                        <a href="/event-equipment-rental"
                            class="dropdown-link block px-5 py-3 transition-colors duration-300 ease-in-out
                                   {{ request()->is('event-equipment-rental') ? 'active' : 'text-gray-700' }}">
                            Event Equipment Rental
                        </a>
                        <a href="/food-box-and-refreshments"
                            class="dropdown-link block px-5 py-3 transition-colors duration-300 ease-in-out
                                   {{ request()->is('food-box-and-refreshments') ? 'active' : 'text-gray-700' }}">
                            Food Box & Refreshments
                        </a>
                    </div>
                </div>

                <a href="/latest-events"
                    class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Latest
                    Events</a>
                <a href="/insights" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                    Insights</a>
                <a href="/career"
                    class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Career</a>
                <a href="/contact-us"
                    class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Contact
                    Us</a>
            </div>

            {{-- Mobile hamburger (right) --}}
            <button id="navToggleBtn" type="button" aria-expanded="false" aria-label="Toggle navigation menu"
                aria-controls="mobile-menu"
                class="lg:hidden flex flex-col justify-center items-center gap-[5px] w-10 h-10 rounded-full hover:bg-black/5 transition duration-300 ease-in-out ml-auto">
                <span class="nav-bar block w-5 h-[2px] bg-gray-800 transition duration-300 ease-in-out"></span>
                <span class="nav-bar block w-5 h-[2px] bg-gray-800 transition duration-300 ease-in-out"></span>
                <span class="nav-bar block w-5 h-[2px] bg-gray-800 transition duration-300 ease-in-out"></span>
            </button>
        </div>

        {{-- Backdrop overlay (click outside to close) --}}
        <div id="navBackdrop"
            class="lg:hidden fixed inset-0 top-0 bg-black/30 -z-10 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out"
            style="height: 100vh;"></div>

        {{-- Mobile slide-down menu --}}
        <div id="mobile-menu"
            class="lg:hidden absolute left-1/2 -translate-x-1/2 top-full mt-2 w-[90%] md:w-[80%] bg-white/95 backdrop-blur-md rounded-3xl shadow-xl px-6 py-4
       opacity-0 -translate-y-2 pointer-events-none transition-all duration-300 ease-in-out" />
        <div class="flex flex-col gap-3 text-base">
            <a href="/" class="nav-link text-[#B00000] transition duration-300 ease-in-out">Home</a>
            <a href="/about-us"
                class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">About Metro
                Catering</a>

            {{-- Catering Services expandable submenu (mobile) --}}
            <div>
                <button type="button" id="mobileCateringToggle"
                    class="flex items-center justify-between w-full text-[#B00000] font-bold transition duration-300 ease-in-out">
                    Catering Services
                    <svg id="mobileCateringChevron" class="w-4 h-4 transition-transform duration-500 ease-in-out"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mobileCateringPanel"
                    class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-in-out">
                    <div class="overflow-hidden">
                        <div class="flex flex-col mt-2 rounded-xl overflow-hidden bg-black/[0.03]">
                            <a href="/canteen-catering-services"
                                class="nav-link dropdown-link px-4 py-3 transition-colors duration-300 ease-in-out
                                           {{ request()->is('canteen-catering-services') ? 'active' : 'text-gray-700' }}">
                                Canteen Catering Services
                            </a>
                            <a href="/mobile-catering"
                                class="nav-link dropdown-link px-4 py-3 transition-colors duration-300 ease-in-out
                                           {{ request()->is('mobile-catering') ? 'active' : 'text-gray-700' }}">
                                Mobile Catering
                            </a>
                            <a href="/corporate-buffet-catering"
                                class="nav-link dropdown-link px-4 py-3 transition-colors duration-300 ease-in-out
                                           {{ request()->is('corporate-buffet-catering') ? 'active' : 'text-gray-700' }}">
                                Corporate Buffet Catering
                            </a>
                            <a href="/event-equipment-rental"
                                class="nav-link dropdown-link px-4 py-3 transition-colors duration-300 ease-in-out
                                           {{ request()->is('event-equipment-rental') ? 'active' : 'text-gray-700' }}">
                                Event Equipment Rental
                            </a>
                            <a href="/food-box-and-refreshments"
                                class="nav-link dropdown-link px-4 py-3 transition-colors duration-300 ease-in-out
                                           {{ request()->is('food-box-and-refreshments') ? 'active' : 'text-gray-700' }}">
                                Food Box & Refreshments
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/latest-events"
                class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Latest
                Events</a>
            <a href="/insights" class="text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">
                Insights</a>
            <a href="/career"
                class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Career</a>
            <a href="/contact-us"
                class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Contact
                Us</a>
        </div>
</div>
</section>

</div>


<style>
    .dropdown-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .dropdown-link.active {
        background-color: #B00000;
        color: #ffffff;
        font-weight: 600;
    }

    .dropdown-link.active:hover {
        background-color: #B00000;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('navToggleBtn');
        const menu = document.getElementById('mobile-menu');
        const backdrop = document.getElementById('navBackdrop');
        const bars = document.querySelectorAll('.nav-bar');
        const links = document.querySelectorAll('.nav-link');
        let isOpen = false;

        function openMenu() {
            isOpen = true;
            btn.setAttribute('aria-expanded', 'true');

            menu.classList.remove('opacity-0', '-translate-y-2', 'pointer-events-none');
            menu.classList.add('opacity-100', 'translate-y-0');

            backdrop.classList.remove('opacity-0', 'pointer-events-none');
            backdrop.classList.add('opacity-100');

            bars[0].classList.add('rotate-45', 'translate-y-[7px]');
            bars[1].classList.add('opacity-0');
            bars[2].classList.add('-rotate-45', '-translate-y-[7px]');

            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            isOpen = false;
            btn.setAttribute('aria-expanded', 'false');

            menu.classList.add('opacity-0', '-translate-y-2', 'pointer-events-none');
            menu.classList.remove('opacity-100', 'translate-y-0');

            backdrop.classList.add('opacity-0', 'pointer-events-none');
            backdrop.classList.remove('opacity-100');

            bars[0].classList.remove('rotate-45', 'translate-y-[7px]');
            bars[1].classList.remove('opacity-0');
            bars[2].classList.remove('-rotate-45', '-translate-y-[7px]');

            document.body.style.overflow = '';
        }

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            isOpen ? closeMenu() : openMenu();
        });

        backdrop.addEventListener('click', closeMenu);

        links.forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('click', function(e) {
            if (isOpen && !menu.contains(e.target) && !btn.contains(e.target)) {
                closeMenu();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isOpen) {
                closeMenu();
            }
        });

        // ===== Desktop Catering Services dropdown (hover) =====
        const cateringDropdown = document.getElementById('cateringDropdown');
        const cateringPanel = document.getElementById('cateringPanel');
        const cateringChevron = document.getElementById('cateringChevron');

        if (cateringDropdown) {
            let closeTimeout;

            function openCateringPanel() {
                clearTimeout(closeTimeout);
                cateringPanel.classList.remove('opacity-0', '-translate-y-2', 'pointer-events-none');
                cateringPanel.classList.add('opacity-100', 'translate-y-0');
                cateringChevron.classList.add('rotate-180');
            }

            function closeCateringPanel() {
                cateringPanel.classList.add('opacity-0', '-translate-y-2', 'pointer-events-none');
                cateringPanel.classList.remove('opacity-100', 'translate-y-0');
                cateringChevron.classList.remove('rotate-180');
            }

            cateringDropdown.addEventListener('mouseenter', openCateringPanel);
            cateringDropdown.addEventListener('mouseleave', function() {
                closeTimeout = setTimeout(closeCateringPanel, 400);
            });
        }

        // ===== Mobile Catering Services expandable submenu (tap) =====
        const mobileCateringToggle = document.getElementById('mobileCateringToggle');
        const mobileCateringPanel = document.getElementById('mobileCateringPanel');
        const mobileCateringChevron = document.getElementById('mobileCateringChevron');

        if (mobileCateringToggle) {
            let subOpen = false;

            mobileCateringToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                subOpen = !subOpen;
                mobileCateringPanel.style.gridTemplateRows = subOpen ? '1fr' : '0fr';
                mobileCateringChevron.classList.toggle('rotate-180', subOpen);
            });
        }
    });
</script>
