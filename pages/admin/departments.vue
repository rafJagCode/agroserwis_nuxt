<template>
<div class="departments">
<DepartmentForm v-for="department in departments" :key="department.name" :department="department"></DepartmentForm>
</div>
</template>

<script>
import DepartmentForm from "~/components/admin/departments/DepartmentForm";
export default {
  components: {DepartmentForm},
  layout: 'admin',
  data: () => ({
    departments: [],
  }),
  async fetch(){
    this.departments = await this.$content('departments').fetch();
  }
}
</script>

<style scoped>
.departments{
  margin: 2em;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
</style>
