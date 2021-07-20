<template>
  <div class="files">
    <FileUpdater v-for="(file, index) in files" :key="index" :file="file"></FileUpdater>
  </div>
</template>

<script>
import FileUpdater from "~/components/admin/files/FileUpdater";
export default {
  components: {FileUpdater},
  layout: 'admin',
  middleware: 'auth',
  data: ()=>({
    files: [
      {
        text: 'formularz zwrotu części',
        fileName: 'return.pdf'
      },
      {
        text: 'formularz reklamacji części',
        fileName: 'reclamation.pdf',
      },
      {
        text: 'lista części w wyprzedaży',
        fileName: 'parts_list.xls',
      }
    ]
  })

}
</script>

<style scoped>
.files{
  display: grid;
  place-items:center;
  min-height: 100vh;
}
</style>
