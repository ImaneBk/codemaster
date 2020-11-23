<template>
    <div class="container-fluid" style="">
      <div class="well">

<br><br>
<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <h1 class="card-header text-center  py-4"> New User</h1>
  <div class="card-body">

 <form   @submit="storeuser()">
    <div class="form-row">
    <div class="form-group col-md-6">
    
        <label for="text-input" class=" form-control-label">User Name</label>
         <input type="text" id="text-input" v-model="name" placeholder="Name"  class="form-control" >
    
    </div>
    <div class="form-group col-md-6">
                <label for="text-input" class=" form-control-label">User type</label>

  <select v-model="user_type" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="admin">admin</option>
                                                        
          </select>
         
    </div>
    </div>

   
     <div class="form-row">
    <div class="form-group col-md-6">
         <label for="text-input" class=" form-control-label">Email</label>
         <input type="email" id="text-input" v-model="email" placeholder="Email" class="form-control">


    </div>
    <div class="form-group col-md-6">

     <label for="text-input" class=" form-control-label">Passwords</label>
     <input type="password" id="text-input" v-model="password" placeholder="password" class="form-control">

    </div>
   
 </div>

   <br>
 
 <center> 
     <button type="submit" class="btn btn-dark" >Add</button>
    </center>
  
 </form>
  </div>
</div>
  
 </div>  
    </div>
</template>

<script>
    export default {
        data(){
           return{

              
              name:'',
              email:'',
              password:'',
              user_type:''
             
              
           }
        },
       methods:{
            storeuser(){
                  axios.post('/Dashboard/user',{
                      name:this.name,
                      email:this.email,
                      password:this.password,
                      user_type:this.user_type,
                      json:true
                  }).then(
                      response =>this.$router.push({ path: '/user' })
                  )
            .catch(error =>console.log(error))
            }
       }
    }
</script>
