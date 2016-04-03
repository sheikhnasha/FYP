
	<?php
	
			
			
			$forumobID=$_GET['obID'];
			$forumMinor = $_POST['refID'];
			$forumMsg = $_POST['message'];
			
						// Create connection
			
			include ('session.php');
			include ('getUsername.php');
			$sql_forumADD="INSERT INTO `forum`(`forumID`, `objectID`, `referreeID_super`, `referreeID_minor`) 
			VALUES (NULL,'$forumobID','$referreeID','$forumMinor')";
			if ($conn->query($sql_forumADD) === TRUE) {
			$newForumID = $conn->insert_id;
			$sql_msgADD="INSERT INTO `forumdiscussion`(`messageID`, `forumID`, `message`, `date`, `time`, `referreeType`) 
			VALUES (NULL,'$newForumID','$forumMsg' ,[value-4],[value-5],'major')";
			$result_msgADD= $conn -> query($sql_msgADD); 
			}
			
			//echo $forumobID;
			//echo $forumMinor;
			
			
			?>
