const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php'
    ],

    theme: {
        colors: {
            brand: '#592674',
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.blueGray,
            indigo: colors.indigo,
            red: colors.red,
            green: colors.green,
            blue: colors.blue,
            purple: colors.purple,
            yellow: colors.yellow,
            teal: colors.teal
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Inter', ...defaultTheme.fontFamily.sans],
            }
        },
    },

    variants: {},

    plugins: [],
};