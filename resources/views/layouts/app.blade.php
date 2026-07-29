<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Rafly Maulana Zulyzar - Web Developer')</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio of Rafly Maulana Zulyzar, a Web Developer focused on practical Laravel solutions, data-driven interfaces, and AI-enabled products.')">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'Rafly Maulana Zulyzar - Web Developer')">
    <meta property="og:description" content="@yield('meta_description', 'Portfolio of Rafly Maulana Zulyzar, a Web Developer focused on practical Laravel solutions, data-driven interfaces, and AI-enabled products.')">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-bgLight text-gray-900 dark:bg-bgDark dark:text-gray-100 selection:bg-accent-500 selection:text-white" x-data="theme">
    
    <x-nav />

    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    <x-footer />
    
    @stack('scripts')
</body>
</html>
