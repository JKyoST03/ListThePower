<div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
        <div class="flex justify-center p-5"> 
            <img src="{{ $imageUrl }}" alt="{{ $character->name }}" class="inline-block" width="120" height="120">
        </div>
        <div class="p-5">
            <!-- Character name -->
            <h1 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                {{ $character->name }}
            </h1>
            <!-- Character description -->
            <p class="text-center mb-3 font-normal text-gray-700">
                {{ $character->description}}
            </p>
            
            <!-- Buttons -->
            <div class="flex justify-between">
                <!-- Detail -->
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Ver en detalle
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>

                <div class="flex space-x-4">
                    <x-comment-button wire:click="" class="cursor-pointer"/>

                    <div class="flex items-center">
                        <span class="text-xl">{{ $votes }}</span>
                        <x-vote-button wire:click='vote' class="cursor-pointer"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>