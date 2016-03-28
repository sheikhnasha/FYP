	<?php
	
			
			include ('POST_study.php');
			include ('getobject.php');
			$add=$_GET['add'];
			
			// Create connection
			include ('conn.php');
			
			// Update studyObject
			$sql = ("UPDATE `studyobject` SET 
			`objectFirstname`='$objectFN',`objectSurname`='$objectSN',
			`ICNumber`='$objectIC',`telephone`='$objectTel',`DOB`='$objectDOB',`Sex`='$objectSex',
			`height`='$objectHeight',`weight`='$objectWeight',`homeAddress`='$objectAdd',`homeCity`='$objectCity',
			`homeState`='$objectState',`DOD`='$objectDOD',`deathCause`='$objectCause' WHERE studyobject.objectID = $add");
			$result = $conn->query($sql);
			
			// Update study
			
			$sql_study =("UPDATE `study` SET `referreeID`= $refID WHERE objectID = $add");
			$result_study = $conn->query($sql_study);
			
			//Update ctscan
			
			$sql_ctscan =("UPDATE `ctscan` SET `date`=$CTDate,`time`=$CTTime WHERE objectID = $add");
			$result_ctscan = $conn->query($sql_ctscan);
			
			
			header("Location: studyProfile.php?add=$add");
			?>