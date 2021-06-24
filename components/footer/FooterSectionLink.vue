<template>
  <div class="footer-section-link">
    <a>{{data.value}}</a>
  </div>
</template>

<script>
export default {
  props: {
    data: null
  }
}
</script>


<style scoped>
.footer-section-link{
  white-space: normal;
}
</style>
