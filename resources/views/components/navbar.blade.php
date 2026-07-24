{{-- ============================================================
     Metro Catering — Primary Navigation
     Utility bar + floating pill nav, desktop dropdown, mobile sheet
     ============================================================ --}}
<header id="siteHeader" class="fixed inset-x-0 top-0 z-[100]">

    {{-- Utility bar --}}
    <div class="w-full text-[#ffffff] bg-[#B00000]">
        <div class="mx-auto flex h-[38px] md:h-[44px] max-w-6xl items-center justify-between gap-8 px-4 sm:px-6 lg:px-8">
            <p class=font-semibold"text-[15px] font-light text-white/90">
                Address
            </p>
            <a href="tel:0123132277" class=font-semibold"text-[15px] font-light text-white/90 transition-opacity
                duration-200 hover:opacity-70 focus-visible:outline focus-visible:outline-2
                focus-visible:outline-offset-2 focus-visible:outline-white rounded-sm">
                012 31 32 77
            </a>
        </div>
    </div>

    {{-- Floating navbar --}}
    <nav class="relative mt-6 md:mt-8" aria-label="Main navigation">

        <div
            class="mx-auto grid h-[60px] md:h-[68px] w-[92%] md:w-[85%] max-w-6xl grid-cols-[1fr_auto_1fr] items-center rounded-full border border-black/5 bg-white px-5 md:px-8 shadow-[0_8px_30px_rgba(0,0,0,0.08)]">

            {{-- Logo (left) --}}
            <a href="{{ url('/') }}" class="flex w-max shrink-0 items-center justify-self-start"
                aria-label="Metro Catering — home">
                <img src="{{ asset('logo/metro_logo.svg') }}" alt="Metro Catering" width="140" height="36"
                    fetchpriority="high" decoding="sync" loading="eager" class="h-8 md:h-9 w-auto">
            </a>

            {{-- Desktop links (true center, via 1fr/auto/1fr grid) --}}
            <div class="hidden min-[1180px]:flex items-center gap-1 justify-self-center">
                <a href="{{ url('/') }}" aria-current="{{ request()->is('/') ? 'page' : 'false' }}"
                    class="rounded-full px-4 py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                           {{ request()->is('/') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                    Home
                </a>

                <a href="{{ url('/about-us') }}" aria-current="{{ request()->is('about-us') ? 'page' : 'false' }}"
                    class="rounded-full px-4 py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                           {{ request()->is('about-us') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                    About Metro Catering
                </a>

                {{-- Catering Services dropdown (desktop, hover-intent) --}}
                <div class="relative" id="cateringDropdown">
                    <button type="button" id="cateringTrigger" aria-haspopup="true" aria-expanded="false"
                        aria-controls="cateringPanel"
                        class="flex items-center gap-1.5 rounded-full px-4 cursor-pointer py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                               {{ request()->is('canteen-catering-services', 'mobile-catering', 'corporate-buffet-catering', 'event-equipment-rental', 'food-box-and-refreshments') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                        Catering Services
                        <svg id="cateringChevron" class="h-3.5 w-3.5 transition-transform duration-300 ease-out"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Dropdown panel --}}
                    <div id="cateringPanel" role="menu"
                        class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-72 origin-top scale-95 -translate-y-1 rounded-2xl border border-black/5 bg-white p-2 opacity-0 shadow-[0_20px_60px_rgba(0,0,0,0.15)] pointer-events-none transition-all duration-200 ease-out z-50">
                        <a href="/canteen-catering-services" role="menuitem"
                            class="dropdown-link block rounded-xl px-4 py-3 font-semibold text-[15px] transition-colors duration-150
                                       {{ request()->is('canteen-catering-services') ? 'active' : 'text-gray-600' }}">
                            Canteen Catering Services
                        </a>
                        <a href="/mobile-catering" role="menuitem"
                            class="dropdown-link block rounded-xl px-4 py-3 font-semibold text-[15px] transition-colors duration-150
                                       {{ request()->is('mobile-catering') ? 'active' : 'text-gray-600' }}">
                            Mobile Catering
                        </a>
                        <a href="/corporate-buffet-catering" role="menuitem"
                            class="dropdown-link block rounded-xl px-4 py-3 font-semibold text-[15px] transition-colors duration-150
                                       {{ request()->is('corporate-buffet-catering') ? 'active' : 'text-gray-600' }}">
                            Corporate Buffet Catering
                        </a>
                        <a href="/event-equipment-rental" role="menuitem"
                            class="dropdown-link block rounded-xl px-4 py-3 font-semibold text-[15px] transition-colors duration-150
                                       {{ request()->is('event-equipment-rental') ? 'active' : 'text-gray-600' }}">
                            Event Equipment Rental
                        </a>
                        <a href="/food-box-and-refreshments" role="menuitem"
                            class="dropdown-link block rounded-xl px-4 py-3 font-semibold text-[15px] transition-colors duration-150
                                       {{ request()->is('food-box-and-refreshments') ? 'active' : 'text-gray-600' }}">
                            Food Box & Refreshments
                        </a>
                    </div>
                </div>

                <a href="{{ url('/latest-events') }}"
                    aria-current="{{ request()->is('latest-events') ? 'page' : 'false' }}"
                    class="rounded-full px-4 py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                           {{ request()->is('latest-events') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                    Latest Events
                </a>

                <a href="{{ url('/insights') }}" aria-current="{{ request()->is('insights') ? 'page' : 'false' }}"
                    class="rounded-full px-4 py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                           {{ request()->is('insights') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                    Insights
                </a>

                <a href="{{ url('/career') }}" aria-current="{{ request()->is('career') ? 'page' : 'false' }}"
                    class="rounded-full px-4 py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                           {{ request()->is('career') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                    Career
                </a>

                <a href="{{ url('/contact-us') }}" aria-current="{{ request()->is('contact-us') ? 'page' : 'false' }}"
                    class="rounded-full px-4 py-2.5 font-semibold text-[15px] transition-colors duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000]
                           {{ request()->is('contact-us') ? 'font-semibold text-[#B00000]' : 'text-gray-600 hover:text-[#B00000] hover:bg-black/[0.03]' }}">
                    Contact Us
                </a>
            </div>

            {{-- Mobile hamburger (right) --}}
            <button id="navToggleBtn" type="button" aria-expanded="false" aria-label="Toggle navigation menu"
                aria-controls="mobile-menu"
                class="col-start-3  flex h-11 w-11 shrink-0 items-center justify-center justify-self-end gap-[5px] rounded-full cursor-pointer transition-colors duration-200 hover:bg-black/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B00000] min-[1180px]:hidden">
                <span class="sr-only">Toggle navigation menu</span>
                <span class="nav-bar-icon cursor-pointer flex flex-col items-center justify-center gap-[5px]">
                    <span
                        class="nav-bar block h-[2px] w-5 bg-gray-800 transition-transform duration-300 ease-in-out"></span>
                    <span
                        class="nav-bar block h-[2px] w-5 bg-gray-800 transition-opacity duration-300 ease-in-out"></span>
                    <span
                        class="nav-bar block h-[2px] w-5 bg-gray-800 transition-transform duration-300 ease-in-out"></span>
                </span>
            </button>
        </div>

        {{-- Backdrop overlay (click outside to close) --}}
        <div id="navBackdrop"
            class="fixed inset-0 top-0 -z-10 bg-black/30 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out min-[1180px]:hidden">
        </div>

        {{-- Mobile slide-down menu --}}
        <div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Mobile navigation"
            class="absolute left-1/2 top-full mt-3 w-[92%] -translate-x-1/2 origin-top scale-95 -translate-y-1 rounded-[28px] border border-black/5 bg-white/95 p-3 opacity-0 shadow-[0_20px_60px_rgba(0,0,0,0.15)] pointer-events-none transition-all duration-300 ease-out min-[1180px]:hidden">
            <div class="flex flex-col gap-1">
                <a href="{{ url('/') }}" aria-current="{{ request()->is('/') ? 'page' : 'false' }}"
                    class="nav-link flex min-h-[44px] items-center rounded-2xl px-4 text-[16px] transition-colors duration-150
                           {{ request()->is('/') ? 'font-semibold text-[#B00000] bg-black/[0.03]' : 'text-gray-700' }}">
                    Home
                </a>
                <a href="{{ url('/about-us') }}" aria-current="{{ request()->is('about-us') ? 'page' : 'false' }}"
                    class="nav-link flex min-h-[44px] items-center rounded-2xl px-4 text-[16px] transition-colors duration-150
                           {{ request()->is('about-us') ? 'font-semibold text-[#B00000] bg-black/[0.03]' : 'text-gray-700' }}">
                    About Metro Catering
                </a>

                {{-- Catering Services expandable submenu (mobile) --}}
                <div>
                    <button type="button" id="mobileCateringToggle" aria-expanded="false"
                        aria-controls="mobileCateringPanel"
                        class="flex min-h-[44px] w-full items-center justify-between rounded-2xl px-4 text-[16px] font-medium text-[#B00000] transition-colors duration-150">
                        Catering Services
                        <svg id="mobileCateringChevron" class="h-4 w-4 transition-transform duration-300 ease-out"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="mobileCateringPanel"
                        class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out">
                        <div class="overflow-hidden">
                            <div class="ml-4 mt-1 flex flex-col gap-0.5 border-l-2 border-black/[0.06] pl-4">
                                <a href="/canteen-catering-services"
                                    class="nav-link dropdown-link flex min-h-[44px] items-center rounded-xl px-3 font-semibold text-[15px] transition-colors duration-150
                                           {{ request()->is('canteen-catering-services') ? 'active' : 'text-gray-600' }}">
                                    Canteen Catering Services
                                </a>
                                <a href="/mobile-catering"
                                    class="nav-link dropdown-link flex min-h-[44px] items-center rounded-xl px-3 font-semibold text-[15px] transition-colors duration-150
                                           {{ request()->is('mobile-catering') ? 'active' : 'text-gray-600' }}">
                                    Mobile Catering
                                </a>
                                <a href="/corporate-buffet-catering"
                                    class="nav-link dropdown-link flex min-h-[44px] items-center rounded-xl px-3 font-semibold text-[15px] transition-colors duration-150
                                           {{ request()->is('corporate-buffet-catering') ? 'active' : 'text-gray-600' }}">
                                    Corporate Buffet Catering
                                </a>
                                <a href="/event-equipment-rental"
                                    class="nav-link dropdown-link flex min-h-[44px] items-center rounded-xl px-3 font-semibold text-[15px] transition-colors duration-150
                                           {{ request()->is('event-equipment-rental') ? 'active' : 'text-gray-600' }}">
                                    Event Equipment Rental
                                </a>
                                <a href="/food-box-and-refreshments"
                                    class="nav-link dropdown-link flex min-h-[44px] items-center rounded-xl px-3 font-semibold text-[15px] transition-colors duration-150
                                           {{ request()->is('food-box-and-refreshments') ? 'active' : 'text-gray-600' }}">
                                    Food Box & Refreshments
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/latest-events') }}"
                    aria-current="{{ request()->is('latest-events') ? 'page' : 'false' }}"
                    class="nav-link flex min-h-[44px] items-center rounded-2xl px-4 text-[16px] transition-colors duration-150
                           {{ request()->is('latest-events') ? 'font-semibold text-[#B00000] bg-black/[0.03]' : 'text-gray-700' }}">
                    Latest Events
                </a>
                <a href="{{ url('/insights') }}" aria-current="{{ request()->is('insights') ? 'page' : 'false' }}"
                    class="nav-link flex min-h-[44px] items-center rounded-2xl px-4 text-[16px] transition-colors duration-150
                           {{ request()->is('insights') ? 'font-semibold text-[#B00000] bg-black/[0.03]' : 'text-gray-700' }}">
                    Insights
                </a>
                <a href="{{ url('/career') }}" aria-current="{{ request()->is('career') ? 'page' : 'false' }}"
                    class="nav-link flex min-h-[44px] items-center rounded-2xl px-4 text-[16px] transition-colors duration-150
                           {{ request()->is('career') ? 'font-semibold text-[#B00000] bg-black/[0.03]' : 'text-gray-700' }}">
                    Career
                </a>
                <a href="{{ url('/contact-us') }}"
                    aria-current="{{ request()->is('contact-us') ? 'page' : 'false' }}"
                    class="nav-link flex min-h-[44px] items-center rounded-2xl px-4 text-[16px] transition-colors duration-150
                           {{ request()->is('contact-us') ? 'font-semibold text-[#B00000] bg-black/[0.03]' : 'text-gray-700' }}">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>
</header>

<style>
    .dropdown-link:hover {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .dropdown-link.active {
        background-color: #B00000;
        color: #ffffff;
        font-weight: 600;
    }

    .dropdown-link.active:hover {
        background-color: #B00000;
    }

    /* Open-state utility (applied/removed by JS via setPanelState) */
    .panel-open {
        opacity: 1 !important;
        transform: translateY(0) scale(1) !important;
        pointer-events: auto !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* =========================================================
           Shared helpers
           ========================================================= */

        // Fades/scales a floating panel open or closed. Used by both
        // the desktop dropdown and the mobile sheet so the animation
        // logic only lives in one place.
        function setPanelState(el, open) {
            el.classList.toggle('opacity-0', !open);
            el.classList.toggle('scale-95', !open);
            el.classList.toggle('-translate-y-1', !open);
            el.classList.toggle('pointer-events-none', !open);
            el.classList.toggle('opacity-100', open);
            el.classList.toggle('scale-100', open);
            el.classList.toggle('translate-y-0', open);
        }

        // Locks page scroll without shifting layout width: measures the
        // scrollbar's width and compensates with padding-right so fixed,
        // centered elements (like the navbar) never jump sideways.
        function lockBodyScroll() {
            const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
            document.body.style.paddingRight = scrollbarWidth + 'px';
            document.body.style.overflow = 'hidden';
        }

        function unlockBodyScroll() {
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        }

        /* =========================================================
           Mobile menu (hamburger sheet)
           ========================================================= */

        const navToggleBtn = document.getElementById('navToggleBtn');
        const mobileMenu = document.getElementById('mobile-menu');
        const navBackdrop = document.getElementById('navBackdrop');
        const hamburgerBars = document.querySelectorAll('.nav-bar');
        const mobileNavLinks = mobileMenu.querySelectorAll('.nav-link');
        let isMobileMenuOpen = false;

        function openMobileMenu() {
            isMobileMenuOpen = true;
            navToggleBtn.setAttribute('aria-expanded', 'true');

            setPanelState(mobileMenu, true);
            navBackdrop.classList.remove('opacity-0', 'pointer-events-none');
            navBackdrop.classList.add('opacity-100');

            hamburgerBars[0].classList.add('rotate-45', 'translate-y-[7px]');
            hamburgerBars[1].classList.add('opacity-0');
            hamburgerBars[2].classList.add('-rotate-45', '-translate-y-[7px]');

            lockBodyScroll();
        }

        function closeMobileMenu() {
            isMobileMenuOpen = false;
            navToggleBtn.setAttribute('aria-expanded', 'false');

            setPanelState(mobileMenu, false);
            navBackdrop.classList.add('opacity-0', 'pointer-events-none');
            navBackdrop.classList.remove('opacity-100');

            hamburgerBars[0].classList.remove('rotate-45', 'translate-y-[7px]');
            hamburgerBars[1].classList.remove('opacity-0');
            hamburgerBars[2].classList.remove('-rotate-45', '-translate-y-[7px]');

            unlockBodyScroll();
        }

        navToggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            isMobileMenuOpen ? closeMobileMenu() : openMobileMenu();
        });

        navBackdrop.addEventListener('click', closeMobileMenu);
        mobileNavLinks.forEach(function(link) {
            link.addEventListener('click', closeMobileMenu);
        });

        document.addEventListener('click', function(e) {
            if (isMobileMenuOpen && !mobileMenu.contains(e.target) && !navToggleBtn.contains(e
                    .target)) {
                closeMobileMenu();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isMobileMenuOpen) closeMobileMenu();
        });

        /* =========================================================
           Desktop dropdown (hover-intent, with close-delay tolerance)
           ========================================================= */

        function createHoverDropdown({
            wrapper,
            trigger,
            panel,
            chevron,
            closeDelay = 200
        }) {
            let closeTimer;

            function open() {
                clearTimeout(closeTimer);
                setPanelState(panel, true);
                if (chevron) chevron.classList.add('rotate-180');
                trigger.setAttribute('aria-expanded', 'true');
            }

            function close() {
                setPanelState(panel, false);
                if (chevron) chevron.classList.remove('rotate-180');
                trigger.setAttribute('aria-expanded', 'false');
            }

            trigger.addEventListener('mouseenter', open);
            trigger.addEventListener('mouseleave', function() {
                closeTimer = setTimeout(close, closeDelay);
            });
            panel.addEventListener('mouseenter', function() {
                clearTimeout(closeTimer);
            });
            panel.addEventListener('mouseleave', function() {
                closeTimer = setTimeout(close, closeDelay);
            });
            trigger.addEventListener('focus', open);
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                panel.classList.contains('opacity-0') ? open() : close();
            });
            trigger.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    close();
                    trigger.focus();
                }
            });

            return {
                open,
                close
            };
        }

        const cateringWrapper = document.getElementById('cateringDropdown');
        if (cateringWrapper) {
            createHoverDropdown({
                wrapper: cateringWrapper,
                trigger: document.getElementById('cateringTrigger'),
                panel: document.getElementById('cateringPanel'),
                chevron: document.getElementById('cateringChevron'),
            });
        }

        /* =========================================================
           Mobile submenu (tap-to-expand accordion)
           ========================================================= */

        const mobileCateringToggle = document.getElementById('mobileCateringToggle');
        const mobileCateringPanel = document.getElementById('mobileCateringPanel');
        const mobileCateringChevron = document.getElementById('mobileCateringChevron');

        if (mobileCateringToggle) {
            let isSubOpen = false;
            mobileCateringToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                isSubOpen = !isSubOpen;
                mobileCateringPanel.style.gridTemplateRows = isSubOpen ? '1fr' : '0fr';
                mobileCateringChevron.classList.toggle('rotate-180', isSubOpen);
                mobileCateringToggle.setAttribute('aria-expanded', String(isSubOpen));
            });
        }
    });
</script>
