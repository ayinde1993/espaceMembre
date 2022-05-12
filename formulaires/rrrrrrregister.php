<!DOCTYPE html>
<html>
<head>
	<title>Cours PHP</title>
	

  <!--load all Font Awesome styles -->
  <!--<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">-->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>
	<div class="container mt-4">
		<form method="POST" action="createUser.php">
			<div class="mb-3">
				<label for="nom" class="form-label">Nom :</label>
				<input type="text" class="form-control" name="name" id="nom" >
			</div>
		    <div class="mb-3">
		        <label for="email" class="form-label">Email :</label>
		        <input type="email" class="form-control" name="email" id="email">
		    </div>
            <div class="mb-3">
		        <label for="email" class="form-label">Confirme Email :</label>
		        <input type="email" class="form-control" name="confEmail" id="email">
		    </div>
		    <div class="mb-3">
		        <label for="password" class="form-label">Password : </label>
		        <input type="password" class="form-control" name="password" id="password">
		    </div>
            <div class="mb-3">
		        <label for="password" class="form-label">Password : </label>
		        <input type="password" class="form-control" name="confPassword" id="password">
		    </div>
		  <button type="submit" class="btn btn-primary" name="submitbtn" >Submit</button>
		</form>
	</div>
	<?php 
	//include le fichier config database
	 include('errorSms.php') ?>
</body>
</html>