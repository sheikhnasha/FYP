<!DOCTYPE html>
<html>
<body>

	<?php
			$userEmail = $_POST['email']; 
			$userPassword = $_POST['password'];
			
			// Create connection
			$conn = new mysqli($servername="localhost", $username = "", $password = "", $dbname = "test");

			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			//echo "Connected successfully";
			$sql = "SELECT * FROM login WHERE Email = '$userEmail'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
		// output data of each row
		$row = $result->fetch_assoc();
        $dataEmail = $row["Email"]; 
		$dataPassword = $row["Password"];
		
		
		if($dataEmail == $userEmail && $dataPassword == $userPassword) 
		{
			header('Location: home.php');
			}
		
		else{
			header('Location: loginFailed.php');
			; 
		}
			
		} else {
			header('Location: loginFailed.php');;
		}
			
			?>

</body>
</html>