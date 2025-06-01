<x-app-layout>
    <div class="text-[#000000] text-center">
        <h1 class="text-5xl font-bold mt-4 mb-4">Creador de tops</h1>
        <p class="text-stone-900 mb-6 text-center">
            Bienvenido al creador de tops, crea, añade y edita tus propios tops y <br>
            compártelos con tus amigos.
        </p>
    </div>

    <form action="">
        {{-- SECCION INICIAL --}}
        <section class="text-[#e0e0e0] flex flex-col md:flex-row min-h-[30vh] bg-stone-900 w-full items-center justify-center">
            <div class="flex flex-col items-center w-full">
                <h2 class="text-4xl font-bold mt-4 mb-4">Datos principales</h2>
                <div class="w-full max-w-3xl flex flex-col md:flex-row gap-8 items-center justify-center pb-10 pt-5">
        
                    <div class="flex flex-col w-full md:w-1/2 gap-4 text-center">
                        <x-label class="text-xl">Nombre</x-label>
                        <x-input id="name" placeholder="Escribe un nombre para este top" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        
                        <x-label class="text-xl">Personajes</x-label>
                        <div class="flex-1 relative w-full">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <x-lupa-icon/>
                            </span>
                        <x-input id="personaje-search" name="personaje_search" type="text" placeholder="Añade personajes" class="pl-10 w-full" required/>
                        </div>
                    </div>
        
                    <div class="flex flex-col w-full md:w-1/2 gap-4 text-center">
                        <x-label class="text-xl">Descripción</x-label>

                        <x-input id="description" placeholder="Da una descripción a este top" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
                        
                        <x-label class="text-xl">Franquicias</x-label>

                        <div class="flex-1 relative w-full">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <x-lupa-icon/>
                            </span>
                            <x-input id="franquicia-search" name="franquicia_search" type="text" placeholder="Inserta directamente todos los personajes de una franquicia" class="pl-10 w-full" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECCION DE COMPARTIR Y ELEGIR IMAGEN DEL TOP PERSONAL --}}
        <section class="flex flex-col items-center justify-center min-h-[30vh] w-full">
            <div class="flex flex-row w-full md:w-1/2 gap-4 text-center mt-4 items-center justify-center">
                <div class="flex-1 flex flex-col items-center">
                    <x-label class="text-xl">Imagen del Top</x-label>
                    <input id="top-image" name="top_image" type="file" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-800 file:text-[#e0e0e0] hover:file:bg-stone-700" />
                </div>

                <div class="flex-1 relative w-full">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <x-lupa-icon/>
                    </span>
                    <x-input id="user-search" name="user_search" type="text" placeholder="Buscar usuario para compartir" class="pl-10 w-full" />
                </div>
            </div>
        </section>
        
        <section class="text-[#e0e0e0] flex min-h-[13vh] bg-stone-900 w-full items-center justify-center">
            <div class="flex justify-center w-full">
                <button type="submit" class="text-white bg-gradient-to-r from-[#f66767b2] via-[#ef4444be] to-[#dc2626ad] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-3xl px-5 py-2.5 text-center">¡Crea ese top!</button>
            </div>
        </section>
    </form>
    
</x-app-layout>