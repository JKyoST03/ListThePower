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
            <button @click="show = false" class="text-3xl text-gray-100 hover:text-gray-400">
                &times;
            </button>
        </div>
        <div class="p-4 overflow-y-auto h-[calc(100%-64px)]">
            
        </div>
    </aside>
</div>