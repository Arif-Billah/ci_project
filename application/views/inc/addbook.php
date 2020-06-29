 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Add Book</h2>
			<hr/>
			
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>book/AddBookform" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<div class="md-form">
				  <input type="text" name='name' id="name" class="form-control" placeholder='Book Name'>
				  <label for="name"></label>
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
				<select class="browser-default custom-select custom-select-lg mb-3" name='aname' id='aname'>
				<option value='' selected id='abc'>select Author</option>
				<?php
					foreach($authorData as $authorData){;
				?>
				  
				  <option value="<?= $authorData->id ;?>"><?= $authorData->author_name ;?></option>
				  
					<?php } ;?>
				</select>
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 