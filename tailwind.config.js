/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js,php}"],
  theme: {
    colors: {
      'main': '#FFFCED',
      'button': '#FFE382',
      'secondary': '#BCBCBC',
    },
    backgroundImage: {
      'waves': "url(/img/waves.svg)",
    },
    extend: {},
  },
  plugins: [],
}

