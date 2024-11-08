<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="min-h-screen bg-gray-800 flex flex-col gap-2 items-center justify-center">
            <h1 class="text-4xl font-semibold">Hello World</h1>
            <a href="/about" class="px-5 py-2 bg-blue-600 text-white rounded-md">About Page</a>
            <a href="/users" class="px-5 py-2 bg-green-600 text-white rounded-md"> Users Pages </a>
        </div>
        
    </body>
</html>
