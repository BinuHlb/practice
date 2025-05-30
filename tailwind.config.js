const colors = require("tailwindcss/colors");
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.{html,js,php}",
    './node_modules/preline/dist/*.js',
  ],
  darkMode: ["class"],
  important: true,
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "1rem",
        md: "1rem",
        lg: "1rem",
        xl: "3rem",
        '2xl': '8rem',
      },
    },

    fontFamily: {
      manrope: ['Manrope', 'sans-serif'],
    },

    extend: {
      colors: {
        primary: "#5c49f7",
        primaryDark: "#2a5ceb",
        secondary: "#191A15",
        dark: "#212121",
        light: "#747474",
        black: "#000000",
        muted: "#707070",
      },
      fontFamily: {
        nordique: ['"nordiquepro"', 'sans-serif'], // name must match @font-face
      },
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        }
      },

      spacing: {
        0.75: "0.1875rem",
        3.25: "0.8125rem",
      },

      zIndex: {
        1: "1",
        2: "2",
        3: "3",
        999: "999",
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('preline/plugin')
  ],
}

