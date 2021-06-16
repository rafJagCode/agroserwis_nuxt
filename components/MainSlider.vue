<template>
  <v-carousel
    :height="$vuetify.breakpoint.xs || $vuetify.breakpoint.sm ? 200 : fullHeight"
    v-model="activeSlide"
    hide-delimiters
    show-arrows-on-hover
    cycle
    interval="4000"
    class="ma-0"
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
  </v-carousel>
</template>

<script>
export default {
  data() {
    return {
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
    }
  }
}
</script>
