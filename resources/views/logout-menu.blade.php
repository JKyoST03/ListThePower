<nav x-data="{ open: false }" class="bg-stone-900 border-b border-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="max-w-12xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home-page') }}">
                        <x-application-mark class="block h-12 w-auto" />
                    </a>
                    <a href="{{ route('home-page') }}">
                        <h1 class="text-2xl text-[#EDEDEC] font-bold whitespace-nowrap">List the Power</h1>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="#">
                        <span class="text-[#EDEDEC]">{{ __('Top global') }}</span>
                    </x-nav-link>

                    <x-nav-link href="{{ route('tops-franquicias.index') }}" :active="request()->routeIs('tops-franquicias.index')">
                        <span class="text-[#EDEDEC]">{{ __('Tops de franquicias') }}</span>
                    </x-nav-link>
                </div>
            </div>

            <!-- Login / Register -->
            <div class="hidden space-x-4 sm:-my-px sm:ms-10 sm:flex text-[#EDEDEC]">
                    <x-nav-link href="{{ route('login') }}">
                        <span class="text-[#EDEDEC]">{{ __('Iniciar Sesión') }}</span>
                    </x-nav-link>

                    <x-nav-link href="{{ route('register') }}">
                        <span class="text-[#EDEDEC]">{{ __('Registrarse') }}</span>
                    </x-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->

            <div class="mt-3 space-y-1">
                <div class="block px-4 py-2 text-xs text-gray-300">
                    {{ __('Navegación del usuario') }}
                </div>

                <hr class="border-t border-gray-200" />

                <div class="block px-4 py-2 text-xs text-gray-300">
                    {{ __('Tops') }}
                </div>
                <!-- Account Management -->
                {{-- <x-responsive-nav-link href="#" :active="request()->routeIs('dashboard')"> --}}
                <x-responsive-nav-link href="#">
                    {{ __('Tops global') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('tops-franquicias.index') }}" :active="request()->routeIs('tops-franquicias.index')">
                    {{ __('Tops de franquicias') }}
                </x-responsive-nav-link>

            </div>
        </div>
    </div>
</nav>
