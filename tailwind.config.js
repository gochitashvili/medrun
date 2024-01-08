/** @type {import('tailwindcss').Config} */
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
        },
      },
      fontFamily: {
        sans: ["Montserrat", "sans-serif"]
      },
      spacing: {
        '4.5': '18px',
      },
      lineHeight: {
        '4.5': '18px',
      }
    },
  },
  plugins: [require('@tailwindcss/forms'),],
}

