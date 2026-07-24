@props(['faqs'])

@php
    // split into 2 columns for the layout
    $half = ceil(count($faqs) / 2);
    $leftFaqs = array_slice($faqs, 0, $half, true);
    $rightFaqs = array_slice($faqs, $half, null, true);
@endphp

<section class="font-sans max-w-5xl mx-auto px-4 py-16">

    {{-- Title (not a prop — always static) --}}
    <div class="text-center mb-10 sm:mb-12">
        <p class="text-[#a80000] text-[20px] sm:text-[24px] leading-tight">Frequently</p>
        <p class="text-[#a80000] text-[24px] sm:text-[32px] font-bold leading-tight">Ask Questions</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5" id="faq-container">

        {{-- Left column --}}
        <div class="space-y-4">
            @foreach ($leftFaqs as $index => $faq)
                <div class="faq-item" data-index="{{ $index }}">
                    <div
                        class="faq-question  px-5 py-4 cursor-pointer bg-[#f3f0e9] text-[#060606] text-[15px] sm:text-[18px] transition-colors duration-150 hover:bg-[#e9e4d8] active:bg-[#ddd6c4]">
                        {{ $faq['question'] }}
                    </div>

                    <div class="faq-answer-grid grid transition-[grid-template-rows] duration-300 ease-in-out"
                        style="grid-template-rows: 0fr;">
                        <div class="overflow-hidden">
                            <div
                                class=" px-5 py-4 mt-2 bg-[#a80000] text-[#ffffff] text-[15px] sm:text-[18px] leading-relaxed">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Right column --}}
        <div class="space-y-4">
            @foreach ($rightFaqs as $index => $faq)
                <div class="faq-item" data-index="{{ $index }}">
                    <div
                        class="faq-question  px-5 py-4 cursor-pointer bg-[#f3f0e9] text-[#060606] text-[15px] sm:text-[16px] transition-colors duration-150 hover:bg-[#e9e4d8] active:bg-[#ddd6c4]">
                        {{ $faq['question'] }}
                    </div>

                    <div class="faq-answer-grid grid transition-[grid-template-rows] duration-300 ease-in-out"
                        style="grid-template-rows: 0fr;">
                        <div class="overflow-hidden">
                            <div class=" px-5 py-4 mt-2 bg-[#a80000] text-[#ffffff] text-[15px] leading-relaxed">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('faq-container');
        if (!container) return;

        const items = container.querySelectorAll('.faq-item');

        function closeItem(item) {
            item.querySelector('.faq-answer-grid').style.gridTemplateRows = '0fr';
        }

        function openItem(item) {
            item.querySelector('.faq-answer-grid').style.gridTemplateRows = '1fr';
        }

        items.forEach(function(item) {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', function() {
                const isOpen = item.querySelector('.faq-answer-grid').style.gridTemplateRows ===
                    '1fr';

                // close all items first
                items.forEach(closeItem);

                // if it wasn't already open, open it now (acts as a toggle)
                if (!isOpen) {
                    openItem(item);
                }
            });
        });

        // open the first item by default
        if (items.length > 0) {
            openItem(items[0]);
        }
    });
</script>
