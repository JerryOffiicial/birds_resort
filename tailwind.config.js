import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                gold: '#9F7D44',
                nature: '#EDEBE5',
                'primary-text': '#1A1A1A',
                'secondary-text': '#6B6B6B',
                border: '#E5E5E5',
            },
            fontFamily: {
                cinzel: ['Cinzel', ...defaultTheme.fontFamily.serif],
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                resort: '1300px',
            },
            spacing: {
                section: '100px',
                'section-mobile': '60px',
            },
        },
    },
    plugins: [],
}