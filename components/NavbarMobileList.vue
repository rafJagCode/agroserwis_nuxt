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
.theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled) {
  color: var(--v-accent-base) !important;
}
.navbar-mobile-list {
  position: absolute;
  right: 0;
  bottom: 0;
  transform: translateY(100%);
  width: 100%;
  border-top: 1px solid var(--v-accent-base);
  z-index: 2;
}
.navbar-mobile-list__item{
  cursor: pointer;
  background-color: var(--v-primary-base);
  z-index: 3;
}
.navbar-mobile-list__item:hover {
  background-color: var(--v-accent-base);
  &.theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled){
    color: var(--v-primary-base)!important;
  }
}
</style>
