 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Edit Book</h2>
			<hr/>
			
				<?php// print_r($depAllData);?>
				 <?php //print_r($departmentDetailsById);?>
				 
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>book/BookUpdate/<?php echo $bookDetailsById->book_id;?>" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
		       <div class="md-form">
				  <input type="text" name='bname' id="bname" class="form-control" value='<?php echo $bookDetailsById->book_name;?>' placeholder='Name'>
				  <label for="name"></label>
				</div>
				<select class="browser-default custom-select custom-select-lg mb-3" name='aname' id='aname'>
				  <!--<option id='abc'>select department</option>-->
				   <?php foreach($authorAllData as $authorAllData)
					   
					 if($authorAllData->id == $bookDetailsById->book_id){
					  { ?>
						<option selected value="<?=$authorAllData->id ?>"><?php echo $authorAllData->author_name?></option> 
						
					 <?php }}else{?>
						 
						 <option value="<?=$authorAllData->id ?>"><?php echo $authorAllData->author_name ?></option>
				   <?php } ?>
					
					
				  </select>
				  <select class="browser-default custom-select custom-select-lg mb-3" name='dname' id='dname'>
				  <!--<option id='abc'>select department</option>-->
				   <?php foreach($depAllData as $depAllData)
					   
					 if($depAllData->dep_id == $bookDetailsById->department){
					  { ?>
						<option selected value="<?=$depAllData->dep_id ?>"><?php echo $depAllData->dep_name?></option> 
						
					 <?php }}else{?>
						 
						 <option value="<?=$depAllData->dep_id ?>"><?php echo $depAllData->dep_name ?></option>
				   <?php } ?>
					
					
				  </select>
				  
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 