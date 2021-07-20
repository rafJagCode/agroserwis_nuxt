<template>
  <div class="spare-parts">
    <div class="spare-parts__content">
      <div class="spare-parts__image">
        <div class="spare-parts__header-bg">
          <SparePartsHeader class="spare-parts__header"></SparePartsHeader>
        </div>
      </div>
      <EmailUsCard
        type="spare-parts"
        text="Jesteśmy zawsze pomocni.<br>Skontaktuj się z naszymi Doradcami Technicznymi."
        class="spare-parts__email-us-card my-4"
      ></EmailUsCard>
    </div>
    <DownloadSection></DownloadSection>
    <MainFooter></MainFooter>
  </div>
</template>

<script>
import MainFooter from "~/components/footer/MainFooter";
import EmailUsCard from "~/components/contact/EmailUsCard";
import SparePartsHeader from "~/components/spare-parts/SparePartsHeader";
import DownloadSection from "~/components/spare-parts/DownloadSection";
export default {
  components:{
    DownloadSection,
    SparePartsHeader,
    EmailUsCard,
    MainFooter,
  }
}
</script>

<style>
.spare-parts__content{
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}
.spare-parts__image{
  background-image: url('~assets/images/spare-parts/spare-parts-bg.jpg');
  width: 100%;
  height:100vh;
  background-size: cover;
  max-height: 870px;
}
.spare-parts__header-bg{
  position: relative;
  right: 0;
  top: calc(50% - 200px);
  /*transform: translateY(-50%);*/
  width: 100%;
  height: 400px;
}
.spare-parts__header-bg:before{
  background-color: var(--v-secondary-darken1);
  content: '';
  position: absolute;
  inset: 0;
  mix-blend-mode: multiply;
  z-index:0;
}
.spare-parts__header{
  position: absolute;
  top: 50%;
  right: 5%;
  transform: translateY(-50%);
  font-size: 1.2rem;
  font-family: 'Brygada 1918', serif;
  width:50%;
  color: var(--v-accent-base);
}
.spare-parts__email-us-card{
  position: absolute;
  background-color: var(--v-secondary-lighten1);
  /*mix-blend-mode: multiply;*/
  height: 830px;
  width: 600px;
  left: 5%;
}
.theme--light.v-label{
  color: var(--v-primary-base);
}
@media (max-width: 1600px){
  .spare-parts__content{
    /*flex-direction: row;*/
  }
  .spare-parts__header-bg{
    top: 0;
  }
  .spare-parts__header{
    left:50%;
    transform: translate(-50%,-50%);
  }
  .spare-parts__email-us-card{
    position: relative;
    left:0;
    margin: auto;
    top: -100px;
  }
}
@media (max-width: 1150px){
  .spare-parts__header{
    width: 90%;
  }
}
@media (max-width: 750px){
  .spare-parts__header-bg{
    height: 100%;
  }
  .spare-parts__header{
    font-size: 1rem;
  }
  .spare-parts__email-us-card{
    position: initial;
    width: 90%;
    height: max-content;
  }
}
</style>
