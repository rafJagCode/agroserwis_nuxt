<template>
  <div class="index">
    <Slider></Slider>
    <Departments></Departments>
    <About></About>
    <Partners></Partners>
    <Contact></Contact>
  </div>
</template>
<script>
import Slider from '~/components/home/slider/Slider'
import Departments from '~/components/home/departments/Departments'
import About from '~/components/home/about/About'
import Partners from '~/components/home/partners/Partners'
import Contact from '~/components/home/contact/Contact'
export default {
  components: {
    Slider,
    Departments,
    About,
    Partners,
    Contact,
  },
}
</script>
<style lang="scss">
.index {
  --min-padding-width: 5rem;
  --max-content-width: 1980px;
  --padding-width: minmax(var(--min-padding-width), 1fr);
  --content-width: min(
    100% - (var(--min-padding-width) * 2),
    var(--max-content-width)
  );
  --full-height: calc(100vh - var(--navbar-height));
  display: grid;
  place-items: center;
  grid-template-columns:
    [full-width-start] var(--padding-width) [content-start] var(--content-width)
    [content-end] var(--padding-width) [full-width-end];
}
.index > * {
  height: var(--full-height);
  width: 100%;
  max-height: 1280px;
  grid-column: content;
}
</style>
