<template>

  <v-list-item
    v-if="link.type==='contact'"
    v-show="display(link.display)"
    class="navbar-mobile-list__item"
    :href="link.link"
  >
    {{link.name}}
    <v-icon size="14" class="pl-1" style="color: inherit">{{link.icon}}</v-icon>
  </v-list-item>

  <v-list-item
    v-else-if="link.type==='nuxt'"
    v-show="display(link.display)"
    class="navbar-mobile-list__item"
    nuxt
    :href="link.link"
  >
    {{link.name}}
  </v-list-item>

  <v-list-item
    v-else-if="link.type==='anchor'"
    v-show="display(link.display)"
    class="navbar-mobile-list__item"
    @click="handleClick(link.link)"
  >
    {{link.name}}
  </v-list-item>


</template>

<script>
export default {
  props: {
    link: null
  },
  methods: {
    handleClick(link) {
      this.$emit('hide-mobile-navbar')
      this.$vuetify.goTo(link)
    },
    display(config){
      const route = this.$nuxt.$route.name;
      if(config.hide.includes(route)) return false;
      if(config.show.length && !config.show.includes(route)) return false;
      return true;
    }
  }
}
</script>

<style scoped lang="scss">
.navbar-mobile-list__item {
  cursor: pointer;
  background-color: var(--v-primary-base);
  z-index: 4;
}
.navbar-mobile-list__item:hover {
  background-color: var(--v-accent-base);
  &.theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled) {
   color: var(--v-primary-base) !important;
 }
}
</style>
