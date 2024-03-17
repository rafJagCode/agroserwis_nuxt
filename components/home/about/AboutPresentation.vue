<template>
  <article class="about-presentation">
    <h1 class="about-title app-text-h2">
      {{ presentation.title }}
    </h1>
    <ul class="about-text app-text-long pa-0" v-html="presentation.text"></ul>
  </article>
</template>
<script>
import data from '/static/about/data.json'
export default {
  data: () => ({
    presentation: data,
  }),
}
</script>

<style scoped lang="scss">
.about-presentation {
  height: fit-content;
  max-width: 80%;
  margin-bottom: 3rem;
  align-self: end;
  justify-self: center;
  background: var(--v-primary-base);
  box-shadow: 2px 2px 5px 0px gray;
  display: grid;
  padding: 4rem 6rem;
}
.about-title {
  align-self: start;
}
::v-deep.about-text li {
  position: relative;
  padding: 1.5rem 0;
  &:first-child {
    border-bottom: solid 2px var(--v-accent-base);
  }
}
</style>
