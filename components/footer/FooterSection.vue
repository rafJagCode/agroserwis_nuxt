<template>
  <div class="section">
    <h4 class="section-title">{{ section.title }}</h4>
    <template v-for="item in section.items">
      <v-btn
        v-if="item.type === 'link'"
        color="accent"
        plain
        :href="item.href"
        :key="item.value"
        class="section-link"
        >{{ item.value }}</v-btn
      >
      <span v-else class="section-text">{{ item.value }}</span>
    </template>
  </div>
</template>
<script>
export default {
  props: {
    section: null,
  },
}
</script>

<style scoped lang="scss">
.section {
  display: grid;
  align-items: center;
  font-family: Libre Baskerville, serif;
  height: fit-content;
}
.section-title {
  text-transform: uppercase;
  font-weight: 700;
  color: var(--v-primary-darken2);
  font-size: 2.2rem;
  height: 3rem;
  margin-bottom: 3rem;
}
::v-deep.section-link {
  font-weight: 500;
  font-size: 1.7rem;
  text-transform: initial;
  justify-content: start;
  padding: 1rem 0 !important;
  height: fit-content !important;
  width: fit-content;
  & .v-btn__content {
    line-height: revert;
    letter-spacing: revert;
    text-indent: rever;
  }
}
.section-text {
  font-weight: 500;
  color: var(--v-primary-lighten4);
  font-size: 1.7rem;
  padding: 1rem 0;
}
@media (max-width: 600px) {
  .section {
    display: grid;
    justify-items: center;
  }
  .section-title {
    margin-bottom: 1rem;
  }
  .section-link {
    justify-content: center;
  }
}
</style>
