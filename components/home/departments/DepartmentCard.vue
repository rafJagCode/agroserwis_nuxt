<template>
  <v-card class="card pa-6">
    <v-img
      class="card-img"
      :src="`/departments/images/${department.img}`"
      contain
    ></v-img>
    <v-card-title class="card-title">{{ department.name }}</v-card-title>
    <v-card-text class="card-text d-flex align-center">
      <p>{{ department.mobile }}</p>
      <p>{{ department.address }}</p>
      <p>{{ department.street }}</p>
    </v-card-text>
    <v-card-actions>
      <v-btn
        class="card-link"
        color="accent"
        text
        plain
        :href="department.link"
        target="_blank"
        >Link<v-icon size="12">mdi-arrow-right-thin</v-icon></v-btn
      ></v-card-actions
    >
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
  height: 400px;
  width: 300px;
  display: grid;
  align-content: space-between;
  box-shadow: 0px 3px 1px -2px rgba(133, 174, 67, 0.2),
    0px 2px 2px 0px rgba(133, 174, 67, 0.14),
    0px 1px 5px 0px rgba(133, 174, 67, 0.12) !important;
  & * {
    justify-content: center;
  }
}
.card-img {
  height: 128px;
}
.card-title {
  font-family: Roboto, sans-serif;
  font-size: 1.6rem;
  font-weight: 500;
  letter-spacing: 0.1rem;
}
.card-text {
  font-size: 1.1rem;
  flex-direction: column;
  & * {
    margin: 0.1rem 0.2rem;
    text-align: center;
  }
  & :first-child {
    flex-basis: 100%;
  }
}
.card-link {
  font-size: 1.2rem;
}
@media (max-width: 1560px) {
  .card {
    height: 300px;
    width: 450px;
  }
  .card-img {
    height: 80px;
  }
  .card-text {
    flex-direction: row;
    flex-wrap: wrap;
  }
}
@media (max-width: 1150px) {
  .card {
    height: 330px;
    width: 300px;
  }
}
@media (max-width: 800px) {
  .card {
    height: 350px;
    width: 250px;
  }
}
@media (max-width: 800px) {
  .card {
    height: 300px;
    width: 480px;
  }
}
@media (max-width: 550px) {
  .card {
    width: 80vw;
  }
}
</style>
