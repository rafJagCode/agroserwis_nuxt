<template>
  <div class="contact-form">
    <v-btn color="error" icon class="trash-btn" @click="remove()"><v-icon>mdi-trash-can</v-icon></v-btn>
    <v-form v-model="valid" ref="form" lazy-validation>
      <v-text-field
        color="accent"
        label="Informacja"
        v-model="data.text"
      ></v-text-field>
    </v-form>
  </div>
</template>

<script>
export default {
  data: () => ({
    valid: true,
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
