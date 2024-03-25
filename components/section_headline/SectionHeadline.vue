<template>
  <div class="section-headline d-flex flex-column">
    <h2 class="app-text-subtitle">
      <slot name="title"></slot>
    </h2>
    <h1 class="section-headline-text app-text-h1 text-center">
      <slot name="text"></slot>
    </h1>
    <v-divider class="section-headline-hr mt-4"></v-divider>
  </div>
</template>
<script>
export default {}
</script>
<style scoped lang="scss">
.section-headline {
  justify-content: center;
  align-items: center;
  row-gap: 1.5rem;
  margin-bottom: 10rem;
}
.section-headline-text {
  max-width: 600px;
}
.section-headline-hr {
  width: 50rem;
  background-color: var(--v-accent-base);
}
</style>
