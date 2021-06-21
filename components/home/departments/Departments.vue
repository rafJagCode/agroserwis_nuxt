<template>
  <div class="departments py-12 px-4">
    <div v-for="department in departments" :key="department.name">
      <DepartmentCard
        :department="department"
      >
      </DepartmentCard>
    </div>
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
    this.departments = await this.$content('departments').fetch();
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
