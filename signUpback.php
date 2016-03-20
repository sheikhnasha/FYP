<!DOCTYPE html>
<html>
<body>

	<?php
			$signFN = $_POST['signFN'];
			$signSN = $_POST['signSN'];
			$signEmail = $_POST['signEmail'];
			$signPass = $_POST['signPass'];
			$signRePass = $_POST['signRePass'];
			$signSurgery = $_POST['signSurgery'];

			
						// Create connection
			$conn = new mysqli($servername="localhost", $username = "", $password = "", $dbname = "test");

			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			//echo "Connected successfully";
			$sql = "INSERT INTO `login` (`userID`, `Email`, `Password`, `userType`) VALUES (NULL, '$signEmail', '$signPass', '')";
			$result = $conn->query($sql);
			
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
			$result = $conn->query($sql3);
			
			
			
			?>

</body>
</html>