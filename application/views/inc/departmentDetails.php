 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Edit Department</h2>
			<hr/>
			
				<?php// print_r($depAllData);?>
				 <?php //print_r($departmentDetailsById);?>
				 
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>department/DepartmetUpdate/<?php echo $departmentDetailsById->dep_id;?>" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
				<select class="browser-default custom-select custom-select-lg mb-3" name='dept' id='dept'>
				  <!--<option id='abc'>select department</option>-->
				   <?php foreach($depAllData as $AllDepartment)
					   
					 if($AllDepartment->dep_id == $departmentDetailsById->dep_id){
					  { ?>
						<option selected value="<?=$departmentDetailsById->dep_name ?>"><?php echo $departmentDetailsById->dep_name?></option> 
						
					 <?php }}else{?>
						 
						 <option value="<?=$AllDepartment->dep_name ?>"><?php echo $AllDepartment->dep_name ?></option>
				   <?php } ?>
					
					
				  </select>
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 