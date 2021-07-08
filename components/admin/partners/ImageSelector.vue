<template>
<div class="image-selector">
  <div class="image-selector__selected py-2" @click="showImages = !showImages">
    <div>WYBIERZ ZDJĘCIE</div>
    <v-img v-if="selected" :width="100" :height="100" :src="require(`~/static/assets/partners/${selected}`)" contain></v-img>
    <div v-else>Nie Wybrano</div>
  </div>
  <div class="image-selector__images" v-show="showImages">
    <div v-for="(image, index) in partnersImages" :key="index" class="image-selector__image-container pa-2" @click="choseImage(image)">
      <v-img :width="100" :height="100" :src="require(`~/static/assets/partners/${image}`)" contain></v-img>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data: () => ({
    showImages: false,
  }),
  props: {
    partnersImages: null,
    selected: null
  },
  methods:{
    choseImage(image){
      this.$emit('change-image', image);
      this.showImages = !this.showImages
    }
  }
}
</script>

<style scoped lang="scss">
.image-selector__selected{
  font-family: 'Brygada 1918', serif;
  cursor: pointer;
  display: grid;
  place-items: center;
  &:hover{
    background-color: var(--v-primary-darken1);
  }
}
.image-selector__images{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.image-selector__image-container{
  cursor: pointer;
  &:hover{
    background-color: var(--v-primary-darken1);
  }
}
</style>
