/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/views/index.blade.php', './resources/views/notFound.blade.php', './resources/js/src/**/*.{vue, js, ts, jsx, tsx}'],
  theme: {
    extend: {
      colors: {
        baseShade: {
            light: '#9CA1B1',
            dark: '#05060B',
        },
        primaryShade: {
          light: '#BFC4D4',
          dark: '#0F1423'
        },
        secondaryShade: {
          light: '#E6EAF5',
          dark: '#1B2439'
        },
        standardText: {
          light: '#1A1F2C',
          dark: '#93969E'
        },
        signYellow: {
          default: '#F2EA22'
        }

      }
    },
  },
  plugins: [],
}

