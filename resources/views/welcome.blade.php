<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List the Power</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-blue-800">
        <header class="bg-stone-900">
            <div class="absolute left-0 flex items-center">
                <img class="" src="https://raw.githubusercontent.com/tetoterritory10/icons/refs/heads/main/IconsNotMine/kaz_fist_white.png" width="80" height="80" alt="logotipoList">
                <h1 class="text-5xl text-[#EDEDEC] font-bold self-center whitespace-nowrap">List the Power</h1>
            </div>

            <nav class="flex justify-end items-center gap-4 px-5 pt-8 text-lg">
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="px-5 py-1.5 text-[#EDEDEC] hover:border-[#EDEDEC] border rounded-sm leading-normal">
                            Dashboard
                        </a>
                @else
                        <a
                            href="{{ route('login') }}"
                            class="px-1 py-2 text-[#EDEDEC] border border-transparent hover:border-[#EDEDEC] rounded-sm leading-normal">
                            Iniciar sesión
                        </a>
                    @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="px-1 py-2 text-[#EDEDEC] border border-transparent hover:border-[#EDEDEC] rounded-sm leading-normal">
                                Registrarse
                            </a>
                    @endif
                @endauth
            @endif
        </nav>
    </header>
    <div>
<!-- HEADER INTRO -->
<div class="relative flex flex-col items-center justify-center h-screen bg-gray-600/70">
    {{-- <video class="absolute top-0 left-0 w-full h-full object-cover" src="{{ asset('intro.mp4') }}" autoplay loop muted ></video> --}}
    <div class="relative z-10 text-center">
        <h1 class="text-7xl text-[#EDEDEC] font-bold">¿Preparado para decidir?</h1>
        <p class="text-[#EDEDEC] text-lg mt-4">Encasilla donde crees que pertenece en la escala de poder cada personaje.</p>
    </div>
    <div class="absolute inset-0 bg-gray-600/70"></div>
</div>

        <!-- MAIN -->
        <main class="flex flex-col items-center justify-center h-44 bg-stone-800">
            <h1 class="text-4xl text-[#EDEDEC] font-bold">¡Bienvenido a List the Power!</h1>
            <p class="text-[#EDEDEC] text-lg mt-4">List the Power es una página web dedicada a la votación de personajes por ver quien es respectivamente más poderoso dentro de su mundo, y fuera de este.</p>

            <h2 class="text-3xl text-[#EDEDEC] font-bold">¿Donde quieres ir?</h2>
        </main>
</body>
</html>
