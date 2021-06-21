<template>
  <div class="index">
    <MainSlider></MainSlider>
    <Departments></Departments>
    <MainAboutUs></MainAboutUs>
  </div>
</template>
<script>
import MainSlider from '~/components/slider/MainSlider';
import Departments from '~/components/departments/Departments';
import MainAboutUs from '~/components/about_us/MainAboutUs';
export default {
  components:{
    MainSlider, MainAboutUs, Departments
  }
}
</script>
<style>
html{
  scroll-behavior: smooth;
}
</style>
