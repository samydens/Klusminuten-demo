const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            text: {
                orange: '#FF6600',
                darkgray: '#404040',
                lightgray: '#f2f1f1',
                bluegray: '#99A2AB',
            },

            input: {
                background: '#E4E4E4',
                border: '#707070',
            },

            gradient: {
                graystart: '#E9E9E9',
                grayend: '#F1F1F1',
                orangestart: '#FF6600',
                orangeend: '##FB7F21'
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
