<template>
  <div class="admin-about-us">
    <div class="admin-about-us__form">
      <v-form v-model="valid" ref="form" lazy-validation>
        <v-textarea
          label="O Nas"
          v-model="about"
          :rules="[v => !!v||'To pole jest wymagane']"
          required
          validate-on-blur
          auto-grow
          color="accent"
        ></v-textarea>
        <v-btn
          class="primary--text mt-2"
          color="warning"
          @click.prevent="update()"
          :disabled="!valid"
        >
          Uaktualnij
        </v-btn>
      </v-form>
    </div>
  </div>
</template>

<script>
  export default {
    layout: 'admin',
    data: () => ({
      about: '',
      valid: true,
    }),
    async fetch(){
      const { data: about } = await this.$axios.get('/api/get-about-us');
      this.about = about.about;
    },
    methods: {
      async update () {
        if(!this.valid) return;
        await this.$axios.post(`/api/update-about-us`, { "about": this.about });
      },
    },
  }

</script>

<style scoped>
.admin-about-us{
  display: grid;
  place-items: center;
}
.admin-about-us__form{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  width: 60%;
  height: max-content;
}
</style>

