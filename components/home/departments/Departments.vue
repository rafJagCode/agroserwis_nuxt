<template>
  <section id="departments" class="departments">
    <SectionHeadline>
      <template #title>Poznaj Nasze Oddziały</template>
      <template #text
        >Nasze wsparcie techniczne pomoże Ci wybrać rozwiązanie dopasowane do
        Twoich potrzeb</template
      >
    </SectionHeadline>
    <DepartmentsCards></DepartmentsCards>
  </section>
</template>

<script>
import SectionHeadline from '~/components/section_headline/SectionHeadline'
import DepartmentsCards from './DepartmentsCards'

export default {
  components: { SectionHeadline, DepartmentsCards },
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
