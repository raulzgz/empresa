const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
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
            height:{
                    "10v":"10vh",
                    "15v":"15vh",
                    "65v":"65vh"
            },
            colors: {
                    "header":"#FF720B",
                    "nav":"#EDEDEE",
                    "main":"#FFFFFF",
                    "footer":"#A9A9A9"
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
