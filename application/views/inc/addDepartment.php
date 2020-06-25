<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Add Department</h2>
			<hr/>
			
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>department/AddDepartment" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<div class="md-form">
				  <input type="text" name='name' id="name" class="form-control" placeholder='Name'>
				  <label for="name"></label>
				</div>
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 