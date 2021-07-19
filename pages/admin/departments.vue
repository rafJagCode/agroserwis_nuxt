<template>
  <div class="departments">
    <DepartmentForm
      v-if="department"
      v-for="(department, index) in departments"
      :key="index"
      :department="department"
      :availablePartners="availablePartners"
      :availableSlides="availableSlides"
    >
    </DepartmentForm>
  </div>
</template>

<script>
import DepartmentForm from '~/components/admin/departments/DepartmentForm'
export default {
  components: { DepartmentForm },
  layout: 'admin',
  middleware: 'auth',
  data: () => ({
    departments: [],
    availablePartners: null,
    availableSlides: null,
  }),
  async fetch() {
    const { data: departments } = await this.$axios.get('/api/get-departments')
    const { data: availablePartners } = await this.$axios.get(
      '/api/get-partners-slugs'
    )
    const { data: availableSlides } = await this.$axios.get(
      '/api/get-slider-images'
    )
    this.departments = departments.sort((o1, o2) => {
      return (o1.order > o2.order && 1) || -1
    })

    this.availablePartners = availablePartners
    this.availableSlides = Object.values(availableSlides)
  },
}
</script>

<style scoped>
.departments {
  margin: 2em;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
</style>
