<template>
<div class="contact-cards">
  <div class="contact-card">
    <CallUsCard></CallUsCard>
  </div>
  <div class="contact-card">
    <EmailUsCard></EmailUsCard>
  </div>
</div>
</template>

<script>
import CallUsCard from "~/components/contact/CallUsCard";
import EmailUsCard from "~/components/contact/EmailUsCard";
export default {
  components: {EmailUsCard, CallUsCard}
}
</script>

<style scoped>
.contact-cards{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap:50px;
  place-items: center;
  margin-left: 20%;
  position: relative;
  top: -80px;
}
.contact-card{
  background-color: var(--v-primary-base);
  width:  500px;
  height: max-content;
}
@media (max-width: 1400px){
  .contact-cards{
    margin-left: 0;
  }
}
@media (max-width: 1080px){
  .contact-cards{
    grid-template-columns: auto;
  }
}
@media (max-width: 520px){
  .contact-card{
    width: 90vw;
  }
}
</style>
