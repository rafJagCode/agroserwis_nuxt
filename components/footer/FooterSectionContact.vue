<template>
  <div class="footer-section-contact">
    <v-btn text v-show="data.name" @click="showInfo = !showInfo">
      <v-icon left color="primary" size="20">mdi-account</v-icon>
      {{data.name}}
    </v-btn>
    <div class="footer-section-contact__info" v-show="showInfo">
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
    </div>
    <hr class="my-2">
  </div>
</template>

<script>
export default {
  data: () =>({
    showInfo: false,
  }),
  props: {
    data: null
  },
  mounted(){
    this.showInfo = !this.data.name;
  }
}
</script>

<style scoped>
.footer-section-contact__info{
  background-color: transparent;
}
</style>
