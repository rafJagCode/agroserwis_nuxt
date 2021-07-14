<template>
<div class="partner-photos">
  <ImageUploader ref="imageUploader" :api="api" :folder="folder" @change-occurred="changeOccurred()"></ImageUploader>
  <v-btn
    :color="changesToUpload ? 'warning' : 'accent'"
    class="partner-photos__update-btn"
    @click="update()">
    {{ changesToUpload ? 'uaktualnij' : 'wszystko aktualne'}}
  </v-btn>
</div>
</template>

<script>
import ImageUploader from "~/components/admin/image-uploader/ImageUploader";
export default {
  components: {ImageUploader},
  layout: 'admin',
  middleware: 'auth',
  data:() => ({
    changesToUpload: false,
    api: 'get-slider-images',
    folder: 'slides',
  }),
  methods:{
    async update(){
      await this.$axios.post(`/api/update-images/${this.folder}`, this.$refs.imageUploader.images);
      this.changesToUpload = false;
    },
    changeOccurred(){
      this.changesToUpload = true;
    }
  }
}
</script>

<style scoped>
.partner-photos{
  min-height: 100vh;
  min-width: 100vw;
  display: grid;
  place-items: center;
}
.partner-photos__update-btn{
  position: fixed;
  right: 20px;
  top:50%;
  transform: translateY(-50%);
}
</style>
