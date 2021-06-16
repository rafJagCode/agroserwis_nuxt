<template>
  <v-list class="main-collapsing-menu" color="transparent">
    <v-btn
      class="accent--text"
      v-show="mobile"
      text
      elevation="false"
      @click="$emit('hamburger-clicked')"
    >
      <v-icon>mdi-menu</v-icon>
    </v-btn>
    <v-btn class="main-collapsing-menu__link accent--text" v-show="!mobile" v-for="link in links" :key="link" text @click="$vuetify.goTo('.departments')">
      {{ link }}
    </v-btn>
  </v-list>
</template>

<script>
export default {
  data() {
    return {
      links: ['Home', 'O nas', 'Kontakt'],
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
