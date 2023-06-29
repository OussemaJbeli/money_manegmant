import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            /*css */'resources/css/app.css',
            /*scss*/'resources/scss/layouts/frames/main_frame.scss',
                    'resources/scss/login.scss',
                    'resources/scss/layouts/pages/pages.scss',
                    'resources/scss/layouts/frames/loading_page.scss',
            /*js  */'resources/js/app.js',
                    'resources/js/frames/main_frame.js',
                    'resources/js/login.js',
                    'resources/js/loading_page.js'
            ],
            refresh: true,
        }),
    ],
});
