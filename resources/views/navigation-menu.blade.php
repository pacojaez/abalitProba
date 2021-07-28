<nav class="bg-purple-500 shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto md:flex">
        <div class="flex items-center justify-between">
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button"
                    class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="w-full md:flex md:items-center md:justify-between">
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </span>
                <input type="search"
                    class="w-1/2 py-3 pl-10 pr-4 text-white bg-purple-500 border border-purple-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring"
                    placeholder="Search" />
            </div>
            <div class="flex flex-col px-2 py-3 -mx-4 md:flex-row md:mx-0 md:py-0">
                @if(Auth::user())
                    @livewire('nav-wishlist')
                @endif

                    @livewire('nav-cart')

                @if(Auth::user())
                <div class="justify-end flex-grow hidden sm:flex sm:items-center sm:ml-6 place-items-center">
                    <!-- Settings Dropdown -->
                    <div class="relative ml-3">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 text-lg leading-4 text-red-600 transition bg-purple-500 border-2 border-white rounded-md font-title hover:text-gray-700 focus:outline-none">
                                        Welcome, {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
                                @if(Auth::user())
                                {{-- <x-jet-dropdown-link href="{{ route('products.wizard') }}">
                                    {{ __('Añadir Oferta') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('ofertas.index') }}">
                                    {{ __('Mis Ofertas') }}
                                </x-jet-dropdown-link> --}}
                                @endif
                                @if(Auth::user()->isAdmin())
                                {{-- <x-jet-dropdown-link href="{{ route('products.index') }}">
                                    {{ __('Todos los Productos') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ url('inactive') }}">
                                    {{ __('Productos INACTIVOS') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('ofertas.index') }}">
                                    {{ __('Todas las Ofertas') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ url('ofertasinactive') }}">
                                    {{ __('Ofertas INACTIVAS') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('user.create') }}">
                                    {{ __('Añadir Usuario') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('users.index') }}">
                                    {{ __('Todos los Usuarios') }}
                                </x-jet-dropdown-link> --}}
                                @endif



                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
                @else
                    <div class="items-center justify-end flex-grow hidden sm:flex">
                        <x-jet-nav-link href="{{ route('login') }}" class="m-5 text-red-600 font-title">
                            {{ __('Login') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('register') }}" class="m-5 text-red-600 font-title">
                            {{ __('Registro') }}
                        </x-jet-nav-link>
                    </div>

                @endif
                {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="relative ml-3">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div> --}}
            </div>


        </div>
    </div>
    <hr class="text-white" />
    <div class="container px-6 py-0 mx-auto md:flex">
        <div class="flex items-center justify-between">
         @livewire('nav-categories')
        </div>

        {{-- <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="w-full md:flex md:items-center md:justify-between">
            <div class="flex flex-col px-2 py-0 -mx-4 md:flex-row md:mx-0 md:py-0">
                <a href="#"
                    class="flex flex-row px-2 py-1 text-xl font-bold text-red-400 transition-colors duration-200 transform rounded dark:text-gray-200 hover:text-blue-600 hover:shadow-lg hover:underline md:mx-2">
                    <p>
                        HOME
                    </p>
                </a>
                <a href="#"
                    class="flex flex-row px-2 py-1 text-xl font-bold text-red-400 transition-colors duration-200 transform rounded dark:text-gray-200 hover:text-blue-600 hover:shadow-lg hover:underline md:mx-2">
                    <p>BY THE WEIGHT</p>
                </a>
                <a href="#"
                    class="flex flex-row px-2 py-1 text-xl font-bold text-red-400 transition-colors duration-200 transform rounded dark:text-gray-200 hover:text-blue-600 hover:shadow-lg hover:underline md:mx-2">ITEMS</a>
            </div>
        </div> --}}
        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    </div>
</nav>
