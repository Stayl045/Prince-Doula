/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php","./src/**/*.js",'./template-parts/**/*.twig',"./views/**/*.twig"],
  
  theme: {
    container: {
      center: true,
      padding: '2rem'
    },
    extend: {
      
    },
  },
  plugins: [],
}

