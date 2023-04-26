const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            gridTemplateColumns:{
                '14':'repeat(14,minmax(0,1fr))',
            },
            borderWidth:{
                '3': '3px',
                '12': '12px',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                brand: ['Tilt Neon','sans-serif'],
                ubuntu: ['Ubuntu','sans-serif'],
                alkatra: ['Alkatra','cursive'],
                brand2: ['Montserrat','sans-serif']
            },
            colors:{
                // brand:'#FF4066',
                // brand2:'#FFF16A',
                // brand:'#0172AF',
                // brand2:'#74FEBD'
                brand:'#6157FF',
                brand2:'#EE49FD'
            },
            screens: {
                'xs': '450px',
            },
            borderWidth :{
                '3': '3px',
                '3xl':'1920px'
            }
        },

    },

    plugins: [],
};
