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
            <h1 class="text-7xl text-[#EDEDEC] font-bold">¿Preparado para decidir?</h1>
            <p class="text-[#EDEDEC] text-lg mt-4">Encasilla donde crees que pertenece en la escala de poder cada
                personaje.</p>
        </div>
        <div class="absolute inset-0 bg-gray-600/70"></div>
    </div>

    <!-- MAIN -->
    <main class="flex flex-col items-center justify-center h-fit bg-stone-800">
        <h1 class="text-5xl text-[#EDEDEC] font-bold mt-3">¡Bienvenido a List the Power!</h1>
        <p class="text-[#EDEDEC] text-lg mt-4 text-center">En List the Power puedes votar y debatir por quien la
            posición de los personajes en nuestros rankings, y por encima crear los tuyos propios con tus
            amigos.<br>¡Empieza ya!</p>

        <h2 class="text-4xl mt-6 mb-4 text-[#EDEDEC] font-bold">¿Donde quieres ir?</h2>

        <!-- Navigation -->
        <div class="text-[#EDEDEC] text-xl pt-2 gap-4">
            <a href="{{ route('top-global.index') }}"
                class="transition duration-300 ease-in-out hover:shadow-lg hover:scale-110 hover:bg-stone-700/60 rounded-xl px-4 py-2">Top
                Global</a>
            <a href=" {{ route('tops-franquicias.index') }}"
                class="transition duration-300 ease-in-out hover:shadow-lg hover:scale-110 hover:bg-stone-700/60 rounded-xl px-4 py-2">Tops
                de franquicias</a>
            <a href="{{ route('login') }}"
                class="transition duration-300 ease-in-out hover:shadow-lg hover:scale-110 hover:bg-stone-700/60 rounded-xl px-4 py-2">Mis
                tops personales</a>
        </div>

        <hr class="w-full border-1 mt-6">

        <div class="flex flex-col items-center justify-center h-fit bg-stone-800 mt-2">
            <h1 class="text-5xl text-[#EDEDEC] font-bold mt-3">¿Qué es List the Power?</h1>
            <div class="max-w-7xl mx-auto">
                <span class="text-[#EDEDEC] text-lg text-center">
                    <p class="mt-4">
                        List the Power es una página web donde puedes comparar y rankear a tus personajes de ficción
                        favoritos para ver quién es el más fuerte, inteligente o simplemente el más popular. Aquí no
                        solo puedes votar en los rankings globales, sino también crear tus propios tops personalizados y
                        compartirlos con tus amigos para ver quién está de acuerdo contigo (¡o para debatirlo!).

                        <br><br>
                    <p class="mt-3">
                        ¿Te imaginas tener tu propio ranking de héroes, villanos o cualquier grupo que se te ocurra?
                        Aquí puedes hacerlo de forma fácil y divertida. Además, puedes descubrir nuevos personajes y ver
                        qué opina la comunidad sobre ellos.
                    </p>

                    <br>
                    <p class="mt-3">
                        ¡Anímate a registrarte y empieza a crear y compartir tus propios rankings hoy mismo!
                    </p>
                    </p>
                </span>
            </div>
        </div>

        <hr class="w-full border-1 mt-6">

        <section class="flex flex-col items-center justify-center bg-stone-900 py-8 w-full">
            <h1 class="text-4xl text-[#EDEDEC] font-bold mb-4">¿Tienes sugerencias o comentarios?</h1>

            <div class="text-[#EDEDEC] text-lg mb-6 w-full flex flex-col items-center">
                <p class="mb-2">¡Tu opinión nos ayuda a mejorar! Puedes dejar un mensaje explicandonos cualquier
                    sugerencia o duda que tengas.</p>
            </div>

            {{-- Formulario de contacto --}}
            <form
                class="text-[#EDEDEC] text-lg font-bold w-full text-center max-w-xl bg-stone-800 p-6 rounded-xl shadow-lg"
                method="POST" action="#">

                <div class="flex text-center align-center justify-center mb-7">
                    <x-asesoria-icon/>
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2">Correo electrónico</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 rounded bg-stone-700 text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-red-400 placeholder:text-gray-400"
                        placeholder="¿Quien eres?" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2">Mensaje</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-3 py-2 rounded bg-stone-700 text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-red-400 placeholder:text-gray-400"
                        placeholder="Escribe cualquier problema que tengas o duda a consultar" required></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-gradient-to-r from-[#f66767b2] via-[#ef4444be] to-[#dc2626ad] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2">Enviar</button>
            </form>

        </section>

    </main>

    <footer
        class="text-[#EDEDEC] textl-2xl flex flex-col items-center justify-center h-fit bg-stone-950 border-t-white border-t-2 py-6">
        <p>&copy; 2025 List the Power. Todos los derechos reservados</p>
    </footer>
</body>

</html>