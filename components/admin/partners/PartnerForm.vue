<template>
  <div class="partner-form">
    <v-form v-model="valid" ref="form" lazy-validation>
      <v-text-field
        color="accent"
        label="Tytuł"
        v-model="partner.title"
        :rules="titleRules"
        required
        validate-on-blur
      ></v-text-field>
      <v-textarea
        label="Opis"
        v-model="partner.description"
        :rules="descriptionRules"
        required
        validate-on-blur
        color="accent"
      ></v-textarea>
      <v-text-field
        label="Link"
        v-model="partner.link"
        :rules="linkRules"
        required
        validate-on-blur
        color="accent"
      ></v-text-field>
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
</template>

<script>
export default {
  data: () => ({
    valid: true,
    titleRules: [
      v => !!v || 'Tytuł jest wymagany',
    ],
    descriptionRules: [
      v => !!v || 'Opis jest wymagana',
    ],
    linkRules: [
      v => !!v || 'Link jest wymagany',
    ],
  }),
  props: {
    partner: null,
  },
  methods: {
    async update () {
      if(!this.valid) return;
      await this.$axios.post(`/api/update-partner/${this.partner.fileName}`, this.partner);
    },
  }
}

</script>

<style scoped>
.partner-form{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
}
</style>
