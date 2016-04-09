
	<?php
				include('conn.php');
				$forumMsg = mysql_real_escape_string($_POST["message"]);
				$ID=$_GET['ID'];
				$TYPE=$_GET['TYPE'];
				date_default_timezone_set("Asia/kuala_lumpur"); 
				$date_time=date("Y-m-d h:i:sa");
		
			$sql_msgADD="INSERT INTO `forumdiscussion`(`messageID`, `forumID`, `message`, `dateTIME`, `referreeType`) 
			VALUES (NULL,'$ID','$forumMsg' ,'$date_time','$TYPE')";
			$result_msgADD= $conn -> query($sql_msgADD); 
			header('Location:forum.php');
			
			
			
			?>
