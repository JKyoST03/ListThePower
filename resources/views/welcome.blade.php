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
    <!-- INTRO VÍDEO --> 
    <video class="absolute top-0 left-0 w-full h-full object-cover" src="https://my.microsoftpersonalcontent.com/personal/075110fecf1a124d/_layouts/15/download.aspx?UniqueId=3eb1e1d0-f40c-4655-8b2b-ff4c8bece5f0&Translate=false&tempauth=v1e.eyJzaXRlaWQiOiJjOGMxNGE0MS1jMTM3LTQzZWYtYjg1Ni0xZTBmNGI0YzBiZDMiLCJhcHBpZCI6IjAwMDAwMDAwLTAwMDAtMDAwMC0wMDAwLTAwMDA0ODE3MTBhNCIsImF1ZCI6IjAwMDAwMDAzLTAwMDAtMGZmMS1jZTAwLTAwMDAwMDAwMDAwMC9teS5taWNyb3NvZnRwZXJzb25hbGNvbnRlbnQuY29tQDkxODgwNDBkLTZjNjctNGM1Yi1iMTEyLTM2YTMwNGI2NmRhZCIsImV4cCI6IjE3NDcxNjAzOTcifQ.bhMSnCgtEsxEg8yLKIC2JNHjJMufk8iwMTEzEwzGhYuox8EQy0pQnJAEKyxzIrqy3PQjP5SlgtMpqM0sX4BOI2vdJ2aIcRl2YaluB6wRlngeKrGFXnNv_8O7xiHZ-LM1TYuka3XcyGNAobIU9AcCFzgbPClPBtdQlekhSum371luSVweAHTxhnkI3sfikmHHssidvvhUIyyPNu52xCZJsLitHnAPt0ADjEImDExUTiN9Ebu3aSpsatkHmzrLI2OmxsFySfQIxC_Wwr98brSuszsxhafQ1fpxzMB0mBgzShZyaqjSiXyd4r5Oe5r6wLmEFGFWiqsawq78j9MjRLRpVHnh0Pq2XHzZL9TbOgRbtEJbr9H4ypZ_aoGvylv5QG-5-n7YYLCZBz440PfQchZOTw.-2fyJ2ADb5N2EKNKlBiV7p3TaEyuNaKRGaMHEeezrto&ApiVersion=2.0" autoplay loop muted ></video>
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
