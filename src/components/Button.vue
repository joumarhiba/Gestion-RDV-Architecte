<template>
    <div class="buttons">
        <button @click="Register" class="btn btn1 ml-12 w-24 p-2 border-solid border-2 border-purple-700" type="button">Register</button>
    <!-- <input type="submit" value="Login"> -->
    <button @click="login" class="btn btn2 ml-12 w-24 p-2 border-solid border-2 border-purple-700" type="button" > Login</button>
    </div>
    <!-- lg:left-96 lg:flex-auto lg:top-72 lg:justify-center md:flex md:space-x-36 md:top-56 md:left-44 sm:flex sm:space-x-2  -->
</template>
<script>
export default {
    name:"Buttons",
    methods:{
        Register(){
            this.$router.push('/Form')
        },
        login(){
            this.$router.push('/Login')
        }
    }
}
</script>
<style>
*{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}
.btn{
    /* background-color:transparent; */
    background-color: rgb(122, 26, 133);
    color: #fff;
    border-color:  rgb(122, 26, 133);
    border-width: .4px;
    padding: 12px;
}
.btn:hover{
    border-width: 1.5px;
    font-weight: bold;
    background-color:transparent; 
    color: rgb(122, 26, 133);
    transition: .4s ease;
}
.btn1{
    position: absolute;
    top: 50%;
    left: 26%;
}
.btn2{
    position: absolute;
    top: 50%;
    left: 64%;
}
@media screen and (max-width: 400px){
   .btn1{
    position: absolute;
    top: 30%;
    left: 40%;   
   }
   .btn2{
    position: absolute;
    top: 60%;
    width: 19%;
    left: 40%;   
   }
    
}  
</style>


