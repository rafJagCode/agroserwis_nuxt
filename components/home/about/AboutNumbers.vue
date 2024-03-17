<template>
  <div class="about-numbers">
    <CounterElement
      v-for="counter in counters"
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
  gap: 20rem;
  justify-content: center;
  width: 100%;
  align-self: center;
  justify-self: center;
}
</style>
