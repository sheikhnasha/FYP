<?php 
include ('conn.php');
$userID = $_SESSION['user_id'];
if( $_SESSION['user_type'] == 'admin'){
			
	$sql = "SELECT * FROM administrators WHERE userID = '$userID'";
			
	
}else{
	$sql = "SELECT * FROM referees WHERE userID = '$userID'";
			
}
			$referreeID = '';
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$fName=$row['firstName'];
			$sName=$row['surName'];
			
			
			if( $_SESSION['user_type'] != 'admin'){
			$referreeID = $row['referreeID'];
			}
?>