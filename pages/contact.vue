<template>
  <div class="contact">
    <div class="contact__content">
      <ContactHeader></ContactHeader>
      <ContactCards></ContactCards>
    </div>
  </div>
</template>

<script>
import ContactHeader from '~/components/contact/ContactHeader'
import ContactCards from '~/components/contact/ContactCards'
export default {
  components: {
    ContactCards,
    ContactHeader,
  },
  head() {
    return {
      title: 'kontakt',
    }
  },
}
</script>

<style scoped>
.contact__content {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
