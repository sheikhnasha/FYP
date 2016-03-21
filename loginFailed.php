<!DOCTYPE html>
<?php 
session_start();
if(isset ($_SESSION['login_user'])){
				header('Location: home.php');
}
?>
<html lang="en">
<title>CloudGraphy</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
	   
	   <body>
	   
	   <br>
			<div class="container" style="width : 420px; border-style: solid; border-width: 2px; border-color: #C66; border-radius: 3px;;">
		<br>
		<div class="form-group">
					<div class="col-sm-12">
					
						<p class="col-sm-offset-1" style="color: #C66;">The Email/Password you have entered is incorrect<p>
						<label class="col-sm-offset-4" style="color: #C66;">Please try again</label>
						</div>
				</div>
				<br>
				</div>
	  <br><br>
	   <div class="container" style="width : 450px;">
	   
		<form class="well form-horizontal" method="post" action="login.php">
		
					<div class="form-group">
				<br>
					<div class="col-sm-12">
						
							<input type="text" name="email" class="form-control" id="exampleInputAmount" placeholder="Email">
					
					</div>
				</div>
				
	
				<div class="form-group">
					
						<div class="col-sm-12">
							<input type="password" name = "password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
				</div>
  
				<div class="form-group">
					<div class="col-sm-8">
							<button type="button" class="btn btn-link">Forgot Password?</button>
					</div>
				</div>
  
				<div class="form-group">
					<div class="col-sm-8">
						<button type="submit" class="btn btn-success" style="width:380px; height: 40px;">Sign in</button>
					</div>
				</div>
			</form>
		
		</div>
		<br>
		<div class="container" style="width : 420px; border-style: solid; border-width: 2px; border-color: #D1D1D1; border-radius: 3px;;">
		<br>
		<div class="form-group">
					<div class="col-sm-offset-3 col-sm-8">
					
						<label for="signup">Need an account?<a href="signUp.php"></label> Sign Up</a>
					</div>
				</div>
				<br>
				</div>
		</div>
			
	   </body>
	   
</html>