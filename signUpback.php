<!DOCTYPE html>
<html>
<body>

	<?php
			$signFN = $_POST['signFN'];
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
			
			
			?>

</body>
</html>