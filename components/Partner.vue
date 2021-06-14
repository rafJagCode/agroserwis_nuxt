<template>
  <v-col cols="6" sm="3" md="2" lg="1" class="partners__col">
    <v-img
      class="partners__col-image"
      :src="image"
      :max-height="70"
      :max-width="70"
      contain
    ></v-img>
  </v-col>
</template>

<script>
export default {
  props: {
    image: null,
  },
}
</script>

<style scoped lang="scss">
.partners__col {
  justify-content: center;
  display: flex;
}
.partners__col-image {
  cursor: pointer;
  transition: all 200ms ease-in-out;
  filter: grayscale(1);
}
.partners__col-image:hover {
  transform: scale(1.5);
  filter: grayscale(0);
}
</style>
