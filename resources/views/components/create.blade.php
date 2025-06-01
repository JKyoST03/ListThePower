<x-app-layout>
    <div class="text-[#000000] text-center">
        <h1 class="text-5xl font-bold mt-4 mb-4">Creador de tops</h1>
        <p class="text-stone-900 mb-6 text-center">
            Bienvenido al creador de tops, crea, añade y edita tus propios tops y <br>
            compártelos con tus amigos.
        </p>
    </div>
    <section class="text-[#e0e0e0] flex flex-col md:flex-row min-h-[30vh] bg-stone-900 w-full items-center justify-center">
        <div class="flex flex-col items-center w-full">
            <h2 class="text-4xl font-bold mt-4 mb-4">Datos principales</h2>
            <div class="w-full max-w-3xl flex flex-col md:flex-row gap-8 items-center justify-center pb-10 pt-5">
                

                <div class="flex flex-col w-full md:w-1/2 gap-4 text-center">
                    <x-label class="text-xl">Nombre</x-label>
                    <x-input id="name" placeholder="Escribe un nombre para este top" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                   <x-label class="text-xl">Personajes a añadir</x-label>
                    <x-input id="characters" placeholder="Añade personajes uno a uno" class="block mt-1 w-full" type="text" name="characters" :value="old('characters')" required />
                </div>
                
                <div class="flex flex-col w-full md:w-1/2 gap-4 text-center">
                    <x-label class="text-xl">Descripción</x-label>
                    <x-input id="description" placeholder="Da una descripción a este top" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
                    <x-label class="text-xl">Franquicias</x-label>
                    <x-input id="franchises" placeholder="Para añadir kits enteros de personajes" class="block mt-1 w-full" type="text" name="franchises" :value="old('franchises')" />
                </div>
            </div>

        </div>
    </section>
    <section class="flex flex-col items-center justify-center min-h-[30vh] w-full">
        <div class="flex flex-col w-full md:w-1/2 gap-4 text-center mt-4 items-center justify-center">
            <x-label class="text-xl">Imagen del Top</x-label>
            <input id="top-image" name="top_image" type="file" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-800 file:text-[#e0e0e0] hover:file:bg-stone-700" />
        </div>
        <!-- Botón de búsqueda de usuarios -->
        <div class="flex flex-col items-center w-full mt-4 justify-center">
            <div class="flex flex-row gap-2 w-full max-w-md justify-center items-center">
                <x-input id="user-search" name="user_search" type="text" placeholder="Buscar usuario para compartir" />
                
                <button type="button" class="bg-stone-800 hover:bg-stone-700 text-[#e0e0e0] font-bold py-2 px-4 rounded-lg flex items-center gap-2 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                    </svg>
                    Buscar
                </button>
            </div>
        </div>
    </section>
    
</x-app-layout>