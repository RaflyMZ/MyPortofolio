<nav x-data="{ mobileMenuOpen: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
     :class="{ 'glass shadow-sm': scrolled, 'bg-transparent': !scrolled }"
     class="fixed w-full z-50 top-0 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo / Name -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="text-xl font-bold text-primary-900 dark:text-white tracking-tight">
                    RaflyMZ<span class="text-accent-500">.</span>
                </a>
            </div>
            
            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/#about') }}" class="text-gray-600 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Tentang</a>
                <a href="{{ url('/#experience') }}" class="text-gray-600 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Pengalaman</a>
                <a href="{{ url('/#projects') }}" class="text-gray-600 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Proyek</a>
                <a href="{{ url('/#skills') }}" class="text-gray-600 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Keahlian</a>
                
                <div class="flex items-center space-x-4 border-l border-gray-200 dark:border-gray-700 pl-4">
                    <!-- Theme Toggle -->
                    <button @click="toggleTheme()" class="text-gray-500 dark:text-gray-400 hover:text-primary-600 dark:hover:text-accent-500 transition-colors focus:outline-none">
                        <svg x-show="!dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        <svg x-show="dark" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </button>
                    <!-- Language Toggle -->
                    
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-500 dark:text-gray-400 hover:text-primary-600 dark:hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden glass absolute top-20 left-0 w-full border-b border-gray-200 dark:border-gray-800">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a @click="mobileMenuOpen = false" href="{{ url('/#about') }}" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-md">Tentang</a>
            <a @click="mobileMenuOpen = false" href="{{ url('/#experience') }}" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-md">Pengalaman</a>
            <a @click="mobileMenuOpen = false" href="{{ url('/#projects') }}" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-md">Proyek</a>
            <a @click="mobileMenuOpen = false" href="{{ url('/#skills') }}" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-md">Keahlian</a>
            <div class="flex items-center space-x-4 px-3 py-4 border-t border-gray-200 dark:border-gray-700 mt-2">
                <button @click="toggleTheme()" class="text-gray-500 dark:text-gray-400">
                    <span x-show="!dark">Dark Mode</span>
                    <span x-show="dark" x-cloak>Light Mode</span>
                </button>
            </div>
        </div>
    </div>
</nav>
