<template>
<div class="admin-sidebar-item">
  <v-btn block text nuxt :href="`/admin/${item.link}`">
    <v-icon left>{{item.icon}}</v-icon>
    {{item.name}}
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
    }
  }
}
</script>

<style scoped>

</style>
