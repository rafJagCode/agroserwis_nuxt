<template>
  <v-row>
    <v-col class="col-md-3" v-for="department in departments" :key="department.name">
      <DepartmentCard
        :name="department.name"
        :phone="department.phone"
        :description="department.description"
        :image="department.image">
      </DepartmentCard>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data: ()=>({
    departments: [
      {
        name: 'oddział 1',
        image: 'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
        description: 'opis 1',
        phone: '666 666 111'
      },
      {
        name: 'oddział 2',
        image: 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1147&q=80',
        description: 'opis 2',
        phone: '666 666 222'
      },
      {
        name: 'oddział 3',
        image: 'https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=689&q=80',
        description: 'opis 3',
        phone: '666 666 333'
      },
      {
        name: 'oddział 4',
        image: 'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80',
        description: 'opis 4',
        phone: '666 666 444'
      }
    ]
  })
}
</script>

<style scoped>

</style>
