<template>
    <div class="admin-sidebar" :class="hover ? 'admin-sidebar--show' : ''">
      <div class="admin-sidebars__items">
        <AdminSidebarItem v-for="item in items" :key="item.name" :item="item" :hover="hover"></AdminSidebarItem>
      </div>
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
        name: 'O Nas',
        link: 'about-us',
        icon: 'mdi-script-text'
      },
      {
        name: 'Slider',
        link: 'slider',
        icon: 'mdi-view-carousel'
      },
      {
        name: 'Informacje w stopce',
        link: 'footer-info',
        icon: 'mdi-information'
      }
    ]
  }),
  props: {
    hover: false,
  },
  watch:{
    hover: function(hover){
      this.$emit('sidebar-hovered', hover);
    }
  }
}
</script>

<style scoped lang="scss">
.admin-sidebar{
  background-color: var(--v-secondary-base);
  position: fixed;
  top:0;
  height: 100%;
  max-width: 300px;
  width: 100px;
}
.admin-sidebar--show{
  width: 100%;
}
.admin-sidebars__items{
  position: relative;
  width:100%;
  top: 50%;
  transform: translateY(-50%);
}
</style>
