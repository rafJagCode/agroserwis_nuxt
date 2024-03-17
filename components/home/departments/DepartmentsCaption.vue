<template>
  <div class="departments-caption d-flex flex-column">
    <h2 class="app-text-subtitle">Poznaj Nasze Oddziały</h2>
    <h1 class="departments-text app-text-h1 text-center">
      Nasze wsparcie techniczne pomoże Ci wybrać rozwiązanie dopasowane do
      Twoich potrzeb
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
  max-width: 600px;
}
.departments-hr {
  width: 50rem;
  background-color: var(--v-accent-base);
}
</style>
