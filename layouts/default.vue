<template>
  <v-app>

      <MainNavbar></MainNavbar>

    <!-- Sizes your content based upon application components -->
    <v-main>

      <!-- Provides the application the proper gutter -->
        <MainSlider></MainSlider>
      <v-container fluid>
        <Nuxt />
      </v-container>
    </v-main>

    <MainFooter></MainFooter>

  </v-app>
</template>
<script>
</script>
