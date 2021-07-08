<template>
<a :href="product.link" class="product-mobile">
  <div class="product-mobile__content">
    <v-img class="product-mobile__image" :src="require(`~/static/assets/partners/${product.image}`)" contain></v-img>
    <CheckOffer></CheckOffer>
  </div>
</a>
</template>

<script>
import CheckOffer from "~/components/department/CheckOffer";
export default {
  components: {CheckOffer},
  props: {
    product: null
  }
}
</script>

<style scoped lang="scss">
.product-mobile__content{
  position: relative;
  margin: 0.5em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  &:hover{
    background-color: var(--v-secondary-base);
    & .theme--light.v-btn.v-btn--disabled{
      color: var(--v-primary-base)!important;
    }
  }
}
.product-mobile__image{
  width: 230px;
  height: 230px;
  background-size: contain;
}
</style>
