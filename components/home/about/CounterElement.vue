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
      const start = performance.now()
      const duration = 1000
      const increment = (timestamp) => {
        const currDuration = timestamp - start
        const progress = Math.min(1, currDuration / duration)
        this.number = Math.floor(this.countTo * progress)
        if (this.number === this.countTo) return
        requestAnimationFrame(increment)
      }
      requestAnimationFrame(increment)
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
  font-size: 1rem;
}
.counter-number {
  font-family: 'Raleway', sans-serif;
  font-weight: 700;
  font-size: 8em;
  line-height: 9rem;
  color: var(--v-grey-lighten1);
}
.counter-text {
  font-family: 'Libre Baskerville', sans-serif;
  font-weight: 700;
  font-size: 3.5em;
  color: var(--v-primary-base);
}
@media (max-width: 1150px) {
  .counter-element {
    font-size: 0.8rem;
  }
}
</style>
