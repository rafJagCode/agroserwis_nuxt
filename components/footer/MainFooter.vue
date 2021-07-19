<template>
  <v-footer color="secondary" padless class="main-footer px-sm-8 px-0">
    <Partners v-show="$nuxt.$route.name === 'index'"></Partners>

    <div class="main-footer__sections pt-12">
      <FooterSection
        v-for="section in sections"
        :key="section.name"
        :section="section"
      ></FooterSection>
      <GoogleMap v-show="department === 'default'"></GoogleMap>
    </div>
    <div class="main-footer__copyright primary--text">
      {{ new Date().getFullYear() }} — <strong>Agroserwis</strong>
    </div>
  </v-footer>
</template>

<script>
import Partners from '~/components/footer/partners/Partners'
import FooterSection from '~/components/footer/FooterSection'
import GoogleMap from '~/components/map/GoogleMap'
export default {
  components: { GoogleMap, FooterSection, Partners },
  data: () => ({
    sections: [],
    department: 'default',
  }),
  async fetch() {
    console.log('footer fetch')
    this.department = !this.$route.params.department
      ? 'default'
      : this.$route.params.department
    const { data: sections } = await this.$axios.get(
      `/api/get-department-footer-info/${this.department}`
    )
    this.sections = sections.sections
  },
}
</script>
<style scoped lang="scss">
.main-footer__sections {
  display: flex;
  flex-wrap: wrap;
  justify-content: left;
  width: 100%;
  position: relative;
}
@media (max-width: 400px) {
  .main-footer__sections {
    justify-content: center;
  }
}
.main-footer__copyright {
  display: flex;
  justify-content: center;
  width: 100%;
  padding: 1em 0 1em 0;
}
</style>
