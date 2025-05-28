<x-app-layout>
    <h1 class="text-5xl font-bold text-center mt-4">{{ $franchise->name }}</h1>

    <div class="fixed top-24 right-8 w-80 bg-gradient-to-r from-[#7e4545] to-[#ef4469] border-2 border-[#1b0404] shadow-lg rounded-lg p-4">
        @livewire('top-tier-character', ['franchise' => $franchise])
    </div>

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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.14.9/cdn.js"></script> --}}
</x-app-layout>