const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: "jit",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            center: true
        },
        screens: {
            'sm': '640px', // => @media (min-width: 640px) { ... }
            'md': '768px', // => @media (min-width: 768px) { ... }
            'lg': '1024px', // => @media (min-width: 1024px) { ... }
            'xl': '1280px', // => @media (min-width: 1280px) { ... }
            '2xl': '1280px', // => @media (min-width: 1536px) { ... }
        }
    },
    corePlugins: {
        container: false
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        function ({ addComponents }) {
            addComponents({
              '.container': {
                maxWidth: '100%',
                '@screen sm': {
                  maxWidth: '640px',
                },
                '@screen md': {
                  maxWidth: '768px',
                },
                '@screen lg': {
                  maxWidth: '1280px',
                },
                '@screen xl': {
                  maxWidth: '1280px',
                },
              }
            });
        },
    ],
};
