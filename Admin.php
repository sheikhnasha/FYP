<!DOCTYPE html>
<?php include ('session.php');?>
<html lang="en">
<head>
<title>Administraor</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/input.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/input.js"></script>
<!--  <script src="js/hide_show.js"></script>-->
  <!--http://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3/-->
</head>

<body>
	<div class="navBar">
		<?php $include = "admin";
		include 'navBar.php';?>
	</div>


	<div class="container">
			<form class="well form-horizontal" method="post" action="admin_add.php" enctype="multipart/form-data">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">First Name</span>
							<input type="text" name="adminFN" class="form-control" placeholder="Enter New Administraor First Name" required>
						</div>
					</div>
					
					<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" name="adminSN" class="form-control" placeholder="Enter New Administraor Surname"  required>
						</div>
					</div>
				</div>
				
				<br>
				
	
			
				
				<div class="row">
					<div class="col-lg-12">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Email Address</span>
							<input type="email" name="adminEmail" class="form-control" placeholder="Enter Email Address" required>
						</div>
					</div>
					
				</div>
				
				<br>
				
				
					<div class='row'>
						<div class="col-lg-2">
						</div>
						<button  type="submit" value="Upload Image" name="Submit" class="btn btn-success" style="width: 320px; height: 40px">Add Administraor</button> 
						<button  type="button" class="btn btn-danger" style="width: 320px; margin-left: 100px; height: 40px">Restart</button> 
					</div>
					</form>
					
					<?php
					include ('conn.php');
					
					$sql=("SELECT * FROM `administrators` INNER JOIN `login` ON administrators.userID = login.userID WHERE administrators.userID != $userID");
					$result = $conn->query($sql);
					if ($result->num_rows > 0) :
					
								?>
				
					
					<div class="container well col-md-12">
					
						
					<?php
					while($row_admin = $result->fetch_assoc()):
					$id= $row_admin['administratorsID'];
					
					?>
				
					<div class="col-md-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
		border-width: 1px; margin-bottom: 10px; border-color: #D1D1D1">
					<div class="row">
				<div class="col-sm-1">
				<div class="input-group">
				<h5><?php echo $id?></h5>
				</div>
				</div>
				
				
				<div class="col-sm-4">
				<div class="input-group">
				<h5><?php echo $row_admin['firstName']. " " . $row_admin['surName'];?></h5>
				</div>
				</div>
			
				
				<div class="col-sm-5">
				<div class="input-group">
				<h5><?php echo $row_admin['Email'];?></h5>
				</div>
				</div> 
				
				<div class="col-sm-1">
				<div class="input-group">
				<button style="width:70px;" id="edit_button[<?php echo $id;?>]" class="btn btn-default" >Edit</button>
				
				</script>

				</div>
				</div>
				
				<div class="col-sm-1">
				<div class="input-group">
				<button style="width:70px;" class="btn btn-danger">Delete</button>
				</div>
				</div>
				
	</div>
	
	
			

	
	</div>
	
					
	
		<?php endwhile;?>

	</div>
		<?php endif;?>

					
	</div>
	
	<br>
				

</body>

</body>
				

</html>

