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
			<form class="well form-horizontal" method="post" action="studyback.php" enctype="multipart/form-data">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">First Name</span>
							<input type="text" name="objectFN" class="form-control" placeholder="Enter Deceased First Name" required>
						</div>
					</div>
					
					<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" name="objectSN" class="form-control" placeholder="Enter Deceased Surname"  required>
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">IC Number</span>
							<input type="number"  name="objectIC" class="form-control" placeholder="Enter Deceased IC Number" required>
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Tel</span>
							<input type="number" name="objectTel" class="form-control" placeholder="Enter Deceased Telephone">
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Date of Birth</span>
							<input type="date" name="objectDOB" class="form-control" placeholder="dd/mm/yyyy" required>
						</div>
					</div>
				</div>
				
					<br>
				
				<div class ="row">
					<div class="col-lg-4">
					
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon2">Sex</span>
							<select class="form-control" id="sel1" name="objectSex" required>
							<option value="">Male/Female</option>
							<option>Male</option>
							<option>Female</option>
							</select>
						<br>
					</div>
					</div>
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Height</span>
							<input type="number" name="objectHeight" class="form-control" placeholder="cm" min="0">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Weight</span>
							<input type="number" name="objectWeight" class="form-control" placeholder="kg" min="0">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Address</span>
							<input type="text" name="objectAdd" class="form-control" placeholder="Enter Deceased Home Address">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class ="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">City</span>
							<input type="text" name="objectCity" class="form-control" placeholder="Enter Deceased City">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">State</span>
							<input type="text" name="objectState" class="form-control" placeholder="Enter Deceased State" >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class ="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Date of Death</span>
							<input type="date" name="objectDOD" class="form-control" placeholder="dd/mm/yyyy" required>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Cause of Death</span>
							<input type="text" name="objectCause" class="form-control" placeholder="Enter The Cause Of Deceased's Death" required>
						</div>
					</div>
				</div>
				
					<br>
					<br>
					<br>
				<?php
					include ('conn.php');
					$sql = "SELECT * FROM referees";
					$result = $conn->query($sql);
					?>
					<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Referree's ID</span>
								<select class="form-control" id="refID" name="refID" required>
							<option value="">Select a referee:</option>
							<?php while($row = $result->fetch_assoc()):?>
							<option><?php echo $row['referreeID'] ." - ". $row['firstName'] ;?></option>
							<?php endwhile;?>
							</select>
						</div>
					</div>
					
					
					<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" name="refSN" class="form-control" placeholder="Enter Referrer's Surname" >
						</div>
					</div>
				</div>
					
					
				
				
				<br>
			
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Surgery's ID</span>
							<input type="number" name="surID" id="surID" class="form-control" placeholder="Enter Surgery's ID" >
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Surgery Name</span>
							<input type="text" name="surgeryName" class="form-control" placeholder="Enter Surgery Name" >
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
							<input type="date" name="CTDate" class="form-control" placeholder="dd/mm/yyyy" required>
						</div>
					</div>
			
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">CT SCAN Time</span>
							<input type="time" name="CTTime" class="form-control" placeholder="hh:mm" >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
				<div class="col-lg-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse&hellip; <input type="file" name="juice[]" multiple required>
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
						<button  type="submit" value="Upload Image" name="Submit" class="btn btn-success" style="width: 320px; height: 40px">Add Study</button> 
						<button  type="button" class="btn btn-danger" style="width: 320px; margin-left: 100px; height: 40px">Restart</button> 
					</div>
					</form>
					
	</div>
	
	<br>
				

</body>

</body>
</html>