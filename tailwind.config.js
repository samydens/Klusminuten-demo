const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                title: ['Ubuntu', ...defaultTheme.fontFamily.sans],
                par: ['Roboto', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                kmorange: '#ff6600',
                kmtitel: '#404040',
                kmbackground: '#f2f1f1',
                kmparagraph: '#99A2AB',
                kminputbg: '#E4E4E4',
                kminputborder: '#707070',
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
