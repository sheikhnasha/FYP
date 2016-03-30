<!DOCTYPE html>
<html>
<body>

	<?php
				
		// Create connection
			include ('conn.php');
		$study_del_id = $_GET['add'];	
		
		$sql="DELETE FROM `studyobject` WHERE objectID = $study_del_id";
		$result = $conn->query($sql);
		 header("Location: home.php");	
			?>

</body>
</html>