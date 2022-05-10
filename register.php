<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
	
	<div class="container-fluid">
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">					
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="logo.png" width="150px">
					</div>
					<div class="text-center mb-4">
				   	 <h4>Create an account</h4>
				  	</div>
					<!-- Form -->
					<form class="px-3"  method="POST" action="createUser.php">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="name" placeholder="Full Name" value="<?php if(isset($name)) {echo $name;}?>"  >
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="email" name="email" placeholder="Email Address" value="<?php if(isset($email)) {echo $email;}?>" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="email" name="confEmail" placeholder="Confirm Email Address" value="<?php if(isset($confEmail)) {echo $confEmail;}?>" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="Password" name="password" placeholder="Password" value="<?php if(isset($password)) {echo $password;}?>" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="Password" name="confPassword" placeholder="Confirm Password"  value="<?php if(isset($confPassword)) {echo $confPassword;}?>" >
						</div>
						<!-- Register Button -->
				    	<div class="mb-3"> 
							<button type="submit" name="submitbtn" class="btn btn-block">Create Account</button>
						</div>
						<div class="text-center mb-2">
		         		<div class="text-center mb-2 text-white">or register with</div>
							<!-- Facebook Button -->
		         			 <a href="" class="btn btn-social btn-facebook">facebook</a>

		          			<!-- Google Button -->
							<a href="" class="btn btn-social btn-google">google</a>

							<!-- Twitter Button -->
							<a href="" class="btn btn-social btn-twitter">twitter</a>
						</div>
						<div class="text-center mb-5 text-white">Already have an account?
							<a class="login-link" href="login.html">Login here</a>
		       			</div>
					</form>
				</div>
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>
	<?php include('errorSms.php') ?>
</body>
</html>