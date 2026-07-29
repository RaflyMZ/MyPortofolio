<section id="projects" class="py-24 bg-white dark:bg-bgDark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ showAll: false }">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">Proyek Pilihan</h2>
            <div class="mt-2 w-24 h-1 bg-accent-500 mx-auto rounded-full"></div>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600 dark:text-gray-300">
                Beberapa proyek yang pernah saya bangun.
            </p>
        </div>

        <!-- Project Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Nutriscan -->
            <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-primary-500 to-accent-600 flex items-center justify-center">
                    <span class="text-4xl font-bold text-white opacity-40">NS</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-accent-500 transition-colors">Nutriscan</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                            Terbaik
                        </span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 line-clamp-3">
                        Aplikasi web untuk memindai label gizi pada produk makanan. Hasil pemindaian dapat mengekstrak informasi gizi dan menentukan apakah produk tersebut baik untuk ibu hamil atau balita.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">Laravel</span>
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">Tailwind CSS</span>
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">MySQL</span>
                    </div>

                </div>
            </div>

            <!-- GenAI Art -->
            <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-purple-500 to-primary-600 flex items-center justify-center">
                    <span class="text-4xl font-bold text-white opacity-40">GenAI</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-accent-500 transition-colors mb-4">GenAI Art</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 line-clamp-3">
                        Platform pembuatan seni menggunakan Generative AI. Peran saya adalah mengembangkan antarmuka (frontend) dan menyusun dokumentasi pelaporan proyek.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">React</span>
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">Tailwind CSS</span>
                    </div>

                </div>
            </div>

            <!-- Data Analyze Chatbot -->
            <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden bg-gray-200 dark:bg-gray-800">
                    <img src="{{ asset('images/projects/chatbot.png') }}" alt="Data Analyze Chatbot" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-accent-500 transition-colors mb-4">Data Analyze Chatbot(Beta 1.0)</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 line-clamp-3">
                        Aplikasi chatbot cerdas untuk menganalisis data secara interaktif dan memberikan *insight* secara langsung (real-time).
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">Python</span>
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">AI</span>
                    </div>
                    <a href="https://datachatbot-analyze.streamlit.app/" target="_blank" class="inline-flex items-center text-primary-600 dark:text-primary-400 font-semibold hover:underline">
                        Coba Proyek
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </div>

            <!-- ParkHere -->
            <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-blue-500 to-teal-500 flex items-center justify-center">
                    <span class="text-4xl font-bold text-white opacity-40">ParkHere</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-accent-500 transition-colors mb-4">ParkHere - Smart Parking System</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 line-clamp-3">
                        Sistem manajemen parkir pintar (Smart Parking). Di dalam tim proyek ini, saya bertanggung jawab penuh untuk menangani integrasi perangkat IoT (Internet of Things).
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">IoT</span>
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">Hardware</span>
                    </div>

                </div>
            </div>
            
            <!-- Help Desk TIK ISBI -->
            <div x-show="showAll" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="glass-card rounded-2xl overflow-hidden group cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center">
                    <span class="text-4xl font-bold text-white opacity-40">Help Desk</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-accent-500 transition-colors mb-4">Help Desk TIK ISBI</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 line-clamp-3">
                        Aplikasi Help Desk dan dashboard manajemen gudang untuk divisi Teknologi Informasi dan Jaringan ISBI Bandung guna melayani pelaporan pengguna fasilitas.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">PHP</span>
                        <span class="px-3 py-1 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg">MySQL</span>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="mt-12 text-center">
            <button @click="showAll = !showAll" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-700 rounded-lg text-base font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-bgDarkCard hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                <span x-text="showAll ? 'Tutup Proyek' : 'Lihat Semua Proyek'"></span>
            </button>
        </div>

    </div>
</section>
