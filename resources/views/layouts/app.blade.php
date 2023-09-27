<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />




        <div class="min-h-screen mt-0 bg-left justify-center" style="background-image: url('https://img.freepik.com/vector-gratis/fondo-textura-hoja-papel-arrugado-blanco_1017-31714.jpg'); background-size: cover;">
            @livewire('navigation')
            
            <!-- Establece la imagen como fondo -->
            <div class="mt-8 bg-left justify-center" style="background-image: url('https://cdn.pixabay.com/photo/2023/03/28/07/51/trees-7882545_640.jpg'); background-size: cover;">
                <!-- Contenido que deseas sobre el fondo -->
            </div>



            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>




        @stack('modals')

        @livewireScripts
    </body>
</html>
