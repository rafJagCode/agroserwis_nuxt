<template>
    <div class="admin-sidebar" :class="hover ? 'admin-sidebar--show' : ''">
      <div class="admin-sidebars__items">
        <AdminSidebarItem v-for="item in items" :key="item.name" :item="item" :hover="hover"></AdminSidebarItem>
        <div class="admin-sidebar__logout">
          <v-btn color="warning" block text @click="logout()">
            <v-icon left>mdi-logout</v-icon>
            {{hover ? 'wyloguj' : ''}}
          </v-btn>
        </div>
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
        name: 'Loga Partnerów',
        link: 'partners-images',
        icon: 'mdi-office-building'
      },
      {
        name: 'Slider Zdjęcia',
        link: 'slider-images',
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
  },
  methods: {
    async logout(){
      await this.$axios.post('/api/logout');
      await this.$nuxt.$router.push({"name": 'admin'});
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
