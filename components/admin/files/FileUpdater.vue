<template>
  <div class="file-updater">
    <label class="drop__btn">
      <div class="file-updater__text">
        {{file.text}}
      </div>
      <input
        ref="fileInput"
        type="file"
        name="fileInput"
        @change="handleFileUpload()"
      />
    </label>
    <div class="file-updater__to-upload">
      <DownloadItem :item="file"></DownloadItem>
    </div>
    <v-btn
      color="accent"
      :disabled="!toUpload"
      @click="submitFile()"
      block
      :loading="loading"
    >
      {{ toUpload ? 'UAKTUALNIJ' : 'PLIK AKTUALNY'}}
      <v-icon v-if="toUpload">mdi-arrow-right</v-icon>
    </v-btn>
  </div>
</template>

<script>
import DownloadItem from "~/components/spare-parts/DownloadItem";
export default {
  components: {DownloadItem},
  data: ()=>({
    toUpload: null,
    loading: false,
  }),
  props:{
    file: null
  },
  methods: {
    handleFileUpload(){
      this.toUpload = this.$refs.fileInput.files[0];
    },
    async submitFile(){
      let formData = new FormData();
      formData.append('file', this.toUpload);
      formData.append('fileName', this.file.fileName);

      this.loading = true;
      await this.$axios.post( '/api/update-file',
        formData,
        {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        }
      )
      this.toUpload = null;
      this.loading = false;
    },
  }
}
</script>

<style scoped lang="scss">

.drop__btn {
  background-color: var(--v-warning-base);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: bold;
  padding: 15px 35px;
  position: relative;
  width: 300px;
  &:hover {
     background-color: var(--v-warning-darken1);
   }
}
input[type='file'] {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
.file-updater{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.file-updater__text{
  text-transform: capitalize;
  text-align: center;
}
</style>
