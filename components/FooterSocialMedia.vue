<template>
  <div class="footer-social-media">
      <v-btn
        v-for="icon in icons"
        :key="icon"
        class="mx-4 white--text"
        icon
      >
        <v-icon size="24px">
          {{ icon }}
        </v-icon>
      </v-btn>
  </div>
</template>

<script>
export default {
  data: () => ({
    icons: ['mdi-facebook', 'mdi-twitter', 'mdi-linkedin', 'mdi-instagram'],
  }),
}
</script>

<style scoped>

</style>
