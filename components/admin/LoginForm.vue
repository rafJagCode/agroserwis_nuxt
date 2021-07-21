<template>
<div class="login-form ma-0">
  <div class="text-center ma-2">
    <v-snackbar
      v-model="snackbar"
      top
      color="secondary"
    >
      {{ text }}

      <template v-slot:action="{ attrs }">
        <v-btn
          color="warning"
          text
          v-bind="attrs"
          @click="snackbar = false"
        >
          Close
        </v-btn>
      </template>
    </v-snackbar>
  </div>
  <v-form v-model="valid" ref="form" lazy-validation>
    <v-text-field
      color="accent"
      label="Login"
      v-model="login"
      :rules="loginRules"
      required
      validate-on-blur
    ></v-text-field>
    <v-text-field
      color="accent"
      label="Hasło"
      v-model="password"
      :rules="passwordRules"
      required
      validate-on-blur
    ></v-text-field>
    <v-btn
      @click.prevent="logIn()"
      color="warning"
      :loading="loading"
    >
      Zaloguj
    </v-btn>
  </v-form>
</div>
</template>

<script>
export default {
  data: () => ({
    loading: false,
    valid: true,
    login: '',
    password: '',
    loginRules: [
      v => !!v || 'Login jest wymagany',
    ],
    passwordRules: [
      v => !!v || 'Hasło jest wymagane',
    ],
    snackbar: false,
    text: ``,
  }),
  methods: {
    logIn() {
      if (!this.valid) return;
      this.loading = true;
      this.$axios.post('/api/login', {"login": this.login, "password": this.password})
        .then(() => {
          this.$nuxt.$router.push({name: 'admin-departments'});
        })
        .catch((e) => {
          const message = e.response.data.message;
          this.text = message;
          this.snackbar = true;
        })
      .finally(()=>{
        this.loading = false;
      })
    }
  }
}
</script>

<style scoped>
.login-form{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  position: relative;
  height: max-content;
  width: 300px;
}
</style>
