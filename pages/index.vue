<template>
  <div class="index">
    <Slider></Slider>
    <Departments></Departments>
    <About></About>
    <Partners></Partners>
  </div>
</template>
<script>
import Slider from '~/components/home/slider/Slider'
import Departments from '~/components/home/departments/Departments'
import About from '~/components/home/about/About'
import Partners from '~/components/home/partners/Partners'
export default {
  components: {
    Slider,
    Departments,
    About,
    Partners,
  },
}
</script>
