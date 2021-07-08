<template>
<div class="footer-section pa-1">
  <p class="footer-section__name text-h6 ml-4">{{section.name}}</p>
  <FooterSectionInfo v-if="data.type === 'info'" v-for="data in section.data" :key="data.name" :data="data"></FooterSectionInfo>
  <FooterSectionContact v-if="data.type === 'contact'" v-for="data in section.data" :key="data.name" :data="data"></FooterSectionContact>
  <FooterSectionLink v-if="data.type === 'link'" v-for="data in section.data" :key="data.value" :data="data"></FooterSectionLink>
</div>
</template>

<script>
import FooterSectionContact from "~/components/footer/FooterSectionContact";
import FooterSectionLink from "~/components/footer/FooterSectionLink";
import FooterSectionInfo from "~/components/footer/FooterSectionInfo";
export default {
  components: {FooterSectionInfo, FooterSectionLink, FooterSectionContact},
  props: {
    section: null
  },
}
</script>

<style lang="scss">
.footer-section{
  font-family: "Roboto", sans-serif;
  color: var(--v-primary-base);
  font-size: 0.875rem;
  font-weight: 500;
  white-space: normal;
  flex-grow: 1;
  max-width: 500px;
}
.footer-section__name{
  text-transform: capitalize;
  position: relative;
  width: max-content;
  max-width: 100%;
  &::before{
    content: '';
    position: absolute;
    top: 0;
    left:0;
    height:100%;
    width: 100%;
    border-bottom: 2px solid var(--v-primary-base);
  }
}

.footer-section .v-btn {
  text-transform:none !important;
  font-family: "Roboto", sans-serif;
  color: var(--v-accent-base);
  font-size: 0.875rem;
  padding: 1em;
  font-weight: 500;
  letter-spacing: normal;
  &.v-btn--disabled{
    color:var(--v-accent-base)!important;
    & .v-icon{
      color:var(--v-primary-base)!important;
    }
  }
  & .v-btn__content{
    justify-content: left;
  }
}
</style>
