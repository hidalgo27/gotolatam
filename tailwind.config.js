// const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
module.exports = {

    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        colors: {
            blue: colors.blue,
            green: colors.green,
            red: colors.red,
            amber: colors.amber,
            gray: colors.gray,
            white: colors.white,
            yellow: colors.yellow,
            primary: '#7F8429',
            secondary: '#f9a825',
            quaternary: '#88BFB2',
        },
        fontFamily: {
            sans: ['Montserrat', 'sans-serif'],
            // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        },
        extend: {
            backgroundImage: theme => ({
                'hero-pattern': "url('https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png')",
                'footer-texture': "url('/img/footer-texture.png')",
            }),
        },
    },
    variants: {
        extend: {
            fontWeight: ['hover', 'focus'],
            scale: ['group-hover'],
            translate: ['group-hover'],
            backgroundColor: ['active'],
            borderWidth: ['hover', 'focus'],
        },
    },

    corePlugins: {
        container: false
    },


    plugins: [
        // require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography')],
}
