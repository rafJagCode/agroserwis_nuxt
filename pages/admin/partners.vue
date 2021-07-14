<template>
<div class="admin-partners">
  <v-btn color="warning" class="admin-partners__add-partner-btn" @click="addPartner()">Dodaj Partnera</v-btn>
  <PartnerForm
    v-for="(partner, index) in partners"
    :key="index" :partner="partner"
    :partnersImages="partnersImages"
    :index="index"
    @remove-partner="removePartner"
  ></PartnerForm>
</div>
</template>

<script>
import PartnerForm from "~/components/admin/partners/PartnerForm";
export default {
  layout: 'admin',
  middleware: 'auth',
  components: {PartnerForm},
  data: () => ({
    partners: null,
    partnersImages: null,
  }),
  async mounted(){
    const { data: partners } = await this.$axios.get('/api/get-partners');
    this.partners = partners;
    const { data: partnersImages } = await this.$axios.get('/api/get-partners-images');
    this.partnersImages = Object.values(partnersImages);
  },
  methods:{
    async removePartner(index){
      const fileName = this.partners[index].fileName;
      if(!fileName){
        this.$delete(this.partners, index);
        return;
      }
      await this.$axios.post(`/api/remove-partner/${fileName}`)
      .then(()=>{
        this.$delete(this.partners, index);
      })
    },
    addPartner(){
      const partner = {
        "title":"",
        "description":"",
        "image":"",
        "link":"",
        "fileName":""
      };
      this.partners.push(partner);
    }
  }
}
</script>

<style scoped>

.admin-partners{
  margin: 2em;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.admin-partners__add-partner-btn{
  position: fixed;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
}
</style>
