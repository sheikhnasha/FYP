
	<?php
	
			
			
						// Create connection
	
			include ('getUsername.php');
			$sql_forumGET="SELECT DISTINCT `referreeID_minor`, `referreeID_super`, referees.firstName, referees.surName, forumdiscussion.forumID
			FROM `forum` 
			INNER JOIN referees ON forum.referreeID_minor = referees.referreeID 
			INNER JOIN forumdiscussion ON forum.forumID = forumdiscussion.forumID 
			WHERE referreeID_super = '$referreeID' 
			OR referreeID_minor = '$referreeID'
			ORDER BY `forumdiscussion`.`dateTIME` DESC ";
			$result_forumGET= $conn -> query($sql_forumGET); 
			
			function getTime($ID){
				include('conn.php');
			$sql_dateTIMEGET= "SELECT * FROM `forumdiscussion` 
			WHERE `forumID` = $ID 
			ORDER BY `forumdiscussion`.`dateTIME` DESC ";
			$result_dateTIMEGET= $conn -> query($sql_dateTIMEGET); 
			$row_dateTIMEGET = $result_dateTIMEGET->fetch_assoc();
			return $row_dateTIMEGET['dateTIME'];
			}
			
		
			
			function getStudy($refID){
				include('conn.php');
				$sql_getStudy= "SELECT DISTINCT `referreeID_minor`, `referreeID_super`, referees.firstName, referees.surName,
				forumdiscussion.forumID, studyobject.objectID, studyobject.objectFirstname, studyobject.objectSurname, ctscan.date, ctscan.CTScanID FROM `forum` 
				INNER JOIN referees ON forum.referreeID_minor = referees.referreeID 
				INNER JOIN forumdiscussion ON forum.forumID = forumdiscussion.forumID 
				INNER JOIN studyobject ON forum.objectID = studyobject.objectID 
				INNER JOIN ctscan ON studyobject.objectID = ctscan.objectID 
				WHERE referreeID_super = $refID OR referreeID_minor = $refID 
				ORDER BY `forumdiscussion`.`dateTIME` DESC  ";
				return  $conn -> query($sql_getStudy); 
			}
			
			
			function getMessage($ID){
				include('conn.php');
				$sql_getMessage= "SELECT * FROM `forumdiscussion` 
				WHERE forumID = $ID
				ORDER BY `forumdiscussion`.`dateTIME` DESC ";
				return  $conn -> query($sql_getMessage); 
			}
			
			function send($ID, $TYPE){
				$forumMsg = $_POST['message'];
				date_default_timezone_set("Asia/kuala_lumpur"); 
				$date_time=date("Y-m-d h:i:sa");
				include('conn.php');
				$sql_msgADD="INSERT INTO `forumdiscussion`(`messageID`, `forumID`, `message`, `dateTIME`, `referreeType`) 
				VALUES (NULL,'$ID','$forumMsg' ,'$date_time','$TYPE')";
				$result_msgADD= $conn -> query($sql_msgADD); 
				header('Location:forum.php');
				
			}
			
				
				
			?>
