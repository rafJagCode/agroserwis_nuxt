<template>
  <v-list class="navbar-mobile-list">
    <v-list-item v-for="link in links" :key="link">{{ link }}</v-list-item>
  </v-list>
</template>

<script>
export default {
  data() {
    return {
      links: ['Home', 'O nas', 'Kontakt'],
    }
  },
}
</script>

<style>
.navbar-mobile-list {
  position: absolute;
  right: 0;
  bottom: 0;
  transform: translateY(100%);
  width: 100%;
}
</style>
