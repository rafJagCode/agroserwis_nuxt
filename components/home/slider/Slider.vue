<template>
  <v-carousel
    class="slider"
    show-arrows-on-hover
    cycle
    delimiter-icon="mdi-minus"
    hide-delimiter-background
    height="calc(100vh - var(--navbar-height))"
  >
    <v-carousel-item
      v-for="image in images"
      :key="image"
      :src="`slider/images/${image}`"
    >
    </v-carousel-item>
    <v-btn href="#departments" class="scroll-btn" plain>
      <v-icon class="scroll-icon">mdi-hand-pointing-down</v-icon>
    </v-btn>
  </v-carousel>
</template>

<script>
import data from '/static/slider/data.json'

export default {
  data: () => ({
    images: data,
  }),
  computed: {
    btnSize() {
      return { [this.$vuetify.breakpoint.smAndUp ? 'large' : 'small']: true }
    },
  },
}
</script>
<style scoped lang="scss">
.slider {
  scroll-snap-align: start;
  scroll-margin: var(--navbar-height);
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
