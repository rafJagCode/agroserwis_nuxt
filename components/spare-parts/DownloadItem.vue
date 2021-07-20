<template>
  <a :href="href">
    <div class="download-item">
      <v-icon size="150">{{item.icon}}</v-icon>
      <div class="download-item__text">
        {{item.text}}
      </div>
    </div>
  </a>
</template>

<script>
export default {
  props: {
    item: null
  },
  computed:{
    href(){
      if(this.item.type === 'link') return this.item.link;
      return "/documents/" + this.item.link;
    }
  }
}
</script>

<style scoped lang="scss">
.download-item{
  width: 250px;
  min-width: 250px;
  min-height: 250px;
  height: 250px;
  margin: 1em 0;
  display: grid;
  place-items: center;
  cursor: pointer;
  &:hover{
    border: 1px solid var(--v-accent-base);
    box-shadow: 0 10px 28px var(--v-accent-base), 0 10px 10px var(--v-accent-lighten1);

  }
}
.download-item__text{
  font-size: 1.5rem;
  text-transform: capitalize;
  font-family: 'Mate SC', serif;
  text-align: center;
  color: var(--v-secondary-base);
}
@media (max-width: 900px){
  .download-item{
    border: 1px solid var(--v-accent-base);
    box-shadow: 0 10px 28px var(--v-accent-base), 0 10px 10px var(--v-accent-lighten1);
  }
}
</style>
