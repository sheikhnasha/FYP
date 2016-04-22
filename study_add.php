
	<?php
	
			
			include ('study_POST.php');
			
						// Create connection
			include ('conn.php');
			$success = 0;
			
			$sql = "INSERT INTO `studyobject` 
			(`objectID`, `objectFirstname`, `objectSurname`, `ICNumber`, `telephone`, `DOB`, `Sex`, `height`, `weight`, `homeAddress`, `homeCity`, `homeState`, `DOD`, `deathCause`) 
			VALUES (NULL, '$objectFN', '$objectSN', '$objectIC ', '$objectTel', '$objectDOB', '$objectSex', '$objectHeight', '$objectWeight', '$objectAdd', '$objectCity', '$objectState', '$objectDOD', '$objectCause');";
			if ($conn->query($sql) === TRUE) {
			$newID = $conn->insert_id;
			$success = 1;
			}
			
			
			$sql1 = "INSERT INTO `study` (`studyID`, `objectID`, `referreeID`) VALUES (NULL, '$newID', '$refID');";
			if( $conn->query($sql1) === TRUE){
			$success = 1;	
			}
			else{
				$success = 0;
			}
			
			
			$sql_CTScan = "INSERT INTO `ctscan`(`CTScanID`, `date`, `time`, `objectID`) VALUES (NULL,'$CTDate','$CTTime','$newID');";
			if($conn->query($sql_CTScan)=== TRUE){
				$ScanID  = $conn->insert_id;
				$success = 1;	
			}
			else{
				$success = 0;
			}
			
			
			
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
			if ($success == 1){
			header('Location: studyNew_success.php');
			}
			else{
				header('Location: studyNew_fail.php');
			}
			?>
