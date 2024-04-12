<template>
  <v-form class="contact-form" v-model="valid" ref="form" lazy-validation>
    <v-text-field
      v-for="textField in textFields"
      :key="textField.label"
      color="grey-darken1"
      height="7rem"
      outlined
      rounded
      validate-on-blur
      v-bind="textField"
    ></v-text-field>
    <v-textarea
      color="grey-darken1"
      outlined
      rounded
      validate-on-blur
      no-resize
      auto-grow
      v-bind="textArea"
    ></v-textarea>
    <v-btn
      class="contact-btn app-text-button"
      block
      elevation="0"
      rounded
      x-large
      @click.prevent="showTooltip = true"
    >
      wyślij
    </v-btn>
    <v-tooltip
      content-class="tooltip"
      v-model="showTooltip"
      attach=".contact-btn"
    >
      <strong>Wysyłanie wiadomości jest obecnie niedostępne</strong>
    </v-tooltip>
  </v-form>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    textFields: [
      {
        model: '',
        label: 'Imię',
        rules: [(v) => !!v || 'Imię jest wymagane'],
      },
      {
        model: '',
        label: 'Nazwisko',
        rules: [(v) => !!v || 'Nazwisko jest wymagane'],
      },
      {
        model: '',
        label: 'Email',
        rules: [
          (v) => !!v || 'E-mail jest wymagany',
          (v) =>
            /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
            'Wprowadzono niepoprawny email',
        ],
      },
    ],
    textArea: {
      model: '',
      label: 'Widomość',
      rules: [(v) => !!v || 'Treść wiadomości nie może być pusta'],
    },
    showTooltip: false,
  }),
}
</script>

<style scoped lang="scss">
.contact-form {
  width: min(80rem, 100%);
}
::v-deep label.error--text + * {
  color: var(--v-error-base);
}
.contact-btn {
  position: relative;
  color: white !important;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  background-image: linear-gradient(
    to right,
    var(--v-accent-lighten1) 0%,
    var(--v-accent-darken1) 51%,
    var(--v-accent-lighten1) 100%
  );
  &:hover {
    opacity: 1;
    background-position: right center;
  }
}
.tooltip {
  top: 100% !important;
  left: 50% !important;
  transform: translate(-50%, 1rem);
  background: transparent;
}
</style>
