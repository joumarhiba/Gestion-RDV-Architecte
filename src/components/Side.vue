<template>
    <main class="main">
  <aside class="sidebar">
    <nav class="nav">
      <ul>
        <li class="active"><div class="logo"><span class="a">A</span>rchi<span class="point">...</span></div></li>
        <li><a href="#">Ajouter un rendez-vous</a></li>
        <li><a href="#">Voir les Rendez-vous</a></li>
      </ul>
    </nav>
    <footer class="social-media">
		<a href="http://instagram.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/instagram-new--v1.png"/></a>
		<a href="http://facebook.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/facebook-circled--v1.png"/></a>
		<a href="http://youtube.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/youtube-play--v1.png"/></a>
	</footer>
    <footer class="social-media-mobil">
		  <a href="http://instagram.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/instagram-new--v1.png"/></a>
		  <a href="http://facebook.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/facebook-circled--v1.png"/></a>
		  <a href="http://youtube.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/youtube-play--v1.png"/></a>
	  </footer>
  </aside>


</main>
</template>

<script>
export default {
    name:'Side'
}
</script>
<style scoped>
html {
  font-family:sans 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 16px;
}
.logo{
  position: absolute;
  margin: 1.7%;
  z-index: 55;
  font-weight: bold;
  font-size:large;
}
.a ,.point{
  color: rgb(122, 26, 133);
  font-size:larger;

}
.sidebar {
  position: fixed;
  width: 20%;
  height: 100vh;
background: linear-gradient(rgb(139 92 246),rgb(217 70 239));
  font-size: 0.65em;
  border-right:1.7px solid rgb(122, 26, 133);
}

.nav {
  position: relative;
  margin: 0 ;
  text-align: left;
  top: 20%;
  transform: translateY(-50%);
  font-weight: bold;
}
.active{
      padding-bottom: 49%;
}
.nav ul {
  list-style: none;
  margin: 0%;
}
  li {
    position: relative;
    margin: 1.2em 0;
  }
   li a {
      line-height: 5em;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 0.12em;
      color: rgb(122, 26, 133);
      display: block;
      transition: all ease-out 300ms;
      /* margin-left: 5%; */
      text-align: center;
    }

    /* .active::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 0.2em;
      left: 0;
      bottom: 0;
      background-image: linear-gradient(rgb(139 92 246),rgb(122, 26, 133));  
} */
#a, #points{
    color:rgb(217 70 239);
    text-transform: none;
    font-size: 17px;
}
.social-media{
    z-index: 5;
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
    justify-content: space-around;
    justify-items: center;
    margin-top: 78%;
    margin-left: 15%;
    background-attachment: fixed;
}
    .icon{     
      width: 50%;
    }
.social-media-mobil{
    display: none;
}


</style>