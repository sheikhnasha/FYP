<!DOCTYPE html>
<?php include ('session.php');?>
<?php include ('study_GET.php');?>
<html lang="en">
<head>
<title>New Study</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/input.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/input.js"></script>
  <script src="js/hide_show.js"></script>
  <!--http://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3/-->
</head>

<body>
	<div class="navBar">
		<?php 
		include 'navBar.php';
		$add=$_GET['add'];?>
	</div>


	<div class="container">
			<form class="well form-horizontal" method="post" action="study_update.php?add=<?php echo $add;?>" enctype="multipart/form-data">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">First Name</span>
							<input type="text" name="objectFN"  class="form-control" value="<?php echo $objectfName; ?>">
						</div>
					</div>
					
					<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" name="objectSN" class="form-control" placeholder="Enter Deceased Surname"    value="<?php echo $objectsName; ?>" >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">IC Number</span>
							<input type="number"  name="objectIC" class="form-control" placeholder="Enter Deceased IC Number"   value="<?php echo $objectIC; ?>" >
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Tel</span>
							<input type="number" name="objectTel" class="form-control"   value="<?php echo $objectTEL; ?>" >
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Date of Birth</span>
							<input type="date" name="objectDOB" class="form-control"   value="<?php echo $objectDOB; ?>" >
						</div>
					</div>
				</div>
				
					<br>
				
				<div class ="row">
					<div class="col-lg-4">
					
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon2">Sex</span>
								<select class="form-control" id="sel1" name="objectSex" required>
							<option><?php echo $objectSEX; ?></option>
							<option><?php if ($objectSEX=="Male"){echo 'Female';}else{echo 'Male';}?></option>
							</select>
							
						<br>
					</div>
					</div>
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Height</span>
							<input type="text" name="objectHeight" class="form-control"   value="<?php echo $objectHeight; ?>  cm" >
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Weight</span>
							<input type="text" name="objectWeight" class="form-control"   value="<?php echo $objectWeight; ?>  kg" >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Address</span>
							<input type="text" name="objectAdd" class="form-control"  value="<?php echo $objectAddress; ?>" >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class ="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">City</span>
							<input type="text" name="objectCity" class="form-control"   value="<?php echo $objectCity; ?>" >
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">State</span>
							<input type="text" name="objectState" class="form-control "  value="<?php echo $objectState; ?>"  >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class ="row">
					<div class="col-lg-4">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Date of Death</span>
							<input type="date" name="objectDOD" class="form-control"   value="<?php echo $objectDOD; ?>"  >
						</div>
					</div>
					<div class="col-lg-8">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Cause of Death</span>
							<input type="text" name="objectCause" class="form-control" placeholder="Enter The Cause Of Deceased's Death"   value="<?php echo $objectCause; ?>"  >
						</div>
					</div>
				</div>
				
					<br>
					<br>
					<br>
				<?php
					if( $_SESSION['user_type'] == 'admin') :
					include ('conn.php');
					$sql = "SELECT * FROM referees WHERE referreeID != $RefID";
					$result = $conn->query($sql);
					?>
					<div class="row">
						<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Referree's ID</span>
								<select class="form-control" id="refID" name="refID" required>
							<option><?php echo $RefID . " - " . $Reffname;?></option>
							<?php while($row = $result->fetch_assoc()):?>
							<option><?php echo $row['referreeID'] ." - ". $row['firstName'] ;?></option>
							<?php endwhile;?>
							</select>
						</div>
					</div>
					
					
						<div class = "col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon3">Surname</span>
							<input type="text" name="refSN" class="form-control" id="disabledInput" style="cursor:default;" value="<?php echo $Refsname; ?>" disabled >
						</div>
					</div>
				</div>
					
				<br>
				<br>
				<br>
				<?php endif;?>
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">CT SCAN Date</span>
							<input type="date" name="CTDate" class="form-control"   value="<?php echo $scanDate; ?>" >
						</div>
					</div>
			
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">CT SCAN Time</span>
							<input type="time" name="CTTime" class="form-control"  value="<?php echo $scanTime; ?>" >
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="row">
				<div class="col-lg-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse&hellip; <input type="file" name="juice[]" multiple>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
				</div>
					</div>
					<br>
					
					
					
					
					
				<div class="col-md-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
    border-width: 1px; margin-bottom: 10px; border-color: #D1D1D1" id="show_button">
	
	<div class="row" >
	
				<div class="col-sm-5">
				</div>
				<div class="col-sm-5">
				<div class="input-group">
				<button type="button"  onclick="show()" class="btn btn-link"><h5><?php echo $rowcount . " files available.";?></h5></button>
				</div>
				</div>
				
	</div>
	</div>
	<div class="col-md-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
    border-width: 1px; margin-bottom: 10px; border-color: #D1D1D1" id="hide_button" hidden>
	
	<div class="row" >
	
				<div class="col-sm-5">
				</div>
				<div class="col-sm-5">
				<div class="input-group">
				<button type="button"  onclick="hide()" class="btn btn-link"><h5>Cancel</h5></button>
				</div>
				</div>
				
	</div>
	
	
	
	</div>
	
	
		
				<div class="col-md-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
    border-width: 1px; margin-bottom: 10px; border-color: #D1D1D1"  id="images" hidden>
	<br>
		
	<br>
	
	<div class="row">
					<?php while($row_image = $result_image -> fetch_assoc()):
					$dir = $row_image['directory'];
					$imgid=$row_image['CTImageID'];
					$img = strlen($dir);
					for($i=0; $i<$img; $i++){
						if($dir[$i]=="/"){
							$name=$i+1;
						}
					}
				
					?>
					<div class="col-lg-4" style="margin-bottom:5px;">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2"><input name = "checkfile[]" value="<?php echo $imgid; ?>" type="checkbox"></span>
							<input type="text" class="form-control"id="disabledInput" style="cursor:default;" value="<?php for($j=$name; $j<$img; $j++){echo $dir[$j];} ?>" >
						</div>
					</div>
					<?php endwhile;?>
				</div>
				
				<br>
				
					<div class="row" >
	
				<div class="col-sm-5">
				</div>
				<div class="col-sm-5">
				<div class="input-group">
				<button type="submit" name= "delFile" class="btn btn-danger">Delete</button>
				</div>
				</div>
				</div>
				<br>
				
			
	</div>

					
					
				
				<br>
					
					<br>
					<div class='row'>
						<div class="col-lg-2">
						</div>
						<button  type="submit" value="Update" name="updateAll" class="btn btn-success" style="width: 320px; height: 40px">Update</button> 
						<a href="studyProfile.php?add=<?php echo $add; ?>"><button  type="button" class="btn btn-danger" style="width: 320px; margin-left: 100px; height: 40px">Cancel</button></a> 
					</div>
					
					
					
					</form>
					
	</div>
	
	<br>
				

</body>

</body>
</html>