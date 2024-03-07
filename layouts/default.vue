<template>
  <v-app class="default-layout">
    <AppNavbar></AppNavbar>
    <v-main>
      <Nuxt />
    </v-main>
  </v-app>
</template>
<script>
import AppNavbar from '~/components/navbar/AppNavbar'
export default {
  components: {
    AppNavbar,
  },
}
</script>
<style scoped lang="scss">
.default-layout {
  background-color: var(--v-primary-base);
}
</style>
