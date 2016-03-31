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
		 
		 include 'home_profile.php';
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
		
		include 'home_profile.php';
		endif;
		?>
	

	
	
</div>


</body>

</body>
</html>