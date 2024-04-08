<template>
  <transition name="slide-fade">
    <v-list v-show="mobile && showSidebar" class="sidebar pa-6" color="primary">
      <v-list-item
        @click="$emit('toggle-sidebar')"
        class="sidebar-item accent-text text-h4"
        v-for="item in items"
        :key="item.text"
        :href="item.link"
        :nuxt="item.nuxt"
      >
        <span class="app-text-button">{{ item.text }}</span>
      </v-list-item>
    </v-list>
  </transition>
</template>
<script>
import data from '/static/navbar/data.json'
export default {
  data: () => ({
    items: data,
  }),
  props: {
    showSidebar: false,
  },
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
}
</script>

<style scoped lang="scss">
.sidebar {
  position: absolute;
  right: 0;
  top: calc(var(--navbar-height) + 1px);
  width: 100%;
  border-top: 1px solid var(--v-accent-base);
  box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2),
    0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12) !important;
}
.sidebar-item {
  text-transform: uppercase;
  justify-content: end;
}
.sidebar-item:hover {
  background-color: rgba(133, 174, 67, 0.08);
}
.theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled) {
  color: var(--v-accent-base) !important;
}
.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: all 300ms ease;
}
.slide-fade-enter,
.slide-fade-leave-to {
  opacity: 0;
}
</style>
