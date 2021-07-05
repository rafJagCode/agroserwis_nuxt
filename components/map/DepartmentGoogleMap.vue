<template>
<div class="department-google-map mt-6">
  <iframe
    width="100%"
    :height="$vuetify.breakpoint.xs ? 400 : 600"
    style="border:0"
    loading="lazy"
    allowfullscreen
    :src="link">
  </iframe>
</div>
</template>

<script>
export default {
  data: () =>({
    link: null,
  }),
  async fetch(){
    const department = this.$route.params.department;
    const response = await this.$axios.get(`/api/get-department/${department}`);
    const departmentInfo = response.data;
    let location = departmentInfo.street + "," + departmentInfo.address;
    location = location.replace(/\s/g, "+");
    this.link = `https://www.google.com/maps/embed/v1/place?key=AIzaSyCLBv6OT89Rk2BdJ3PJgFUxT_laoCkAMt4&q=${location}&language=pl`;
  }
}
</script>

<style scoped>
iframe{
  position: relative;
  bottom:-7px;
}
</style>
