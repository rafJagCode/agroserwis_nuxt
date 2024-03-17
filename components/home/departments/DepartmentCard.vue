<template>
  <v-card class="card pa-6">
    <v-img
      class="card-img"
      :src="`/departments/images/${department.img}`"
      contain
    ></v-img>
    <v-card-title class="card-title app-text-h2">{{
      department.name
    }}</v-card-title>
    <v-card-text class="card-text d-flex align-center app-text-info">
      <p>{{ department.mobile }}</p>
      <p>{{ department.address }}</p>
      <p>{{ department.street }}</p>
    </v-card-text>
    <v-card-actions>
      <v-btn
        class="app-text-button"
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
  height: 100%;
  width: 100%;
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
.card-text {
  flex-direction: column;
  & * {
    margin: 1rem 2rem;
    text-align: center;
  }
  & :first-child {
    flex-basis: 100%;
  }
}
</style>
