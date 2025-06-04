import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'public/build/assets/app-B-bVuAmC.css', 'resources/js/app.js', 'public/build/assets/app-rYFCqwdu.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
