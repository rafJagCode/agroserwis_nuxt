<template>
  <v-card class="card pa-6">
    <v-img
      class="card-img"
      :src="`/departments/images/${department.img}`"
      contain
    ></v-img>
    <div class="card-text">
      <p class="card-title app-text-h2">{{ department.name }}</p>
      <div class="card-info app-text-info">
        <p>{{ department.mobile }}</p>
        <p>{{ department.address }}</p>
        <p>{{ department.street }}</p>
      </div>
      <div>
        <v-btn
          class="app-text-button"
          color="accent"
          text
          plain
          :href="department.link"
          target="_blank"
          >Link<v-icon size="12">mdi-arrow-right-thin</v-icon></v-btn
        >
      </div>
    </div>
  </v-card>
</template>

<script>
export default {
  props: {
    department: null,
  },
}
</script>
<style scoped lang="scss">
.card {
  height: 100%;
  width: 100%;
  display: grid;
  justify-items: center;
  align-items: center;
  gap: 10%;
  box-shadow: 0px 3px 1px -2px rgba(133, 174, 67, 0.2),
    0px 2px 2px 0px rgba(133, 174, 67, 0.14),
    0px 1px 5px 0px rgba(133, 174, 67, 0.12) !important;
}
.card-img {
  max-width: 128px;
}
.card-text {
  width: fit-content;
  height: fit-content;
  display: grid;
  justify-content: center;
  text-align: center;
}
.card-text p {
  margin-bottom: 0.5rem;
}
@media (width>1150px) and (width<1560px) {
  .card {
    grid-auto-flow: column;
    & .card-img {
      justify-self: end;
    }
    & .card-text {
      justify-self: start;
    }
  }
}
@media (width>500px) and (width<800px) {
  .card {
    grid-auto-flow: column;
    & .card-img {
      justify-self: end;
    }
    & .card-text {
      justify-self: start;
    }
  }
}
</style>
