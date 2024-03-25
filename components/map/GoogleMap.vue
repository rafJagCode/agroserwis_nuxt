<template>
  <div class="google-map">
    <iframe
      :width="$vuetify.breakpoint.xs ? 280 : 450"
      height="250"
      frameborder="0"
      style="border: 0"
      src="https://www.google.com/maps/d/embed?mid=1MMjeLuXoCT3pV35rct2fUn8GbqbOe2w5&hl=pl"
      allowfullscreen
    >
    </iframe>
  </div>
</template>

<script>
export default {}
</script>

<style scoped></style>
