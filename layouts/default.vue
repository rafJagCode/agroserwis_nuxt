<template>
  <v-app class="default-layout">
    <MainNavbar></MainNavbar>

    <!-- Sizes your content based upon application components -->
    <v-main>
      <!-- Provides the application the proper gutter -->
        <Nuxt />
    </v-main>

  </v-app>
</template>
<script>

import MainNavbar from "~/components/navbar/MainNavbar";
export default {
  components: {
    MainNavbar
  },
}
</script>
<style scoped lang="scss">
.default-layout{
  background-color: var(--v-primary-base);
}
</style>
