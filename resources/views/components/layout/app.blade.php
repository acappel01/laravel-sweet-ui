<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title() }}</title>

    <!-- Fonts -->
    @stack('fonts')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @stack('styles')
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @stack('scripts')
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    {{ $head ?? '' }}
</head>
<body {{ $attributes->merge(['class' => 'font-sans antialiased bg-gray-100 text-gray-800']) }}>

    <div id="app" class=" bg-gray-100">

        {{ $appheader }}

        <div class="flex pt-20 h-screen overflow-hidden">

            {{ $navigation }}

            <main class="flex-1 px-12 py-6 relative overflow-y-auto focus:outline-none" tabindex="0">
                <x-ui-splash/>
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="flex justify-between items-center">
                            {{ $header }}
                        </div>
                        <x-ui-alert />
                    </div>
                    <div class="mt-4 max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>

        </div>
    </div>


    @stack('modals')
    @livewireScripts

</body>
</html>
