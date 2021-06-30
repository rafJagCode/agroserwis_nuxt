
<template>
  <div class="department mb-12">
  <v-hover v-slot="{hover}">
  <v-card
    class="department-card"
    :class="hover ? 'department-card--shadow' : ''"
    width="300"

    color="info"
  >
    <NuxtLink v-show="department.name !== 'Białystok'" class="department-card__main-content" :to="department.link">
      <div class="department-card__go-to-page">Przejdź do strony oddziału</div>
      <div class="department-card__header">
        <div class="department-card__crest">
          <v-img
            height="80"
            width="80"
            contain
            :src="require(`~/assets/images/crest/${department.image}`)"
          ></v-img>
        </div>

        <v-card-title class="department-card__title py-0 pl-0 pr-4 accent--text">{{department.name}}</v-card-title>
      </div>
      <div class="department-card__info">

        <v-card-text class="pt-0 font-weight-medium">
          <div v-show="department.street">{{department.street}}</div>
          <div v-show="department.address">{{department.address}}</div>
        </v-card-text>
      </div>
    </NuxtLink>

    <a v-show="department.name === 'Białystok'" class="department-card__main-content" :href="department.link">
      <div class="department-card__go-to-page">Przejdź do strony oddziału</div>
      <div class="department-card__header">
        <div class="department-card__crest">
          <v-img
            height="80"
            width="80"
            contain
            :src="require(`~/assets/images/crest/${department.image}`)"
          ></v-img>
        </div>

        <v-card-title class="department-card__title py-0 pl-0 pr-4 accent--text">{{department.name}}</v-card-title>
      </div>
      <div class="department-card__info">

        <v-card-text class="pt-0 font-weight-medium">
          <div v-show="department.street">{{department.street}}</div>
          <div v-show="department.address">{{department.address}}</div>
        </v-card-text>
      </div>
    </a>

    <div v-show="showActions" class="department-card__actions">
   <div v-show="department.phone" class="department-card__action">
      <v-divider class="mx-4"></v-divider>

      <v-card-actions>
        <v-btn
          class="department-card__contact-btn"
          color="accent"
          text
          block
          :href="`tel:${department.phone}`"
        >
          <v-icon left size="25">mdi-phone</v-icon>
          <div class="ml-1 text-subtitle-2">{{department.phone}}</div>
        </v-btn>
      </v-card-actions>
   </div>

    <div v-show="department.mobile" class="department-card__action">
      <v-divider class="mx-4"></v-divider>

      <v-card-actions>
        <v-btn
          class="department-card__contact-btn"
          color="accent"
          text
          block
          :href="`tel:${department.mobile}`"
        >
          <v-icon left size="25">mdi-cellphone-basic</v-icon>
          <div class="ml-1 text-subtitle-2">{{department.mobile}}</div>
        </v-btn>
      </v-card-actions>
    </div>

    <div v-show="department.email" class="department-card__action">
      <v-divider class="mx-4"></v-divider>

      <v-card-actions>
        <v-btn
          class="department-card__contact-btn"
          color="accent"
          text
          block
          :href="`mailto:${department.email}`"
        >
          <v-icon left size="25">mdi-email</v-icon>
          <div class="ml-1 text-subtitle-2">{{department.email}}</div>
        </v-btn>
      </v-card-actions>
    </div>
    </div>
  </v-card>
  </v-hover>
    <v-btn @click="showActions = !showActions" class="department-card__info-btn primary--text" text>kontakt</v-btn>
  </div>
</template>

<script>
export default {
  data: ()=>({
   showActions: false,
  }),
  props: {
    department: null
  }
}
</script>>
<style scoped lang="scss">
.department{
  flex: 1 1 150px; /*  Stretching: */
  flex: 0 1 150px; /*  No stretching: */
  margin: 5px;
  position: relative;
}
.department-card{
  display: grid;
  grid-template-rows: 1fr auto;
  padding: 4px;
}
.department-card--shadow{
  box-shadow: 0 0 1px 2px var(--v-accent-base)!important;
}
.department-card__main-content{
  cursor: pointer;
  display: grid;
  grid-template-rows: auto 110px 1fr;
  color: black;
  text-decoration: none;
  white-space: nowrap;
  &:hover .department-card__go-to-page{
    font-weight: 600;
    font-size: 0.9rem;
  }
}
.department-card__go-to-page{
  text-align: center;
  background-color: var(--v-accent-base);
  color: var(--v-primary-base);
  width: 100%;
  font-size: 0.875rem;
  border-radius: 4px;
  font-weight: 500;
  font-family: 'Brygada 1918', serif;
  text-transform: uppercase;
  height:36px;
  line-height: 36px;
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
.department-card__contact-btn{
  justify-content: left;
  text-transform: lowercase;
}
.department-card__info-btn{
  position: absolute;
  bottom: 0;
  transform: translateY(calc(100% + 3px));
  background-color: var(--v-accent-base);
  width: 300px;
  margin: 0 auto;
  font-family: 'Brygada 1918', serif;
  font-weight: 600;
}
</style>
