<template>
  <section id="departments" class="departments">
    <DepartmentsCaption></DepartmentsCaption>
    <DepartmentsCards></DepartmentsCards>
  </section>
</template>

<script>
import DepartmentsCaption from './DepartmentsCaption'
import DepartmentsCards from './DepartmentsCards'

export default {
  components: { DepartmentsCaption, DepartmentsCards },
}
</script>

<style scoped lang="scss">
.departments {
  scroll-snap-align: start;
  min-height: min(100vh, 1280px);
  display: grid;
  grid-template-rows: auto 1fr;
  padding: 15rem 10rem;
  max-width: min(100%, 1980px);
  margin: auto;
}
@media (max-width: 1560px) {
  .departments {
    padding: 10rem 10rem;
  }
}
@media (max-width: 800px) {
  .departments {
    padding: 10rem 5rem;
  }
}
</style>
