@extends('layouts.app')
@section('content')
    @include('components.hero_section_not_for_home.hero_section_not_for_home', [
        'sectionLabel' => 'Career',
        'heading' => 'Start Your Career With Us!',
        'description' =>
            'Metro Catering delivers high-quality food, professional event setups, and customized catering solutions for businesses, schools, weddings, and special occasions across Cambodia.',
        'buttons' => [
            ['text' => 'Contact Us', 'link' => '#', 'style' => 'solid'],
            ['text' => 'View Packages', 'link' => '#', 'style' => 'solid'],
        ],
    ])

    {{-- input data part --}}
    <section class="w-full bg-[#f3f0e9] py-16 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-center text-[#a80000] font-bold text-[28px] sm:text-[36px] md:text-[40px] mb-12">
                Application Form
            </h2>

            <form action="" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8" novalidate>
                @csrf

                {{-- Full Name --}}
                <div>
                    <label class="block text-[#a80000] font-semibold text-[15px] mb-2">Full Name</label>
                    <div class="relative">
                        <input type="text" name="full_name" placeholder="Your Name" value="{{ old('full_name') }}"
                            required minlength="2" maxlength="100" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s\.\-']+"
                            title="Letters, spaces, hyphens, and apostrophes only"
                            class="w-full rounded-full bg-white px-6 py-4 pr-12 text-[15px] text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#a80000] @error('full_name') ring-2 ring-red-500 @enderror">
                    </div>
                    @error('full_name')
                        <p class="text-red-600 text-[13px] mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-[#a80000] font-semibold text-[15px] mb-2">Email</label>
                    <div class="relative">
                        <input type="email" name="email" placeholder="example@gmail.com" value="{{ old('email') }}"
                            required maxlength="150"
                            class="w-full rounded-full bg-white px-6 py-4 pr-12 text-[15px] text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#a80000] @error('email') ring-2 ring-red-500 @enderror">
                    </div>
                    @error('email')
                        <p class="text-red-600 text-[13px] mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Phone Number --}}
                <div>
                    <label class="block text-[#a80000] font-semibold text-[15px] mb-2">Phone Number</label>
                    <div class="relative">
                        <input type="tel" name="phone_number" placeholder="Phone Number"
                            value="{{ old('phone_number') }}" required pattern="[0-9\+\-\s]{8,15}"
                            title="8–15 digits, may include +, -, and spaces"
                            class="w-full rounded-full bg-white px-6 py-4 pr-12 text-[15px] text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#a80000] @error('phone_number') ring-2 ring-red-500 @enderror">
                    </div>
                    @error('phone_number')
                        <p class="text-red-600 text-[13px] mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Position (vanilla JS dropdown, no Alpine, self-contained) --}}
                <div>
                    <label class="block text-[#a80000] font-semibold text-[15px] mb-2">Position</label>

                    <div class="js-dropdown relative" data-name="position" data-placeholder="Select Position">
                        {{-- actual value submitted with the form --}}
                        <input type="hidden" name="position" value="{{ old('position') }}" required>

                        <button type="button"
                            class="js-dropdown-btn w-full flex items-center justify-between rounded-full bg-white px-6 py-4 text-[15px] text-left text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#a80000] transition @error('position') ring-2 ring-red-500 @enderror"
                            aria-haspopup="listbox" aria-expanded="false">
                            <span class="js-dropdown-label truncate pr-2">
                                {{ old('position') ? ucfirst(old('position')) : 'Select Position' }}
                            </span>
                            <svg class="js-dropdown-arrow w-3 h-3 fill-[#a80000] shrink-0 transition-transform duration-200"
                                viewBox="0 0 8 12">
                                <path d="M0 0l8 6-8 6z" />
                            </svg>
                        </button>

                        <ul class="js-dropdown-list absolute z-20 mt-2 w-full rounded-2xl bg-white shadow-lg overflow-hidden py-2 origin-top opacity-0 scale-95 pointer-events-none transition duration-150 ease-out"
                            role="listbox" style="display: none;">
                            <li class="js-dropdown-option px-6 py-3 text-[15px] cursor-pointer transition truncate text-gray-700"
                                role="option" aria-selected="{{ old('position') === 'chef' ? 'true' : 'false' }}"
                                data-value="chef" tabindex="-1">Chef</li>
                            <li class="js-dropdown-option px-6 py-3 text-[15px] cursor-pointer transition truncate text-gray-700"
                                role="option" aria-selected="{{ old('position') === 'server' ? 'true' : 'false' }}"
                                data-value="server" tabindex="-1">Server</li>
                            <li class="js-dropdown-option px-6 py-3 text-[15px] cursor-pointer transition truncate text-gray-700"
                                role="option" aria-selected="{{ old('position') === 'coordinator' ? 'true' : 'false' }}"
                                data-value="coordinator" tabindex="-1">Event Coordinator</li>
                        </ul>
                    </div>
                    <p class="js-dropdown-error text-red-600 text-[13px] mt-1 ml-2 hidden">Please select a position.</p>
                    @error('position')
                        <p class="text-red-600 text-[13px] mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                <script>
                    // Self-contained, reusable for any .js-dropdown on the page (Position, Department, Location, etc.)
                    document.addEventListener('DOMContentLoaded', () => {
                        const allDropdowns = document.querySelectorAll('.js-dropdown');

                        allDropdowns.forEach((dropdown) => {
                            const button = dropdown.querySelector('.js-dropdown-btn');
                            const label = dropdown.querySelector('.js-dropdown-label');
                            const arrow = dropdown.querySelector('.js-dropdown-arrow');
                            const list = dropdown.querySelector('.js-dropdown-list');
                            const hidden = dropdown.querySelector('input[type="hidden"]');
                            const options = Array.from(dropdown.querySelectorAll('.js-dropdown-option'));
                            const errorMsg = dropdown.closest('div').parentElement?.querySelector(
                                    '.js-dropdown-error') ??
                                dropdown.parentElement.querySelector('.js-dropdown-error');

                            let activeIndex = -1;
                            const isOpen = () => list.style.display !== 'none';

                            function openMenu() {
                                allDropdowns.forEach((other) => {
                                    if (other !== dropdown) closeMenu(other);
                                });

                                list.style.display = 'block';
                                requestAnimationFrame(() => {
                                    list.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                                    list.classList.add('opacity-100', 'scale-100');
                                });

                                button.setAttribute('aria-expanded', 'true');
                                arrow.classList.add('rotate-90');

                                const selectedIdx = options.findIndex(o => o.getAttribute('aria-selected') === 'true');
                                activeIndex = selectedIdx >= 0 ? selectedIdx : 0;
                                highlightActive();
                            }

                            function closeMenu(target = dropdown) {
                                const targetList = target.querySelector('.js-dropdown-list');
                                const targetBtn = target.querySelector('.js-dropdown-btn');
                                const targetArrow = target.querySelector('.js-dropdown-arrow');

                                targetList.classList.remove('opacity-100', 'scale-100');
                                targetList.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                                targetBtn.setAttribute('aria-expanded', 'false');
                                targetArrow.classList.remove('rotate-90');

                                setTimeout(() => {
                                    if (targetBtn.getAttribute('aria-expanded') === 'false') {
                                        targetList.style.display = 'none';
                                    }
                                }, 150);
                            }

                            function toggle() {
                                isOpen() ? closeMenu() : openMenu();
                            }

                            function selectOption(option) {
                                options.forEach(o => {
                                    o.setAttribute('aria-selected', 'false');
                                    o.classList.remove('bg-[#f3f0e9]', 'text-[#a80000]', 'font-semibold');
                                    o.classList.add('text-gray-700');
                                });

                                option.setAttribute('aria-selected', 'true');
                                option.classList.add('bg-[#f3f0e9]', 'text-[#a80000]', 'font-semibold');
                                option.classList.remove('text-gray-700');

                                label.textContent = option.textContent.trim();
                                button.classList.remove('text-gray-400');
                                button.classList.add('text-gray-700');
                                button.classList.remove('ring-2', 'ring-red-500');

                                hidden.value = option.dataset.value;
                                if (errorMsg) errorMsg.classList.add('hidden');
                                closeMenu();
                                button.focus();
                            }

                            function highlightActive() {
                                options.forEach((o, i) => {
                                    if (i === activeIndex) {
                                        o.classList.add('bg-[#f3f0e9]', 'text-[#a80000]', 'font-semibold');
                                        o.classList.remove('text-gray-700');
                                        o.scrollIntoView({
                                            block: 'nearest'
                                        });
                                    } else if (o.getAttribute('aria-selected') !== 'true') {
                                        o.classList.remove('bg-[#f3f0e9]', 'text-[#a80000]', 'font-semibold');
                                        o.classList.add('text-gray-700');
                                    }
                                });
                            }

                            function moveActive(direction) {
                                const max = options.length - 1;
                                activeIndex = Math.min(max, Math.max(0, activeIndex + direction));
                                highlightActive();
                            }

                            button.addEventListener('click', toggle);

                            options.forEach((option) => {
                                option.addEventListener('click', () => selectOption(option));
                                option.addEventListener('mouseenter', () => {
                                    activeIndex = options.indexOf(option);
                                    highlightActive();
                                });
                            });

                            button.addEventListener('keydown', (e) => {
                                switch (e.key) {
                                    case 'ArrowDown':
                                        e.preventDefault();
                                        isOpen() ? moveActive(1) : openMenu();
                                        break;
                                    case 'ArrowUp':
                                        e.preventDefault();
                                        isOpen() ? moveActive(-1) : openMenu();
                                        break;
                                    case 'Enter':
                                    case ' ':
                                        e.preventDefault();
                                        if (isOpen() && activeIndex >= 0) selectOption(options[activeIndex]);
                                        else openMenu();
                                        break;
                                    case 'Escape':
                                        closeMenu();
                                        break;
                                    case 'Tab':
                                        closeMenu();
                                        break;
                                }
                            });

                            document.addEventListener('click', (e) => {
                                if (!dropdown.contains(e.target) && isOpen()) closeMenu();
                            });
                        });

                        // --- validate the Position dropdown on submit, since a hidden input's
                        // native "required" attribute is unreliable across browsers ---
                        const form = document.querySelector('form');
                        if (form) {
                            form.addEventListener('submit', (e) => {
                                let hasError = false;

                                document.querySelectorAll('.js-dropdown').forEach((dropdown) => {
                                    const hidden = dropdown.querySelector('input[type="hidden"]');
                                    const btn = dropdown.querySelector('.js-dropdown-btn');
                                    const errorMsg = dropdown.parentElement.querySelector('.js-dropdown-error');

                                    if (!hidden.value) {
                                        hasError = true;
                                        btn.classList.add('ring-2', 'ring-red-500');
                                        if (errorMsg) errorMsg.classList.remove('hidden');
                                    }
                                });

                                // let native HTML5 validation run for the rest of the fields too
                                if (hasError || !form.checkValidity()) {
                                    e.preventDefault();
                                    form.reportValidity();
                                }
                            });
                        }
                    });
                </script>

                {{-- Upload CV --}}
                <div>
                    <label class="block text-[#a80000] font-semibold text-[15px] mb-2">Upload CV (PDF)</label>
                    <label class="flex items-center gap-3 rounded-full bg-white px-2 py-2 pl-2 pr-6 cursor-pointer w-fit">
                        <span
                            class="flex items-center gap-2 rounded-full border-[2px] border-[#a80000] text-[#a80000] font-semibold text-[15px] px-6 py-3">
                            Choose File
                            <svg class="w-3 h-3 fill-[#a80000]" viewBox="0 0 12 8">
                                <path d="M6 8L0 0h12z" />
                            </svg>
                        </span>
                        <span class="text-[#a80000] text-[15px]" id="cv-filename">No File Chosen</span>
                        <input type="file" name="cv" accept="application/pdf" required class="hidden"
                            onchange="
                            const f = this.files[0];
                            const nameEl = document.getElementById('cv-filename');
                            if (f && f.size > 5 * 1024 * 1024) {
                                alert('CV must be under 5MB.');
                                this.value = '';
                                nameEl.textContent = 'No File Chosen';
                                return;
                            }
                            nameEl.textContent = f?.name || 'No File Chosen';
                        ">
                    </label>
                    @error('cv')
                        <p class="text-red-600 text-[13px] mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Upload Cover Letter --}}
                <div>
                    <label class="block text-[#a80000] font-semibold text-[15px] mb-2">Upload Cover Letter</label>
                    <label class="flex items-center gap-3 rounded-full bg-white px-2 py-2 pl-2 pr-6 cursor-pointer w-fit">
                        <span
                            class="flex items-center gap-2 rounded-full border-[2px] border-[#a80000] text-[#a80000] font-semibold text-[15px] px-6 py-3">
                            Choose File
                            <svg class="w-3 h-3 fill-[#a80000]" viewBox="0 0 12 8">
                                <path d="M6 8L0 0h12z" />
                            </svg>
                        </span>
                        <span class="text-[#a80000] text-[15px]" id="cover-letter-filename">No File Chosen</span>
                        <input type="file" name="cover_letter" accept="application/pdf,.doc,.docx" class="hidden"
                            onchange="
                            const f = this.files[0];
                            const nameEl = document.getElementById('cover-letter-filename');
                            if (f && f.size > 5 * 1024 * 1024) {
                                alert('Cover letter must be under 5MB.');
                                this.value = '';
                                nameEl.textContent = 'No File Chosen';
                                return;
                            }
                            nameEl.textContent = f?.name || 'No File Chosen';
                        ">
                    </label>
                    @error('cover_letter')
                        <p class="text-red-600 text-[13px] mt-1 ml-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="md:col-span-2 flex justify-center pt-4">
                    <button type="submit"
                        class="bg-[#a80000] text-white font-semibold text-[15px] rounded-full px-12 py-4 hover:bg-[#8a0000] transition focus:outline-none focus:ring-2 focus:ring-[#a80000] focus:ring-offset-2">
                        Submit
                    </button>
                </div>

            </form>
        </div>
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
