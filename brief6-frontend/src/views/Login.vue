<template>
<div id="form">
      <form @submit.prevent="envoyer" class="absolute top-16 p-4 left-1/3 grid grid-cols-1 gap-4 place-content-center w-full max-w-lg">
  <h2 class="text-center uppercase tracking-wider text-purple-900 font-bold mb-0" >Login</h2>
  <h5 class="text-center tracking-wide text-purple-900 text-xs mb-12">Entrer vos informations</h5>
  <div class="champ flex flex-wrap -mx-3 mb-6">
    <div class=" w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="l-nom" for="grid-first-name">
        Nom
      </label><br>
      <input v-model="nom" class="nom" id="grid-first-name" type="text">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="l-prenom" for="grid-last-name">
        Prénom
      </label><br>
      <input v-model="prenom" class="prenom" id="grid-last-name" type="text" >
    </div>
  </div>
  <div class="champ flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="l-reference" for="grid-password">
        Réference
      </label><br>
      <input v-model="reference" class="reference" id="grid-password" type="text">
      
    </div>
  </div>
   
    <div class="md:flex md:items-center">
    <div class="md:w-2/3"></div>
    <div class="md:w-1/3">
      <button>Envoyer</button>
    </div>
  </div>
</form>

</div>
</template>

<script>
// import axios from 'axios'

export default {
  name:'Login',
  data(){
    return{
      nom:'',
      prenom:'',
      reference:''
    }
  },
  methods:{
    
    
  }  
}
</script>

<style>
html{
  margin: 0%;
  padding: 0%;
  box-sizing: border-box;
}
#form{
    background-color: rgba(217,70,239,.3) ;
    border-radius: 10px;
    width: 70%;
    margin-top: 5%;
    margin-left: 14%;
    /* margin-bottom: 7%; */
    padding: 30px 13px 50px;
}
h2{
  text-align: center;
  padding-top: 5%;
  /* rgb(217 70 239) */
   color:rgb(139,92,246);
  text-transform: uppercase;
}
h5{
  text-align: center;
  margin-bottom: 4%;
  color:rgb(217,70,239);
}
.l-nom , .l-prenom , .l-reference{
  color: rgb(217,70,239);
  font-size: 0.8em;
  font-weight: bold;
  }
  .nom , .prenom , .reference{
            border: none;
            border-bottom:1px solid rgb(139,92,246);
            width: 70%;
            padding: 5px 0;
            margin-bottom: 4%;
            font-size: small;
            background-color: transparent;
  }
  .champ{
    margin-left: 20%;
  }
  button{
    background-color: rgb(139,92,246);
    color: #fff;
    border-radius: 1px;
    width: 100px;
    height: 30px;
    border: none;
    font-size: 0.7em;
    font-weight: bold;
    margin-left: 70%;
    cursor: pointer;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
button:hover{
    transition: 0.7s ease;
    background-color: rgb(139,92,246);
    transform: scale(1.1);
}
</style>