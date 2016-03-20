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
			$sql = "INSERT INTO `studyobject` 
			(`objectID`, `firstName`, `surName`, `ICNumber`, `telephone`, `DOB`, `Sex`, `height`, `weight`, `homeAddress`, `homeCity`, `homeState`, `DOD`, `deathCause`) 
			VALUES (NULL, '$objectFN', '$objectSN', '$objectIC ', '$objectTel', '$objectDOB', '$objectSex', '$objectHeight', '$objectWeight', '$objectAdd', '$objectState', '$objectState', '$objectDOD', '$objectCause');";
			$result = $conn->query($sql);
			/*
			$sql1 = "SELECT * FROM login WHERE Email = '$signEmail'";
			$result = $conn->query($sql1);
			if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			$userID = $row["userID"]; 
			}
		
			$sql2 = "SELECT * FROM surgeries WHERE surgeryName = '$signSurgery' ";
			$result = $conn->query($sql2);
			if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			$surgeryID = $row["surgeryID"]; 
			}
			$sql3 = "INSERT INTO `referees` (`referreeID`, `userID`, `firstName`, `surName`, `surgeryID`) VALUES (NULL, '$userID', '$signFN', '$signSN', '$surgeryID')";
			$result = $conn->query($sql3);*/
			header('Location: newStudy.php');
			
			?>

</body>
</html>