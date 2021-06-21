<template>
    <v-list class="navbar-mobile-list py-0">
      <v-list-item v-show="$nuxt.$route.name !== 'contact'" class="navbar-mobile-list__item" nuxt href="contact">Kontakt</v-list-item>
      <v-list-item v-show="$nuxt.$route.name !== 'index'" class="navbar-mobile-list__item" nuxt href="/">Home</v-list-item>
      <v-list-item v-show="$nuxt.$route.name === 'index'" @click="$vuetify.goTo(link.link)" v-for="link in links" :key="link.name" class="navbar-mobile-list__item">{{link.name}}</v-list-item>
    </v-list>
</template>

<script>
export default {
  data() {
    return {
      links: [
        {
          name: 'Oddziały',
          link: '.departments'
        },
        {
          name: 'O nas',
          link: '.main-about-us'
        },
      ],
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
  z-index: 3;
}
.navbar-mobile-list__item{
  cursor: pointer;
  background-color: var(--v-primary-base);
  z-index: 4;
}
.navbar-mobile-list__item:hover {
  background-color: var(--v-accent-base);
  &.theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled){
    color: var(--v-primary-base)!important;
  }
}
</style>
