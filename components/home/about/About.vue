<template>
  <section class="about">
    <Anchor id="about" />
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
import Anchor from '~/components/anchor/Anchor'
import AboutNumbers from './AboutNumbers'
import AboutPresentation from './AboutPresentation'
export default {
  components: { Anchor, AboutNumbers, AboutPresentation },
}
</script>

<style scoped lang="scss">
.about {
  position: relative;
  box-shadow: 0 0 2px 1px rgba(60, 60, 62);
  margin-bottom: 2px;
  grid-column: full-width;
}
::v-deep.about-content {
  height: 100%;
  display: grid;
  grid-template-rows: minmax(0, 1fr) auto;
  & .about-img {
    grid-row: 1/3;
    grid-column: 1/2;
  }
  & .v-image__image {
    background-position: center bottom !important;
    @media (min-width: 2560px) {
      background-position: center 70% !important;
    }
  }
}
@media (max-width: 1100px) {
  .about {
    --max-height: revert;
    height: fit-content;
  }
}
</style>
