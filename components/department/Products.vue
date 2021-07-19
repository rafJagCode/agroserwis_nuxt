<template>
  <div class="products py-2">
    <Product
      v-for="(product, index) in products"
      :key="product.title + index"
      :product="product"
      :index="index"
      class="product-desktop"
    ></Product>
    <ProductMobile
      v-for="product in products"
      :key="product.title"
      :product="product"
      class="product-mobile"
    ></ProductMobile>
  </div>
</template>

<script>
import Product from '~/components/department/Product'
import ProductMobile from '~/components/department/ProductMobile'
export default {
  components: { ProductMobile, Product },
  data: () => ({
    products: [],
  }),
  async fetch() {
    const department = this.$route.params.department
    try {
      const response = await this.$axios.get(
        `/api/get-department-partners/${department}`
      )
      this.products = response.data
    } catch (e) {}
  },
}
</script>

<style scoped>
.product-mobile {
  display: none;
}
@media (max-width: 1150px) {
  .products {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .product-desktop {
    display: none;
  }
  .product-mobile {
    display: block;
  }
}
</style>
