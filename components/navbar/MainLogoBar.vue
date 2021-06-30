<template>
<div class="main-logo-bar" color="primary">
    <v-img class="main-logo-bar__logo" :src="require('~/assets/images/agroserwis_logo.png')" height="40" width="40" contain></v-img>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.main-logo-bar{
  width: 100%;
  display: flex;
}
.main-logo-bar__logo::before{
  content: '';
  border-bottom: solid 1px var(--v-accent-base);
  width:calc(50% - 40px);
  height:0;
  position: absolute;
  bottom: 0;
}
.main-logo-bar__logo::after{
  content: '';
  border-bottom: solid 1px var(--v-accent-base);
  width:calc(50% - 40px);
  height:0;
  position: absolute;
  bottom: 0;
  transform: translateX(calc(100% + 80px));
}
</style>
