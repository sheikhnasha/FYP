
	<?php
	
			
			if (isset($_POST['share'])){
			$forumobID=$_GET['obID'];
			$forumMinor = $_POST['refID'];
			$forumMsg = $_POST['message'];
			date_default_timezone_set("Asia/kuala_lumpur"); 
			$date_time=date("Y-m-d h:i:sa");
			
						// Create connection
			
			include ('session.php');
			include ('getUsername.php');
			$sql_forumADD="INSERT INTO `forum`(`forumID`, `objectID`, `referreeID_super`, `referreeID_minor`) 
			VALUES (NULL,'$forumobID','$referreeID','$forumMinor')";
			if ($conn->query($sql_forumADD) === TRUE) {
			$newForumID = $conn->insert_id;
			$sql_msgADD="INSERT INTO `forumdiscussion`(`messageID`, `forumID`, `message`, `dateTIME`, `referreeType`) 
			VALUES (NULL,'$newForumID','$forumMsg' ,'$date_time','major')";
			$result_msgADD= $conn -> query($sql_msgADD); 
			header('Location:forum.php');
			}
			}
			
			
			
			//echo $forumobID;
			//echo $forumMinor;
			
			
			?>
