<div>
        @if($showComments)
        @livewire('comments-bar', ['character' => $character, 'showComments' => $showComments , 'franchiseIdentifier' => $franchiseIdentifier])
    @endif
    <div class="max-w-sm bg-stone-800 border border-gray-200 rounded-lg shadow-sm">
        <div class="flex justify-center p-5"> 
            <img src="{{ $imageUrl }}" alt="{{ $character->name }}" class="inline-block" width="120" height="120">
        </div>
        <div class="p-5">
            <!-- Character name -->
            <h1 class="text-center mb-2 text-2xl font-bold tracking-tight text-white">
                {{ $character->name }}
            </h1>
            <!-- Character description -->
            <p class="text-center mb-3 font-normal text-gray-100">
                {{ $character->description}}
            </p>
            
            <!-- Buttons -->
            <div class="flex justify-between">
                <!-- Detail -->
                <button type="button" class="text-white bg-gradient-to-r from-[#f66767b2] via-[#ef4444be] to-[#dc2626ad] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2">Ver en detalle</button>

                <div class="flex space-x-1">
                    <x-comment-button wire:click="openComments" class="cursor-pointer group"/>

                    <div class="flex items-center">
                        <span class="text-2xl text-[#e0e0e0] font-bold">{{ $votes }}</span>
                        <x-vote-button wire:click='vote' class="cursor-pointer group"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
