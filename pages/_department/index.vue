<template>
<div class="department-page">
  <MainSlider></MainSlider>
  <Products></Products>
  <MainFooter></MainFooter>
</div>
</template>

<script>
import MainSlider from '~/components/slider/MainSlider';
import Products from '~/components/department/Products';
import MainFooter from "~/components/footer/MainFooter";
export default {
  components: {MainFooter, MainSlider, Products },
  mounted() {
    setTimeout(()=>{
      window.scrollTo(0,0)
    }, 100)
  },

}
</script>

<style scoped>
</style>
