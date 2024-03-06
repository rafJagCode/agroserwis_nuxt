<template>
  <div class="index">
    <Slider></Slider>
    <Departments></Departments>
    <About></About>
  </div>
</template>
<script>
import Slider from '~/components/home/slider/Slider'
import Departments from '~/components/home/departments/Departments'
import About from '~/components/home/about/About'
export default {
  components: {
    Slider,
    Departments,
    About,
  },
}
</script>
