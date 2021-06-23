<template>
<div class="products py-2">
  <Product v-for="(product, index) in products" :key="product.title" :product="product" :index="index"></Product>
</div>
</template>

<script>
import Product from "~/components/department/Product";
export default {
  components: {Product},
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

</style>
