<div x-data="{ show: @entangle('showComments') }">
    <div 
        x-show="show" 
        class="fixed inset-0 bg-black bg-opacity-50 z-40 transition-opacity"
        x-transition.opacity
        @click="show = false"
        aria-hidden="true"
    ></div>

    <!-- Sidebar -->
    <aside 
        x-show="show"
        class="fixed top-0 right-0 w-full max-w-md h-full bg-[#242222] text-white shadow-lg z-50 transition-transform transform translate-x-full"
        :class="{ 'translate-x-0': show, 'translate-x-full': !show }"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
    >
        <div class="flex items-center justify-between p-4 border-b">
            <h2 class="text-lg font-semibold">Comentarios de {{ $character->name }}</h2>
            <button @click="show = false; $wire.$dispatch('closeComments')" class="text-3xl text-gray-100 hover:text-gray-400">
                &times;
            </button>
        </div>
        <div class="p-4 overflow-y-auto h-[calc(100%-64px)]">
            <div class="space-y-4 pb-16">
                @foreach ($characterComments as $comment)
                    <div class="bg-stone-900 rounded p-3">
                        <div class="font-semibold">{{ $comment->user->name }}</div>
                        <div class="text-sm text-gray-300">{{ $comment->content }}</div>
                        <div class="text-xs text-gray-500 mt-1">Hace X minutos</div>
                    </div>
                @endforeach

                @auth
                    
                    <form wire:submit.prevent="postComment" class="flex items-center gap-2 px-4 py-2 bg-[#242222] border-t border-stone-800 fixed bottom-0 right-0 w-full max-w-md z-50">
                        <input wire:model.defer="newComment" type="text"
                        class="flex-1 p-2 rounded bg-stone-800 text-white border border-stone-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Escribe un comentario..." />
                        <x-submit-button/>
                    </form>
                @else
                    <div class="flex fixed bottom-0 right-0 max-w-md z-50">
                        <a href="{{ route('login') }}">
                            <button class="fit-content text-white text-xl bg-gradient-to-r from-[#f66767b2] via-[#ef4444be] to-[#dc2626ad] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 mb-5 p-1 px-4 py-2 rounded-lg">
                                Inicia sesión para poder comentar
                            </button>
                        </a>
                    </div>
                @endauth

            </div>
        </div>
    </aside>
</div>