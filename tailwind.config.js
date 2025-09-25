/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './**/*.html',
    './js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#077cf8',        // Rich, deep blue
        'primary-dark': '#072a50', // Darker blue for headings
        'primary-light': '#5a8bd5',// Light blue for backgrounds
        accent: '#ff7f42',         // Vibrant orange
        'accent-dark': '#e66a33',  // Darker accent
      },
      fontFamily: {
        sans: ['Montserrat', 'ui-sans-serif', 'system-ui'],
        serif: ['Merriweather', 'ui-serif', 'Georgia'],
      },
      boxShadow: {
        xl: '0 10px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.05)',
      },
      transitionProperty: {
        'height': 'height',
        'spacing': 'margin, padding',
      },
      animation: {
        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
      },
      keyframes: {
        fadeInUp: {
          '0%': { opacity: 0, transform: 'translateY(20px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
  darkMode: 'media', // optional: auto dark mode
};
