<template>
  <transition name="slide-fade">
    <v-list v-show="mobile && showSidebar" class="sidebar pa-6" color="primary">
      <v-list-item
        @click="$emit('toggle-sidebar')"
        class="sidebar-item accent-text"
        v-for="item in items"
        :key="item.text"
        :href="item.link"
        :nuxt="item.nuxt"
      >
        {{ item.text }}
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
}
.sidebar-item {
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;
  font-size: 0.9rem;
  font-weight: 500;
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
