<template>
  <div class="download-section">
    <DownloadItem
      v-for="(item, index) in items"
      :key="index"
      :item="item"
    ></DownloadItem>
  </div>
</template>

<script>
import DownloadItem from './DownloadItem'
export default {
  components: { DownloadItem },
  data: () => ({
    items: [
      {
        type: 'pdf',
        icon: 'mdi-file-pdf-box',
        text: 'formularz zwrotu części',
        link: 'return.pdf',
      },
      {
        type: 'pdf',
        icon: 'mdi-file-pdf-box',
        text: 'formularz reklamacji części',
        link: 'reclamation.pdf',
      },
      {
        type: 'xls',
        icon: 'mdi-microsoft-excel',
        text: 'lista części w wyprzedaży',
        link: 'parts_list.xls',
      },
      {
        type: 'link',
        icon: 'mdi-book-open-page-variant-outline',
        text: 'katalogi części',
        link: 'http://katalogi.agro-serwis.com/',
      },
    ],
  }),
}
</script>

<style scoped>
.download-section {
  padding: 4em 0;
  display: flex;
  justify-content: center;
  gap: 10%;
  flex-wrap: wrap;
}
</style>
