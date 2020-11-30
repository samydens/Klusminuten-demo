const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            white: '#FFFFFF',

            gray: {
                100: '#f2f1f1', // body background
                200: '#F8F8F8', // input background
                300: '#99A2AB', // paragraphs
                400: '#DDDDDD', // border 
                500: '#404040', // titles
                600: '#E9E9E9', // gradient start
                700: '#F1F1F1',  // gradient end
            },

            orange: {
                100: '#FF6600', // main, gradient start
                200: '#FB7F21', // gradient end
            },
        },

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                ubuntu: ['Ubuntu', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
