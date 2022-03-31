<template>
  <div class="home h-full">
    <Side />
  

<form @submit.prevent="envoyer" class="">
  <h2 class="" >Register</h2>
  <h5 class="">Entrer vos informations</h5>
  <div class="inputs ">
    <div class=" ">
      <label class="l-nom" for="grid-first-name">
        Nom
      </label><br>
      <input v-model="nom" class="nom " id="grid-first-name" type="text" >
      
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="l-prenom" for="grid-last-name">
        Prénom
      </label><br>
      <input v-model="prenom" class=" prenom" id="grid-last-name" type="text">
    </div>
  </div>
  <div class="inputs">
    <div class="w-full px-3">
      <label class="l-profession" for="grid-password">
        Profession
      </label><br>
      <input v-model="profession" class="profession" id="grid-password" type="text" >
      
    </div>
  </div>
  <div class="inputs">
    <div class="l-age">
      <label class=" block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Age
      </label><br>
      <input v-model="age" class="age" id="grid-city" type="number">
    </div>
   </div>
    <div class="md:flex md:items-center">
    <div class="md:w-2/3"></div>
    <div class="md:w-1/3">
      <button >
        Envoyer
      </button>
    </div>
  </div>
</form>

</div>
</template>

<script>
// @ is an alias to /src
import Side from '@/components/Side.vue'
// import axios from 'axios'


export default {
  name: 'Form',
  components: {
    Side
  },
  data(){
    return {
      nom:'',
      prenom:'',
      profession:'',
      age:''
    }
  },
  methods:{

     envoyer(){
        const data = {
            nom : this.nom,
            prenom : this.prenom,
            profession : this.profession,
            age :this.age
            };
            sessionStorage.setItem('nom ',this.nom) 
            sessionStorage.setItem('prenom ',this.prenom) 
            sessionStorage.setItem('profession ',this.profession) 
            sessionStorage.setItem('age',this.age) 
            
            
            
            console.log(data);
            for(let i =0;i< localStorage.length;i++){
              let key = sessionStorage.key(i)
              console.log(key,sessionStorage.getItem(key));
            }

            // this.$router.push('/Dashboard');
      

    }
  }
}
</script>

<style  scoped>
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
.l-nom , .l-prenom , .l-profession , .l-age{
  color: rgb(217,70,239);
  font-size: 0.8em;
  font-weight: bold;
  }
  .nom , .prenom , .profession , .age{
            border: none;
            border-bottom:1px solid rgb(139,92,246);
            width: 70%;
            padding: 5px 0;
            margin-bottom: 4%;
            font-size: small;
  }
   .nom:focus{
     border: none;
   }
.inputs{
  margin-left: 30%;
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