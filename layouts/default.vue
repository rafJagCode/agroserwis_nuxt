<template>
  <v-app class="default-layout">
    <AppNavbar></AppNavbar>
    <v-main>
      <Nuxt />
    </v-main>
    <AppFooter />
  </v-app>
</template>
<script>
import AppNavbar from '~/components/navbar/AppNavbar'
import AppFooter from '~/components/footer/AppFooter'
export default {
  components: {
    AppNavbar,
    AppFooter,
  },
}
</script>
<style scoped lang="scss">
.default-layout {
  background-color: var(--v-bg-base);
}
</style>
