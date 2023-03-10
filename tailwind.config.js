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
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                brand: ['Tilt Neon',...defaultTheme.fontFamily.mono],
                ubuntu: ['Ubuntu',...defaultTheme.fontFamily.sans]
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
        },
        
    },

    plugins: [],
};
