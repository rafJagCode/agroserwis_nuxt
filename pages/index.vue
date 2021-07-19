<template>
  <div class="index">
    <MainSlider></MainSlider>
    <Departments></Departments>
    <MainAboutUs></MainAboutUs>
    <MainFooter></MainFooter>
  </div>
</template>
<script>
import MainSlider from '~/components/slider/MainSlider'
import Departments from '~/components/home/departments/Departments'
import MainAboutUs from '~/components/home/about_us/MainAboutUs'
import MainFooter from '~/components/footer/MainFooter'
export default {
  components: {
    MainFooter,
    MainSlider,
    MainAboutUs,
    Departments,
  },
  fetch() {
    console.log('home fetch')
  },
}
</script>
<style>
html {
  scroll-behavior: smooth;
}
</style>
