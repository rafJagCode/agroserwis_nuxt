<template>
<div class="email-us-card pa-8">
  <div class="email-us-card__header mb-2">
    <v-icon size="100" color="accent" left>mdi-wechat</v-icon>
    <div class="email-us-card__title text-h6 font-weight-medium accent--text">
      Kontakt z klientem jest dla nas bardzo ważny. Napisz z pewnością odpowiemy.
    </div>
  </div>
  <v-form v-model="valid" ref="form" lazy-validation>
    <v-text-field
      color="accent"
      label="Imię i nazwisko"
      v-model="name"
      :rules="nameRules"
      required
      validate-on-blur
    ></v-text-field>
    <v-text-field
      label="E-mail"
      v-model="email"
      :rules="emailRules"
      required
      validate-on-blur
      color="accent"
    ></v-text-field>
    <v-text-field
      label="Telefon"
      v-model="phone"
      color="accent"
    ></v-text-field>
    <v-textarea
      label="Wiadomość"
      v-model="message"
      :rules="messageRules"
      required
      no-resize
      validate-on-blur
      color="accent"
    ></v-textarea>
    <v-btn
      class="primary--text mt-2"
      color="warning"
      @click="submit"
      :disabled="!valid"
    >
      wyślij
    </v-btn>
  </v-form>
</div>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    name: '',
    nameRules: [
      v => !!v || 'Imię i nazwisko jest wymagane',
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail jest wymagany',
      v => /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'Wprowadzono niepoprawny email'
    ],
    phone: '',
    message: '',
    messageRules: [
      v => !!v || 'Treść wiadomości nie może być pusta'
    ]
  }),

  methods: {
    submit () {
      if (this.$refs.form.validate()) {
        // Native form submission is not yet supported
        axios.post('/api/submit', {
          name: this.name,
          email: this.email,
        })
      }
    },
  }
}
</script>

<style scoped>
.theme--light.v-label {
  color: #ff9800;
}
.email-us-card{
  height: 100%;
  display: flex;
  flex-direction: column;
}
.email-us-card__header{
  display: flex;
}
</style>
