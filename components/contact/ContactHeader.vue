<template>
<div class="contact-header">
  <div class="contact-header__text pa-12">
    <div class="contact-header__title">Skontaktuj się z nami</div>
    <div class="contact-header__description">Szukasz pomocy? Masz pytania odnośnie produktu? Odezwij się do nas, z chęcią pomożemy.</div>
  </div>
  <div class="contact-header__image-container">
    <img class="contact-header__image" :src="require('~/assets/images/contact/contact.jpg')"/>
  </div>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.contact-header{
  display: grid;
  grid-auto-flow: column;
  grid-template-columns: 50% 50%;
  height: 35vh;
  place-items: center;
}
.contact-header__text{
  font-family:'Brygada 1918', serif;
  font-size: 3rem;
  color: var(--v-accent-base);
}
.contact-header__description{
  font-size: 1.5rem;
}
.contact-header__title{
  font-weight: 500;
  text-transform: uppercase;
}
.contact-header__image-container{
  height: 35vh;
}
.contact-header__image-container::before{
  position: absolute;
  content:'';
  width: 35vh;
  height: 100%;
  clip-path: polygon(0 0, 0 100%, 100% 100%, 66% 92%, 47% 76%, 42% 49%, 50% 24%, 68% 6%, 100% 0);
  color: var(--v-primary-base);
}
.contact-header__image{
  height: 100%;
}
</style>
