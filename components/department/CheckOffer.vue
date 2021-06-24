<template>
<v-btn disabled text class="check-offer">Sprawdź Produkty</v-btn>
</template>

<script>
export default {
}
</script>

<style scoped>
.check-offer{
  position: absolute;
  font-family: 'Brygada 1918', serif;
  font-size: 1em;
  bottom: 10px;
  left: 5%;
}
.theme--light.v-btn.v-btn--disabled{
  color: var(--v-accent-base)!important;
}
</style>
