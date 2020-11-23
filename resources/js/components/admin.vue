<template>
    <div class="container-fluid" >
          	<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
											Medium
										</button>


                                        <div class="modal fade"  id="mediumModal" tabindex="-1" role="dialog" aria-hidden="true" style="position:relative">
				<div class="modal-dialog  modal-dialog-centered  modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form   @submit="storeuser()">
    <div class="form-row">
    <div class="form-group col-md-6">
    
        <label for="text-input" class=" form-control-label">User Name</label>
         <input type="text" id="text-input" v-model="name" placeholder="Name"  class="form-control" >
    
    </div>
    <div class="form-group col-md-6">
  
         
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
     <button type="submit" class="btn btn-success" >Edit</button>
    </center>
  
 </form>
						</div>
						<div class="modal-footer">
							
						</div>
					</div>
				</div>
			</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="css" >

.modal-backdrop {
      /* bug fix - no overlay */    
      display: none;    
}
</style>