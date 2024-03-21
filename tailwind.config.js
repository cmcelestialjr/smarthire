const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'blue': '#070372',
        'gold': '#eab117',
        'darkWhite': '#f5f5f5'
        
      },
    fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
    },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

