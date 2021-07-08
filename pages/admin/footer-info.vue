<template>
<div class="admin-footer-info">
  <DepartmentSelector @change-department="changeDepartment" :departments="departments" class="my-8"></DepartmentSelector>
  <Section
    v-for="(section, index) in sections" :key="index"
    :section.sync="section"
    :index="index"
    @remove-section="removeSection"
    @move-section-down="moveSectionDown"
    @move-section-up="moveSectionUp"
  ></Section>
  <div class="admin-footer-info__fixed-btns">
    <v-btn
      class="primary--text mt-2"
      color="accent"
      @click.prevent="addSection()"
    >
      Dodaj Sekcje
    </v-btn>
    <v-btn
      class="primary--text mt-2"
      color="warning"
      @click.prevent="update()"
    >
      Uaktualnij
    </v-btn>
  </div>
</div>
</template>

<script>
import Section from '~/components/admin/footer-info/Section';
import DepartmentSelector from "~/components/admin/footer-info/DepartmentSelector";
export default {
  components: {DepartmentSelector, Section },
  layout: 'admin',
  data: () => ({
    sections: null,
    departments: null,
    selectedDepartment: null,
    fetching: true,
  }),
  async fetch(){
    const { data: departments } = await this.$axios.get('/api/get-departments-slugs');
    this.departments = departments.filter((department)=>{
      return department.name !== 'Białystok';
    });
    if(!this.selectedDepartment){
      this.selectedDepartment = this.departments[0];
    }
    await this.getSections(this.selectedDepartment.slug);
  },
  methods:{
    async getSections(department){
      const { data } = await this.$axios.get(`/api/get-department-footer-info/${department}`);
      this.sections = data.sections;
      this.fetching = false;
    },
    changeDepartment(department) {
      this.selectedDepartment = department;
      this.$fetch();
    },
    async update(){
      await this.$axios.post(`/api/update-department-footer-info/${this.selectedDepartment.slug}`, { "sections": this.sections });
    },
    addSection(){
      let section = {
        "name": "",
        "data": []
      };

      this.sections.push(section);
    },

    moveSectionDown(index){
      if(index===this.sections.length-1) return;
      this.sections.splice(index+2, 0, this.sections[index]);
      this.$delete(this.sections, index);
    },
    moveSectionUp(index){
      if(index===0) return;
      this.sections.splice(index-1, 0, this.sections[index]);
      this.$delete(this.sections, index+1);
    },
    removeSection(index){
      this.$delete(this.sections, index);
    }
  }
}
</script>

<style scoped>
.admin-footer-info__fixed-btns{
  position:fixed;
  display:flex;
  flex-direction: column;
  right: 2em;
  top:0%;
}
</style>
