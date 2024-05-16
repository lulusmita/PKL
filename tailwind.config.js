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
        'merah': '#ec2d23',
        'putih': '#ffffff',
        'abu-abu': '#6e6f71',
        'hitam': '#010101',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
    }),
  ]
}

