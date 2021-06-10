<template>
  <v-app-bar app>
    <v-container class="py-0 fill-height">

      <v-img
        :src="require('~/assets/images/logo.png')"
        contain
        max-width = "150"
        max-height = "20">
      </v-img>

    <v-spacer></v-spacer>

    <MainCollapsingMenu></MainCollapsingMenu>



    </v-container>
  </v-app-bar>
</template>

<script>
</script>
