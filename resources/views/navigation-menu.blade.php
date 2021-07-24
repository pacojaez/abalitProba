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
                <a href="#"
                    class="flex flex-row px-2 py-1 text-sm font-medium text-gray-200 transition-colors duration-200 transform rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <p>
                        Wishlist
                    </p>
                </a>
                <a href="#"
                    class="flex flex-row px-2 py-1 text-sm font-medium text-gray-200 transition-colors duration-200 transform rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                    <p>Cart</p>
                </a>
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
