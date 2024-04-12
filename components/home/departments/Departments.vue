<template>
  <section class="departments">
    <Anchor id="departments" />
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
import Anchor from '~/components/anchor/Anchor'
import SectionHeadline from '~/components/section_headline/SectionHeadline'
import DepartmentsCards from './DepartmentsCards'

export default {
  components: { Anchor, SectionHeadline, DepartmentsCards },
}
</script>

<style scoped lang="scss">
.departments {
  position: relative;
  padding: 10rem 0;
  display: grid;
  grid-template-rows: repeat(2, min-content);
  align-content: center;
}
@media (max-width: 1560px) {
  .departments {
    max-height: revert;
    height: fit-content;
  }
}
</style>
