<template>
  <div class="google-map px-2">
    <iframe
      :width="$vuetify.breakpoint.xs ? 300 : 450"
      height="250"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/d/embed?mid=1MMjeLuXoCT3pV35rct2fUn8GbqbOe2w5&hl=pl" allowfullscreen>
    </iframe>
  </div>
</template>

<script>
export default {
}
</script>

<style scoped>
.google-map{
  margin: auto;
}
@media (max-width: 1750px){
  .google-map{
    margin:auto;
  }
}

</style>
