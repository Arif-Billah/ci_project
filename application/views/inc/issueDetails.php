 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Student Details</h2>
			<hr/>
			<?php //print_r($studentDataByReg);?>
			
				<?php //print_r($alldept);?>
        <div class="panel-body" ">
             <form id="contact" action="" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
		   
				<div class="md-form">
				  <input type="text" name='name' id="name" class="form-control" value='<?php echo $studentDataByReg->student_name;?>' placeholder='Name'>
				  <label for="name"></label>
				</div>
				
				<!--<div class="md-form">
				  <input type="text" name='roll' id="roll" value='<?php //echo $studentDataByReg->student_roll;?>' class="form-control" placeholder='Roll No'>
				  <label for="roll"></label>
				</div>-->
				
				<div class="md-form">
				  <input type="text" name='reg' id="reg" class="form-control" value='<?php echo $studentDataByReg->student_reg;?>' placeholder='Reg No'>
				  <label for="reg"></label>
				</div>
				
				<div class="md-form">
				  
				  <input type="text" name='phone' id="phone" class="form-control" value='<?php echo $studentDataByReg->phone;?>' placeholder=''>
				  <label for="email"></label>
				</div>


				<!--<select class="browser-default custom-select custom-select-lg mb-3" name='dept' id='dept'>
				  
				 <option value="">
				 <?php
				 /* $id=$studentDataByReg->student_dep;
				 $ddata=$this->Department_model->DepartmentById($id);
				 if(isset($ddata)){
					 print_r($ddata->dep_name);
				 }*/
				 ?> 
				 
				 </option>
				</select>-->
				
				<div class="md-form">
				  
				  <input type="text" name='dept' id="dept" class="form-control" value='<?php $id=$studentDataByReg->student_dep;
				 $ddata=$this->Department_model->DepartmentById($id);
				 if(isset($ddata)){
					 print_r($ddata->dep_name);
				 }?>' placeholder='department Name'>
				  <label for="dept"></label>
				</div>
            </form>
        </div>			
   </div> 