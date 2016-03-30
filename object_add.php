<!DOCTYPE html>
<html>
<body>

	<?php
	
			
			include ('POST_study.php');
			
						// Create connection
			include ('conn.php');
			
			
			$sql = "INSERT INTO `studyobject` 
			(`objectID`, `objectFirstname`, `objectSurname`, `ICNumber`, `telephone`, `DOB`, `Sex`, `height`, `weight`, `homeAddress`, `homeCity`, `homeState`, `DOD`, `deathCause`) 
			VALUES (NULL, '$objectFN', '$objectSN', '$objectIC ', '$objectTel', '$objectDOB', '$objectSex', '$objectHeight', '$objectWeight', '$objectAdd', '$objectCity', '$objectState', '$objectDOD', '$objectCause');";
			$result = $conn->query($sql);
			
			//echo "Connected successfully";
			$sql0 = "SELECT * FROM studyobject ORDER BY `studyobject`.`objectID` DESC "; 
			$result = $conn->query($sql0);
			$row = $result->fetch_assoc();
			$newID=$row['objectID'];
			
					$sql1 = "INSERT INTO `study` (`studyID`, `objectID`, `referreeID`, `referreeType`) VALUES (NULL, '$newID', '$refID', '');";
			$result = $conn->query($sql1);
			
			
			$sql_CTScan = "INSERT INTO `ctscan`(`CTScanID`, `date`, `time`, `objectID`) VALUES (NULL,'$CTDate','$CTTime','$newID');";
			$result = $conn->query($sql_CTScan);
			
			
			$sql_ScanID = "SELECT * FROM ctscan ORDER BY `ctscan`.`CTScanID` DESC "; 
			$result = $conn->query($sql_ScanID);
			$row = $result->fetch_assoc();
			$ScanID = $row['CTScanID'];
			
			//File Upload
			if (!file_exists("DICOM/'$ScanID")) {
			mkdir("DICOM/$ScanID", 0777, true);
			}
			$total = count($_FILES['juice']['name']);
			for($i=0; $i<$total; $i++) {
			$target_dir = "DICOM/$ScanID/";
			$target_file = $target_dir . basename($_FILES["juice"]["name"][$i]);
			$uploadOk = 1;
			// Check if file already exists
			if (file_exists($target_file)) {
			//  echo "Sorry, file already exists.";
			$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			//  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			if (move_uploaded_file($_FILES["juice"]["tmp_name"][$i], $target_file)) {
			$sql_CTImage = "INSERT INTO `ctimages`(`CTScanID`, `CTImageID`, `directory`) VALUES ('$ScanID',NULL ,'$target_file')"; 
			$result = $conn->query($sql_CTImage);
			//echo "The file ". basename( $_FILES["juice"]["name"][$i]). " has been uploaded.";
    } else {
//      echo "Sorry, there was an error uploading your file.";
    }
}
}
			
			header('Location: newStudy.php');
			
			?>

</body>
</html>