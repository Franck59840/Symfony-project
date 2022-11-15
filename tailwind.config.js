/** @type {import('tailwindcss').Config} */
module.exports = {

  content: [ 
    "./assets/**/*.js",
    "./templates/**/*.html.twig",],
  theme: {
    extend: {
      colors: {
        "primary-color": "var(--primary-color)",
        "secondary-color": "var(--secondary-color)",
      }
    },
  },
  plugins: [],
}
