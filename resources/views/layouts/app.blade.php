<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Laravel Application')">
    <link rel="preload" as="image" href="{{ asset('logo/metro_log.svg') }}" fetchpriority="high">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="text-gray-900 bg-white font-sans antialiased">

    {{-- Loading overlay --}}
    <div id="page-loader"
        class="fixed inset-0 flex items-center justify-center bg-[#B00000] opacity-0 pointer-events-none"
        style="z-index: 9999;">
        <div class="flex flex-col items-center gap-4">
            <p class="text-[15px] font-bold text-[#ffffff]">Loading</p>
            <div class="flex gap-1.5">
                <span class="w-2 h-2 bg-white rounded-full animate-loader-bounce" style="animation-delay: 0ms"></span>
                <span class="w-2 h-2 bg-white rounded-full animate-loader-bounce" style="animation-delay: 150ms"></span>
                <span class="w-2 h-2 bg-white rounded-full animate-loader-bounce" style="animation-delay: 300ms"></span>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict';
            if (sessionStorage.getItem('metro-page-transition') === '1') {
                var loader = document.getElementById('page-loader');
                if (loader) {
                    loader.classList.remove('opacity-0', 'pointer-events-none');
                    loader.classList.add('opacity-100');
                }
            }
        })();
    </script>

    {{-- Header --}}
    <x-navbar />

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}

    @stack('scripts')
</body>

</html>
