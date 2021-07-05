<template>
<div class="departments">
<DepartmentForm v-for="department in departments" :key="department.name" :department="department" :availablePartners="availablePartners"></DepartmentForm>
</div>
</template>

<script>
import DepartmentForm from "~/components/admin/departments/DepartmentForm";
export default {
  components: {DepartmentForm},
  layout: 'admin',
  data: () => ({
    departments: [],
    availablePartners: null,
  }),
  async fetch(){
    const { data: departments } = await this.$axios.get('/api/get-departments');
    const { data: availablePartners } = await this.$axios.get('/api/get-partners-slugs');
    this.departments = departments;
    this.availablePartners = availablePartners;
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
