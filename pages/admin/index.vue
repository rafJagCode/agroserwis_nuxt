<template>
  <div class="admin-page">
    <LoginForm></LoginForm>
  </div>
</template>

<script>
import LoginForm from '~/components/admin/LoginForm'
export default {
  components: { LoginForm },
  async fetch() {
    console.log('index admin fetch')
  },
}
</script>

<style scoped>
.admin-page {
  display: grid;
  place-items: center;
  min-height: calc(100vh - 66px);
}
</style>
