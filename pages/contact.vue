<template>
  <div class="contact">
    <div class="contact__content">
      <ContactHeader></ContactHeader>
      <ContactCards></ContactCards>
    </div>
    <MainFooter></MainFooter>
  </div>
</template>

<script>
import ContactHeader from "~/components/contact/ContactHeader";
import ContactCards from "~/components/contact/ContactCards";
import MainFooter from "~/components/footer/MainFooter";
export default {
  components:{
    MainFooter,
    ContactCards,
    ContactHeader,
  }
}
</script>

<style scoped>
.contact__content{
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
