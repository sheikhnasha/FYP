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
 include 'navBar.php';
 ?>
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
<?php
	if( $_SESSION['user_type'] == 'admin'):
	
	?>
	
	<?php 
	
	 $sql= ("SELECT DISTINCT study.`referreeID`, `firstName`, `surName` FROM referees 
		 INNER JOIN study ON referees.`referreeID`=study.`referreeID` 
		 ORDER BY `referees`.`firstName` ASC  ");
		$result = $conn->query($sql);
		if ($result->num_rows > 0) :
		while ($row = $result->fetch_assoc()):
		$fName = $row['firstName'];
		$sName = $row['surName'];
		$id = $row['referreeID'];
		?>
		
		<h3><?php	echo $fName ." " .$sName?> </h3>
	<?php
	$sql_bar = ("SELECT * FROM studyobject 
	INNER JOIN ctscan ON studyobject.`objectID`=ctscan.`objectID` 
	INNER JOIN study ON ctscan.`objectID` = study.`objectID` 
	WHERE referreeID = $id
	ORDER BY `ctscan`.`date` DESC ");
		 
		 include 'bar.php';
		?>
		<?php
		endwhile;
		endif;
		
	
		else:
		$sql_bar=("SELECT * FROM studyobject 
		INNER JOIN study ON studyobject.objectID = study.objectID 
		INNER JOIN ctscan ON studyobject.`objectID`=ctscan.`objectID` 
		WHERE study.referreeID = '$referreeID' 
		ORDER BY `ctscan`.`date` DESC"); 
		
		include 'bar.php';
		endif;
		?>
	

	
	
</div>


</body>

</body>
</html>