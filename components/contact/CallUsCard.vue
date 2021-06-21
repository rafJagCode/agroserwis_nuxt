<template>
<div class="call-us-card pa-4">
  <v-icon size="100" color="accent">mdi-phone</v-icon>
  <div class="call-us-card__title text-h6 text-center font-weight-bold accent--text">
    Zadzwoń
  </div>
  <div class="call-us-card__text text-h6 text-center font-weight-medium py-4">
    Jesteś zainteresowany naszą ofertą? Zadzwoń i porozmawiaj z naszą obsługą.
  </div>
  <v-btn text href="tel:111222333" class="text-h5 warning--text font-weight-bold">+48 111 222 333</v-btn>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.call-us-card{
  height: 100%;
  display: flex;
  flex-direction: column;
}
</style>
