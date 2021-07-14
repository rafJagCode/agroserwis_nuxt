<template>
<div class="department-form">
  <v-form v-model="valid" ref="form" lazy-validation>
    <div v-if="department.name!=='Ustawienia domyślne'">
      <div class="department-form__counter py-2">
        Pozycja na stronie:
        <v-btn icon @click="moveDown()">
          <v-icon
            color="accent"
          >
            mdi-minus
          </v-icon>
        </v-btn>
        {{department.order + 1}}
        <v-btn icon @click="moveUp()">
          <v-icon
            color="accent"
          >
            mdi-plus
          </v-icon>
        </v-btn>
      </div>
      <v-checkbox
        color="accent"
        v-model="!department.disabled"
        label="Wyświetlaj na stronie"
      ></v-checkbox>
      <v-text-field
        color="accent"
        label="Oddział"
        v-model="department.name"
        :rules="nameRules"
        required
        validate-on-blur
      ></v-text-field>
      <v-text-field
        label="Ulica"
        v-model="department.street"
        :rules="streetRules"
        required
        validate-on-blur
        color="accent"
      ></v-text-field>
      <v-text-field
        label="Adres"
        v-model="department.address"
        :rules="addressRules"
        required
        validate-on-blur
        color="accent"
      ></v-text-field>
      <v-text-field
        label="Telefon"
        v-model="department.phone"
        color="accent"
      ></v-text-field>
      <v-text-field
        label="Komórka"
        v-model="department.mobile"
        color="accent"
      ></v-text-field>
      <v-text-field
        label="Email"
        v-model="department.email"
        :rules="emailRules"
        validate-on-blur
        color="accent"
      ></v-text-field>
      <v-combobox
        class="mt-2"
        color="accent"
        v-model="department.partners"
        :items="availablePartners"
        label="Partnerzy"
        multiple
        outlined
        dense
      ></v-combobox>
    </div>
    <SlideSelector v-if="department.slides" :slides="availableSlides" :selected="department.slides" @image-clicked="imageClicked"></SlideSelector>
    <v-btn
      class="primary--text mt-2"
      :color="changesToUpload ? 'warning' : 'accent'"
      @click.prevent="update()"
      :disabled="!valid"
    >
      {{ changesToUpload ? 'uaktualnij' : 'wszystko aktualne'}}
    </v-btn>
  </v-form>
</div>
</template>

<script>
import SlideSelector from "./SlideSelector";
export default {
  components: {SlideSelector},
  data: () => ({
    changesToUpload: false,
    valid: true,
    nameRules: [
      v => !!v || 'Nazwa oddziału jest wymagana',
    ],
    streetRules: [
      v => !!v || 'Ulica jest wymagana',
    ],
    addressRules: [
      v => !!v || 'Adres jest wymagany',
    ],
    emailRules: [
      v => !v || /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'Wprowadzono niepoprawny email'
    ],
  }),
  props: {
    department: null,
    availablePartners: null,
    availableSlides: null,
  },
  watch:{
    department: {
      deep: true,
      handler() {
        this.changesToUpload = true
      }
    }
  },
  methods: {
    async update () {
      if(!this.valid) return;
      await this.$axios.post(`/api/update-department/${this.department.link}`, this.department);
      this.changesToUpload = false;
    },
    imageClicked(image){
      if(this.department.slides.includes(image)){
        const index = this.department.slides.findIndex((item) => item === image);
        this.$delete(this.department.slides, index);
        return;
      }
      this.department.slides.push(image);
    },
    moveDown(){
      if(this.department.order === 0) return;
      this.department.order--;
    },
    moveUp(){
      this.department.order++;
    },
    removeNonExistingSlides(){
      if(!this.department.slides) return;
      this.department.slides = this.department.slides.filter((slide)=>{
        return this.availableSlides.includes(slide);
      });
    }
  },
  fetch(){
    this.removeNonExistingSlides();
  }
}

</script>

<style scoped>
.department-form{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  height: max-content;
}
</style>
