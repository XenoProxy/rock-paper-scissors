<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('/build/assets/app-1501fe38.css') }}"> 
        <link rel="preload" as="style" href="{{ asset('/build/assets/app-1501fe38.css') }}">

        <title>Rock Papper Scissors</title>

        @livewireStyles
    </head>
    <body>
        <h1 class="site-name">@lang('game.site_name')</h1>
        
        {{ $slot }}

        @livewireScripts
        <script src="{{ asset('/build/app-7dfa685d.js') }}"></script>
    </body>
</html>