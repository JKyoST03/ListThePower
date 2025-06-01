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

<body>
    <header class="bg-stone-900">
        @livewire('navigation-menu')
    </header>
    <!-- HEADER INTRO -->
    <div class="relative flex flex-col items-center justify-center h-screen bg-gray-600/70">
        <!-- INTRO VÍDEO -->
        <video class="absolute top-0 left-0 w-full h-full object-cover" src="{{ asset('intro.mp4') }}" autoplay loop
            muted></video>
        <div class="relative z-10 text-center">
            <h1 class="text-7xl text-[#EDEDEC] font-bold">¡Bienvenido a List the Power!</h1>
            <p class="text-[#EDEDEC] text-lg mt-4">En List the Power puedes votar y debatir por quien la
            posición de los personajes en nuestros rankings, y por encima crear los tuyos propios con tus
            amigos.<br>¡Empieza ya!</p>

            <div class="text-[#EDEDEC] text-2xl flex flex-row justify-center items-center gap-6 mt-6">
                <a href="{{ route('top-global.index') }}"
                    class="transition duration-300 ease-in-out hover:shadow-lg hover:scale-110 bg-stone-700/35 hover:bg-stone-700/60 rounded-xl px-4 py-2">
                        Top global
                </a>
                
                <a href="{{ route('panel-usuario') }}"
                    class="transition duration-300 ease-in-out hover:shadow-lg hover:scale-110 bg-stone-700/35 hover:bg-stone-700/60 rounded-xl px-4 py-2 mb-5">
                        Mis tops personales
                </a>

                <a href=" {{ route('tops-franquicias.index') }}"
                    class="transition duration-300 ease-in-out hover:shadow-lg hover:scale-110 bg-stone-700/35 hover:bg-stone-700/60 rounded-xl px-4 py-2">
                        Tops de franquicias
                </a>
            </div>
        </div>
        <div class="absolute inset-0 bg-gray-600/70"></div>
    </div>

    <!-- MAIN -->
    <main class="flex flex-col items-center justify-center h-fit bg-stone-800">
    <!-- Navigatione -->
    <section class="flex flex-col md:flex-row items-center min-h-[60vh] bg-stone-900 w-full">

        <div class="md:w-1/2 flex flex-col items-center p-10">
            <h3 class="text-3xl font-bold text-[#EDEDEC] mb-4">Top global</h3>

            <p class="text-[#EDEDEC] mb-6 text-center">Descubre el ranking global de personajes y vota por tus favoritos. <br> ¡Da la voz de quien merece ser ese número 1!</p>

            <a href="{{ route('top-global.index') }}"
                class="bg-stone-700/80 text-[#EDEDEC] px-6 py-3 rounded-xl font-semibold transition hover:bg-stone-600  hover:scale-105 shadow-lg">
                ¡Ve y corona al mejor personaje!
            </a>
        </div>

        <div class="md:w-1/2 flex justify-center p-10 h-full">
            <img src="https://github.com/TetoTerritory10/portraits/blob/main/1920x1086/globalLtP/global.png?raw=true" alt="Top global" class="rounded-xl shadow-lg w-screen h-full object-cover shadow-blue-500/60 transition-shadow duration-300 hover:shadow-2xl hover:shadow-blue-400/80">
        </div>
    </section>

    <section class="flex flex-col md:flex-row-reverse items-center min-h-[60vh] bg-stone-800 w-full">

        <div class="md:w-1/2 flex flex-col items-center p-10">
            <h3 class="text-3xl font-bold text-[#EDEDEC] mb-4">Tops de franquicias</h3>

            <p class="text-[#EDEDEC] mb-6 text-center">Explora los rankings por franquicia y debate en ellos por <br> quien merece realmente tener el titulo del más fuerte.</p>

            <a href="{{ route('tops-franquicias.index') }}"
                class="bg-stone-700/80 text-[#EDEDEC] px-6 py-3 rounded-xl font-semibold transition hover:bg-stone-600 hover:scale-105 shadow-lg">
                Decide al mejor de su mundo
            </a>
        </div>

        <div class="md:w-1/2 flex justify-center p-10 h-full">
            <img src="https://github.com/TetoTerritory10/portraits/blob/main/1920x1086/franchisesLtP/franchises.png?raw=true" alt="Top global" class="rounded-xl shadow-lg w-screen h-full object-cover shadow-red-500/60 transition-shadow duration-300 hover:shadow-2xl hover:shadow-red-400/80">
        </div>
    </section>

    <section class="flex flex-col md:flex-row items-center min-h-[60vh] bg-stone-900 w-full">

        <div class="md:w-1/2 flex flex-col items-center p-10">
            <h3 class="text-3xl font-bold text-[#EDEDEC] mb-4">¡Crea tus propios tops!</h3>

            <p class="text-[#EDEDEC] mb-6 text-center">Ve a tu cuenta y empieza a crear rankings personales personales <br> que compartir con tus amigos.</p>

            <a href="{{ route('panel-usuario') }}"
                class="bg-stone-700/80 text-[#EDEDEC] px-6 py-3 rounded-xl font-semibold transition hover:bg-stone-600 hover:scale-105 shadow-lg">
                Empieza a crear tus tops
            </a>
        </div>

        <div class="md:w-1/2 flex justify-center p-10 h-full">
            <img src="https://github.com/TetoTerritory10/portraits/blob/main/1920x1086/personalLtP/personal.png?raw=true" alt="Top global" class="rounded-xl shadow-lg w-screen h-full object-cover shadow-green-500/60 transition-shadow duration-300 hover:shadow-2xl hover:shadow-green-400/80">
        </div>
    </section>
    </main>

    <footer
        class="text-[#EDEDEC] textl-2xl flex flex-col items-center justify-center h-fit bg-stone-950 border-t-white border-t-2 py-6">
        <p>&copy; 2025 List the Power. Todos los derechos reservados</p>
    </footer>
</body>

</html>