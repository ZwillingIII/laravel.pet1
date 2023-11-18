import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server: { 
    //     hmr: {
    //         host: '127.0.0.1:8000',
    //     },
    // },
    plugins: [
        laravel({
            // input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/sass/app.sass', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
