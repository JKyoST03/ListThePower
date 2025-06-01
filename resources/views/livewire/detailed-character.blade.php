<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70">
    <div class="bg-stone-800 rounded-2xl shadow-2xl max-w-lg w-full relative border border-stone-700">
        
        <button wire:click="$emit('closeDetailedModal')" class="absolute top-3 right-3 text-gray-400 hover:text-white text-3xl font-bold focus:outline-none transition-colors">
            &times;
        </button>
        <div class="p-8">

            <div class="flex flex-col items-center mb-6">
                <img src="{{ $imageUrl }}" alt="{{ $character->name }}" class="max-w-32">
                <h2 class="text-3xl font-extrabold text-white mb-2 text-center">{{ $character->name }}</h2>
                <p class="text-gray-300 text-center text-lg">{{ $character->description }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-bold text-green-300 mb-2 flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 20.5a8.38 8.38 0 0 1-7-4.5c0-2.5 5-4 7-4s7 1.5 7 4a8.38 8.38 0 0 1-7 4.5z"/></svg>
                        Habilidades
                    </h3>
                    <ul class="list-disc pl-5 space-y-1 text-gray-200">
                        @foreach ($habilities as $habilitie)
                            <li>{{ $habilitie }}</li>    
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-red-300 mb-2 flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                        Desventajas
                    </h3>
                    <ul class="list-disc pl-5 space-y-1 text-gray-200">
                        @foreach ($disadvantages as $disadvantage)
                            <li>{{ $disadvantage }}</li>    
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>