const colors = require('tailwindcss/colors')


module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
    "./vendor/laravel-views/**/*.php",
    "./vendor/livewire/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        gray: colors.blueGray,
        primary: colors.purple
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
  ]
}
