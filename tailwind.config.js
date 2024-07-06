/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [
      './src/**/*.html',
      './src/**/*.twig',
      './src/**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  content: [],
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

