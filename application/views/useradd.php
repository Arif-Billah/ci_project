 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
 <script type="text/javascript" src="<?php echo base_url();?>js/popper.min.js"></script>
	  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/mdb.min.js"></script>
	 <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/mdb.min.css">
	 <script src="<?php echo base_url();?>js/jquery-3.4.1.min.js"></script>
	 
	 
	 <!-- Default form login -->
<form class="text-center border border-light p-5" action="<?= base_url() ?>user/AddUserForm" method="post" enctype ="multipart/form-data">

    <p class="h4 mb-4">Sign in</p>
	<?php 
		$message=$this->session->flashdata('msg');
		if(isset($message)){
			echo $message;
		}
	
	?>
    <!-- Email -->
    <input type="text" id="name" name="name" class="form-control mb-4" placeholder="Name">

    <!-- Password -->
    <input type="password" id="pass" name="pass" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="">Register</a>
    </p>

    <!-- Social login -->
    <p>or sign in with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->