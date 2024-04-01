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
                "1040px": {
                    "max": "1040px"
                },
                "1000": {
                    "max": "1000px"
                },
                "945px": {
                    "max": "945px"
                },
                "900": {
                    "max": "900px"
                },
                "760": {
                    "max": "760px"
                },
                "710": {
                    "max": "710px"
                },
                "700": {
                    "max": "700px"
                },
                "690px": {
                    "max": "690px"
                },
                "540": {
                    "max": "540px"
                },
                "535px": {
                    "max": "535px"
                },
                "520": {
                    "max": "520px"
                },
                "430": {
                    "max": "430px"
                },
                "430px": {
                    "max": "430px"
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
