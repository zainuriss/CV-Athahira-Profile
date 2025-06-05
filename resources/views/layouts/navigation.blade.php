<nav x-data="{ scrolled: false, open: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 0; })"
    :class="scrolled ? 'bg-white dark:bg-neutral-900 shadow-sm' : 'bg-transparent border-none'"
    class="fixed w-full z-30 transition-all duration-300 dark:shadow-current">

    <!-- Primary Navigation Menu -->
    <div class="flex w-full flex-row justify-between items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex w-full justify-between items-center h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo
                            class="block h-20 w-auto fill-current text-neutral-800 dark:text-neutral-200" />
                    </a>
                </div>
            </div>

            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:flex">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-neutral-500 dark:text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-300 focus:outline-none transition ease-in-out duration-150">
                                <h1>Layanan</h1>
                                <div class="ms-1">
                                    <svg :class="{ 'rotate-180': open }"
                                        class="transition-all duration-300 ease-in-out fill-current h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('home')">
                                {{ __('LPK') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('home')">
                                {{ __('LKP') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-neutral-500 dark:text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-300 focus:outline-none transition ease-in-out duration-150">
                                <h1>Informasi</h1>
                                <div class="ms-1">
                                    <svg :class="{ 'rotate-180': open }"
                                        class="transition-all duration-300 ease-in-out fill-current h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('home')">
                                {{ __('Seminar') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('home')">
                                {{ __('Jadwal') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-neutral-500 dark:text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-300 focus:outline-none transition ease-in-out duration-150">
                                <h1>Produk</h1>
                                <div class="ms-1">
                                    <svg :class="{ 'rotate-180': open }"
                                        class="transition-all duration-300 ease-in-out fill-current h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('home')">
                                {{ __('eBook') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <x-nav-link class="">Beritha</x-nav-link>
                    <x-nav-link class="">Recruitment</x-nav-link>
                    <x-nav-link class="">Kontak</x-nav-link>
                </div>
            </div>

            @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-neutral-500 dark:text-neutral-400 bg-white dark:bg-neutral-800 hover:text-neutral-700 dark:hover:text-neutral-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <div class="flex">

                {{-- Toggle dark mode --}}
                <button
                   @click="document.documentElement.classList.toggle('dark'); 
                localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light'"
                   class="p-2 rounded-md text-neutral-400 dark:text-neutral-500 hover:text-neutral-500 dark:hover:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none focus:bg-neutral-100 dark:focus:bg-neutral-900 focus:text-neutral-500 dark:focus:text-neutral-400 transition duration-150 ease-in-out">
                   <i class="fas fa-moon w-6 h-auto text-current block dark:hidden"></i>
                   <i class="fas fa-sun w-6 h-auto text-current dark:block hidden"></i>
               </button>
    
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
    
                    <button @click="open = ! open"
                        class="inline-flex flex-col gap-1 group items-center justify-center p-2 rounded-md text-neutral-400 dark:text-neutral-500 hover:text-neutral-500 dark:hover:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none focus:bg-neutral-100 dark:focus:bg-neutral-900 focus:text-neutral-500 dark:focus:text-neutral-400 transition duration-150 ease-in-out">
                        <span :class="{ 'transform rotate-45 translate-y-1.5': open }"
                            class="w-6 h-0.5 bg-neutral-500 rounded transition-transform duration-300 ease-in-out"></span>
                        <span :class="{ 'opacity-0': open }"
                            class="w-6 h-0.5 bg-neutral-500 rounded transition-opacity duration-300 ease-in-out"></span>
                        <span :class="{ 'transform -rotate-45 -translate-y-1.5': open }"
                            class="w-6 h-0.5 bg-neutral-500 rounded transition-transform duration-300 ease-in-out"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div x-show="open" x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2" class="sm:hidden">

        <div x-data="{ dropdown: '' }" @click.away="dropdown = ''"
            class="md:hidden block p-4 bg-white dark:bg-neutral-900">
            <div class="pt-2 pb-3 space-y-1">
                <button @click="dropdown === 'layanan' ? dropdown = '' : dropdown = 'layanan'"
                    class="flex items-center justify-between w-full px-4 py-2 text-neutral-900 dark:text-neutral-400 focus:outline-none font-medium">
                    <h1>Layanan</h1>
                    <span>
                        <i :class="{ 'rotate-180': dropdown === 'layanan' }"
                            class="w-5 fa-solid fa-chevron-down transform transition-transform duration-200 text-neutral-900 dark:text-white"></i>
                    </span>
                </button>

                <div x-show="dropdown === 'layanan'" x-transition class="mt-2 px-4 space-y-2">
                    <a href="#layananlpk" class="block text-neutral-800 dark:text-gray-300 hover:underline">LPK</a>
                    <a href="#layananlkp" class="block text-neutral-800 dark:text-gray-300 hover:underline">LKP</a>
                </div>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <button @click="dropdown === 'informasi' ? dropdown = '' : dropdown = 'informasi'"
                    class="flex items-center justify-between w-full px-4 py-2 text-neutral-900 dark:text-neutral-400 focus:outline-none font-medium">
                    <h1>Informasi</h1>
                    <span>
                        <i :class="{ 'rotate-180': dropdown === 'informasi' }"
                            class="w-5 fa-solid fa-chevron-down transform transition-transform duration-200 text-neutral-900 dark:text-white"></i>
                    </span>
                </button>

                <div x-show="dropdown === 'informasi'" x-transition class="mt-2 px-4 space-y-2">
                    <a href="#seminar" class="block text-neutral-800 dark:text-gray-300 hover:underline">Seminar</a>
                    <a href="#jadwal" class="block text-neutral-800 dark:text-gray-300 hover:underline">Jadwal</a>
                </div>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <button @click="dropdown === 'produk' ? dropdown = '' : dropdown = 'produk'"
                    class="flex items-center justify-between w-full px-4 py-2 text-neutral-900 dark:text-neutral-400 focus:outline-none font-medium">
                    <h1>Produk</h1>
                    <span>
                        <i :class="{ 'rotate-180': dropdown === 'produk' }"
                            class="w-5 fa-solid fa-chevron-down transform transition-transform duration-200 text-neutral-900 dark:text-white"></i>
                    </span>
                </button>

                <div x-show="dropdown === 'produk'" x-transition class="mt-2 px-4 space-y-2">
                    <a href="#ebook" class="block text-neutral-800 dark:text-gray-300 hover:underline">eBook</a>
                </div>
            </div>
            <x-responsive-nav-link class="">Beritha</x-responsive-nav-link>
            <x-responsive-nav-link class="">Recruitment</x-responsive-nav-link>
            <x-responsive-nav-link class="">Kontak</x-responsive-nav-link>
        </div>
        

        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-neutral-200 dark:border-neutral-600">
                <div class="px-4">
                    <div class="font-medium text-base text-neutral-800 dark:text-neutral-200">{{ Auth::user()->name }}
                    </div>
                    <div class="font-medium text-sm text-neutral-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
