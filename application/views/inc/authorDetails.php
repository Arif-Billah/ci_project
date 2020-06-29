 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Edit Author</h2>
			<hr/>
			
				<?php// print_r($depAllData);?>
				 <?php //print_r($departmentDetailsById);?>
				 
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>author/AuthorUpdate/<?php echo $authorDetailsById->id;?>" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<select class="browser-default custom-select custom-select-lg mb-3" name='aname' id='aname'>
				  <!--<option id='abc'>select department</option>-->
				   <?php foreach($authorAllData as $authorAllData)
					   
					 if($authorAllData->id == $authorDetailsById->id){
					  { ?>
						<option selected value="<?=$authorDetailsById->author_name ?>"><?php echo $authorDetailsById->author_name?></option> 
						
					 <?php }}else{?>
						 
						 <option value="<?=$authorAllData->author_name ?>"><?php echo $authorAllData->author_name ?></option>
				   <?php } ?>
					
					
				  </select>
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 