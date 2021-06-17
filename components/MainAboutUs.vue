<template>
<div class="main-about-us pa-4 pt-12">
  <MainAboutUsGallery v-show="!mobile"></MainAboutUsGallery>
  <MainAboutUsText></MainAboutUsText>
</div>
</template>

<script>
import MainAboutUsGallery from "~/components/MainAboutUsGallery";
import MainAboutUsText from "~/components/MainAboutUsText";
export default {
  components: {MainAboutUsText, MainAboutUsGallery},
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.sm || this.$vuetify.breakpoint.xs
    },
  },
}
</script>

<style scoped>
.main-about-us{
  display: grid;
  grid-auto-flow: column;
}
</style>
