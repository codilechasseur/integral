// https://tailwindcss.com/docs/configuration
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'dark-gray': '#424041',
      'medium-gray': '#928D8E',
      'light-gray': '#DEDDDD',
      'dust': '#B8B2B2',
      'warm-gray': '#CAC6C6',
      'charcoal': '#191919',
      'off-white': '#FFFFFF',
      'white': '#FFFFFF',
      'red': '#FF0000',
    },
    fontSize: {
      '5xs': '0.5rem', // 8px
      '4xs': '0.625rem', // 10px
      '3xs': '0.75rem', // 12px
      '2xs': '0.875rem', // 14px
      'xs': '0.9375rem', // 15px
      'sm': '1rem', // 16px
      'base': '1.0625rem', // 17px
      'lg': '1.125rem', // 18px
      'xl': '1.25rem', // 20px
      '2xl': '1.375rem', // 22px
      '3xl': '1.5rem', // 24px
      '4xl': '1.75rem', // 28px
      '5xl': '1.875rem', // 30px
      '6xl': '2rem', // 32px
      '7xl': '2.25rem', // 36px
      '8xl': '2.375rem', // 38px
      '9xl': '2.75rem', // 44px
      '10xl': '3rem', // 48px
      '11xl': '3.625rem', // 58px
      '12xl': '4rem', // 70px
    },
    fontFamily: {
      sans: ['SequelSans', ...defaultTheme.fontFamily.sans],
      serif: ['SuisseWorks', ...defaultTheme.fontFamily.serif],
    },
    lineHeight: {
      '4': '100%',
      '5': '105%',
      '6': '116%',
      '7': '118%',
      '8': '127%',
      '9': '131%',
      '10': '133%',
      '11': '135%',
      '12': '150%',
    },
    letterSpacing: {
      'tight': '-0.02rem',
      'wide': '0.02rem',
      'wider': '0.03rem',
    },
    deliciousHamburgers: {
      size: '40px', // must be in px.
      color: '#FFFFFF',
      colorLight: '#fff8f4',
      padding: '0px', // must be in px.
      animationSpeed: 1,
    },
    extend: {
    },
  },
  plugins: [require('tailwindcss-delicious-hamburgers')],
};
