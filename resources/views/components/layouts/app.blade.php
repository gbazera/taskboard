<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Taskboard' }}</title>

        <link rel="stylesheet" href="public\build\assets\app-B-bVuAmC.css">
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        @auth
            <livewire:header />
        @endauth

        <main>
            {{ $slot }}
        </main>

        <footer class="pt-12"></footer>

        <script src="public\build\assets\app-rYFCqwdu.js"></script>
        @vite('resources/js/app.js')
        @livewireScripts
    </body>
</html>
