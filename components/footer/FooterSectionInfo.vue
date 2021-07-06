<template>
  <div class="footer-section-info">
    {{data.text}}
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
  color: var(--v-accent-base);
}
</style>
>
