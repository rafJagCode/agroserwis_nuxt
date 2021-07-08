<template>
<div class="slide-selector">
  <div class="slide-selector__selected py-2" @click="showImages = !showImages">
    <div>WYBIERZ SLIDY</div>
    <div class="slide-selector__selected-images" v-if="selected">
      <v-img
        class="ma-1"
        :width="115" :height="50"
        :max-width="115" :max-height="50"
        v-for="(image, index) in selected"
        :key="index"
        :src="require(`~/static/assets/slides/${image}`)"
      ></v-img>
    </div>
    <div v-else>Nie Wybrano</div>
  </div>
  <div class="slide-selector__images" v-show="showImages">
    <div v-for="(image, index) in slides" :key="index" class="slide-selector__image-container ma-2" @click="choseImage(image)">
      <v-img :width="230" :height="100" :src="require(`~/static/assets/slides/${image}`)"></v-img>
      <div v-if="imageSelected(image)" class="slide-selector__selected-indicator"></div>
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
    slides: null,
    selected: null
  },
  methods:{
    choseImage(image){
      this.$emit('image-clicked', image);
    },
    imageSelected(image){
      if(!this.selected) return;
      return this.selected.includes(image);
    }
  },
}
</script>

<style scoped lang="scss">
.slide-selector__selected{
  font-family: 'Brygada 1918', serif;
  cursor: pointer;
  display: grid;
  place-items: center;
  &:hover{
    background-color: var(--v-primary-darken1);
  }
}
.slide-selector__selected-images{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.slide-selector__images{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.slide-selector__image-container{
  position: relative;
  cursor: pointer;
  &:hover{
    background-color: var(--v-primary-darken1);
  }
}
.slide-selector__selected-indicator{
  width:100%;
  height:100%;
  position: absolute;
  top:0;
  left: 0;
  background-color: var(--v-accent-darken2);
  display: grid;
  place-items:center;
  mix-blend-mode: multiply;
}
</style>
