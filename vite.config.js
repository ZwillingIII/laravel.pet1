import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    // server: {
    //     hmr: {
    //         host: '127.0.0.1:8000',
    //     },
    // },
    plugins: [
				vue(),
        laravel({
            // input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/sass/app.sass', 'resources/js/app.js', 'resources/sass/posts.detail.sass', 'resources/js/vue-file.js'],
            refresh: true,
        }),
    ],
});
