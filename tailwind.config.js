const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    purge: {
        content: [
            './resources/**/*.blade.php',
            './resources/**/*.js',
            './config/*.php',
        ]
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio')
    ],
};
