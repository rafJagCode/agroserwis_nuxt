<template>
  <a class="partner-logo">
    <v-img :src="`/partners/images/${img}`"></v-img>
  </a>
</template>
<script>
export default {
  props: {
    img: null,
  },
}
</script>

<style scoped lang="scss">
.partner-logo {
  display: grid;
  width: 100%;
  height: 100%;
  padding: 2rem;
  align-items: center;
  filter: contrast(10%);
  transition: filter 300ms ease;
  &:hover {
    filter: contrast(100%);
  }
}
</style>
