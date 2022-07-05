/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ './*.html',],
  theme: {
    extend: {
      fontFamily: {
        'signature': ['Georgia', 'serif','Helvetica', 'Arial', 'sans-serif'],
      },
      colors: {
        signature:  {
          virginie: '#F5CC73',
          mathieu: '#64966F',
          heidi: '#AAB7D8',
        },
      },},
  },
  plugins: [],
}
