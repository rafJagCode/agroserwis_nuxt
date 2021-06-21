<template>
  <v-container class="partners py-6">
    <v-row class="partners__text text-h6 font-weight-black primary--text" justify="center">NASI PARTNERZY</v-row>
    <v-row class="partners__row">
      <Partner
        v-for="partner in partners"
        :key="partner.image"
        :image="partner.image"
      ></Partner>
    </v-row>
    <v-divider color="primary" class="my-6"></v-divider>
  </v-container>
</template>

<script>
import Partner from '~/components/footer/partners/Partner';
export default {
  components: { Partner },
  data: () => ({
    partners: [
      {
        image:
          'case.svg',
      },
      {
        image:
          'annaburger.svg',
      },
      {
        image:
          'italmix.png',
      },
      {
        image:
          'lemken.png',
      },
      {
        image:
          'manitou.png',
      },
      {
        image:
          'mashio.png',
      },
      {
        image:
          'partner_agro.png',
      },
      {
        image: 'steyr.png',
      },
    ],
  }),
}
</script>

<style scoped>
.theme--light.v-divider {
  border-color: var(--v-primary-base);
}
.partners {
  display: flex;
  flex-direction: column;
}
.partners__row{
  justify-content: space-evenly;
}
.partners__text{
  font-family: 'Brygada 1918', serif!important;
}
</style>
