<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ mix('build/css/app.css') }}">

        @livewireStyles
        @stack('styles')
    </head>

    <body class="overflow-hidden">
        <div class="container-fluid p-3 vh-100">
            {{ $slot }}
        </div>

        <script src="{{ mix('build/js/app.js') }}" defer></script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
