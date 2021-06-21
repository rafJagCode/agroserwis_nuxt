<template>
  <v-app>
    <div class="admin-layout">
      <AdminSidebar></AdminSidebar>
      <Nuxt></Nuxt>
    </div>
  </v-app>
</template>

<script>
import AdminSidebar from "~/components/admin/sidebar/AdminSidebar";
export default {
  components: {AdminSidebar}
}
</script>

<style scoped>
.admin-layout{
  display: grid;
  grid-template-columns: 300px auto;
}
</style>
