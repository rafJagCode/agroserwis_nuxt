<template>
  <div class="files">
    <div class="files-updaters">
      <FileUpdater v-for="(file, index) in files" :key="index" :file="file"></FileUpdater>
    </div>
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
        type: 'pdf',
        icon: 'mdi-file-pdf',
        text: 'formularz zwrotu części',
        link: 'return.pdf',
        fileName: 'return.pdf'
      },
      {
        type: 'pdf',
        icon: 'mdi-file-pdf',
        text: 'formularz reklamacji części',
        link: 'reclamation.pdf',
        fileName: 'reclamation.pdf',
      },
      {
        type: 'xls',
        icon: 'mdi-microsoft-excel',
        text: 'lista części w wyprzedaży',
        link: 'parts_list.xls',
        fileName: 'parts_list.xls',
      },
    ]
  })

}
</script>

<style scoped>
.files{
  display: grid;
  place-items: center;
  min-height: 100vh;
}
.files-updaters{
  display: flex;
  gap: 5%;
}
</style>
