<template>
  <v-carousel
    v-model="activeSlide"
    hide-delimiters
    show-arrows-on-hover
    cycle
    interval="4000"
    class="main-slider ma-0"
    height="25vw"
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
      class="main-slider__carousel-item"
      :src="require(`~/static/assets/slides/${item}`)"
    >
    </v-carousel-item>
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
  mounted(){
    this.$fetch();
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
.main-slider__placeholder{
  height: 100%;
}

</style>
