const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      keyframes: {
        'fade-in-down': {
          "from": {
            transform: "translateY(-0.75rem)",
          },
          "to": {
            transform: "translateY(0rem)",
            opacity: '1'
          },
        },
        'fade-in-up': {
          "from": {
            transform: "translateY(0.76rem)",
          },
          "to": {
            transform: "translateY(0rem)",
            opacity: '1'
          }
        },
        'fade-side-right': {
          "from": {
            transform: "translate(0.76px)",
            opacity: '1',
          },
          "to": {
            transform: "translate(0)"
          }
        }
      },
      animation: {
        'fade-in-down': "fade-in-down 0.2s ease-in-out both",
        'fade-in-up': "fade-in-up 0.1s ease-in-out both",
        'fade-side-right': "fade-side-right 0.2s ease-in-out both"
      },
      borderWidth: {
        6: '6px'
      },
      fontFamily: {
        roboto: ["Roboto Slab", "serif"],
        signika: ["Signika Negative", "sans-serif"],
        source: ["Source Sans Pro", "serif"],
        oleo: ['Oleo Script Swash Caps', 'cursive']
       },
      colors: {
        green: {
          DEFAULT: '#008260'
        },
        'cyan': colors.cyan,
        'emerald': colors.emerald
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
