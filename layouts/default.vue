<template>
  <v-app>
    <MainLogoBar></MainLogoBar>
    <MainNavbar></MainNavbar>

    <!-- Sizes your content based upon application components -->
    <v-main>
      <!-- Provides the application the proper gutter -->
      <MainSlider></MainSlider>
      <v-container class="main-container my-0">
        <Nuxt />
      </v-container>
    </v-main>

    <MainFooter></MainFooter>
  </v-app>
</template>
<script>
export default {
}
</script>
<style scoped lang="scss">
.main-container{
  //background-image: url("~/assets/images/bg/carbon_bg4.jpg");
  //background-size: auto, auto;

}
</style>
