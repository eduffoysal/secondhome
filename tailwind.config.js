/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{php,js,html}","./layouts/**/*.html", "./content/**/*.md", "./content/**/*.html", "./src/**/*.js", "./node_modules/flowbite/**/*.js", "./node_modules/tw-elements/dist/js/**/*.js"],
  // theme: {
  //   extend: {},
  // },

  theme: {
    extend: {
      backgroundImage: {
        'sea1': 'url("https://upload.wikimedia.org/wikipedia/commons/5/54/Entrance_of_EDU.jpg")',
        'sea2': 'url("https://images.unsplash.com/photo-1524704654690-b56c05c78a00?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80")',
        'sea3': 'url("https://scontent.fcgp32-1.fna.fbcdn.net/v/t39.30808-6/244027258_2696159537354611_975012151901318945_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=783fdb&_nc_eui2=AeHbXveebjuByFRqQsYV4hqJ8X_Izgq55UXxf8jOCrnlRbmV86MosN4-Slhc6Xk2R1ZWPdUkUw82DC_25wdhJltv&_nc_ohc=q39IfDVcWt0AX_mOwSr&_nc_ht=scontent.fcgp32-1.fna&oh=00_AfBuVGDO3peTP_4zw9lRDGOg9wGAJ-gPK7y3PkSiE0pbDQ&oe=65871349")'
      }
    },
  },

  // plugins: [],

  safelist: [
    'w-64',
    'w-1/2',
    'rounded-l-lg',
    'rounded-r-lg',
    'bg-gray-200',
    'grid-cols-4',
    'grid-cols-7',
    'h-6',
    'leading-6',
    'h-9',
    'leading-9',
    'shadow-lg'
  ],

  // presets: [
  //   require('@acmecorp/base-tailwind-config')
  // ],

  // enable dark mode via class strategy
  darkMode: 'class',

  plugins: [
    // include Flowbite as a plugin in your Tailwind CSS project
    require('flowbite/plugin'),
    require('tw-elements/dist/plugin')
  ]


}

