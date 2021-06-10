<template>
  <v-col class="partners__col col-md-2">
    <v-img class="partners__col-image" :src="image" :max-height="60" contain></v-img>
  </v-col>
</template>

<script>
export default {
  props: {
    image: null
  },
}
</script>

<style scoped lang="scss">
.partners__col-image{
  cursor: pointer;
  transition: all 200ms ease-in-out;
  filter: grayscale(1);
}
.partners__col-image:hover{
  transform: scale(1.5);
  filter: grayscale(0);
}
</style>
