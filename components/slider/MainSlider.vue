<template>
  <v-carousel
    :height="$vuetify.breakpoint.xs || $vuetify.breakpoint.sm ? 200 : 500"
    v-model="activeSlide"
    hide-delimiters
    show-arrows-on-hover
    cycle
    interval="4000"
    class="main-slider ma-0"
    :touch="{
      left: () => {
        activeSlide++
      },
      right: () => {
        if (activeSlide === 0) {
          activeSlide = items.length - 1
        } else activeSlide--
      },
    }"
  >
    <v-carousel-item
      eager
      v-for="(item, i) in items"
      :key="i"
      :src="require(`~/static/assets/slides/${item}`)"
      class="main-slider__carousel-item"
    ></v-carousel-item>
    <v-btn
      @click="scrollFullPage"
      class="main-slider__go-down-btn"
      elevation="2"
      fab
      color="accent"
      v-show="showScrollButton"
    >
      <v-icon>mdi-hand-pointing-down</v-icon>
    </v-btn>
  </v-carousel>
</template>

<script>
export default {
  data() {
    return {
      scrollY: 0,
      activeSlide: 0,
      items: [],
    }
  },
  async fetch() {
    const department = this.$route.params.department || 'default'
    const { data } = await this.$axios.get(`/api/get-department/${department}`)
    this.items = data.slides
  },
  computed: {
    fullHeight() {
      return window.innerHeight - 104
    },
    mobile() {
      return this.$vuetify.breakpoint.xs || this.$vuetify.breakpoint.sm
    },
    showScrollButton() {
      return !this.mobile && !this.scrollY
    },
  },
  methods: {
    scrollFullPage() {
      window.scroll(0, window.innerHeight)
    },
  },
  beforeMount() {
    let that = this
    window.addEventListener('scroll', function () {
      that.scrollY = window.scrollY
    })
  },
}
</script>
<style scoped lang="scss">
.main-slider__go-down-btn {
  position: absolute;
  bottom: 0;
  right: 50%;
  transform: translate(50%, -50%);
}
</style>
