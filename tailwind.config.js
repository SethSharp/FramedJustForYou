import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import colors from 'tailwindcss/colors.js'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
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
                },
                secondary: {
                    100: colors.slate[100],
                    200: colors.slate[200],
                    300: colors.slate[300],
                    400: colors.slate[400],
                    500: colors.slate[500],
                    600: colors.slate[600],
                    700: colors.slate[700],
                    800: colors.slate[800],
                    900: colors.slate[900],
                },
                secondary_2: {
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
                accent_1: {
                    100: colors.cyan[100],
                    200: colors.cyan[200],
                    300: colors.cyan[300],
                    400: colors.cyan[400],
                    500: colors.cyan[500],
                    600: colors.cyan[600],
                    700: colors.cyan[700],
                    800: colors.cyan[800],
                    900: colors.cyan[900],
                },
            },
        },
    },

    plugins: [forms],
}
