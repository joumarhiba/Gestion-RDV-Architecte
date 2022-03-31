<template>


    <div class="">

      <div class="logo"><span class="a-logo">A</span>rchi<span class="point">...</span></div>

    <nav class="sidebar" role="navigation">
      <ul class="options">
       <li  class="opt1"><a href="#">Ajouter un Rendez-vous</a></li>
       <!-- li mobile -->
       <li class="img-m1"><img src="https://img.icons8.com/ios/50/000000/add-rule.png"/></li>

        <li class="opt2 md:text-xs pt-8 hover:text-purple-900 md:block hidden"><a href="#">Voir les Rendez-vous</a></li>
        <!-- li mobile -->
        <li class="img-m2"><img src="https://img.icons8.com/ios/50/000000/view-details.png"/></li>
      </ul>
        <ul class="sm:mt-12 md:mt-36 md:ml-auto mb-0 flex-none">
     
      <div class="media">
          <img class="gmail" src="https://img.icons8.com/ios/50/ffffff/gmail-new.png"/>
      <img class="fb" src="https://img.icons8.com/ios/50/ffffff/facebook--v1.png"/>
      <img class="insta" src="https://img.icons8.com/ios/50/ffffff/instagram-new--v1.png"/>
      </div>
       <li class="md:mr-6 sm:block  sm:text-sm text-center hidden"><a href="#"> &copy; Copyright 2022</a></li>
    </ul>
    </nav>
  
  
    </div>
</template>

<script>
export default {
    name:"Sidebar",
    methods:{
  //     alerter: function (message, event) {
  //   // maintenant nous avons accès à l'évènement natif
  //   if (event) {
  //     event.preventDefault()
  //   }
  //   alert(message)
  // }
  alerter(){
    swal('echec','Veuillez se connecter','failed')
  }
    }
}
</script>

<style scoped>
* ,
:before,
:after {
  box-sizing: border-box;
  margin: 0%;
  padding: 0%;
}
.logo{
  position: absolute;
  margin: 1.7%;
  font-weight: bold;
  font-size:large;
}
.a-logo ,.point{
  color: rgb(88 28 135);
  font-size:larger;
}
  /* transform: translateX(-50%); */
/* .sidebar, .logo{


} */
.img-m1,.img-m2{
  display: none;
}
.options{

  width:20%;
height: 100vh;
  background: linear-gradient(rgb(139 92 246),rgb(217 70 239));
  margin-top: 0%;
}
a{
 color: #fff;
}
.media{
  margin-top: -10%;
  display: flex;
  flex-direction: row;
}
.fb{
  width: auto;
}

</style>