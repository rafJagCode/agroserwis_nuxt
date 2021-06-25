<template>
  <v-list class="main-collapsing-menu" color="transparent">
    <v-btn v-show="$nuxt.$route.name != 'contact' && !mobile" class="main-collapsing-menu__link accent--text" nuxt text href="/contact">Kontakt</v-btn>
    <v-btn
      class="accent--text"
      v-show="mobile"
      text
      elevation="false"
      @click="$emit('hamburger-clicked')"
    >
      <v-icon>mdi-menu</v-icon>
    </v-btn>
    <v-btn class="main-collapsing-menu__link accent--text" v-show="$nuxt.$route.name !== 'index' && !mobile" text nuxt href="/">
      Home
    </v-btn>
    <v-btn class="main-collapsing-menu__link accent--text" v-show="$nuxt.$route.name === 'index' && !mobile" v-for="link in links" :key="link.name" text @click="$vuetify.goTo(link.link)">
      {{ link.name }}
    </v-btn>
  </v-list>
</template>

<script>
export default {
  data() {
    return {
      links: [
        {
          name: 'Oddziały',
          link: '.departments'
        },
        {
          name: 'O nas',
          link: '.main-about-us'
        },
      ],
    }
  },
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
}
</script>

<style scoped>
.main-collapsing-menu__link:hover{
  background-color: var(--v-accent-base);
  color: var(--v-primary-base)!important;
}
</style>
