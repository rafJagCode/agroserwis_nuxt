<template>
  <v-app>
    <div class="admin-layout">
      <v-hover v-slot="{ hover }">
        <AdminSidebar :hover="hover" @sidebar-hovered="sidebarHovered"></AdminSidebar>
      </v-hover>
      <Nuxt class="main-content" :class="hover ? 'sidebar--opened' : ''"></Nuxt>
    </div>
  </v-app>
</template>

<script>
import AdminSidebar from "~/components/admin/sidebar/AdminSidebar";
export default {
  components: {AdminSidebar},
  data: () => ({
    hover: false,
  }),
  methods:{
    sidebarHovered(hover){
      this.hover = hover;
    }
},
}
</script>

<style scoped>
.admin-layout{
  display: grid;
  grid-template-columns: auto;
}
.main-content{
  padding-left: 100px;
}
.sidebar--opened{
  padding-left:300px;
}
</style>
