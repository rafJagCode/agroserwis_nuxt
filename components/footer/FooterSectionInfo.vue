<template>
  <div class="footer-section-info">
    <div>{{data.name}}</div>
    <div>{{data.address}}</div>
    <div>{{data.nip}}</div>
    <div>{{data.bdo}}</div>
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
.footer-section-info{
  padding-left: 16px;
}
</style>
>
