import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: colors.pink[100],
                    200: colors.pink[200],
                    300: colors.pink[300],
                    400: colors.pink[400],
                    500: colors.pink[500],
                    600: colors.pink[600],
                    700: colors.pink[700],
                    800: colors.pink[800],
                    900: colors.pink[900],
                }
            },
        },
    },

    plugins: [forms],
};
