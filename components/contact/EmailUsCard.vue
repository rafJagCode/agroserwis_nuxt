<template>
<div class="email-us-card pa-8">

  <transition name="fade">
    <SendConfirmation :message="sentResponse" :sentSuccessfully="sentSuccessfully" v-show="showSendConfirmation"></SendConfirmation>
  </transition>
  <div class="email-us-card__header mb-2">
    <v-icon size="100" color="accent" left>mdi-wechat</v-icon>
    <div class="email-us-card__title text-h6 font-weight-medium accent--text" v-html="text">
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
    <v-text-field
      v-if="type==='spare-parts'"
      label="Producent Maszyny"
      v-model="producer"
      color="accent"
    ></v-text-field>
    <v-text-field
      v-if="type==='spare-parts'"
      label="Model Maszyny"
      v-model="model"
      color="accent"
    ></v-text-field>
    <v-text-field
      v-if="type==='spare-parts'"
      label="Nr Seryjny Maszyny"
      v-model="serialNumber"
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
  <v-progress-linear
    indeterminate
    color="warning"
    class="mt-2"
    v-show="sendingEmail"
  ></v-progress-linear>
</div>
</template>

<script>
import SendConfirmation from "~/components/contact/SendConfirmation";
export default {
  components: {SendConfirmation},
  data: () => ({
    sendingEmail: false,
    showSendConfirmation: false,
    sentSuccessfully: false,
    sentResponse: '',
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
    ],
    producer: '',
    model: '',
    serialNumber: ''
  }),
  props:{
    type: null,
    text: {
      default: 'Kontakt z klientem jest dla nas bardzo ważny. Napisz z pewnością odpowiemy.'
    }
  },
  methods: {
    async submit () {
      if (this.$refs.form.validate()) {
        this.sendingEmail = true;
        let info = `Dane Nadawcy:<br>Imię i Nazwisko: ${this.name}<br>Email: ${this.email}${this.phone ? '<br>Telefon: ' + this.phone : ''}`;
        if(this.type==='spare-parts'){
          let productInfo = `<br>Producent: ${this.producer}<br>Model: ${this.model}<br>Numer Seryjny: ${this.serialNumber}`;
          info += productInfo;
        }
        let message = info + `<br><br>Wiadomość: <br>${this.message}`;
        try{
          let response = await this.$axios.post('/api/send-mail', {
            to: "biuro@agro-serwis.pl",
            subject: "Wiadomość z AGROSERWIS",
            message: message,
            from: this.email
          });
          this.sentResponse = response.data.message;
          this.sentSuccessfully = true;
        }
        catch(error){
          this.sentResponse = error.response.data.message;
          this.sentSuccessfully = false;
        }

        this.sendingEmail = false;
        this.showSendConfirmation = true;
        setTimeout(()=>{
          this.showSendConfirmation = false;
        },4000)
      }
    },
  }
}
</script>

<style lang="scss">
.email-us-card{
  height: 100%;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 0 5px 1px var(--v-accent-base);
}
.email-us-card__header{
  display: flex;
}
.email-us-card__title{
  //max-width:300px;
}
.fade-enter-active {
  transition: opacity 500ms ease-out;
}
.fade-leave-active{
  transition: opacity 500ms ease-in;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
@media (max-width:400px){
  .email-us-card__header{
    flex-direction: column;
  }
  .email-us-card__title{
    text-align: center;
  }
}
</style>
