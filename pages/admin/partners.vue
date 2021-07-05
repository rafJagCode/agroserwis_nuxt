<template>
<div class="admin-partners">
  <PartnerForm v-for="partner in partners" :key="partner.title" :partner="partner"></PartnerForm>
</div>
</template>

<script>
import PartnerForm from "~/components/admin/partners/PartnerForm";
export default {
  layout: 'admin',
  components: {PartnerForm},
  data: () => ({
    partners: null,
  }),
  async fetch(){
    const { data: partners } = await this.$axios.get('/api/get-partners');
    this. partners = partners;
  }
}
</script>

<style scoped>

.admin-partners{
  margin: 2em;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
</style>
