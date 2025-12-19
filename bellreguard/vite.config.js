import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/principales/index.scss',
                'resources/js/principales/index.js',
                'resources/sass/principales/jugadores.scss',
                'resources/js/principales/jugadores.js',
                'resources/sass/principales/equipos.scss',
                'resources/js/principales/equipos.js',
            ],refresh: true,
        }),
    ],
});
