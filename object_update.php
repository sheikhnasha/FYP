	<?php
		include ('conn.php');
		$add=$_GET['add'];
			if(isset($_POST['updateAll'])){ 
			include ('POST_study.php');
			include ('getStudy.php');
			
			
			// Create connection
			
			
			// Update studyObject
			/*$sql = ("UPDATE `studyobject` SET 
			`objectFirstname`='$objectFN',`objectSurname`='$objectSN',
			`ICNumber`='$objectIC',`telephone`='$objectTel',`DOB`='$objectDOB',`Sex`='$objectSex',
			`height`='$objectHeight',`weight`='$objectWeight',`homeAddress`='$objectAdd',`homeCity`='$objectCity',
			`homeState`='$objectState',`DOD`='$objectDOD',`deathCause`='$objectCause' WHERE studyobject.objectID = $add");
			$result = $conn->query($sql);
			*/
			// Update study
			
			$sql_study =("UPDATE `study` SET `referreeID`= '$refID' WHERE objectID = $add");
			$result_study = $conn->query($sql_study);
			
			//Update ctscan
			
			$sql_ctscan =("UPDATE `ctscan` SET `date`='$CTDate',`time`='$CTTime' WHERE objectID = $add");
			$result_ctscan = $conn->query($sql_ctscan);
			
			//File Upload
			if (!file_exists("DICOM/'$scanID")) {
			mkdir("DICOM/$scanID", 0777, true);
			}
			$total = count($_FILES['juice']['name']);
			for($i=0; $i<$total; $i++) {
			$target_dir = "DICOM/$scanID/";
			$target_file = $target_dir . basename($_FILES["juice"]["name"][$i]);
			$uploadOk = 1;

			if (move_uploaded_file($_FILES["juice"]["tmp_name"][$i], $target_file)) {
			$sql_CTImage = "INSERT INTO `ctimages`(`CTScanID`, `CTImageID`, `directory`) VALUES ('$scanID',NULL ,'$target_file')"; 
			$result = $conn->query($sql_CTImage);
			//echo "The file ". basename( $_FILES["juice"]["name"][$i]). " has been uploaded.";
    } 
}

			
			header("Location: studyProfile.php?add=$add");
			}
			
			
			if(isset($_POST['delFile'])){
			$getFile = $_POST["checkfile"];
			$total = count($getFile);
			 for($i=0; $i < $total; $i++)
			{
				$img_id=$getFile[$i];
			$sql_delete_image= "SELECT * FROM `ctimages` WHERE CTImageID= $img_id";
			$result_delete_image = $conn->query($sql_delete_image);
			while($row_delete_image = $result_delete_image->fetch_assoc()){
			$dir_del = $row_delete_image['directory'];
			if (unlink($dir_del)){
			$sql_delete="DELETE FROM `ctimages` WHERE CTImageID= $img_id";
			$result_delete = $conn->query($sql_delete);
		
			}	
			}
			}
			header("Location: editProfile.php?add=$add");
			}
			?>