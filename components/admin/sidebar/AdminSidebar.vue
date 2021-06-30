<template>
<div class="admin-sidebar">
  <AdminSidebarItem v-for="item in items" :key="item.name" :item="item"></AdminSidebarItem>
</div>
</template>

<script>
import AdminSidebarItem from "~/components/admin/sidebar/AdminSidebarItem";
export default {
  components: {AdminSidebarItem},
  data: () => ({
    items: [
      {
        name: 'Oddziały',
        link: 'departments',
        icon: 'mdi-office-building-marker'
      },
      {
        name: 'Partnerzy',
        link: 'partners',
        icon: 'mdi-handshake'
      },
      {
        name: 'Slider',
        link: 'slider',
        icon: 'mdi-view-carousel'
      }
    ]
  })
}
</script>

<style scoped>
.admin-sidebar{
  background-color: var(--v-secondary-base);
  min-height: 100vh;
  max-width: 300px;
  width: 100%;
  height: 100%;
}
</style>
