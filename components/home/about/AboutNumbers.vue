<template>
  <div class="about-numbers">
    <CounterElement
      v-for="counter in counters"
      :key="counter.text"
      :text="counter.text"
      :countTo="counter.countTo"
    />
  </div>
</template>
<script>
import CounterElement from './CounterElement'
import data from '/static/about/about_numbers.json'

export default {
  components: { CounterElement },
  data: () => ({
    counters: data,
  }),
}
</script>

<style scoped lang="scss">
.about-numbers {
  background: transparent;
  display: flex;
  gap: 10%;
  justify-content: center;
  align-items: center;
  grid-row: 1/2;
  grid-column: 1/2;
  z-index: 1;
  padding: 10% 0;
}
@media (max-width: 800px) {
  .about-numbers {
    flex-direction: column;
  }
}
</style>
