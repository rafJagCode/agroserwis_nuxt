<template>
<div class="contact-cards">
  <div class="contact-card"></div>
  <div class="contact-card"></div>
</div>
</template>

<script>
export default {
  name: "ContactCards"
}
</script>

<style scoped>
.contact-cards{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap:10px;
  place-items: center;
  margin-left: 20%;
}
.contact-card{
  background-color: var(--v-primary-base);
  width:  500px;
  height: 400px;
  border: 0.1px solid var(--v-accent-base);
}
</style>
