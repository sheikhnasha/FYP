<!DOCTYPE html>
<html lang="en">
<head>
<title>New Study</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/input.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/input.js"></script>
  <!--http://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3/-->
</head>

<body>
	<div class="navBar">
		<?php $include = "newPatient";
		include 'navBar.php';?>
	</div>

<br>
<br>	

	<div class="container">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">First Name</span>
							<input type="text" class="form-control" placeholder="Enter Deceased First Name" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" class="form-control" placeholder="Enter Deceased Surname" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">IC Number</span>
							<input type="text" class="form-control" placeholder="Enter Deceased IC Number" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Tel</span>
							<input type="text" class="form-control" placeholder="Enter Deceased Telephone" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Date of Birth</span>
							<input type="text" class="form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
					<br>
				
				<div class ="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Sex</span>
							<input type="text" class="form-control" placeholder="Male/Female" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Height</span>
							<input type="text" class="form-control" placeholder="cm" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Weight</span>
							<input type="text" class="form-control" placeholder="kg" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Address</span>
							<input type="text" class="form-control" placeholder="Enter Deceased Home Address" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class ="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">City</span>
							<input type="text" class="form-control" placeholder="Enter Deceased City" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">State</span>
							<input type="text" class="form-control" placeholder="Enter Deceased State" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class ="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Date of Death</span>
							<input type="text" class="form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Cause of Death</span>
							<input type="text" class="form-control" placeholder="Enter The Cause Of Deceased's Death" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
					<br>
					<br>
					<br>
					
					<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Referree's ID</span>
							<input type="text" class="form-control" placeholder="Enter Referrer's ID" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Surgery's ID</span>
							<input type="text" class="form-control" placeholder="Enter Surgery's ID" aria-describedby="basic-addon1">
						</div>
					</div>
					
				</div>
				
				<br>					

					<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">First Name</span>
							<input type="text" class="form-control" placeholder="Enter Referrer's First Name" aria-describedby="basic-addon1">
						</div>
					</div>
					
					<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" class="form-control" placeholder="Enter Referrer's Surname" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<br>
			
				<div class="row">
					<div class="col-lg-12">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Surgery Name</span>
							<input type="text" class="form-control" placeholder="Enter Surgery Name" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				
				<br>
				<br>
				<br>
				
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">CT SCAN Date</span>
							<input type="text" class="form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon1">
						</div>
					</div>
			
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">CT SCAN Time</span>
							<input type="text" class="form-control" placeholder="hh:mm" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
				<div class="col-lg-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse&hellip; <input type="file" multiple>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
				</div>
					</div>
					<br>
					<br>
					<div class='row'>
						<div class="col-lg-2">
						</div>
						<button type="button" class="btn btn-success" style="width: 320px; height: 40px">Add Study</button> 
						<button type="button" class="btn btn-danger" style="width: 320px; margin-left: 100px; height: 40px">Restart</button> 
					</div>
					
	</div>
	
	<br>
	<br>
				

</body>

</body>
</html>