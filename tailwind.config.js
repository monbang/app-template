const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    // prefix: 'nx_',
    theme: {
        customForms: theme => ({
            default: {
                'input, textarea': {
                    backgroundColor: theme('colors.gray.100'),
                    paddingTop: theme('spacing.1'),
                    paddingBottom: theme('spacing.1'),
                    '&:focus': {
                        backgroundColor: theme('colors.white')
                    }
                }
            }
        })
    },
    variants: {},
    plugins: [
        require('@tailwindcss/custom-forms'),
        // require('@tailwindcss/ui')({
        //     layout: 'sidebar',
        // }),
    ],
    corePlugins: {
        float: false
    }
}
