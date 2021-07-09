<template>
  <v-app-bar class="main-navbar" color="primary" height="max-content">
    <v-container fluid class="main-navbar__container">
<!--      <v-layout row class="pt-3">-->
<!--        <MainLogoBar></MainLogoBar>-->
<!--      </v-layout>-->
      <v-layout row class="main-navbar__navigation">
        <v-img
          :src="require('~/assets/images/final_logo.png')"
          contain
          max-width="150"
          max-height="50"
          class="my-2"
        >
        </v-img>

        <v-spacer></v-spacer>

        <MainCollapsingMenu
          @hamburger-clicked="showMobileList = !showMobileList" :links="links"
        ></MainCollapsingMenu>
        <transition name="slide-fade">
          <NavbarMobileList v-show="showMobileList && mobile" :links="links" @hidemobilenavbar="hideMobileNavbar()"></NavbarMobileList>
        </transition>
      </v-layout>
    </v-container>
  </v-app-bar>
</template>

<script>
import MainCollapsingMenu from "~/components/navbar/MainCollapsingMenu";
import MainLogoBar from "~/components/navbar/MainLogoBar";
export default {
  components: {
    MainLogoBar,
    MainCollapsingMenu
  },
  data: () => ({
    showMobileList: false,
    links: [
      {
        name: 'Oddziały',
        link: '.departments'
      },
      {
        name: 'O nas',
        link: '.main-about-us'
      },
      {
        name: 'Dane Kontaktowe',
        link: '.main-footer__sections'
      }
    ],
  }),
  methods:{
    hideMobileNavbar(){
      this.showMobileList = false;
    }
  },
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
}
</script>
<style lang="scss">
.main-navbar{
  z-index: 2;
}
.main-navbar__container{
  width:100%;
}
.main-navbar__navigation{
  align-items: center;
}
.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 300ms ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  opacity: 0;
}
.v-toolbar__content, .v-toolbar__extension {
  padding-top: 0!important;
  padding-bottom: 0!important;
}
</style>
