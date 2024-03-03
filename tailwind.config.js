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
          '1': '#F5F5F5',
          '2': '#DDDDDD',
          '3': '#C2C2C2',
        },
        dark: {
          '0': '#1c1c1f',
          '1': '#161618',
          '2': '#121214',
          '3': '#0e0e0f',
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
      },
      justifyContent: {
        'between': 'justify-content-between',
      },
    },
  },
  plugins: [],
}

