<template>
  <div class="drop" @dragover.prevent @drop="onDrop">

    <label class="drop__btn drop__btn--above">
      WYBIERZ LUB PRZECIĄGNIJ ZDJĘCIE
      <input ref="imageInput" type="file" name="imageInput" @change="onChange">
    </label>

    <div v-for="(image, index) in images" :key="index" class="drop__item">
      <PartnerImage v-if="folder==='partners'" :image="image"></PartnerImage>
      <SliderImage v-if="folder==='slides'" :image="image"></SliderImage>
      <button class="drop__btn" @click="removeFile(index)">USUŃ</button>
    </div>

  </div>
</template>

<script>
import PartnerImage from "./PartnerImage";
import SliderImage from "./SliderImage";
export default {
  components: {PartnerImage, SliderImage},
  data: () =>({
    images: []
  }),
  props:{
    api: null,
    folder: null,
  },
  async fetch(){
    const { data } = await this.$axios.get(`/api/${this.api}`);
    Object.values(data).forEach((image)=>{
      this.images.push({ "type": "file", "src": image });
    });
  },
  methods:{
    onDrop: function(e) {
      e.stopPropagation();
      e.preventDefault();
      let files = e.dataTransfer.files;
      files.forEach((file)=>{
        this.createFile(file);
      })
    },
    onChange(e) {
      let files = e.target.files;
      files.forEach((file)=>{
        this.createFile(file);
      })
    },
    createFile(file) {
      if (!file.type.match('image.*')) {
        alert('Select an image');
        return;
      }
      let reader = new FileReader();
      let vm = this;

      reader.onload = function(e) {
        vm.images.push({ "type": "dataURL", "src": e.target.result, "name": file.name });
      }
      reader.readAsDataURL(file);
    },
    removeFile(index) {
      this.$delete(this.images, index);
    }
  }
}
</script>

<style scoped lang="scss">
.drop {
  margin-top:85px;
  margin-bottom: 50px;
  background-color: var(--v-primary-base);
  border: 4px dashed var(--v-accent-base);
  text-align: center;
  border-radius: 2px;
  min-width: 400px;
  min-height: 400px;
  max-width: 90%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  position: relative;
}

.drop__btn {
  background-color: var(--v-warning-base);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: bold;
  padding: 15px 35px;
  position: relative;

  &--above{
    @extend .drop__btn;
    position: absolute;
    width: calc(100% + 8px);
    top: 0;
    left: -4px;
    transform: translateY(calc(-100% - 20px));
  }
  &:hover {
    background-color: var(--v-warning-darken1);
  }
}


input[type="file"] {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
.drop__item{
  padding: 10px 30px;
}


</style>

