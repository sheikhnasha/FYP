<!DOCTYPE html>
<?php include ('session.php');?>


<html lang="en">


<head>
<title>Welcome 21st century cloudGraphy</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<div class="navBar">
<?php
$include = "home";
 include 'navBar.php';?>
  </div>
</nav>
</div>
  
<div class=" well container">
  		<!--<div class="row">
		
		<?php for($i=0;$i<=7;$i++) :?>
				<div class="col-sm-3">
				<div class="input-group">   
		 
	   <div class="col-sm-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
    border-width: 1px; margin-bottom: 30px; border-color: #D1D1D1">

		
				<a><div class="row">
				<div class="col-sm-3">
				<div class="input-group">
				<h5>000000</h5>
				</div>
				</div>
				
				
				<div class="col-sm-8">
				<div class="input-group">
				<h5>studyObject Name</h5>
				</div>
				</div>
				</div></a>
				<div class="row">
				<div class="col-sm-6">
				<div class="input-group">
				<small style="font-size:75%;">DOB: 22-9-1991</small>
				</div>
				</div>
				
				
				<div class="col-sm-6">
				<div class="input-group">
				<small style="font-size:75%;">DOD: 22-9-1991</small>
				</div>
				</div>
				</div>
				
				<div class="row">
				<div class="col-sm-12">
				<div class="input-group">
				<small style="font-size:75%;">CT Scan Date: 22-9-1991</small>
				</div>
				</div>
			
				</div>
				<br>
				<div class="row">
					

			<div class="col-sm-5">
				<div class="input-group">
				<button class="btn btn-default" style="height:30px; width: 230px;"><small>Profile</small></button>
				</div>
				</div>
			
				</div>
				
				<br>
				
				</div>
		</div>
		</div>
		<?php endfor?>
		</div>-->
		
		<br><br>
		
	<?php
	$sql = ("SELECT * FROM studyobject INNER JOIN ctscan ON studyobject.`objectID`=ctscan.`objectID` ORDER BY `ctscan`.`date` DESC ");
	$result = $conn->query($sql);
	if ($result->num_rows > 0) :
	while($row = $result->fetch_assoc()) :
	?>
	   <div class="col-md-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
    border-width: 1px; margin-bottom: 10px; border-color: #D1D1D1">
	
	<div class="row">
				<a style="cursor:pointer"><div class="col-sm-1">
				<div class="input-group">
				<h5><?php echo $row['objectID'];?></h5>
				</div>
				</div>
				
				
				<div class="col-sm-4">
				<div class="input-group">
				<h5><?php echo $row['objectFirstname'] ." ". $row['objectSurname'];?></h5>
				</div>
				</div></a>
				
				
				<div class="col-sm-2">
				<div class="input-group">
				<h5>DOB: <?php echo $row['DOB'] ?></h5>
				</div>
				</div> 
				
				<div class="col-sm-2">
				<div class="input-group">
				<h5>DOD: <?php echo $row['DOD']?></h5>
				</div>
				</div>
				
				<div class="col-sm-2">
				<div class="input-group">
				<h5>CT Scan : <?php echo $row['date']?></h5>
				</div>
				</div>
				
				<div class="col-sm-1">
				<div class="input-group">
				<a href="studyProfile.php?add=<?php echo $row['objectID'];?>"><button class="btn btn-default">Profile</button></a>
				</div>
				</div>
				
	</div>
	</div>
	<?php endwhile;
	else :?>
	<h3> No Record Found!<h3>
	<?php endif;?>
	
	
	
		

		
		
		
				
				
				
				
				<!--<div class="row">
				<div class="col-sm-2">
				<div class="input-group">
				<h4>Height:</h4>
				</div>
				</div>
				
				<div class="col-sm-6">
				<div class="input-group">
				<h4>Weight:</h4>
				</div>
				</div>
				</div>
				
				<div class="row">
				<div class="col-sm-2">
				<div class="input-group">
				<h4>DOB:</h4>
				</div>
				</div>
				
				<div class="col-sm-6">
				<div class="input-group">
				<h4>DOD:</h4>
				</div>
				</div>
				</div>
				
				<div class="row">
				<div class="col-sm-4">
				<div class="input-group">
				<h4>Cause:</h4>
				</div>
				</div>

		</div>-->
	
		


</div>


</body>

</body>
</html>