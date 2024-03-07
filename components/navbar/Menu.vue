<template>
  <div class="menu">
    <ul class="menu-list d-flex">
      <li class="menu-item" v-for="item in items" :key="item.text">
        <v-btn color="accent" :nuxt="item.nuxt" text :href="item.link">{{
          item.text
        }}</v-btn>
      </li>
      <li class="hamburger">
        <v-btn
          class="accent--text"
          text
          elevation="false"
          @click="$emit('toggle-sidebar')"
        >
          <v-icon>mdi-menu</v-icon>
        </v-btn>
      </li>
    </ul>
  </div>
</template>
<script>
import data from '/static/navbar/data.json'
export default {
  data: () => ({
    items: data,
  }),
}
</script>

<style scoped lang="scss">
.menu {
  grid-column: 3/4;
}
.menu-list {
  height: 100%;
  align-items: center;
}
.hamburger {
  display: none;
}
@media (max-width: 960px) {
  .menu-item {
    display: none;
  }
  .hamburger {
    display: unset;
  }
}
</style>
