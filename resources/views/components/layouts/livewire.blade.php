<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.scss', 'resources/js/app.js'])
        {{ $vite ?? '' }}

        @livewireStyles
    </head>
    
    <body>
        <div class="container-fluid p-3">
            {{ $slot }}
        </div>
        
        @livewireScripts
    </body>
</html>
