<template>
  <v-footer color="secondary" padless class="main-footer mt-12">
    <Partners v-show="$nuxt.$route.name==='index'"></Partners>

    <v-container class="main-footer__sections pt-12">
      <FooterSection v-for="section in sections" :key="section.name" :section="section"></FooterSection>
    </v-container>
    <div class="main-footer__copyright primary--text">
      {{ new Date().getFullYear() }} — <strong>Agroserwis</strong>
    </div>

  </v-footer>
</template>

<script>
import Partners from "~/components/footer/partners/Partners";
import FooterSection from "~/components/footer/FooterSection";
export default {
  components: {FooterSection, Partners },
  data: () => ({
    sections: []
  }),
  async fetch(){
    let response = await this.$content('footer_info', '/zambrow').fetch();
    this.sections = response.sections;
  }
}
</script>
<style scoped lang="scss">
.main-footer__sections{
  display: flex;
  flex-wrap: wrap;
  justify-content: left;
  width:100%;
}
.main-footer__copyright{
  display: flex;
  justify-content: center;
  width: 100%;
  padding: 1em 0 1em 0;
}
</style>
