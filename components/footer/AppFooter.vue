<template>
  <footer class="app-footer">
    <div class="content">
      <FooterSection
        v-for="section in sections"
        :key="section.title"
        :section="section"
      />
      <GoogleMap />
    </div>
    <div class="copyright">
      <strong>{{ new Date().getFullYear() }} — Agroserwis</strong>
    </div>
  </footer>
</template>

<script>
import FooterSection from './FooterSection'
import GoogleMap from '~/components/map/GoogleMap'
import data from '/static/footer/data.json'
export default {
  components: { FooterSection, GoogleMap },
  data: () => ({
    sections: data,
  }),
}
</script>
<style scoped lang="scss">
.app-footer {
  padding: 5rem 3rem 0 3rem;
  display: grid;
  justify-content: center;
  background: var(--v-secondary-darken1);
}
.content {
  width: fit-content;
  display: flex;
  gap: 8rem;
  justify-content: center;
  flex-wrap: wrap;
}
.copyright {
  margin-top: 3rem;
  font-size: 1.5rem;
  padding: 0.5rem;
  width: 100%;
  text-align: center;
}
@media (max-width: 600px) {
  .content {
    display: grid;
    gap: 3rem;
  }
}
</style>
