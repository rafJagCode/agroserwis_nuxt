<template>
    <div class="send-confirmation" :class="this.sentSuccessfully ? 'send-confirmation--success' : 'send-confirmation--error'">
      <div class="send-confirmation__message">
        <v-icon left color="primary" size="3rem">
          {{icon}}
        </v-icon>
        <div class="send-confirmation__text">
          {{message}}
        </div>
      </div>
    </div>
</template>

<script>
export default {
  props: {
    message: null,
    sentSuccessfully: false,
  },
  computed:{
    icon(){
      return this.sentSuccessfully ? 'mdi-email-check-outline' : 'mdi-email-remove-outline';
    }
  }
}
</script>

<style scoped>
.send-confirmation{
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  font-family: 'Brygada 1918', serif;
  font-weight: 500;
  color: var(--v-primary-base);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
}
.send-confirmation--error{
  background-color: var(--v-error-base);
}
.send-confirmation--success{
  background-color: var(--v-success-base);
}
.send-confirmation__message{
  display: flex;
  flex-direction: column;
  max-width: 90%;
}
.send-confirmation__text{
  text-align: center;
}
</style>
