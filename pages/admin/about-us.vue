<template>
  <div class="admin-about-us">
    <div class="admin-about-us__form">
      <v-form v-model="valid" ref="form" lazy-validation>
        <v-textarea
          label="O Nas"
          v-model="about"
          :rules="[(v) => !!v || 'To pole jest wymagane']"
          required
          validate-on-blur
          auto-grow
          color="accent"
        ></v-textarea>
        <v-btn
          class="primary--text mt-2"
          :color="changesToUpload ? 'warning' : 'accent'"
          @click.prevent="update()"
          :disabled="!valid"
        >
          {{ changesToUpload ? 'uaktualnij' : 'wszystko aktualne' }}
        </v-btn>
      </v-form>
    </div>
  </div>
</template>

<script>
export default {
  layout: 'admin',
  middleware: 'auth',
  data: () => ({
    changesToUpload: false,
    about: '',
    valid: true,
    firstChange: true,
  }),
  async fetch() {
    console.log('about admin fetch')
    const { data: about } = await this.$axios.get('/api/get-about-us')
    this.about = about.about
  },
  watch: {
    about: {
      deep: true,
      handler() {
        if (this.firstChange) {
          this.firstChange = false
          return
        }
        this.changesToUpload = true
      },
    },
  },
  methods: {
    async update() {
      if (!this.valid) return
      await this.$axios.post(`/api/update-about-us`, { about: this.about })
      this.changesToUpload = false
    },
  },
}
</script>

<style scoped>
.admin-about-us {
  display: grid;
  place-items: center;
}
.admin-about-us__form {
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  width: 60%;
  height: max-content;
}
</style>
