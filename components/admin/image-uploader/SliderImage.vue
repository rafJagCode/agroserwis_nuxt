<template>
  <div class="drop__img-container">
    <v-img v-if="image.type === 'dataURL'" :src="image.src" alt="" class="drop__img"/>
    <v-img v-if="image.type === 'file'" :src="require(`~/static/assets/slides/${image.src}`)" alt="" class="drop__img"/>
  </div>
</template>

<script>
export default {
  props: {
    image: null
  }
}
</script>

<style scoped>
.drop__img-container{
  width: 456px;
  height: 120px;
  display: grid;
  place-items: center;
}
.drop__img {
  width: 456px;
  height: 120px;
  background-size: cover;
}
</style>
