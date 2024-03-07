<template>
  <v-app-bar class="navbar" color="primary" height="66px">
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
  z-index: 2;
}
.content {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: auto 1fr auto;
}
</style>
