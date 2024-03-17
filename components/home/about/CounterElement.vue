<template>
  <div class="counter-element" ref="counter">
    <span class="counter-number">{{ number }}</span>
    <span class="counter-text">{{ text }}</span>
  </div>
</template>
<script>
export default {
  data: () => ({
    observer: null,
    number: 1,
  }),
  props: {
    countTo: null,
    text: null,
  },
  methods: {
    runCounter(entries) {
      if (!entries[0].isIntersecting) return
      this.observer.disconnect()
      let intervalID

      intervalID = setInterval(() => {
        if (this.number >= this.countTo) clearInterval(intervalID)
        else this.number++
      }, 100)
    },
  },
  mounted() {
    this.observer = new IntersectionObserver(this.runCounter, {
      treshold: 1.0,
    })
    this.observer.observe(this.$refs.counter)
  },
  unmounted() {
    this.obeserver.disconnect()
  },
}
</script>

<style scoped lang="scss">
.counter-element {
  display: grid;
  place-items: center;
}
.counter-number {
  font-family: 'Raleway', sans-serif;
  font-weight: 700;
  font-size: 8rem;
  line-height: 9rem;
  color: var(--v-grey-lighten1);
}
.counter-text {
  font-family: 'Libre Baskerville', sans-serif;
  font-weight: 700;
  font-size: 3.5rem;
  color: var(--v-primary-base);
}
</style>
