<template>
<v-app-bar class="main-logo-bar" color="primary">
    <v-img class="main-logo-bar__logo" :src="require('~/assets/images/agroserwis_logo.png')" height="40" width="40" contain></v-img>
</v-app-bar>
</template>

<script>
export default {
}
</script>

<style scoped>
.main-logo-bar{
  top:7px;
}
.main-logo-bar__logo::before{
  content: '';
  border-bottom: solid 1px var(--v-accent-base);
  width:calc(50% - 40px);
  height:0;
  position: absolute;
  top: 72%;
}
.main-logo-bar__logo::after{
  content: '';
  border-bottom: solid 1px var(--v-accent-base);
  width:calc(50% - 40px);
  height:0;
  position: absolute;
  top: 72%;
  transform: translateX(calc(100% + 80px));
}
</style>
