import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
              primary: '#3b82f6', // Blue
              secondary: '#f97316', // Orange
              success: '#10b981', // Green
              danger: '#ef4444', // Red
              warning: '#facc15', // Yellow
              info: '#06b6d4', // Cyan
            },
          },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
