<template>
  <div class="drop__img-container">
    <img v-if="image.type === 'dataURL'" :src="image.src" alt="" class="drop__img"/>
    <img v-if="image.type === 'file'" :src="require(`~/static/assets/partners/${image.src}`)" alt="" class="drop__img"/>
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
  width: 400px;
  height: 400px;
  display: grid;
  place-items: center;
}
.drop__img {
  max-height: 400px;
  max-width: 400px;
  min-width:200px;
  min-height: 100px;
  background-size: cover;
}
</style>
