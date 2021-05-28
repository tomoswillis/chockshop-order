const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                chockshop: ['chockshop', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                chock: {
                    DEFAULT: '#f4ebd3',
                    dark: '#b2977b',
                    text: '#524621',
                },
                slate: {
                    light: '#afafaf',
                    DEFAULT: '#151515' 
                },
            },
            width: {
                '104': '27rem',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
