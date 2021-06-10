<template>
  <v-container class="partners pt-6 pb-0">
    <v-row justify="center" class="partners__row">
      <Partner v-for="partner in partners" :key="partner.image" :image="partner.image"></Partner>
    </v-row>
  </v-container>
</template>

<script>
import Partner from '~/components/Partner';
export default {
  components: {Partner},
  data: ()=>({
    partners: [
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-adagamingcenter.png'
      },
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-theartesianhotel.png'
      },
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-blackgoldcasino.png'
      },
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-bordercasino.png'
      },
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-chickasawtravelstop.png'
      },
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-chisholmtrailcasino.png'
      },
      {
        image: 'https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/logo-goldsbygamingcenter.png'
      },
      {
        image: 'https://via.placeholder.com/600/92c952'
      }
    ]
  })
}
</script>

<style scoped>
.partners{
  display: flex;
  justify-content: center;
}
.partners__row{
  flex-grow: 0.5;
}
.partners__col{
  cursor: pointer;
}
</style>
