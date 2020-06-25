 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="main-content mt-5 ml-3">
			<?php if($this->session->flashdata('msg'))?>
				<?=$this->session->flashdata('msg') ?>
			
            <h2>Edit Student</h2>
			<hr/>
			<?php// print_r($studentDataById);?>
				<?php //print_r($alldept);?>
        <div class="panel-body" ">
             <form id="contact" action="<?= base_url() ?>student/studentUpdate/<?php echo $studentDataById->sid;?>" method="post" enctype ="multipart/form-data">
           <!-- Material input -->
		   
				<div class="md-form">
				  <input type="text" name='name' id="name" class="form-control" value='<?php echo $studentDataById->student_name;?>' placeholder='Name'>
				  <label for="name"></label>
				</div>
				
				<div class="md-form">
				  <input type="text" name='roll' id="roll" value='<?php echo $studentDataById->student_roll;?>' class="form-control" placeholder='Roll No'>
				  <label for="roll"></label>
				</div>
				<div class="md-form">
				  <input type="text" name='reg' id="reg" class="form-control" value='<?php echo $studentDataById->student_reg;?>' placeholder='Reg No'>
				  <label for="reg"></label>
				</div>
				<div class="md-form">
				  <i class="fas fa-envelope prefix"></i>
				  <input type="email" name='email' id="email" class="form-control" value='<?php echo $studentDataById->student_email;?>' placeholder='E-mail address'>
				  <label for="email"></label>
				</div>


				
				
						
					
				 
				 
				<select class="browser-default custom-select custom-select-lg mb-3" name='dept' id='dept'>
				  <!--<option id='abc'>select department</option>-->
				   <?php foreach($alldept as $alldept)
					 if($alldept->dep_id==$studentDataById->student_dep){
						{?>
				  <option selected value="<?php echo $alldept->dep_id;?>"><?php echo $alldept->dep_name;?></option>
					<?php }}else{?>
				  <option  value="<?php echo $alldept->dep_id;?>"><?php echo $alldept->dep_name;?></option>
					<?php }?>
				  </select>
				<button type="submit" class="btn btn-blue-grey btn-lg btn primary">Submit</button>
				
     
            </form>
        </div>			
   </div> 