<template>
  <div class="main-about-us-text pa-1 text-center">
    <p class="main-about-us-text__text-biggest accent--text">O NAS</p>
    <br />
    <p class="main-about-us-text__text-big accent--text">
      Działamy na rynku od 1997r.
    </p>
    <br />
    <p>
      {{ text }}
    </p>
    <p class="main-about-us-text__text-medium accent--text">
      Zapraszamy do współpracy!
    </p>
  </div>
</template>

<script>
export default {
  fetchKey: 'MainAboutUsText',
  data: () => ({
    text: '',
  }),
  async fetch() {
    let { data } = await this.$axios.get('/api/get-about-us')
    this.text = data.about
  },
  mounted(){
    this.$fetch();
  }
}
</script>

<style scoped>
.main-about-us-text {
  font-family: 'Brygada 1918', serif;
  margin: auto;
  width: 90%;
  display: grid;
  flex-direction: column;
  justify-items: center;
  color: var(--v-secondary-base);
}
@media (max-width: 960px) {
  .main-about-us-text {
    text-align: justify !important;
  }
  .main-about-us-text__text-big {
    text-align: center !important;
  }
}
.main-about-us-text__text-biggest {
  font-size: 2.5rem;
}
.main-about-us-text__text-big {
  font-size: 1.875rem;
}
.main-about-us-text__text-medium {
  font-size: 1.125rem;
  font-weight: 500;
}
</style>
