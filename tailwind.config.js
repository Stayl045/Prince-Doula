/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php","./src/**/*.js",'./template-parts/**/*.twig',"./views/**/*.twig",],
  
  theme: {
      
    container: {
      center: true,
      padding: '2rem'
    },
    extend: {
      colors: {
        'calmBlue': '#A7C7E7',   // Soft, light blue
        'gentleGreen': '#B8D8BA', // Gentle, pastel green
        'warmPeach': '#FCE4D6',   // Warm peach tone
        'softGray': '#E8E9EB',    // Soft, neutral gray
        'deepTeal': '#4C7977',    // Deep, calming teal
        'softPink': '#eee1ea',    // soft pink
        'darkPink': '#c08b9d',    // dark pink
      },
        fontFamily: {
        poppins: ['Poppins', 'sans-serif'], // Add Poppins font here
      },
      
    },
  },
  plugins: [],
}

