/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {

        pop: "#DB1215",
        accent: "#52b788",
        "accent-hover": "#6cd3a3"
        
      },

      screens: {
        'mobile-s': "320px",
        'mobile-m': "375px",
        'mobile-l': "425px",
        'mobile-xl': "700px",
        'tablet': "768px",
        'laptop': "1024px",
        'laptop-l': "1440px",
        '4k': '2560px'

      }
    },
  },
  plugins: [],
}

