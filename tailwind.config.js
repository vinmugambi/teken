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
        screens: {
            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px"
            // => @media (min-width: 1280px) { ... }
        },
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
