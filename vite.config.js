import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            /*css */'resources/css/app.css',
            /*scss*/'resources/scss/layouts/frames/main_frame.scss','resources/scss/login.scss','resources/scss/layouts/pages/pages.scss',
            /*js  */'resources/js/app.js','resources/js/frames/main_frame.js'
            ],
            refresh: true,
        }),
    ],
});
