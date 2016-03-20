<!DOCTYPE html>
<html>
<body>

	<?php
			$userEmail = $_POST['email']; 
			$userPassword = $_POST['password'];
			include ('conn.php'); 
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
			session_start();
			$_SESSION['login_user']= $userEmail;
			header('Location: home.php');
			}
			
		
		else{
			header('Location: loginFailed.php');
			; 
		}
			
		} else {
			header('Location: loginFailed.php');
		}
			
			?>

</body>
</html>