<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('/build/assets/app-1501fe38.css') }}"> 

        <title>Rock Papper Scissors</title>

        @livewireStyles
    </head>
    <body>
        
        @livewire('game')

        @livewireScripts
    </body>
</html>
