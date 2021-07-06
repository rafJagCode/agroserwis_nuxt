<template>
  <div class="contact-form">
    <v-btn color="error" icon class="trash-btn" @click="remove()"><v-icon>mdi-trash-can</v-icon></v-btn>
    <v-form v-model="valid" ref="form" lazy-validation>
      <v-text-field
        color="accent"
        label="Imię i nazwisko"
        v-model="data.name"
      ></v-text-field>
      <v-text-field
        label="Telefon"
        v-model="data.phone"
        color="accent"
      ></v-text-field>
      <v-text-field
        label="Komórka"
        v-model="data.mobile"
        color="accent"
      ></v-text-field>
      <v-text-field
        label="Email"
        v-model="data.email"
        validate-on-blur
        :rules="emailRules"
        color="accent"
      ></v-text-field>
    </v-form>
  </div>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    emailRules: [
      v => !v || /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'Wprowadzono niepoprawny email'
    ],
  }),
  props: {
    data: null,
    index: null,
  },
  methods:{
    remove(){
      this.$emit('remove', this.index);
    }
  }
}

</script>

<style scoped>
.contact-form{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  position: relative;
}
.trash-btn{
  position: absolute;
  top: 10px;
  right: 10px;
}
</style>
