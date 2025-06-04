<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Taskboard' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        @auth
            <livewire:header />
        @endauth

        <main>
            {{ $slot }}
        </main>

        <footer class="pt-12"></footer>

        @vite('resources/js/app.js')
    </body>
</html>
