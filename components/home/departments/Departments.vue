<template>
  <div class="departments py-12 px-4">
      <DepartmentCard
        :department="department" v-for="department in departments" :key="department.name"
      >
      </DepartmentCard>
  </div>
</template>

<script>
import DepartmentCard from "~/components/home/departments/DepartmentCard";
export default {
  data(){
    return{
      departments: []
    }
  },
  async fetch() {
      const { data: departments } = await this.$axios.get('/api/get-departments');
      this.departments = departments
        .filter((department)=>{
          return department.name !== 'Ustawienia domyślne' && !department.disabled;
        })
        .sort((o1, o2)=>{
          return o1.order > o2.order && 1 || -1;
        })
  },
  components:{
    DepartmentCard
  },
}
</script>

<style scoped>
.departments{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}
@media (max-width: 1350px){
  .departments{
    justify-content: center;
  }
}

</style>
