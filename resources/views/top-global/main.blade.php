<x-app-layout>
    <div class="flex flex-col items-center mt-5 mb-8">
        <h1 class="text-4xl font-bold mb-2">Top Global de Personajes</h1>
        <p class="text-lg text-gray-900 mb-6 text-center max-w-2xl">Bienvenido al top global, lugar más desenfadado para votar quienes crees que sean los personajes más o menos fuertes de la existencia.</p>
    </div>
    <div class="flex justify-center mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-20 self-center">
            @foreach ($characters as $character)
                @livewire('global-characters', ['character' => $character], key($character->id))
            @endforeach
        </div>
    </div>


</x-app-layout>