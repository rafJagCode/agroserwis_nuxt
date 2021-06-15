<template>
  <v-app-bar app color="primary">
    <v-img
      :src="require('~/assets/images/logo.png')"
      contain
      max-width="150"
      max-height="20"
    >
    </v-img>

    <v-spacer></v-spacer>

    <MainCollapsingMenu
      @hamburger-clicked="showMobileList = !showMobileList"
    ></MainCollapsingMenu>
    <transition name="slide-fade">
      <NavbarMobileList v-show="showMobileList && mobile"></NavbarMobileList>
    </transition>
  </v-app-bar>
</template>

<script>
export default {
  data: () => ({
    showMobileList: false,
  }),
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
}
</script>
<style lang="scss">
.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 300ms ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  opacity: 0;
}
</style>
