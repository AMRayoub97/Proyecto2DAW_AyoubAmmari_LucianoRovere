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
                'resources/sass/auth/login.scss',
                'resources/sass/auth/registrar.scss',
                'resources/sass/principales/perfile.scss',
                'resources/js/principales/perfile.js',
                'resources/sass/principales/tienda.scss',
                'resources/js/principales/tienda.js',
                'resources/sass/principales/producto.scss',
                'resources/js/principales/producto.js',
                'resources/sass/jugadores/create.scss',
                'resources/js/jugadores/create.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/vendor/**']
        }
    }
});
