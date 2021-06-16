<template>
  <div class="departments">
    <div v-for="department in departments" :key="department.name">
      <DepartmentCard
        :department="department"
      >
      </DepartmentCard>
    </div>
  </div>
</template>

<script>
export default {
  data: ()=>({
    departments: [
      {
        mobile: null,
        phone: '+48 86 270 30 99',
        email: 'biuro@agro-serwis.pl',
        fax: '+48 86 270 30 99',
        name: 'Oddział w Zambrowie',
        street: 'ul. Polowa 14',
        address: '18-300 Zambrów',
        description: '',
        image: 'zambrów.png',
      },
      {
        mobile: '+48 693 500 193',
        phone: null,
        email: null,
        fax: null,
        name: 'Oddział w Przasnyszu',
        street: 'ul. Leszno 44',
        address: '06-300 Przasnysz',
        description: null,
        image: 'przasnysz.png',
      },
      {
        mobile: '603 500 709',
        phone: '25 631 34 66',
        email: null,
        fax: null,
        name: 'Oddział w Starym Opolu k.Siedlec',
        street: 'ul. Warszawska 55',
        address: '08-103 Stare Opole',
        description: null,
        image: 'stare_opole.png',
      },
      {
        mobile: null,
        phone: '+48 85 662 71 23',
        email: null,
        fax: null,
        name: 'Odział w Białymstoku',
        street: 'ul. Elewatorska 13',
        address: '15-620 Białystok',
        description: null,
        image: 'białystok.png',
      },
      {
        mobile: null,
        phone: 'do uzupełnienia',
        email: null,
        fax: null,
        name: 'Odział w Grójcu',
        street: 'do uzupełnienia',
        address: 'do uzupełnienia',
        description: null,
        image: 'grójec.png',
      },


    ]
  })
}
</script>

<style scoped>
.departments{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
/*@media (min-width:1264px) and (max-width: 1904px){*/
/*}*/
/*@media (min-width:960px) and (max-width: 1264px){*/
/*  .departments{*/
/*    grid-auto-flow: row;*/
/*  }*/
/*}*/
/*@media (min-width:600px) and (max-width: 960px){*/
/*  .departments{*/
/*    grid-auto-flow: row;*/
/*  }*/
/*}*/
/*@media(max-width:600px){*/
/*  .departments{*/
/*    grid-auto-flow: row;*/
/*  }*/
/*}*/
</style>
