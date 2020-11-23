<template>
   <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
    <div class="row">
      <div class="col-md-6">
<h3 class="card-title">Users Table</h3>
      </div>
      <div class="col-md-1">
        
      </div>
      <div class="col-md-5">
         <form class="form-inline d-flex justify-content-center md-form form-sm active-purple active-purple-2 mt-2">
  
  <input class="form-control form-control-sm ml-3 w-75" @keyup="searchuser()" v-model="q" type="text" placeholder="Search"
    aria-label="Search">&nbsp;&nbsp;
    <i class="fas fa-search" aria-hidden="true"></i>
    </form>
      </div>
    </div>

              </div>

              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        
                        <th>Modify</th>
                  </tr> 

                  <tr  v-for="user in users.data" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.user_type | strToUpper}}</td>
                    

                    <td>
                        <a href="#" data-id="user.id"  @click="editModalWindow(user.id)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        |
                        <a href="#" @click="deleteUser(user.id)">
                            <i class="fa fa-trash red"></i>
                        </a>

                    </td>
                  </tr>
                </tbody></table>
              </div>

              <div class="card-footer">
<pagination :data="users" @pagination-change-page="getResults"></pagination>

              </div>
            </div>

          </div>
        </div>

<div >
        <div @task-update="refrech()" class="modal fade"   id="mediumModal" tabindex="-1" role="dialog" aria-hidden="true" >
				<div class="modal-dialog  modal-dialog-centered  modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form   >
    <div class="form-row">
    <div class="form-group col-md-6">
    
        <label for="text-input" class=" form-control-label">User Name</label>
         <input type="text" id="text-input" v-model="userToEdit.name"   class="form-control" >
    
    </div>
    <div class="form-group col-md-6">
   <label for="text-input" class=" form-control-label">User type</label>

         <select v-model="userToEdit.user_type" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="admin">admin</option>
                                                        
          </select>
         
    </div>
    </div>

   
     <div class="form-row">
       <div class="form-group col-md-4">

    
    </div>
    <div class="form-group col-md-4">
         <label for="text-input" class=" form-control-label">Email</label>
         <input type="email" id="text-input" v-model="userToEdit.email" placeholder="Email" class="form-control">


    </div>
    <div class="form-group col-md-4">

    
    </div>
   
 </div>

   <br>
 

  
 </form>
						</div>
						<div class="modal-footer">
							 <center> 
                      <button type="submit" @click="update" data-dismiss="modal" class="btn btn-success" >Edit</button>
               </center>
						</div>
					</div>
				</div>
			</div>

</div>
              

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



           
    </div>
</template>

<script>
    export default {
        mounted() {
		// Fetch initial results
		this.getResults();
	},
        data(){
          
            return{
                users:{},
                userToEdit:'',
                q:'',
                showModal: true
            }
        },
        methods: {

          getResults(page = 1) {
			axios.get('/Dashboard/user?page=' + page)
				.then(response => {
					this.users = response.data;
				})},

          loadUser(){
axios.get("/Dashboard/user").then(response => this.users = response.data);
          },

        editModalWindow(id){
          
           $('#mediumModal').modal('show');
           
          axios.get('/Dashboard/user/edit/' + id)
          .then(response => this.userToEdit =  response.data)
          .catch(error =>console.log(error));
        },

        update(){
          axios.patch('/Dashboard/user/edit/' + this.userToEdit.id ,{
            name:this.userToEdit.name,
            email:this.userToEdit.email,
            user_type:this.userToEdit.user_type,
            
          }) .then(response => {this.users = response.data;
          this.$router.push({ path: '/user' });
          
          
          })
            .catch(error =>console.log(error))
        },


  deleteUser(id){

          axios.delete('/Dashboard/user/delete/' + id)
          .then(response => this.users = response.data)
          .catch(error => console.log(error))
    
  },
  searchuser(){
   
   if (this.q.length >= 3) {
     
axios.get("/Dashboard/user/"+ this.q)
.then(response => this.users=response.data)
.catch(console.log(error));

   }else{
     axios.get("/Dashboard/user").then(response => this.users = response.data)
     .catch(error=>console.log(error));

   }

  }


        },




        created(){
            this.loadUser();
                
        }
    }
</script>
<style lang="css" >

.modal-backdrop {
      /* bug fix - no overlay */    
      display: none;    
}
</style>