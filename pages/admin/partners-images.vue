<template>
<div class="partner-photos">
  <ImageUploader ref="imageUploader" :api="api" :folder="folder"></ImageUploader>
  <v-btn color="warning" class="partner-photos__update-btn" @click="update()">UAKTUALNIJ</v-btn>
</div>
</template>

<script>
import ImageUploader from "~/components/admin/image-uploader/ImageUploader";
export default {
  components: {ImageUploader},
  layout: 'admin',
  data:() => ({
    api: 'get-partners-images',
    folder: 'partners'
  }),
  methods:{
    async update(){
      await this.$axios.post(`/api/update-images/${this.folder}`, this.$refs.imageUploader.images);
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
