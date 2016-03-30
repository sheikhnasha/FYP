<!DOCTYPE html>
<html>
<body>

	<?php
	
			
			$adminFN=$_POST['adminFN'];$adminSN=$_POST['adminSN'];$adminEmail=$_POST['adminEmail'];
			
			//Create Random Password
			$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
			$random_string_length = 8;
			$adminPass = '';
			for ($i = 0; $i < $random_string_length; $i++) {
			$adminPass .= $characters[rand(0, strlen($characters) - 1)];
			}
			
						// Create connection
			include ('conn.php');
			
			
			$sql_admin = "INSERT INTO `login`(`userID`, `Email`, `Password`, `userType`) 
			VALUES (NULL,'$adminEmail','$adminPass','admin')";
			$result_admin = $conn->query($sql_admin);
			if (mysqli_query($conn, $sql_admin)) {
			$last_id = $conn->insert_id;
			$sql1 = "INSERT INTO `administrators`(`administratorsID`, `userID`, `firstName`, `surName`) 
			VALUES (NULL,$last_id,'$adminFN','$adminSN')";
			$result1 = $conn->query($sql1);
			header('Location: admin.php');
			}

			
			?>

</body>
</html>