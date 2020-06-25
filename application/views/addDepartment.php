<?php if(isset($header)){echo $header;}?>
		<div class='row'>
		<div class='col-md-2'>
   <?php if(isset($sidebar)){echo $sidebar;}?>
		</div>
<div class='col-md-10'>
<?php if(isset($addDepartment)){echo $addDepartment;}?>
</div>
</div>
</div>
<?php if(isset($footer)){echo $footer;}?>
<?php 
$message=$this->session->flashdata('msg');
if(isset($message)){
	echo $message;
}

?>