<template>
  <div class="departments ma-6">
    <DepartmentCard
      v-for="department in departments"
      :key="department.name"
      :department="department"
    />
  </div>
</template>

<script>
import DepartmentCard from './DepartmentCard'
import data from 'static/departments/data.json'

export default {
  created() {
    this.departments = data
  },
  components: { DepartmentCard },
}
</script>

<style scoped lang="scss">
.departments {
  display: grid;
  grid-template-columns: repeat(4, min-content);
  justify-content: center;
  gap: 2rem;
}
@media (max-width: 1560px) {
  .departments {
    grid-template-columns: repeat(2, min-content);
  }
}
@media (max-width: 800px) {
  .departments {
    grid-template-columns: min-content;
  }
}
</style>
