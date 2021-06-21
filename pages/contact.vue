<template>
<div class="contact">
  <ContactHeader></ContactHeader>
  <ContactCards></ContactCards>
</div>
</template>

<script>
import ContactHeader from "~/components/contact/ContactHeader";
import ContactCards from "~/components/contact/ContactCards";
export default {
  components:{
    ContactCards,
    ContactHeader,
  }
}
</script>

<style scoped>
.contact{
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
