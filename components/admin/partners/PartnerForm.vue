<template>
  <div class="partner-form">
    <v-progress-linear
      indeterminate
      color="accent"
      v-if="loading"
    ></v-progress-linear>
    <div
      class="partner-form__changes-indicator px-2 py-1"
      :style="{color: changesToUpload ? 'var(--v-warning-base)' : 'var(--v-accent-base)'}">
      {{ changesToUpload ? 'uaktualnij' : 'wszystko aktualne'}}
    </div>
    <v-btn icon class="partner-form__remove-btn" @click="$emit('remove-partner', index)">
      <v-icon color="error">mdi-trash-can</v-icon>
    </v-btn>
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
      <ImageSelector :partnersImages="partnersImages" :selected="partner.image" @change-image="changeImage"></ImageSelector>
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
import ImageSelector from "./ImageSelector";
export default {
  components: { ImageSelector },
  data: () => ({
    loading: false,
    changesToUpload: false,
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
    partnersImages: null,
    index: null,
  },
  watch:{
    partner: {
      deep: true,
      handler() {
        this.changesToUpload = true
      }
    }
  },
  methods: {
    async update () {
      if(!this.valid) return;
      const fileName = this.partner.fileName ? this.partner.fileName : this.partner.title.toLowerCase();
      this.loading = true;
      await this.$axios.post(`/api/update-partner/${fileName}`, {...this.partner, fileName: fileName});
      this.loading = false;
      this.changesToUpload = false;
    },
    changeImage(image){
      this.partner.image = image;
    }
  }
}

</script>

<style scoped>
.partner-form{
  margin: 2em;
  padding: 2em;
  border: 2px solid var(--v-accent-base);
  position: relative;
  height: max-content;
}
.partner-form__changes-indicator{
  position: absolute;
  bottom: 2px;
  right:2px;
  font-size: 1rem;
  color: var(--v-accent-base);
  text-transform: uppercase;
}
.partner-form__remove-btn{
  position: absolute;
  top: 2px;
  right: 2px;
}
</style>
