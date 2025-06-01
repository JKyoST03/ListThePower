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
                    {{-- <x-nav-link href="#" :active="request()->routeIs('dashboard')"> --}}
                    <x-nav-link href="{{ route('top-global.index') }}" :active="request()->routeIs('top-global.index')">
                        <span class="text-[#EDEDEC]">{{ __('Top global') }}</span>
                    </x-nav-link>
                    <x-nav-link href="{{ route('tops-franquicias.index') }}" :active="request()->routeIs('tops-franquicias.index', 'tops-franquicias.franchise')">
                        <span class="text-[#EDEDEC]">{{ __('Tops de franquicias') }}</span>
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-300">
                                    {{ __('Navegación del usuario') }}
                                </div>

                                <x-dropdown-link href="{{ route('dashboard') }}">
                                    {{ __('Panel del usuario') }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Editar perfil') }}
                                </x-dropdown-link>


                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link class="hover:bg-red-500/80 focus:bg-red-500/80" href="{{ route('logout') }}"
                                             @click.prevent="$root.submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

            @else
            <!-- Login / Register -->
                <div class="hidden space-x-4 sm:-my-px sm:ms-10 sm:flex text-[#EDEDEC]">
                        <x-nav-link href="{{ route('login') }}">
                            <span class="text-[#EDEDEC]">{{ __('Inicio de sesión') }}</span>
                        </x-nav-link>

                        <x-nav-link href="{{ route('register') }}">
                            <span class="text-[#EDEDEC]">{{ __('Registrarse') }}</span>
                        </x-nav-link>
                </div>
            @endauth

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
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-300">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-200">{{ Auth::user()->email }}</div>
                </div>
            </div>
            @endauth

            <div class="mt-2 space-y-1">
                @auth
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-300">
                    {{ __('Navegación del usuario') }}
                </div>
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Editar perfil') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Panel del usuario') }}
                    </x-responsive-nav-link>

                    <hr class="border-t border-gray-200" />
               
                    @else
                    <!-- Auth mobile -->
                    <div class="block px-4 py-2 text-xs text-gray-300">
                        {{ __('Entrada a la aplicación') }}
                    </div>
                        <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Inicio de sesión') }}
                        </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                        {{ __('Registro') }}
                    </x-responsive-nav-link>

                    <hr class="border-t border-gray-200" />
                @endauth
                <div class="block px-4 py-2 text-xs text-gray-300">
                    {{ __('Tops') }}
                </div>
                
                <!-- Tops -->
                {{-- <x-responsive-nav-link href="#" :active="request()->routeIs('dashboard')"> --}}
                <x-responsive-nav-link href="{{ route('top-global.index') }}" :active="request()->routeIs('top-global.index')">
                    {{ __('Top global') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('tops-franquicias.index') }}" :active="request()->routeIs('tops-franquicias.index', 'tops-franquicias.franchise')">
                    {{ __('Tops de franquicias') }}
                </x-responsive-nav-link>

                @auth
                    <hr class="border-t border-gray-200" />

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link class="hover:bg-red-200 hover:border-red-500" href="{{ route('logout') }}"
                                       @click.prevent="$root.submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-responsive-nav-link>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
