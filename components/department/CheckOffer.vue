<template>
  <v-btn disabled text class="check-offer">Sprawdź Produkty</v-btn>
</template>

<script>
export default {}
</script>

<style scoped lang="scss">
.check-offer {
  position: absolute;
  font-family: 'Brygada 1918', serif;
  font-size: 1em;
  bottom: 10px;
  left: 5%;
}
.theme--light.v-btn.v-btn--disabled {
  color: var(--v-secondary-base) !important;
}
</style>
