 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Add Student</h2>
			<hr/>
			
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>student/addstudentform" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<div class="md-form">
				  <input type="text" name='name' id="name" class="form-control" placeholder='Name'>
				  <label for="name"></label>
				</div>
				
				<div class="md-form">
				  <input type="text" name='roll' id="roll" class="form-control" placeholder='Roll No'>
				  <label for="roll"></label>
				</div>
				<div class="md-form">
				  <input type="text" name='reg' id="reg" class="form-control" placeholder='Reg No'>
				  <label for="reg"></label>
				</div>
				<div class="md-form">
				 <!--<i class="fas fa-envelope prefix"></i>-->
				  <input type="email" name='email' id="email" class="form-control" placeholder='E-mail address'>
				  <label for="inputIconEx1"></label>
				</div>
				<div class="md-form">
				  <input type="text" name='phone' id="phone" class="form-control" placeholder='Phone No'>
				  <label for="reg"></label>
				</div>
				
				<!-- Material input -->
				
				<select class="browser-default custom-select custom-select-lg mb-3" name='dept' id='dept'>
				<option selected id='abc'>select department</option>
				<?php
					foreach($depdatas as $department){;
				?>
				  
				  <option value="<?= $department->dep_id ;?>"><?= $department->dep_name ;?></option>
				  
					<?php } ;?>
				</select>
				
				
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 