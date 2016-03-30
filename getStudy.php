<!DOCTYPE html>
<html>
<body>

	<?php	
	include ('conn.php');
		$sql = ("SELECT *
 FROM studyobject
 INNER JOIN ctscan
 ON studyobject.objectID = ctscan.objectID
 INNER JOIN study
 ON ctscan.`objectID`=study.objectID
INNER JOIN referees
ON study.referreeID = referees.referreeID 
INNER JOIN surgeries
ON referees.surgeryID = surgeries.surgeryID
WHERE studyobject.objectID = $_GET[add]");
			$result = $conn->query($sql);
			
			
			
			$row = $result->fetch_assoc();
			$objectfName=$row['objectFirstname'];
			$objectsName=$row['objectSurname'];
			$objectIC=$row['ICNumber'];
			$objectTEL=$row['telephone'];
			$objectDOB=$row['DOB'];
			$objectSEX=$row['Sex'];
			$objectHeight=$row['height'];
			$objectWeight=$row['weight'];
			$objectAddress=$row['homeAddress'];
			$objectCity=$row['homeCity'];
			$objectState=$row['homeState'];
			$objectDOD=$row['DOD'];
			$objectCause=$row['deathCause'];
			
			$RefID=$row['referreeID'];
			$Reffname=$row['firstName'];
			$Refsname=$row['surName'];
			
			$scanDate=$row['date'];
			$scanTime=$row['time'];
			$scanID=$row['CTScanID'];
			
			$sql_image="SELECT * FROM `ctimages` WHERE `CTScanID` = $scanID ORDER BY `ctimages`.`CTImageID` ASC ";
			$result_image = $conn->query($sql_image);
			
			$rowcount=mysqli_num_rows($result_image);
			
	
			
			?>

</body>
</html>