import axios from 'axios'

export default {
  target: 'static',
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    titleTemplate: 'HervestSolutions - %s',
    title: 'sprzedaż i serwis maszyn do produkcji rolnej',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
    ],
    link: [{ rel: 'icon', type: 'image/svg+xml', href: '/favicon.svg' }],
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: ['~/assets/css/global.css'],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/typescript
    '@nuxt/typescript-build',
    // https://go.nuxtjs.dev/vuetify
    '@nuxtjs/vuetify',
    // '@nuxtjs/google-fonts',
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    [
      '@nuxtjs/axios',
      process.env.NODE_ENV !== 'production'
        ? { baseURL: 'http://localhost:3000' }
        : { baseURL: 'http://hervestsolutions.rafaljagielski.pl' },
    ],

    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
    '@nuxt/content',
    '@nuxtjs/proxy',
  ],

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'pl',
    },
  },

  // Vuetify module configuration: https://go.nuxtjs.dev/config-vuetify
  vuetify: {
    treeShake: false,
    customVariables: ['~/assets/variables.scss'],
    theme: {
      options: {
        customProperties: true,
      },
      themes: {
        light: {
          primary: '#fbfdf9',
          secondary: '#2a2b2a',
          bg: '#d7d4dc',
          emph: '#FFE9D6',
          accent: '#85AE43',
          error: '#ff0033',
          grey: '#919191',
        },
      },
    },
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
}
