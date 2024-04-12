<template>
  <section class="partners">
    <Anchor id="partners" />
    <SectionHeadline>
      <template #title>Nasi Partnerzy</template>
      <template #text
        >Dzięki współpracy z wieloma producentami jesteśmy w stanie zapewnić
        szeroki wybór maszyn</template
      >
    </SectionHeadline>
    <div class="partners-logos">
      <PartnerLogo
        v-for="partner in partners"
        :key="partner.img"
        :partner="partner"
      ></PartnerLogo>
    </div>
  </section>
</template>
<script>
import Anchor from '~/components/anchor/Anchor'
import SectionHeadline from '~/components/section_headline/SectionHeadline'
import PartnerLogo from './PartnerLogo'
import data from '/static/partners/data.json'
export default {
  components: { Anchor, SectionHeadline, PartnerLogo },
  data: () => ({
    partners: data,
  }),
}
</script>

<style scoped lang="scss">
.partners {
  position: relative;
  padding: 10rem 0;
  display: grid;
  grid-template-rows: repeat(2, min-content);
  align-content: center;
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
  .partners {
    max-height: revert;
    height: fit-content;
  }
  .partners-logos {
    --logos-columns: 2;
    width: 70%;
  }
}
@media (max-width: 700px) {
  .partners-logos {
    --logos-columns: 1;
    width: 50%;
    gap: 6rem;
  }
}
</style>
