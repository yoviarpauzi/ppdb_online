/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
        extend: {
            backgroundImage: {
                hero: "url('/resources/image/putra-perintis.jpg')",
            },
            fontFamily: {
                poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            inset: {
                initial: "initial",
            },
        },
    },
    plugins: [],
};
