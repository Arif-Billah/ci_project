<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
 <div class="main-content mt-5 ml-3 newClass">
			
            <h2>Add Student</h2>
			<hr/>
			<h2><?php if($this->session->flashdata('flash_welcome')){ ?>
			<?= $this->session->flashdata('flash_welcome') ?><?php }?> </h2>
			<?php if (isset($_SESSION["msg"])){echo $_SESSION["msg"];}?>
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>test/demo" method="get" enctype ="multipart/form-data">
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
				  <i class="fas fa-envelope prefix"></i>
				  <input type="email" name='email' id="email" class="form-control" placeholder='E-mail address'>
				  <label for="email"></label>
				</div>


				<!-- Material input -->
				
				<select class="browser-default custom-select custom-select-lg mb-3" name='dept' id='dept'>
				  <option selected id='abc'>select department</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
				<button type="submit" class="btn btn-blue-grey btn-lg">Submit</button>
				
     <a onclick="return confirm('Are you sure you want to delete this item')" href="<?= base_url() ?>test">Delete Portfolio</a>
            </form>
			<button class="btn btn-blue-grey btn-lg"><a href="<?= base_url() ?>test">Cancel</a></button>
        </div>			
   </div>
   
