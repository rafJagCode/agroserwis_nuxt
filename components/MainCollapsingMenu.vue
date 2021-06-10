<template>
<!--  <v-btn v-if="mobile" text elevation="false"><v-icon>mdi-menu</v-icon></v-btn>-->
  <v-menu offset-y v-if="mobile" content-class="mt-2">
    <template v-slot:activator="{ on, attrs }">
      <v-btn
        v-bind="attrs"
        v-on="on"
        text
        elevation="false"
      >
        <v-icon>mdi-menu</v-icon>
      </v-btn>
    </template>
    <v-list>
        <v-list-item
          v-for="link in links"
          :key="link"
          class="main-collapsing-menu__list-item"
        >
          <v-list-item-title>{{ link }}</v-list-item-title>
        </v-list-item>
    </v-list>
  </v-menu>
  <v-list v-else>

    <v-btn
      v-for="link in links"
      :key="link"
      text
    >
      {{ link }}
    </v-btn>
  </v-list>

</template>

<script>
export default {
  data(){
    return{
      links: [
        'Home',
        'O nas',
        'Kontakt'
      ]
    }
  },
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm;
    },
  }
}
</script>


<style scoped>
.main-collapsing-menu__list-item{
  cursor: pointer;
}
</style>
