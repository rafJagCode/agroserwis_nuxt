<template>
  <div class="main-about-us-text pa-1 text-center">
    <p class="main-about-us-text__text-biggest">O NAS</p>
    <br>
    <p class="main-about-us-text__text-big">Działamy na rynku od 1997r.</p>
    <br>
    <p>
      {{text}}
    </p>
    <p class="main-about-us-text__text-medium">
      Zapraszamy do współpracy!
    </p>
  </div>
</template>

<script>
export default {
  data: ()=>({
    text: ''
  }),
  async fetch(){
    let response = await this.$content('/about_us').fetch();
    this.text = response.about;
  }
}
</script>

<style scoped>
.main-about-us-text{
  font-family: 'Brygada 1918', serif;
  margin: auto;
  width: 90%;
  display:grid;
  flex-direction: column;
  justify-items: center;
}
@media (max-width:960px){
  .main-about-us-text{
    text-align: justify!important;
  }
  .main-about-us-text__text-big{
    text-align: center!important;
  }
}
.main-about-us-text__text-biggest{
  font-size: 2.5rem;
}
.main-about-us-text__text-big{
  font-size: 1.875rem;
}
.main-about-us-text__text-medium{
  font-size: 1.125rem;
  font-weight: 500;
}
</style>

