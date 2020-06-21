 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
            <h2>Add Student</h2>
			<hr/>
			
        <div class="panel-body" ">
            <form action="<?php echo base_url();?>student/addstudentform" method='post'>
           <!-- Material input -->
				<div class="md-form">
				  <input type="text" id="form1" class="form-control">
				  <label for="form1">Name</label>
				</div>
				<div class="md-form">
				  <input type="text" id="form1" class="form-control">
				  <label for="form1">Father Name</label>
				</div>
				<div class="md-form">
				  <input type="text" id="form1" class="form-control">
				  <label for="form1">Roll</label>
				</div>
				<div class="md-form">
				  <input type="text" id="form1" class="form-control">
				  <label for="form1">Reg No</label>
				</div>


				<!-- Material input -->
				<div class="md-form">
				  <!--<i class="fas fa-envelope prefix"></i>-->
				  <input type="text" id="inputIconEx1" class="form-control">
				  <label for="inputIconEx1">E-mail address</label>
				</div>
				<select class="browser-default custom-select custom-select-lg mb-3">
				  <option selected id='abc'>select department</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
				<button type="button" class="btn btn-blue-grey btn-lg">Submit</button>
     
            </form>
        </div>			
   </div> 