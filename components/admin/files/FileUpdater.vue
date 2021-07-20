<template>
  <div class="fileUpdater">
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
    <v-btn
      color="accent"
      :disabled="!toUpload"
      @click="submitFile()"
    >
      UAKTUALNIJ
      <v-icon>mdi-arrow-right</v-icon>
    </v-btn>
  </div>
</template>

<script>
export default {
  data: ()=>({
    toUpload: null,
  }),
  props:{
    file: null
  },
  methods: {
    handleFileUpload(){
      this.toUpload = this.$refs.fileInput.files[0];
    },
    submitFile(){
      let formData = new FormData();
      formData.append('file', this.toUpload);

      this.$axios.post( '/api/update-file',
        {
          "fileName": this.file.fileName,
          "file": formData
        },
        {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        }
      )
        .then(function(){
        console.log('SUCCESS!!');
      })
        .catch(function(){
          console.log('FAILURE!!');
        });
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
.file-updater__text{
  text-transform: capitalize;
  text-align: center;
}
</style>
