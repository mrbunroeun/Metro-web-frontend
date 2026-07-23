@props(['number', 'image', 'title', 'price', 'note', 'includes' => [], 'suitableFor' => [], 'list' => []])

<div class="package-card group font-sans bg-white  overflow-hidden shadow-sm">

    {{-- Image with number badge --}}
    <div class="relative cursor-pointer bg-[#f3f0e9] pb-[5px]" onclick="togglePackageCard(this)">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-[110px] object-cover bg-[#d6d6d6]">

        <div
            class="absolute -bottom-5 right-4 w-11 h-11 rounded-full bg-white group-hover:bg-[#a80000] group-[.is-active]:bg-[#a80000] shadow-md flex items-center justify-center transition-colors duration-300">
            <span
                class="text-[#a80000] group-hover:text-white group-[.is-active]:text-white text-[15px] font-semibold transition-colors duration-300">{{ $number }}</span>
        </div>
    </div>

    {{-- Title + price (always visible, clickable) --}}
    <div class="px-2 bg-white  pt-7 pb-4 cursor-pointer" onclick="togglePackageCard(this.parentElement)">
        <p class="text-[#a80000] text-[15px] font-bold leading-snug mb-2">
            {{ $title }}
        </p>

        <p class="text-[#060606] text-[15px]  font-semibold leading-relaxed">
            {{ $price }}
        </p>
        @if ($note)
            <p class="text-[#060606] text-[15px] font-semibold leading-relaxed">
                {{ $note }}
            </p>
        @endif
    </div>

    {{-- Expandable details (independent per card, no rounding) --}}
    <div class="package-details grid transition-[grid-template-rows] duration-500 ease-in-out"
        style="grid-template-rows: 0fr;">
        <div class="overflow-hidden">
            <div class="px-4 pb-5">

                @if (count($list))
                    <ul class="text-[#060606] text-[15px] leading-relaxed list-disc pl-4 mb-3">
                        @foreach ($list as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

                @if (count($includes))
                    <p class="text-[#060606] text-[15px] font-bold mb-1">Includes:</p>
                    <ul class="text-[#060606] text-[15px] leading-relaxed list-disc pl-4 mb-3">
                        @foreach ($includes as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

                @if (count($suitableFor))
                    <p class="text-[#060606] text-[15px] font-bold mb-1">Suitable for:</p>
                    <ul class="text-[#060606] text-[15px] leading-relaxed list-disc pl-4">
                        @foreach ($suitableFor as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>

</div>

<script>
    function togglePackageCard(cardEl) {
        const card = cardEl.classList.contains('package-card') ? cardEl : cardEl.closest('.package-card');
        const details = card.querySelector('.package-details');
        const isOpen = details.style.gridTemplateRows === '1fr';

        details.style.gridTemplateRows = isOpen ? '0fr' : '1fr';
        card.classList.toggle('is-active', !isOpen);
    }
</script>
