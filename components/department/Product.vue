<template>
<div class="product">
  <v-img class="product__image" :src="require('~/assets/images/slides/lemkennew2.jpg')" contain max-width="30%"></v-img>
  <div class="product__text">
    <div class="product__name">
      Produkt numer 1
    </div>
    <div class="product__description">
      Lorem ipsum dolor sit amet erat.
      Proin dui quis wisi.
      Phasellus a felis.
      Donec viverra a, tortor.
      Praesent commodo pede ultrices posuere orci.
      In hac habitasse platea dictumst.
      Maecenas diam tempor diam.
      Pellentesque ante.
      Nullam libero ipsum primis in interdum ipsum scelerisque a, tortor.
      Praesent tristique tempus nulla.
      Phasellus sagittis sed, congue ut, gravida non, consectetuer adipiscing dui aliquam cursus tristique, urna sit amet augue.
      Fusce nonummy commodo convallis non, porta est.
      Aliquam erat eu urna quis libero.
      Cras ornare.
      Nam eget lectus.
      Ut consequat diam.
      Donec faucibus, tortor vehicula ullamcorper.
      Nam turpis semper tellus.
      In eros sem dolor sit amet, est. Maecenas eu ipsum dolor sit amet dolor. Nullam magna iaculis ut, ligula.
    </div>
  </div>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.product{
  display: flex;
  padding: 2em;
  margin: 0 auto;
  max-width: 80%;
}
.product__image{

}
.product__text{
  font-family: 'Brygada 1918', serif;
  font-size: 1rem;
  padding: 2em;
  max-width: 50%;
}
.product__name{
  font-size: 1.5rem;
  font-weight: 500;
}
</style>
