<x-app-layout>
    <div class="flex justify-center mt-5 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-20 self-center">
            @foreach ($characters as $character)
                @livewire('global-characters', ['character' => $character], key($character->id))
            @endforeach
        </div>
    </div>


</x-app-layout>