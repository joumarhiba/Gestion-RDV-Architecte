<template>
    <Side />

    <form class="absolute top-16 p-4 left-1/3 grid grid-cols-1 gap-4 place-content-center w-full max-w-lg">
  <h2 class="text-center uppercase tracking-wider text-purple-900 font-bold mb-12 md:text-base">Prendre un Rendez-Vous</h2>
  <div class="champ flex flex-wrap -mx-3 mb-6">
    <div class=" w-full ">
      <label class="l-sujet" for="grid-first-name">
        Sujet de Rendez-vous
      </label>
      <input class="sujet" id="grid-first-name" type="text">
      
    </div>
  
  </div>
  <div class="champ flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="l-date" for="grid-password">
        date
      </label>
      <input class="date" id="grid-password" type="date">
      
    </div>
  </div>
  <div class="champ flex flex-wrap -mx-3 mb-2">
    <div class="md:w-full px-3 mb-6 md:mb-0">
      <label class="l-creneaux block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
         créneaux possibles
      </label>
      <select  class="creneaux block w-full bg-gray-200 text-gray-700 border border-purple-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="creneau" id="creneau">
        <option value="n1">De 10h à 10:30h</option>
        <option value="n2">De 11h à 11:30h</option>
        <option value="n3">De 14h à 14:30h</option>
        <option value="n4">De 15h à 15:30h</option>
        <option value="n5">De 16h à 16:30h</option>
      </select>
    </div>
   </div>
    <div class="md:flex md:items-center">
    <div class="md:w-2/3"></div>
    <div class="md:w-1/3">
      <button class="shadow bg-purple-500 hover:bg-fuchsia-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
        Enregistrer
      </button>
    </div>
  </div>
</form>

</template>

<script>
import Side from '@/components/Side.vue'
export default {
    name:'Dashboard',
    components:{
        Side,
    }
}
</script>

<style scoped>
html{
  margin: 0%;
  padding: 0%;
  box-sizing:border-box;
}
h2{
  text-align: center;
  padding-top: 5%;
  margin-bottom: 7%;
   color:rgb(139,92,246);
  text-transform: uppercase;
}
.champ{
  margin-left: 30%;
}
.l-sujet, .l-date,.l-creneaux{
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  color: rgb(217,70,239);
  font-size: 0.8em;
  font-weight: bold;
  padding-bottom: 2%;
}
.sujet ,.creneaux ,.date{
    border:1px solid rgb(139,92,246);
    width: 60%;
    padding: 5px 0;
    margin-bottom: 4%;
    font-size: small;
    background-color: transparent;
}

button{
  margin-left: 60%;
  width: 100px;
    height: 30px;
    border: none;
  background-color: rgb(139,92,246);
    color: #fff;
    border-radius: 1px;
    cursor: pointer;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

</style>