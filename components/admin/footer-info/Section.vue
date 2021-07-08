<template>
  <div class="section">
    <v-btn class="section__show-btn" icon @click="showSection = !showSection">
      <v-icon v-show="!showSection">mdi-chevron-double-down</v-icon>
      <v-icon v-show="showSection">mdi-chevron-double-up</v-icon>
    </v-btn>
    <div class="section__add-data-btns">
      <v-btn icon @click="addContact()">
        <v-icon>mdi-account-plus</v-icon>
      </v-btn>
      <v-btn @click="addInfo()" icon>
        <v-icon>mdi-information</v-icon>
      </v-btn>
      <v-btn @click="addLink()" icon>
        <v-icon>mdi-web</v-icon>
      </v-btn>
      <v-btn @click="moveSectionDown()" icon>
        <v-icon>mdi-arrow-down-bold</v-icon>
      </v-btn>
      <v-btn @click="moveSectionUp()" icon>
        <v-icon>mdi-arrow-up-bold</v-icon>
      </v-btn>
    </div>
    <v-btn class="section__remove-section-btn" @click="removeSection()" color="error" x-small>
      USUŃ SEKCJE
    </v-btn>
    <v-text-field
      color="warning"
      label="Nazwa sekcji"
      v-model="section.name"
    ></v-text-field>
    <div class="section__data" v-show="showSection">
      <Info v-if="data.type === 'info'" v-for="(data, index) in section.data" :key="index" :data.sync="data" :index="index" @remove="remove"></Info>
      <Contact v-if="data.type === 'contact'" v-for="(data, index) in section.data" :key="index" :data.sync="data" :index="index" @remove="remove"></Contact>
      <Link v-if="data.type === 'link'" v-for="(data, index) in section.data" :key="index" :data.sync="data" :index="index" @remove="remove"></Link>
    </div>
  </div>
</template>

<script>
import Contact from "~/components/admin/footer-info/Contact";
import Info from "~/components/admin/footer-info/Info";
import Link from "~/components/admin/footer-info/Link";
export default {
  components: {Info, Link, Contact},
  data: () => ({
    showSection: false,
  }),
  props: {
    section: null,
    index: null,
  },
  methods:{
    addContact(){
      let contact = {
            "type": "contact",
            "name": "",
            "mobile": "",
            "email": ""
      };

      this.section.data.push(contact);
    },
    addLink(){
      let link = {
        "type": "link",
        "value": ""
      };

      this.section.data.push(link);
    },
    addInfo(){
      let info = {
        "type": "info",
        "text": ""
      };

      this.section.data.push(info);
    },

    remove(index){
      this.$delete(this.section.data, index);
    },

    moveSectionDown(){
      this.$emit('move-section-down', this.index);
    },
    moveSectionUp(){
      this.$emit('move-section-up', this.index);
    },
    removeSection(){
      this.$emit('remove-section', this.index);
    }
  }
}
</script>
<style scoped>
.section{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-warning-base);
  position: relative;
}
.section__show-btn{
  position: absolute;
  top: 0px;
  left: 0px;
}
.section__add-data-btns{
  position: absolute;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
}
.section__remove-section-btn{
  position:absolute;
  right: 2px;
  top: 2px;
}
</style>

