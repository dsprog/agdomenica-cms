module.exports = {
  mode: 'jit',
  purge: [
    './_dev/style.css',
    './*.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        container: {
            center: true
        },
        colors: {
            marrom1: '#473B39',
            marrom2: '#60514F',
            verde1: '#93A497',
            verde2: '#95A48A',
            verde3: '#93A496',
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
