<template>
<div class="admin-sidebar-item">
  <v-btn color="warning" block text nuxt :href="`/admin/${item.link}`">
    <v-icon left>{{item.icon}}</v-icon>
    {{hover ? item.name : ''}}
  </v-btn>
</div>
</template>

<script>
export default {
  props:{
    item:{
      name: null,
      link: null,
      icon: null,
    },
    hover: false,
  }
}
</script>

<style scoped>

</style>
