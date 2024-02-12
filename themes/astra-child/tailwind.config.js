/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: { colors: {
      'i-primary': '#262424',
      'dark-grey': '#EBEBEB',
      'i-grey': '#505050',
      'bg-grey': '#1F2024',
      'light-grey': '#6D6D6D',
    },

    
    container: {
      screens: {
        'xl': '1320px',
        'lg': '1024px',
        'lg-mini': '1080px',
        'md': '768px',
        'sm': '640px',

      },
    },

    padding: {
      '100': '6.25rem',
      '60': '3.75rem',
    },



    fontSize: {
      '4xl': '2.5rem',
      '17': '1.063rem',
    },

   
    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
    },

    
  },
},
plugins: [],
}

