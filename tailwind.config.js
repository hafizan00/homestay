const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.jpg',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'homestay': "url('https://homestay.test/images/homestay.jpg')",
                'homestayz': "url('https://homestay.test/images/homestayz.jpg')",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
