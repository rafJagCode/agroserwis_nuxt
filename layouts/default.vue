<template>
  <v-app>
    <MainNavbar></MainNavbar>

    <!-- Sizes your content based upon application components -->
    <v-main>
      <!-- Provides the application the proper gutter -->
      <MainSlider></MainSlider>
      <v-container fluid class="main-container my-0">
        <Nuxt />
      </v-container>
    </v-main>

    <MainFooter></MainFooter>
  </v-app>
</template>
<script></script>
<style scoped lang="scss">
.main-container{
  background: #8e9eab;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #eef2f3, var(--v-primary-base));  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #eef2f3, var(--v-primary-base)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
