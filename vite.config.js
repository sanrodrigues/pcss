import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '', // Adicione aqui qualquer configuração global para SCSS
                quietDeps: true, // Suprime os avisos de depreciação de dependências
            },
        },
    },
});

