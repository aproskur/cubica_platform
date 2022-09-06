const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
          colors: {
            'bgr-dark': '#191c1e',
            'txtDark': '#e8ebf2',
            'themeYellow': 'rgb(251, 188, 5)',
            'theme_yellow': 'rgb(251, 188, 5)',
            'theme_yellow_07': 'rgba(251, 188, 5, 0.7)',
            'bgrdark': '#191c1e',
            'themegrey': "#808080",
          },
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
