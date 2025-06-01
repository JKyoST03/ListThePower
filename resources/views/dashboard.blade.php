<x-app-layout>
<div class="flex flex-col items-center justify-center mt-5 px-8">
    <div class="flex-shrink-0 mb-4">
        <img src="{{ Auth::user()->profile_photo_url }}" alt="Tu foto de perfil" class="rounded-full size-40 shadow" />
    </div>
    <div class="flex-1 ml-0 text-center">
        <h1 class="text-5xl font-bold text-[#292524]">Bienvenido a tu panel de control, {{ Auth::user()->name }}</h1>
    </div>
</div>

    <x-section-border-black />

    <div class="flex-1 ml-6 text-center">
        <h1 class="text-4xl text-[#292524] font-bold mb-4">Tops Personales</h1>
        <div class="text-[#292524] text-lg mb-6 w-full flex flex-col items-center">
            <p class="mb-2">Crea tus propios tops con los personajes que quieras y compartelos con tus conocidos 
                <br>
                ¡Poneros a debatir quien creeis que es más fuerte!.</p>

                <a href="{{ route('top-personal.index') }}">
                    <button type="button" class="text-white bg-gradient-to-r from-[#f66767b2] via-[#ef4444be] to-[#dc2626ad] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-3 mt-3">
                        Crea un ranking personal
                    </button>
                </a>
        </div>

        {{-- DEMO --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pb-6 px-6">                
                    <div class="bg-stone-200 rounded-lg shadow-lg hover:shadow-red-900/50 hover:shadow-2xl transition-shadow duration-300 p-6">
                        <img src=" https://raw.githubusercontent.com/TetoTerritory10/portraits/refs/heads/main/1200x675/demo/portrait.jpg" width="100%" height="200px" alt="demo" class="rounded-lg mb-4 border-2 border-black">
                        <h3 class="text-2xl font-semibold mb-2 text-center">Demo 1</h3>
                    </div>
                    <div class="bg-stone-200 rounded-lg shadow-lg hover:shadow-red-900/50 hover:shadow-2xl transition-shadow duration-300 p-6">
                        <img src=" https://raw.githubusercontent.com/TetoTerritory10/portraits/refs/heads/main/1200x675/demo/portrait.jpg" width="100%" height="200px" alt="demo" class="rounded-lg mb-4 border-2 border-black">
                        <h3 class="text-2xl font-semibold mb-2 text-center">Demo 2</h3>
                    </div>
                    <div class="bg-stone-200 rounded-lg shadow-lg hover:shadow-red-900/50 hover:shadow-2xl transition-shadow duration-300 p-6">
                        <img src=" https://raw.githubusercontent.com/TetoTerritory10/portraits/refs/heads/main/1200x675/demo/portrait.jpg" width="100%" height="200px" alt="demo" class="rounded-lg mb-4 border-2 border-black">
                        <h3 class="text-2xl font-semibold mb-2 text-center">Demo 3</h3>
                    </div>
            </div>
    </div>
   
</x-app-layout>
