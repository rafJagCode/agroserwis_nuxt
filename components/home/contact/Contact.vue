<template>
  <section class="contact">
    <Anchor id="contact" />
    <svg
      class="wave wave1"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 320"
      preserveAspectRatio="none"
    >
      <path
        fill="currentColor"
        fill-opacity="1"
        d="M0,96L48,133.3C96,171,192,245,288,245.3C384,245,480,171,576,149.3C672,128,768,160,864,149.3C960,139,1056,85,1152,101.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <svg
      class="wave wave2"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 320"
      preserveAspectRatio="none"
    >
      <path
        fill="currentColor"
        fill-opacity="1"
        d="M0,96L48,133.3C96,171,192,245,288,245.3C384,245,480,171,576,149.3C672,128,768,160,864,149.3C960,139,1056,85,1152,101.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <div class="contact-content">
      <SectionHeadline>
        <template #title>Skontaktuj się z nami</template>
        <template #text
          >Szukasz pomocy? Masz pytania odnośnie produktu? Odezwij się do nas, z
          chęcią pomożemy.</template
        >
      </SectionHeadline>
      <ContactForm></ContactForm>
    </div>
  </section>
</template>
<script>
import Anchor from '~/components/anchor/Anchor'
import SectionHeadline from '~/components/section_headline/SectionHeadline'
import ContactForm from './ContactForm.vue'
export default {
  components: { Anchor, SectionHeadline, ContactForm },
}
</script>
<style scoped lang="scss">
.contact {
  display: grid;
  position: relative;
  background-color: white;
  grid-column: full-width;
  padding: 10rem 0;
}
.wave {
  position: absolute;
  width: 100%;
  top: -1px;
  z-index: 0;
}
.wave1 {
  color: var(--v-bg-lighten1);
  height: 60%;
}
.wave2 {
  color: var(--v-bg-base);
  height: 40%;
}
.contact-content {
  height: 100%;
  width: var(--content-width);
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  place-items: center;
}
::v-deep .section-headline {
  z-index: 1;
}
@media (max-width: 1560px) {
  .contact-content {
    grid-template-columns: auto;
  }
}
@media (max-width: 1100px) {
  .contact {
    max-height: revert;
    height: fit-content;
  }
}
</style>
