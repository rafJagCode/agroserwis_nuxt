<template>
  <v-app>
    <MainLogoBar></MainLogoBar>
    <MainNavbar></MainNavbar>

    <!-- Sizes your content based upon application components -->
    <v-main>
      <!-- Provides the application the proper gutter -->
        <Nuxt />
    </v-main>

  </v-app>
</template>
<script>

import MainLogoBar from "~/components/navbar/MainLogoBar";
import MainNavbar from "~/components/navbar/MainNavbar";
export default {
  components: {
    MainNavbar, MainLogoBar
  },
}
</script>
<style scoped lang="scss">
</style>
