module.exports = {
    purge: {
        enabled: true,
        content: [
            "./resources/views/*.blade.php",
            "./resources/views/layouts/*.blade.php",
            "./resources/views/partials/*.blade.php"
        ]
    },
    theme: {
        extend: {}
    },
    variants: {},
    plugins: []
};
