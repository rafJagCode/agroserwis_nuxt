<template>
  <v-footer color="primary" padless class="main-footer">
    <Partners></Partners>

    <v-container class="main-footer__sections">
      <FooterContact></FooterContact>
      <FooterSocialMedia></FooterSocialMedia>
    </v-container>
    <div class="main-footer__copyright">
      {{ new Date().getFullYear() }} — <strong>Agroserwis</strong>
    </div>

  </v-footer>
</template>

<script>
export default {
}
</script>
<style scoped lang="scss">
.main-footer__sections{
  display: grid;
  width:100%;
  grid-auto-flow: column;
  grid-template-columns: auto;
}
.main-footer__copyright{
  display: flex;
  justify-content: center;
  width: 100%;
  padding: 1em 0 1em 0;
}
</style>
