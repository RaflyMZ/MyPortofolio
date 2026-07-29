import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Theme Initialization
document.addEventListener('alpine:init', () => {
    Alpine.data('theme', () => ({
        dark: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        init() {
            this.$watch('dark', val => {
                if (val) {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                }
            });
            if (this.dark) {
                document.documentElement.classList.add('dark');
            }
        },
        toggleTheme() {
            this.dark = !this.dark;
        }
    }));
});

Alpine.start();
