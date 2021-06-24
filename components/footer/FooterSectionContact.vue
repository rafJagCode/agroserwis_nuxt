<template>
  <div class="footer-section-contact">
    <div>
      <v-icon left color="primary" size="20">mdi-account</v-icon>
      {{data.name}}
    </div>
    <div>
      <v-icon left color="primary" size="20">mdi-cellphone-basic</v-icon>
      {{data.mobile}}
    </div>
    <div>
      <v-icon left color="primary" size="20">mdi-wechat</v-icon>
      {{data.email}}
    </div>
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
