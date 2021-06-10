
<template>
  <v-card
    class="mx-auto my-md-6"
    max-width="374"
  >

    <v-img
      height="250"
      :src="image"
    ></v-img>

    <v-card-title>{{name}}</v-card-title>

    <v-card-text>
      <div>{{description}}</div>
    </v-card-text>

    <v-divider class="mx-4"></v-divider>

    <v-card-actions>
      <v-btn
        color="deep-purple lighten-2"
        icon
      >
        <v-icon>mdi-phone</v-icon>
      </v-btn>
      <div class="ml-1 text-subtitle-2">{{phone}}</div>
    </v-card-actions>
  </v-card>
</template>

<script>
export default {
  props: {
    phone: null,
    name: null,
    description: null,
    image: null,
  },
}
</script>>
