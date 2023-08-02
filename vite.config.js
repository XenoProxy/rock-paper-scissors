import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import tailwindcss from 'tailwindcss'
export default defineConfig({
    server: {
        host: 'localhost',
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', 
                'resources/css/app.css'
            ],
            refresh: true,
        }),
        
    ],    
    css: {
        postcss: {
            plugins: [tailwindcss],
        },
    }
    
});
