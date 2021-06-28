<template>
  <div class="footer-section-contact">
    <v-btn text disabled v-show="data.name">
      <v-icon left color="primary" size="20">mdi-account</v-icon>
      {{data.name}}
    </v-btn>
    <v-btn :href="`tel:${data.mobile}}`" text block v-show="data.mobile">
      <v-icon left color="primary" size="20">mdi-cellphone-basic</v-icon>
      {{data.mobile}}
    </v-btn>
    <v-btn :href="`tel:${data.phone}}`" text block v-show="data.phone">
      <v-icon left color="primary" size="20">mdi-phone</v-icon>
      {{data.phone}}
    </v-btn>
    <v-btn :href="`mailTo:${data.email}`" text block v-show="data.email">
      <v-icon left color="primary" size="20">mdi-wechat</v-icon>
      {{data.email}}
    </v-btn>
    <hr class="my-2">
  </div>
</template>

<script>
export default {
  props: {
    data: null
  }
}
</script>

<style scoped>

</style>
