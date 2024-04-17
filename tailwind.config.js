import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import colors from 'tailwindcss/colors.js'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: [
        'grid-cols-1',
        'grid-cols-2',
        'grid-cols-3',
        'grid-cols-4',
        'grid-cols-5',
        'grid-cols-6',

        //md
        'md:grid-cols-3',
        'md:grid-cols-4',
        'md:grid-cols-5',
        'md:grid-cols-6',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat', ...defaultTheme.fontFamily.sans],
                quick: ['Quicksand', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: colors.pink[50],
                    100: colors.pink[100],
                    200: colors.pink[200],
                    300: colors.pink[300],
                    400: colors.pink[400],
                    500: colors.pink[500],
                    600: colors.pink[600],
                    700: colors.pink[700],
                    800: colors.pink[800],
                    900: colors.pink[900],
                },
                secondary: {
                    50: colors.stone[50],
                    100: colors.stone[100],
                    200: colors.stone[200],
                    300: colors.stone[300],
                    400: colors.stone[400],
                    500: colors.stone[500],
                    600: colors.stone[600],
                    700: colors.stone[700],
                    800: colors.stone[800],
                    900: colors.stone[900],
                },
                accent: {
                    100: colors.yellow[100],
                    200: colors.yellow[200],
                    300: colors.yellow[300],
                    400: colors.yellow[400],
                    500: colors.yellow[500],
                    600: colors.yellow[600],
                    700: colors.yellow[700],
                    800: colors.yellow[800],
                    900: colors.yellow[900],
                },
            },
        },
    },

    plugins: [forms],
}
