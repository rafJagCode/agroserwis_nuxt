<template>
  <v-list class="navbar-mobile-list py-0">
    <NavbarMobileListItem v-for="(link, index) in links" :key="index" :link="link" @hide-mobile-navbar="$emit('hide-mobile-navbar')"></NavbarMobileListItem>
  </v-list>
</template>

<script>
import NavbarMobileListItem from "./NavbarMobileListItem";
export default {
  components: {NavbarMobileListItem},
  props: {
    links: null,
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
  z-index: 3;
}

</style>
