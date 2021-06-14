<template>
  <v-app-bar app>
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
    <NavbarMobileList v-show="showMobileList"></NavbarMobileList>
  </v-app-bar>
</template>

<script>
export default {
  data: () => ({
    showMobileList: false,
  }),
}
</script>
