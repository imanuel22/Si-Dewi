/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],

    theme: {
      extend: {
        fontFamily: {
          poppins: ['Poppins'],
          nunitosans: ['Nunito Sans'],
        },
        colors: {
          primary : {
            200 : '#53BFCB',
            100 : '#7ecfd8'},
          secondary : '#1E4E58',
        },
      },
    },
    plugins: [],
  }
