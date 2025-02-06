import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {

            colors: {
                'custom-green': '#00EF18',
                'custom-green2': '#00EF19',
            },

            boxShadow: {
        'custom-shadow': '0px 26px 41px -7px #00EA414D',
      },
            
             backgroundImage: {
        'hero-pattern': "url('/img/logo.png')",
        'footer-texture': "url('/img/footer-texture.png')",
      },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', 'sans-serif'],
                 bebas: ['Bebas Neue', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
