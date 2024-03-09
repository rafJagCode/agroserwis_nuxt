<template>
  <div class="departments-cards">
    <DepartmentCard
      v-for="department in departments"
      :key="department.name"
      :department="department"
    />
  </div>
</template>

<script>
import DepartmentCard from './DepartmentCard'
import data from '/static/departments/data.json'

export default {
  data: () => ({
    departments: data,
  }),
  components: { DepartmentCard },
}
</script>

<style scoped lang="scss">
.departments-cards {
  --departments: 4;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(var(--departments), minmax(300px, 1fr));
  grid-template-rows: repeat(calc(4 / var(--departments)), minmax(300px, 1fr));
  justify-items: center;
  align-content: start;
  gap: 2rem;
}
@media (max-width: 1560px) {
  .departments-cards {
    --departments: 2;
  }
}
@media (max-width: 800px) {
  .departments-cards {
    --departments: 1;
  }
}
</style>
