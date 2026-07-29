<section id="hero" class="relative pt-20 pb-32 flex items-center justify-center min-h-[90vh] overflow-hidden">
    <!-- Abstract Background Mesh/Gradient -->
    <div class="absolute inset-0 z-0 opacity-40 dark:opacity-20 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-500 rounded-full mix-blend-multiply filter blur-[128px] animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-accent-500 rounded-full mix-blend-multiply filter blur-[128px] animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-1/2 w-96 h-96 bg-primary-300 rounded-full mix-blend-multiply filter blur-[128px] animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 text-sm font-medium mb-8">
            <span class="flex h-2 w-2 rounded-full bg-primary-500 mr-2"></span>
            Tersedia untuk peluang Entry-Level/Junior
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-6">
            Halo, saya <span class="text-primary-600 dark:text-primary-500">Rafly Maulana Zulyzar</span>
        </h1>
        
        <p class="mt-4 max-w-3xl mx-auto text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
            Web Developer yang berfokus membangun solusi aplikasi menggunakan <span class="font-semibold text-gray-900 dark:text-white">Laravel</span>, pengelolaan antarmuka berbasis data, serta integrasi cerdas (IoT Entry & AI).
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#projects" class="w-full sm:w-auto px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-xl transition-all shadow-lg shadow-primary-500/30">
                Lihat Proyek
            </a>
            <a href="{{ route('cv.download') }}" target="_blank" class="w-full sm:w-auto px-8 py-4 glass-card text-gray-700 dark:text-gray-200 font-medium rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-all flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                Lihat CV
            </a>
            <a href="#about" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-bgDarkCard border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-200 font-medium rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-all flex items-center justify-center gap-2">
                Hubungi Saya
            </a>
        </div>
        
        <!-- Highlight Metrics -->
        <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-3 border-t border-gray-200 dark:border-gray-800 pt-10">
            <div>
                <p class="text-4xl font-extrabold text-gray-900 dark:text-white">3.59</p>
                <p class="mt-2 text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">IPK S1 Informatika</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-gray-900 dark:text-white">4</p>
                <p class="mt-2 text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">Proyek</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-gray-900 dark:text-white">BNSP</p>
                <p class="mt-2 text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">Tersertifikasi Junior Web Dev</p>
            </div>
        </div>
    </div>
</section>
