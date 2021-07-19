<template>
  <v-container class="partners py-6">
    <v-row
      class="partners__text text-h6 font-weight-black primary--text"
      justify="center"
      >NASI PARTNERZY</v-row
    >
    <v-row class="partners__row">
      <Partner
        v-for="(partner, index) in partners"
        :key="index"
        :image="partner"
      ></Partner>
    </v-row>
    <v-divider color="primary" class="mt-6"></v-divider>
  </v-container>
</template>

<script>
import Partner from '~/components/footer/partners/Partner'
export default {
  components: { Partner },
  data: () => ({
    partners: [],
  }),
  async fetch() {
    const { data: partnersImages } = await this.$axios.get(
      '/api/get-partners-images'
    )
    this.partners = Object.values(partnersImages)
  },
}
</script>

<style scoped>
.theme--light.v-divider {
  border-color: var(--v-primary-base);
}
.partners {
  display: flex;
  flex-direction: column;
  min-width: 100%;
}
.partners__row {
  justify-content: space-evenly;
}
.partners__text {
  font-family: 'Brygada 1918', serif !important;
}
</style>
