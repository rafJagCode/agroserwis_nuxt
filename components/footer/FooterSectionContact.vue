<template>
  <div class="footer-section-contact">
    <v-btn text disabled>
      <v-icon left color="primary" size="20">mdi-account</v-icon>
      {{data.name}}
    </v-btn>
    <v-btn :href="`tel:${data.mobile}}`" text block>
      <v-icon left color="primary" size="20">mdi-cellphone-basic</v-icon>
      {{data.mobile}}
    </v-btn>
    <v-btn :href="`mailTo:${data.email}`" text block>
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
