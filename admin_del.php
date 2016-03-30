<!DOCTYPE html>
<html>
<body>

	<?php
				
		// Create connection
			include ('conn.php');
		$admin_del_id = $_GET['del'];	
		
		$sql="DELETE FROM `login` WHERE userID= $admin_del_id";
		$result = $conn->query($sql);
		 header("Location: admin.php");	
			?>

</body>
</html>