/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            // screens: {
            //     x: "0px",
            //     s: "350px",
            //     sm: "640px",
            //     md: "768px",
            //     lg: "1024px",
            //     xl: "1280px",
            //     x2l: "1335px",
            //     "2xl": "1536px",
            // },
            fontFamily: {
                poppins: ["Poppins"],
                nunitosans: ["Nunito Sans"],
            },
            colors: {
                // primary: {
                //     // 100: '#CCF1F3',
                //     // 200: '#99E3E6',
                //     // 300: '#66D5DA',
                //     // 400: '#33C7CD',
                //     // 500: '#00C2CC', // Original primary color
                //     // 600: '#009EA8',
                //     // 700: '#007A85',
                //     // 800: '#005662',
                //     // 900: '#00323E',

                //     100: '#66D5DA',
                //     200: '#00C2CC', // Original primary color

                // },
                // secondary: {
                //     100: '#D1E3E6',
                //     200: '#A3C7CD',
                //     300: '#75ACB4',
                //     400: '#47909B',
                //     500: '#1E4E58', // Original secondary color
                //     600: '#164049',
                //     700: '#0E323A',
                //     800: '#07222B',
                //     900: '#02131C',
                // },
                primary: {
                    100: '#66D5DA', // Light shade
                    200: '#00C2CC', // Original primary color
                    // Add more shades as needed or leave out others
                },
                secondary: '#1E4E58', // Single secondary color
            },
        },
        plugins: [
             require('preline/plugin'),
            ],
    },
};
