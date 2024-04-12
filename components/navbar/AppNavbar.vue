<template>
  <v-app-bar class="navbar" color="primary" fixed>
    <div class="content">
      <Logo></Logo>
      <Menu @toggle-sidebar="toggleSidebar()"></Menu>
      <Sidebar
        @toggle-sidebar="toggleSidebar()"
        :showSidebar="showSidebar"
      ></Sidebar>
    </div>
  </v-app-bar>
</template>

<script>
import Logo from './Logo'
import Menu from './Menu'
import Sidebar from './Sidebar'
export default {
  components: {
    Logo,
    Menu,
    Sidebar,
  },
  data: () => ({
    showSidebar: false,
  }),
  methods: {
    toggleSidebar() {
      this.showSidebar = !this.showSidebar
    },
  },
}
</script>
<style scoped lang="scss">
.navbar {
  z-index: 3;
  position: sticky !important;
  height: var(--navbar-height) !important;
  flex-grow: 0;
}
.content {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: auto 1fr auto;
}
</style>
