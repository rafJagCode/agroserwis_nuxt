<template>
<div class="products py-2">
  <Product v-for="(product, index) in products" :key="product.title + index" :product="product" :index="index" class="product-desktop"></Product>
  <ProductMobile v-for="product in products" :key="product.title" :product="product" class="product-mobile"></ProductMobile>
</div>
</template>

<script>
import Product from "~/components/department/Product";
import ProductMobile from "~/components/department/ProductMobile";
export default {
  components: {ProductMobile, Product},
  data: () => ({
    products: [],
    productToDisplay:{
      przasnysz: ['steyr', 'strautmann', 'maschio', 'lemken', 'italmix', 'annaburger'],
      siedlce: ['case', 'manitou', 'strautmann', 'maschio', 'lemken', 'italmix', 'annaburger '],
      grojec: ['case', 'manitou', 'strautmann', 'maschio', 'lemken', 'italmix', 'annaburger'],
      zambrow: ['strautmann', 'maschio', 'lemken', 'italmix', 'annaburger']
    }
  }),
  async fetch(){
    const department = this.$route.params.department;
    this.products = await this.$content('partners')
      .where({
        slug: { $in: this.productToDisplay[department]}
      })
      .fetch();
  },
}
</script>

<style scoped>
.product-mobile{
  display: none;
}
@media (max-width: 1150px){
  .products{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .product-desktop{
    display: none;
  }
  .product-mobile{
    display: block;
  }
}
</style>
