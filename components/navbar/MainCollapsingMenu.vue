<template>
  <v-list class="main-collapsing-menu" color="transparent">
    <a
      color="accent"
      text
      href="tel:86 270 30 99"
      class="main-collapsing-menu__contact-info text-caption"
    >
      86 270 30 99
      <v-icon size="14" class="pl-1" style="color: inherit"
        >mdi-cellphone-basic</v-icon
      >
    </a>
    <a
      text
      href="mailTo:biuro@agro-serwis.pl"
      class="main-collapsing-menu__contact-info text-caption mr-auto"
      >biuro@agro-serwis.pl<v-icon size="14" class="pl-1" style="color: inherit"
        >mdi-email</v-icon
      ></a
    >
    <v-btn
      v-show="$nuxt.$route.name != 'contact' && !mobile"
      class="main-collapsing-menu__link accent--text"
      nuxt
      text
      href="/contact"
      >Kontakt</v-btn
    >
    <v-btn
      class="accent--text"
      v-show="mobile"
      text
      elevation="false"
      @click="$emit('hamburger-clicked')"
    >
      <v-icon>mdi-menu</v-icon>
    </v-btn>
    <v-btn
      class="main-collapsing-menu__link accent--text"
      v-show="$nuxt.$route.name !== 'index' && !mobile"
      text
      nuxt
      href="/"
    >
      Home
    </v-btn>
    <v-btn
      class="main-collapsing-menu__link accent--text"
      v-show="
        ($nuxt.$route.name === 'index' && !mobile) ||
        (link.name === 'Dane Kontaktowe' && !mobile)
      "
      v-for="link in links"
      :key="link.name"
      text
      @click="$vuetify.goTo(link.link)"
    >
      {{ link.name }}
    </v-btn>
  </v-list>
</template>

<script>
export default {
  props: {
    links: null,
  },
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
}
</script>

<style scoped lang="scss">
.main-collapsing-menu__link:hover {
  background-color: var(--v-accent-base);
  color: var(--v-primary-base) !important;
}
.main-collapsing-menu__contact-info {
  color: var(--v-secondary-base);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  font-size: 10px !important;
  &:hover {
    color: var(--v-accent-base);
  }
}
</style>
