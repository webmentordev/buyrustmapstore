import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                "900px": {
                    "max": "900px"
                },
                "680px": {
                    "max": "680px"
                }
            },
            colors: {
                "main": "#F8AD00",
                "rust": "#CD412B",
                "rust-green": "#5d7239"
            }
        },
    },

    plugins: [forms],
};
