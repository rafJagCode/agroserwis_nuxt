
<template>
  <div class="department mb-12">
  <v-hover v-slot="{hover}">
  <v-card
    class="department-card"
    width="300"
    :elevation="hover ? 12 : 4"
    color="success"
  >
    <div class="department-card__main-content">
<div class="department-card__header">
      <div class="department-card__crest">
      <v-img
        height="80"
        widht="80"
        contain
        :src="require(`~/assets/images/crest/${department.image}`)"
      ></v-img>
      </div>

        <v-card-title class="department-card__title pl-0">{{department.name}}</v-card-title>
</div>
      <div class="department-card__info">

        <v-card-text>
          <div v-show="department.street">{{department.street}}</div>
          <div v-show="department.address">{{department.address}}</div>
        </v-card-text>
      </div>
    </div>

    <div v-show="showActions" class="department-card__actions">
   <div v-show="department.phone" class="department-card__action">
      <v-divider class="mx-4"></v-divider>

      <v-card-actions>
        <v-btn
          color="deep-purple lighten-2"
          icon
        >
          <v-icon>mdi-phone</v-icon>
        </v-btn>
        <div class="ml-1 text-subtitle-2">{{department.phone}}</div>
      </v-card-actions>
   </div>

    <div v-show="department.mobile" class="department-card__action">
      <v-divider class="mx-4"></v-divider>

      <v-card-actions>
        <v-btn
          color="deep-purple lighten-2"
          icon
        >
          <v-icon>mdi-cellphone-basic</v-icon>
        </v-btn>
        <div class="ml-1 text-subtitle-2">{{department.mobile}}</div>
      </v-card-actions>
    </div>

    <div v-show="department.email" class="department-card__action">
      <v-divider class="mx-4"></v-divider>

      <v-card-actions>
        <v-btn
          color="deep-purple lighten-2"
          icon
        >
          <v-icon>mdi-email</v-icon>
        </v-btn>
        <div class="ml-1 text-subtitle-2">{{department.email}}</div>
      </v-card-actions>
    </div>
      <div v-show="department.fax" class="department-card__action">
        <v-divider class="mx-4"></v-divider>

        <v-card-actions>
          <v-btn
            color="deep-purple lighten-2"
            icon
          >
            <v-icon>mdi-fax</v-icon>
          </v-btn>
          <div class="ml-1 text-subtitle-2">{{department.fax}}</div>
        </v-card-actions>
      </div>
    </div>
  </v-card>
  </v-hover>
    <v-btn @click="showActions = !showActions" class="department-card__info-btn" text>kontakt</v-btn>
  </div>
</template>

<script>
export default {
  data: ()=>({
   showActions: false,
  }),
  props: {
    department: {
      mobile: null,
      phone: null,
      email: null,
      fax: null,
      name: null,
      street: null,
      address: null,
      description: null,
      image: null,
    }
  }
}
</script>>
<style scoped lang="scss">
.department{
  position: relative;
  display:grid;
  place-items:center;
}
.department-card{
  display: grid;
  grid-template-rows: 1fr auto;
  cursor: pointer;
}
.department-card__main-content{
  display: grid;
  grid-template-rows: 110px 1fr;
}
.department-card__header{
  display: grid;
  grid-auto-flow: column;
}
.department-card__crest{
  width:100%;
  display: grid;
  place-items: center;
}
.department-card__title{
  word-break: break-word;
}
.department-card__info-btn{
  position: absolute;
  bottom: 0;
  transform: translateY(calc(100% + 3px));
  background-color: var(--v-accent-base);
  width: 300px;
  margin: 0 auto;
}
</style>
