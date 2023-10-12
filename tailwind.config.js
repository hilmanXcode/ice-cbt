/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      animation:{
        'slidekan': 'slideInBottom 0.4s ease-out',
        'slidekanrev': 'slideInBottomRev 0.4s ease-out',
      },
      keyframes:{
        slideInBottom: {
          '0%': { transform: 'translateY(100%)' },
          '100%': { transform: 'translateY(0)' }
        },
        slideInBottomRev: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(100%)' }
        },
      },
      fontFamily: {
        'poppins': ["Poppins"],
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("tailwindcss-animate")
  ]
}

