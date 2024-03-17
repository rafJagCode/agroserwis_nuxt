<template>
  <section id="about" class="about">
    <v-img
      class="about-img"
      :src="`/about/images/about.webp`"
      max-height="100vh"
      gradient="to top right, rgba(60,60,62,.6), rgba(60,60,62,.9)"
    ></v-img>
    <div class="about-content">
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
::v-deep.about {
  scroll-snap-align: start;
  position: relative;
  min-height: 100vh;
  box-shadow: 0 0 2px 1px rgba(60, 60, 62);
  & .v-image__image {
    background-position: center bottom !important;
  }
  .about-content {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-rows: 1fr auto;
  }
}
</style>
