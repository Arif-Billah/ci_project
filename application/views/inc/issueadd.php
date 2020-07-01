 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Issue Book</h2>
			<hr/>
			
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>issue/AddIssueform" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<div class="md-form">
				  <input type="text" name='name' id="name" class="form-control" placeholder='name'>
				  <label for="name"></label>
				</div>
				
				<div class="md-form">
				  <input type="text" name='reg' id="reg" class="form-control" placeholder='Reg'>
				  <label for="roll"></label>
				</div>
				<div class="md-form">
				  <input type="Date" name='return' id="return" class="form-control" placeholder='Return Date'>
				  <label for="roll"></label>
				</div>
				
				<div class="md-form">
				  <input type="text" name='status' id="status" class="form-control" placeholder='status'>
				  <label for="status"></label>
				</div>
				
				<!-- Material input -->
				
				<select onchange="get_book(this.value)" class="browser-default custom-select custom-select-lg mb-3" name='dept' id='dept'>
				<option selected id='abc'>select department</option>
				<?php
					foreach($depdatas as $department){;
				?>
				  
				  <option value="<?= $department->dep_id ;?>"><?= $department->dep_name ;?></option>
				  
					<?php } ;?>
				</select>
				
				<select class="browser-default custom-select custom-select-lg mb-3" name='book' id='book'>
				<option selected id='abc'>select Book</option>
				  <?php
					foreach($allBook as $allBook){ ?>
						
				  <option value="<?= $allBook->book_id?>" class="book <?= $allBook->department ?>"><?= $allBook->book_name?></option>
				  
					<?php } ?>
				</select>
				
				
				
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 
   
   <script>
   function get_book(d){
	   $('.book').hide();
	   $('.book.'+d).show();
   }
   </script>