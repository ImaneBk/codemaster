<template>
   <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
    <div class="row">
      <div class="col-md-6">
<h3 class="card-title">List Contact</h3>
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
                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>

                        
                        <th>Modify</th>
                  </tr> 

                  <tr  v-for="contact in contact.data" :key="contact.id">
                    <td>{{ contact.name }}</td>
                    <td>{{ contact.email }}</td>
                    <td>{{ contact.subject }}</td>
                    <td>{{ contact.message | strToUpper}}</td>
                    

                    <td>
                       &nbsp;&nbsp;&nbsp;
                        <a href="#" @click="deleteContact(contact.id)">
                            <i class="fa fa-trash red" style="color:red;"></i>
                        </a>
                       
                    </td>
                  </tr>
                </tbody></table>
              </div>

              <div class="card-footer">

          <center>       <pagination :data="contact" @pagination-change-page="getResults"></pagination>
          </center>
              </div>
            </div>

          </div>
        </div>

<div >
        

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
                contact:{},
                q:''
            }
        },
         methods: {
getResults(page = 1) {
			axios.get('/contact?page=' + page)
				.then(response => {
					this.contact = response.data;
				})},

          loadUser(){
axios.get("/contact").then(response => this.contact = response.data);
          },
          searchuser(){
   
   if (this.q.length >= 3) {
     
axios.get("/contact/"+ this.q)
.then(response => this.contact=response.data)
.catch(console.log(error));

   }else{
     axios.get("/contact").then(response => this.contact = response.data)
     .catch(error=>console.log(error));

   }

  },

 deleteContact(id){

          axios.delete('/contact/delete/' + id)
          .then(response => this.contact = response.data)
          .catch(error => console.log(error))
    
  }
         },
         created(){
            this.loadUser();
                
        }

    }
</script>
