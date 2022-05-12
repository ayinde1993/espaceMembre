<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
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
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="logo.png" width="150px">
					</div>
					<div class="text-center mb-4">
			      		<h4>Resset your new Password</h4>
			   		 </div>
			   		 <!-- Form -->
					<form class="px-3">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="Password" placeholder="Password" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="confPassword" placeholder="confirme New Password" >
						</div>
			 	   				 <!-- Login Button -->
			     	 	<div class="mb-3"> 
							<button type="submit" name="confirme" class="btn btn-block">Reset Password</button>
						</div>
						
					</form>
				</div>	
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
</body>
</html>
