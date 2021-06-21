<template>
<div class="department-page">
  <MainSlider></MainSlider>
  <Products></Products>
</div>
</template>

<script>
import MainSlider from '~/components/slider/MainSlider';
import Products from '~/components/department/Products';
export default {
  components: { MainSlider, Products }
}
</script>

<style scoped>
.test{
  height: 100vh;
}
</style>
