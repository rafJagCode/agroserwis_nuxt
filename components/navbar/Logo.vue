<template>
  <v-btn
    class="logo"
    icon
    :ripple="false"
    href="#top"
    height="100%"
    width="unset"
  >
    <v-img
      class="logo-img"
      :src="`/navbar/images/logo.svg`"
      height="100%"
      contain
    ></v-img>
  </v-btn>
</template>

<script>
export default {}
</script>

<style scoped lang="scss">
::v-deep.logo {
  & .v-btn__content {
    height: 100%;
    padding: 5px;
  }
}
.logo:before {
  background: transparent;
}
</style>
