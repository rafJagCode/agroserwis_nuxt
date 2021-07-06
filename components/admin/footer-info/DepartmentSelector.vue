<template>
  <div class="department-selector text-center">
    <v-menu offset-y>
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          color="warning"
          v-bind="attrs"
          v-on="on"
          width="500"
        >
          {{ selectedDepartment ? selectedDepartment.name : departments[0].name}}
        </v-btn>
      </template>
      <v-list>
        <v-list-item
          v-for="(department, index) in departments"
          :key="index"
          class="department-selector__item"
          @click="changeDepartment(department)"
        >
          <v-list-item-title>{{ department.name }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>

<script>
export default {
  data: () =>({
    selectedDepartment: null,
  }),
  props:{
    departments: null,
  },
  methods:{
    changeDepartment(department){
      this.selectedDepartment = department;
      this.$emit('change-department', department);
    }
  },
}
</script>
<style scoped lang="scss">
.department-selector__item{
  cursor: pointer;
  &:hover{
    background-color: var(--v-warning-base);
  }
}
</style>
