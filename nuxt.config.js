import axios from 'axios'

export default {
  target: 'static',
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    titleTemplate: 'AGROSERWIS - %s',
    title: 'sprzedaż i serwis maszyn do produkcji rolnej',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
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
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    [
      '@nuxtjs/axios',
      process.env.NODE_ENV !== 'production'
        ? { baseURL: 'http://localhost:3000' }
        : { baseURL: 'http://agroserwis.rafaljagielski.pl' },
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

  googleFonts: {
    families: {
      'Brygada+1918': {
        wght: [100, 400, 500],
        ital: [100],
      },
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
          primary: '#f6f9f0',
          secondary: '#3C3C3E',
          accent: '#85AE43',
          error: '#ff0033',
          info: '#E0E0E1',
          success: '#87d3b5',
          warning: '#d4af37',
        },
      },
    },
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build

  router: {
    scrollBehavior: function (to, from, savedPosition) {
      return { x: 0, y: 0 }
    },
  },
  generate: {
    routes() {
      return axios
        .get('http://agroserwis.rafaljagielski.ovh/api/get-departments-slugs')
        .then((res) => {
          const filteredRoutes = res.data.filter((department) => {
            return !['default', 'grojec', 'bialystok'].includes(department.slug)
          })
          return filteredRoutes.map((department) => {
            return '/' + department.slug
          })
        })
    },
  },
}
