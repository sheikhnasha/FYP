<!DOCTYPE html>
<html>
<body>

	<?php
	
			$objectFN = $_POST['objectFN'];	$objectSN = $_POST['objectSN'];	$objectIC = $_POST['objectIC'];	$objectTel = $_POST['objectTel'];
			$objectDOB = $_POST['objectDOB']; $objectSex = $_POST['objectSex'];	$objectHeight = $_POST['objectHeight'];	$objectWeight = $_POST['objectWeight'];
			$objectAdd = $_POST['objectAdd']; $objectState = $_POST['objectState'];	$objectDOD = $_POST['objectDOD']; $objectCause = $_POST['objectCause'];
			

			
						// Create connection
			include ('conn.php');
			//echo "Connected successfully";
			$sql0 = "SELECT * FROM studyobject ORDER BY `studyobject`.`objectID` DESC "; 
			$result = $conn->query($sql0);
			$row = $result->fetch_assoc();
			$newID=$row['objectID'] + 1;
			
			$sql = "INSERT INTO `studyobject` 
			(`objectID`, `firstName`, `surName`, `ICNumber`, `telephone`, `DOB`, `Sex`, `height`, `weight`, `homeAddress`, `homeCity`, `homeState`, `DOD`, `deathCause`) 
			VALUES ('$newID', '$objectFN', '$objectSN', '$objectIC ', '$objectTel', '$objectDOB', '$objectSex', '$objectHeight', '$objectWeight', '$objectAdd', '$objectState', '$objectState', '$objectDOD', '$objectCause');";
			$result = $conn->query($sql);
			
			$refID = $_POST['refID'];
					$sql1 = "INSERT INTO `study` (`studyID`, `objectID`, `referreeID`, `referreeType`) VALUES (NULL, '$newID', '$refID', '');";
			$result = $conn->query($sql1);
			
			
			
			
			
			
			header('Location: newStudy.php');
			
			?>

</body>
</html>