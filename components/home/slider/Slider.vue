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
    <v-btn
      class="scroll-btn"
      href="#departments"
      v-bind="size"
      color="accent"
      elevation="2"
      fab
    >
      <v-icon v-bind="size">mdi-hand-pointing-down</v-icon>
    </v-btn>
  </v-carousel>
</template>

<script>
import data from '/static/slider/data.json'

export default {
  created() {
    this.images = data
  },
  computed: {
    size() {
      const size = { xs: 'x-small', sm: 'small', lg: 'large' }[
        this.$vuetify.breakpoint.name
      ]
      return size ? { [size]: true } : {}
    },
  },
}
</script>
<style scoped lang="scss">
.slider {
  margin-bottom: var(--navbar-height);
}
::v-deep .v-carousel__controls {
  padding-left: 2rem;
  justify-content: start;
  & .v-carousel__controls__item {
    margin: 0 1.5rem;
    &:before {
      background: none;
    }
  }
  & .v-icon {
    font-size: 5rem !important;
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
  transform: translate(50%, -50%);
}
@media (max-width: 1160px) {
  ::v-deep .v-carousel__controls {
    & .v-carousel__controls__item {
      margin: 0 1rem;
    }
    & .v-icon {
      font-size: 4rem !important;
    }
  }
}
@media (max-width: 850px) {
  ::v-deep .v-carousel__controls {
    & .v-carousel__controls__item {
      margin: 0 0.5rem;
    }
    & .v-icon {
      font-size: 3rem !important;
    }
  }
}
</style>
