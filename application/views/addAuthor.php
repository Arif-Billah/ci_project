 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if(isset($header)){echo $header;}?>
		<div class='row'>
		<div class='col-md-2'>
   <?php if(isset($sidebar)){echo $sidebar;}?>
		</div>
<div class='col-md-10'>
<?php if(isset($addAuthor)){echo $addAuthor;}?>
</div>
</div>
</div>
<?php if(isset($footer)){echo $footer;}?>
<?php
$massage=$this->session->flashdata('msg');
if(isset($massage)){
	echo $massage;
}

?>
