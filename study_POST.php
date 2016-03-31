			<?php
			include ('session.php');
			include ('getUsername.php');
			
			$objectFN = $_POST['objectFN'];	$objectSN = $_POST['objectSN'];	$objectIC = $_POST['objectIC'];	$objectTel = $_POST['objectTel'];
			$objectDOB = $_POST['objectDOB']; $objectSex = $_POST['objectSex'];	$objectHeight = $_POST['objectHeight'];	$objectWeight = $_POST['objectWeight'];
			$objectAdd = $_POST['objectAdd']; $objectCity=$_POST['objectCity']; $objectState = $_POST['objectState'];	$objectDOD = $_POST['objectDOD']; $objectCause = $_POST['objectCause'];
			
			if( $_SESSION['user_type'] == 'admin'){
			$refID = $_POST['refID'];
			}
			else {
				$refID = $referreeID; 
			}
			
			$CTDate = $_POST['CTDate'];
			$CTTime = $_POST['CTTime'];
			
			?>