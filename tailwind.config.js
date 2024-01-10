/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        medrun: {
          "stone": "#151D27",
          "stone-light": "#243040",
          "yellow": "#F2B366",
          "yellow-light": "#F2E1C3",
          "yellow-dark": "#F69721",
          "light": "#f2f2f2",
          "blue": "#08235A",
          "blue-light": "#2D4374",
          "sky": "#0D9FDA",
          "sky-light": "#89D4F3",
          "masala": '#444444'
        },
      },
      fontFamily: {
        sans: ["Montserrat", "sans-serif"]
      },
      backgroundImage: {
        hero: "radial-gradient(231% 135.8% at 0.9% 2.98%, rgba(255, 255, 255, 0.40) 0%, rgba(255, 255, 255, 0.20) 100%)"
      },
      spacing: {
        '4.5': '18px',
      },
      lineHeight: {
        '4.5': '18px',
      }
    },
    screens: {
      'xs': '430px',
      ...defaultTheme.screens,
    },
  },
  plugins: [require('@tailwindcss/forms'), require('tailwind-scrollbar'),],
}

