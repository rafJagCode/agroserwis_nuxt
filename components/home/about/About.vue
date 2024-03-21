<template>
  <section id="about" class="about">
    <div class="about-content">
      <v-img
        class="about-img"
        :src="`/about/images/about.webp`"
        height="100%"
        gradient="to top right, rgba(60,60,62,.6), rgba(60,60,62,.9)"
      ></v-img>
      <AboutNumbers />
      <AboutPresentation />
    </div>
  </section>
</template>

<script>
import AboutNumbers from './AboutNumbers'
import AboutPresentation from './AboutPresentation'
export default {
  components: { AboutNumbers, AboutPresentation },
}
</script>

<style scoped lang="scss">
.about {
  scroll-snap-align: start;
  position: relative;
  min-height: min(100vh, 1280px);
  box-shadow: 0 0 2px 1px rgba(60, 60, 62);
}
::v-deep.about-content {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
  & .about-img {
    grid-row: 1/3;
    grid-column: 1/2;
  }
  & .v-image__image {
    background-position: center bottom !important;
  }
}
</style>
