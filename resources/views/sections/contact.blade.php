<section id="contact" class="py-24 bg-white dark:bg-bgDark relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-accent-500/10 blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-primary-500/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">Mari Berdiskusi</h2>
            <div class="mt-2 w-24 h-1 bg-accent-500 mx-auto rounded-full"></div>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600 dark:text-gray-300">
                Punya ide menarik atau tawaran pekerjaan? Saya siap mendengarkan.
            </p>
        </div>

        <div class="max-w-3xl mx-auto bg-gray-50 dark:bg-bgDarkCard rounded-2xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-800">
            <div class="p-8 md:p-10">
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="block w-full rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-bgDark text-gray-900 dark:text-white shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm transition-colors" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                            <input type="email" name="email" id="email" class="block w-full rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-bgDark text-gray-900 dark:text-white shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm transition-colors" placeholder="john@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Subjek</label>
                        <input type="text" name="subject" id="subject" class="block w-full rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-bgDark text-gray-900 dark:text-white shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm transition-colors" placeholder="Tawaran Pekerjaan">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="block w-full rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-bgDark text-gray-900 dark:text-white shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm transition-colors" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all hover:shadow-lg hover:shadow-primary-500/30">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
