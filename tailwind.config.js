/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                surface: "#f0f5f9",
            },
        },
    },
    darkMode: "class",
    plugins: [require("@tailwindcss/forms"), require("preline/plugin")],
};
