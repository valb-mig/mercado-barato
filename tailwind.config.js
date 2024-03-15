/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        light: {
          '0': '#FFFFFF',
          '1': '#EFEFEF',
          '2': '#DBDBDB',
          '3': '#C2C2C2',
        },
        dark: {
          '0': '#2E2E36',
          '1': '#24242A',
          '2': '#1D1D21',
          '3': '#141417',
        },
        red: {
          '0': '#F3505A',
          '1': '#DF485C'
        },
        blue: {
          '0': '#5075D2',
          '1': '#506ACB'
        },
        green: {
          '0': '#6CC066',
          '1': '#61B668'
        }
      }
    },
  },
  plugins: [],
}

