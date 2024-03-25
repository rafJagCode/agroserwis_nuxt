<template>
  <section id="partners" class="partners">
    <SectionHeadline>
      <template #title>Nasi Partnerzy</template>
      <template #text
        >Dzięki współpracy z wieloma producentami jesteśmy w stanie zapewnić
        szeroki wybór maszyn</template
      >
    </SectionHeadline>
    <div class="partners-logos">
      <PartnerLogo v-for="logo in logos" :key="logo" :img="logo"></PartnerLogo>
    </div>
  </section>
</template>
<script>
import SectionHeadline from '~/components/section_headline/SectionHeadline'
import PartnerLogo from './PartnerLogo'
import data from '/static/partners/data.json'
export default {
  components: { SectionHeadline, PartnerLogo },
  data: () => ({
    logos: data,
  }),
}
</script>

<style scoped lang="scss">
.partners {
  display: grid;
  grid-template-rows: auto 1fr;
  min-height: min(100vh, 1280px);
  max-width: min(100%, 1980px);
  padding: 15rem 10rem;
  margin: auto;
}
.partners-logos {
  --logos-columns: 4;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(var(--logos-columns), minmax(0, 1fr));
  gap: 10rem;
  place-items: center;
}
@media (max-width: 1280px) {
  .partners-logos {
    --logos-columns: 2;
    width: 70%;
  }
}
@media (max-width: 860px) {
  .partners-logos {
    --logos-columns: 1;
    width: 50%;
    gap: 6rem;
  }
}
</style>
