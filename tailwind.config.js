/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'duck': {
                    100: '#FEF6DB',
                    400: '#FFB800',
                    600: '#FFA800',
                    700: '#AF641E',
                },
            },
                spacing: {
                    '27': '27rem',
                    '32': '32rem',
                }
        },

    },
    plugins: [],
}
