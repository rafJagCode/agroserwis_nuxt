<template>
  <v-list class="main-collapsing-menu" color="transparent">
    <div
      v-if="!mobile"
      class="main-collapsing-menu__item"
      v-for="(link, index) in links"
      :key="index"
    >



      <a
        v-if="link.type==='contact'"
        color="accent"
        text
        :href="link.link"
        class="main-collapsing-menu__contact-info text-caption"
      >
        {{link.name}}
        <v-icon size="14" class="pl-1" style="color: inherit"
        >{{link.icon}}</v-icon
        >
      </a>


      <v-btn
        v-if="link.type==='anchor'"
        class="main-collapsing-menu__link accent--text"
        v-show="display(link.display)"
        text
        @click="$vuetify.goTo(link.link)"
      >
        {{ link.name }}
      </v-btn>


      <v-btn
        v-if="link.type==='nuxt'"
        v-show="display(link.display)"
        class="main-collapsing-menu__link accent--text"
        nuxt
        text
        :href="link.link"
      >{{link.name}}</v-btn
      >



    </div>

    <v-btn
      class="accent--text"
      v-show="mobile"
      text
      elevation="false"
      @click="$emit('hamburger-clicked')"
    >
      <v-icon>mdi-menu</v-icon>
    </v-btn>

  </v-list>
</template>

<script>
export default {
  props: {
    links: null,
  },
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
  methods:{
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
.main-collapsing-menu__link:hover {
  background-color: var(--v-accent-base);
  color: var(--v-primary-base) !important;
}
.main-collapsing-menu__item{
  display: inline-flex;
}
.main-collapsing-menu__contact-info {
  color: var(--v-secondary-base);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  font-size: 10px !important;
  margin: 0 10px 0 10px;
  &:hover {
    color: var(--v-accent-base);
  }
}
</style>
