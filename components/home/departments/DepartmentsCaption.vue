<template>
  <div class="departments-caption d-flex flex-column">
    <h4 class="text-h4 accent--text">What We Do?</h4>
    <h1 class="departments-text text-h1 text-center">
      We are giving you perfect solutions with our proficient services.
    </h1>
    <v-divider class="departments-hr mt-4"></v-divider>
  </div>
</template>
<script>
export default {}
</script>
<style scoped lang="scss">
.departments-caption {
  justify-content: center;
  align-items: center;
  row-gap: 1.5rem;
  margin-bottom: 10rem;
}
.departments-text {
  width: 80rem;
}
.departments-hr {
  width: 50rem;
  background-color: var(--v-accent-base);
}
</style>
