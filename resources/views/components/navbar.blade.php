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
            class="lg:hidden mx-auto w-[90%] md:w-[80%] bg-white/95 backdrop-blur-md rounded-3xl shadow-xl mt-2 px-6 py-4
                   opacity-0 -translate-y-2 pointer-events-none transition-all duration-300 ease-in-out">
            <div class="flex flex-col gap-3 text-base">
                <a href="/" class="nav-link text-[#B00000] transition duration-300 ease-in-out">Home</a>
                <a href="/about-us"
                    class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">About Metro
                    Catering</a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Catering
                    Services</a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Latest
                    Events</a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Insights</a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Career</a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-[#B00000] transition duration-300 ease-in-out">Contact
                    Us</a>
            </div>
        </div>
    </section>

</div>

{{-- Spacer so page content doesn't hide behind the fixed navbar --}}
<div class="h-[54px] md:h-[58px]"></div>

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
    });
</script>
