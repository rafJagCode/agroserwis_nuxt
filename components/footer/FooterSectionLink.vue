<template>
  <div class="footer-section-link">
    <v-btn :href="data.value" text><v-icon left color="primary" size="20">mdi-web</v-icon>{{data.value}}</v-btn>
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
.footer-section-link{
  white-space: normal;
}

</style>
