import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    //* hide warnings from external dependences like bootstrap
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true
            }
        }
    },
    server: {
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
