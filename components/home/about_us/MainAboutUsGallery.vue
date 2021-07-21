<template>
<div class="main-about-us-gallery">
  <v-hover v-for="(photo, index) in photos" :key="index" v-slot="{hover}">
    <v-img :class="hover ? `main-about-us-gallery__photo${index} photo--hover` : `main-about-us-gallery__photo${index}`" :src="require(`~/assets/images/main_about_us_gallery/${photo}`)"></v-img>
  </v-hover>
</div>
</template>

<script>
export default {
  data: () => ({
    photos: [
      'field1.jpg',
      'field2.jpg',
      'field3.jpg',
    ]
  })
}
</script>

<style scoped lang="scss">
.main-about-us-gallery{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  grid-gap: 15px;
}
.main-about-us-gallery{
  &__photo0{
    grid-column: 1 / 2;
    grid-row: 1 / 2;
  }
  &__photo1{
    grid-column: 2 / 3;
    grid-row: 1 / 2;
  }
  &__photo2{
    grid-column: 1 / 3;
    grid-row: 2 / 3;
  }
}
.photo--hover{
  transform: scale(1.02);
}
</style>
