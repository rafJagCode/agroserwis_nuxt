<template>
  <v-list class="navbar__list" color="transparent">
    <v-btn
      v-show="mobile"
      text
      elevation="false"
      @click="$emit('hamburger-clicked')"
    >
      <v-icon>mdi-menu</v-icon>
    </v-btn>
    <v-btn v-show="!mobile" v-for="link in links" :key="link" text>
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

<style scoped></style>
