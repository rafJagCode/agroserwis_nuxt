<template>
  <div class="footer-section-link">
    <v-btn :href="data.value" text class="footer-section-link__btn"><v-icon left color="primary" size="20">mdi-web</v-icon>{{shortedLink}}</v-btn>
  </div>
</template>

<script>
export default {
  props: {
    data: null
  },
  computed:{
    shortedLink(){
      return this.data.value.slice(0, 32) + '...';
    }
  }
}
</script>


<style scoped>

</style>
