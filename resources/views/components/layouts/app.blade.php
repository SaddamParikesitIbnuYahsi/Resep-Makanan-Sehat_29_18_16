<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Health Food' }}</title>
        @vite('resources/css/app.css')

        @livewireStyles
    </head>
 
    <body>
    <main class="bg-slate-200 dark:bg-slate-700">
    {{ $slot }}
    </main>
    @livewireScripts
    </body>
</html>
