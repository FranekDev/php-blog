/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js,php}", "./views/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'main': '#FFFCED',
        'button': '#FFE382',
        'secondary': '#BCBCBC',
      },
      backgroundImage: {
        'waves': "url(/img/waves.svg)",
        'circleBR': "url(/img/circleBR.svg)",
        'circleTL': "url(/img/circleTL.svg)"
      },
      boxShadow: {
        'buttonShadow': '-5px 5px 0px 0px #000000',
      },
      fontFamily: {
        'oi': ['Oi'],
      },
    },
  },
  plugins: [],
}

