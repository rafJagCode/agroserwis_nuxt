<template>
  <v-carousel
    :height="$vuetify.breakpoint.xs || $vuetify.breakpoint.sm ? 200 : fullHeight"
    v-model="activeSlide"
    hide-delimiters
    show-arrows-on-hover
    cycle
    interval="4000"
    class="main-slider ma-0"
    :touch="{
      left: () => activeSlide--,
      right: () => activeSlide++,
    }"
  >
    <v-carousel-item
      v-for="(item, i) in items"
      :key="i"
      :src="require(`~/assets/images/slides/${item.src}`)"
    ></v-carousel-item>
    <v-btn
      @click="$vuetify.goTo('.departments')"
      class="main-slider__go-down-btn"
      elevation="2"
      fab
      color="accent"
      v-show="!mobile && scrolledTop">
      <v-icon>mdi-hand-pointing-down</v-icon>
    </v-btn>
  </v-carousel>
</template>

<script>
export default {
  data() {
    return {
      scrolledTop: true,
      activeSlide: 0,
      items: [
        {
          src: 'axial2.png',
        },
        {
          src: 'axial3.jpg',
        },
        {
          src: 'steyr1.jpg',
        },
        {
          src: 'steyr2.jpg',
        },
        {
          src: 'steyr3.png',
        },
      ],
    }
  },
  computed:{
    fullHeight(){
      return window.innerHeight - 112;
    },
    mobile(){
      return this.$vuetify.breakpoint.xs || this.$vuetify.breakpoint.sm;
    },
  },
  methods:{
    handleScroll(){
      window.onscroll = () => {
        this.scrolledTop = window.scrollY === 0;
      }
    }
  },
  beforeMount(){
    window.addEventListener('scroll', this.handleScroll);
  }
}
</script>
<style scoped lang="scss">
.main-slider__go-down-btn{
  position: absolute;
  bottom: 0;
  right: 50%;
  transform: translate(50%,-50%);
}
</style>
