<template>
  <v-carousel
    class="slider"
    cycle
    show-arrows-on-hover
    delimiter-icon="mdi-minus"
    hide-delimiter-background
    height="min(var(--full-height), 1280px)"
  >
    <Anchor id="top" />
    <v-carousel-item
      v-for="slide in slides"
      :key="slide.title"
      :src="`slider/images/${slide.img}`"
      gradient="to right, rgba(42,43,42,0.70) 40%, rgba(42,43,42,0) 80%"
    >
      <div class="slider-content">
        <h1 class="slider-title app-text-h1">{{ slide.title }}</h1>
        <h2 class="slider-text app-text-h2">
          {{ slide.desc }}
        </h2>
      </div>
    </v-carousel-item>
    <v-btn href="#departments" class="scroll-btn" plain nuxt>
      <v-icon class="scroll-icon">mdi-hand-pointing-down</v-icon>
    </v-btn>
  </v-carousel>
</template>

<script>
import Anchor from '~/components/anchor/Anchor'
import data from '/static/slider/data.json'

export default {
  components: { Anchor },
  data: () => ({
    slides: data,
  }),
}
</script>
<style scoped lang="scss">
.slider {
  position: relative;
  grid-column: full-width;
}
::v-deep .v-carousel__controls {
  padding-left: 2rem;
  justify-content: start;
  background: rgba(0, 0, 0, 0.7);
  & .v-carousel__controls__item {
    margin: 0 2rem;
    &:before {
      background: none;
    }
  }
  & .v-icon {
    font-size: 10rem !important;
    &:hover {
      opacity: 1;
    }
  }
  & .v-item--active .v-icon {
    opacity: 1;
  }
  & .v-ripple__container {
    display: none;
  }
}
.slider-content {
  min-width: 300px;
  max-width: 40%;
  position: absolute;
  top: 10%;
  left: 7%;
  font-size: 2.5rem;
}
.slider-title {
  color: var(--v-primary-base) !important;
  font-size: 2.5em !important;
  font-weight: 700 !important;
  text-transform: uppercase;
  margin-bottom: 1.5rem;
}
.slider-text {
  color: var(--v-primary-base) !important;
  font-size: 1em !important;
}
::v-deep .scroll-btn {
  position: absolute;
  bottom: 0;
  right: 50%;
  z-index: 2;
  transform: translate(50%, -1rem);
  & .scroll-icon {
    font-size: 4rem;
  }
}
</style>
