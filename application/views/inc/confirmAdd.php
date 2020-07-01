 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Return Date</h2>
			<hr/>
			<?php //print_r($GetSingleId->issue_id)?>
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>returnConfirm/AddReturnConfirmform/<?=$GetSingleId->issue_id?>" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<div class="md-form">
				  <input type="Date" name='date' id="date" class="form-control">
				  <label for="name"></label>
				</div>
				<!-- Material input -->
				
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 