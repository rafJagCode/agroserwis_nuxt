<template>
    <v-list class="navbar-mobile-list py-0">
        <v-list-item v-for="link in links" :key="link" class="navbar-mobile-list__item">{{link}}</v-list-item>
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

<style scoped lang="scss">
.navbar-mobile-list {
  position: absolute;
  right: 0;
  bottom: 0;
  transform: translateY(100%);
  width: 100%;
}
.navbar-mobile-list__item{
  cursor: pointer;
  background-color: var(--v-primary-base);
}
.navbar-mobile-list__item:hover {
  background-color: red;
}
</style>
