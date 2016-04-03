
	<?php
	
			
			
						// Create connection
	
			include ('getUsername.php');
			$sql_forumGET="SELECT * FROM `forum` 
			INNER JOIN referees 
			ON forum.referreeID_minor = referees.referreeID 
			WHERE referreeID_super = '$referreeID' 
			OR referreeID_super = '$referreeID'";
			$result_forumGET= $conn -> query($sql_forumGET); 
			
			//echo $forumobID;
			//echo $forumMinor;
			
			
			?>
