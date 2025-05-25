<x-app-layout>
    <h1 class="text-5xl font-bold text-center mt-4">{{ $franchise->name }}</h1>

    <div class="flex justify-center mt-5 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-20 self-center">
            @foreach ($characters as $character)
                @livewire('franchise-characters', ['character' => $character], key($character->id))
            @endforeach
        </div>
    </div>

    <div class="flex justify-center bottom-0 min-h-full">
        {{ $characters->links() }}
    </div>
</x-app-layout>