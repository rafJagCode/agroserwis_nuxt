<template>
<div class="footer-section">
  <p class="footer-section__name text-h6">{{section.name}}</p>
  <FooterSectionInfo v-for="data in info" :key="data.name" :data="data"></FooterSectionInfo>
  <FooterSectionContact v-for="data in contacts" :key="data.name" :data="data"></FooterSectionContact>
  <FooterSectionLink v-for="data in links" :key="data.value" :data="data"></FooterSectionLink>
</div>
</template>

<script>
import FooterSectionContact from "~/components/footer/FooterSectionContact";
import FooterSectionLink from "~/components/footer/FooterSectionLink";
import FooterSectionInfo from "~/components/footer/FooterSectionInfo";
export default {
  components: {FooterSectionInfo, FooterSectionLink, FooterSectionContact},
  data: () => ({
    contacts: [],
    links: [],
    info: []
  }),
  props: {
    section: null
  },
  mounted(){
    this.section.data.forEach((data)=>{
      if(data.type === 'contact') this.contacts.push(data);
      if(data.type === 'link') this.links.push(data);
      if(data.type === 'info') this.info.push(data);
    })
  }
}
</script>

<style scoped lang="scss">
.footer-section{
  font-family: "Roboto", sans-serif;
  color: var(--v-primary-base);
  font-size: 0.875rem;
  padding: 1em;
  font-weight: 500;
  white-space: nowrap;
  margin: 0 1em;
}
.footer-section__name{
  text-transform: capitalize;
  position: relative;
  width: max-content;
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

</style>
