<template>
  <div class="anchor" :id="id"></div>
</template>
<script>
export default {
  props: { id: null },
}
</script>

<style scoped lang="scss">
.anchor {
  visibility: hidden;
  height: 0;
  position: absolute;
  top: calc(var(--navbar-height) * -1);
}
</style>
