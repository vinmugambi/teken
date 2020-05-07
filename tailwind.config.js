module.exports = {
    purge: {
        enabled: true,
        content: [
            "./resources/views/**/*.blade.php",
            "./resources/assets/js/**/*.vue",
            "./resources/assets/sass/**/*.scss"
        ]
    },
    theme: {
        extend: {
            spacing: {
                "72": "18rem",
                "84": "21rem",
                "96": "24rem"
            }
        }
    },
    variants: {},
    plugins: []
};
