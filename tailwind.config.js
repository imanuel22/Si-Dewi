/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                x: "0px",
                s: "350px",
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
                x2l: "1335px",
                "2xl": "1536px",
            },
            fontFamily: {
                poppins: ["Poppins"],
                nunitosans: ["Nunito Sans"],
            },
            colors: {
                primary: "#1E4E58",
                secondary: "#00C2CC",
            },
        },
        plugins: [],
    },
};
