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
        screens: {
            '2xs': "350px",
            'xs': "425px",
            'sm': "640px",
            'md': "768px",
            'lg': "1024px",
            'xl': "1215px",
            '2xl': "1536px",
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '16px',
                sm: '32px',
                lg: '32px',
                xl: '32px',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
