<template>
  <v-app-bar class="main-navbar" dense color="primary">
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
import MainCollapsingMenu from "~/components/navbar/MainCollapsingMenu";
export default {
  components: {
    MainCollapsingMenu
  },
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
.main-navbar{
  z-index: 1;
}
.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 300ms ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  opacity: 0;
}
</style>
