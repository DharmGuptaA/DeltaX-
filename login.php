<?php require_once("files/header.php"); ?> 
<div class="container pt-2 pt-md-5">

	<div class="row">
		<div class="col-md-6 mt-2">
			<h2 class="text-center text-dark mb-2">Login</h2>
			<form action="login_process.php" method="post">
			  <div class="form-group">
			   
		<div class="col-md-6 mt-2">
			<h2 class="text-center text-dark mb-2">Add Artist</h2>
			<form action="register_process.php" method="post">
			  <div class="form-group">
			    <label for="first_name">Artist Name</label>
			    <input type="text" class="form-control" id="first_name" name="first_name"  required=""  placeholder=""> 
			  </div>
			  
			  <div class="form-group">
			    <label for="username">Date of birth</label>
			    <input type="text" class="form-control" id="username" name="username"   required="" placeholder=""> 
			  </div>
			  <div class="form-group">
			    <label for="Password">BIO</label>
			    <input type="password" class="form-control" id="Password" name="password"  required="" placeholder="">
			  </div> 
			  <button type="submit" class="btn btn-dark float-right mt-2">DONE</button>
			</form>
		</div>
	</div>

	
</div>
<?php require_once("files/footer.php"); ?> 