<template>
  <div class="about">
      <div class="logo"><span class="a">A</span>rchi<span class="point">...</span>
      </div>
      <div >
      <img class="background" src="@/assets/img2.jpg" >
    </div>
    <Buttons />
  
  </div>
</template>
<script>
// @ is an alias to /src
import Buttons from '@/components/Button.vue'


export default {
  name: 'Accueil',
  components: {
    Buttons
  }
}
</script>
<style scoped>
*{
  box-sizing: border-box;
  margin: 0%;
  padding: 0%;
}
.background{
  flex: table;
  width: 100%;
  height: 100vh;
  opacity: 0.8;
  background-size: cover;
  
}
.logo{
  position: absolute;
  margin-top: 1.7%;
  margin-left: 1.7%;
  z-index: 55;
  font-weight: bold;
  font-size:large;
}
.a ,.point{
  color: rgb(122, 26, 133);
  font-size:larger;

}
</style>
