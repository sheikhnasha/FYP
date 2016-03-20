<!DOCTYPE html>
<html lang="en">
<title>CloudGraphy</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/passchek.js"></script>

</head>
	   
	   <body>
	
	   <br><br><br><br><br><br><br>
	   <div class="container" style="width : 450px;">
	   
		<form class="well form-horizontal" method="post" action="signUpback.php">
		
		<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text"  name="signFN" class="form-control" placeholder="First Name" required>
						</div>
					</div>
					
					<div class = "col-lg-6">
						<div class="input-group">
							<input type="text" name="signSN" class="form-control" placeholder="Surname" required>
						</div>
					</div>
				</div>
		
							
				<div class="form-group">
				<br>
					<div class="col-sm-12">
						
							<input type="email" name="signEmail" class="form-control" id="exampleInputAmount" placeholder="Email" required>
							
					</div>
				</div>
				
				<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name = "signPass" class="form-control" id="inputPassword1" placeholder="New Password" required>
							</div>
				</div>
				<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name = "signRePass" class="form-control" id="inputPassword2" onchange="checkPass();" placeholder="Re-type Password" required>
													
							</div>
				</div>
				
								 <div class="form-group">
								 <div class="col-sm-12">
							<label for="sel1">Surgery:</label>
							<select class="form-control" id="sel1" name="signSurgery">
							<option>UK</option>
							<option>Malaysia</option>
							<option>China</option>
							</select>
							</div>
						<br>
          </div>
				
				<br>
				<div class="form-group">
					<div class="col-sm-8">
						<button id="myBtn" type="submit" class="btn btn-primary" style="width:380px; height: 40px;">Sign Up</button>
					</div>
				</div>
				
			
			</form>
		
		</div>
		<br>
		<div class="container" style="width : 420px; border-style: solid; border-width: 2px; border-color: #D1D1D1; border-radius: 3px;;">
		<br>
		<div class="form-group">
					<div class="col-sm-offset-3 col-sm-8">
					
						<label for="signup">Have an account?<a href="index.php"></label> Sign In</a>
					</div>
				</div>
				<br>
				</div>
		</div>
			
	   </body>
	   
</html>