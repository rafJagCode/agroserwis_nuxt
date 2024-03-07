<template>
  <v-btn class="logo" icon :ripple="false" href="/" height="100%" width="unset">
    <v-img class="logo-img" :src="`/navbar/images/logo.png`" contain></v-img>
  </v-btn>
</template>

<script>
export default {}
</script>

<style scoped lang="scss">
::v-deep.logo {
  & .v-btn__content {
    height: 58px;
    width: 75px;
  }
}
.logo:before {
  background: transparent;
}
</style>
