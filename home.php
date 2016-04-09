<!DOCTYPE html>
<?php include ('session.php');?>


<html lang="en">


<head>
<title>Welcome 21st century cloudGraphy</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body id="fullBody">
<div class="navBar">
<?php
$include = "home";
 include 'navBar.php';
 ?>
  </div>
</nav>
</div>
  
<div class=" well container">
  		
<?php
	if( $_SESSION['user_type'] == 'admin'):
	
	?>
	
	<?php 
	
	 $sql= ("SELECT DISTINCT study.`referreeID`, `firstName`, `surName` FROM referees 
		 INNER JOIN study ON referees.`referreeID`=study.`referreeID` 
		 ORDER BY `referees`.`firstName` ASC  ");
		$result = $conn->query($sql);
		if ($result->num_rows > 0) :
		while ($row = $result->fetch_assoc()):
		$fName = $row['firstName'];
		$sName = $row['surName'];
		$id = $row['referreeID'];
		?>
		
		<h3><?php	echo $fName ." " .$sName?> </h3>
	<?php
	$sql_bar = ("SELECT * FROM studyobject 
	INNER JOIN ctscan ON studyobject.`objectID`=ctscan.`objectID` 
	INNER JOIN study ON ctscan.`objectID` = study.`objectID` 
	WHERE referreeID = $id
	ORDER BY `ctscan`.`date` DESC ");
		 
		 include 'home_profile.php';
		?>
		<?php
		endwhile;
		endif;
		
	
		else:
		$sql_bar=("SELECT * FROM studyobject 
		INNER JOIN study ON studyobject.objectID = study.objectID 
		INNER JOIN ctscan ON studyobject.`objectID`=ctscan.`objectID` 
		WHERE study.referreeID = '$referreeID' 
		ORDER BY `ctscan`.`date` DESC"); 
		
		include 'home_profile.php';
		endif;
		?>
	

	
	
</div>


</body>

  <div class="container" id="pop_share" style="width : 450px; position: absolute; top: 50%; left: 50%; margin-top: -100px;margin-left: -250px; border:solid 2px #D1D1D1; border-radius: 3px; display:none">
	        
	   		<?php
			$forumobID="#";
			$forumobID=$_GET['obID']; ?>
		<form class="form-horizontal" method="post" action="forum_add.php?obID=<?php echo $forumobID?>">
		
					<?php
					include ('conn.php');
					$sql = "SELECT * FROM referees WHERE referreeID != $referreeID";
					$result = $conn->query($sql);
					?>
					<br>
					
						<div class="form-group">
						
					<div class="col-lg-12">
								<select class="form-control" id="refID" name="refID" required>
							<option value="">Select a referee:</option>
							<?php while($row = $result->fetch_assoc()):?>
							<option value="<?php echo $row['referreeID']?>"><?php echo $row['referreeID'] ." - ". $row['firstName'] . " " . $row['surName'];?></option>
							<?php endwhile;?>
							</select>
						</div>
					</div>
					
				
				</br>
				<div class="form-group">
					
						<div class="col-sm-12">
							<textarea rows="5" style="resize: none;" name = "message" class="form-control" id="inputPassword3" placeholder="Type Your Message Here." required></textarea>
						</div>
				</div>
				
				<br>
    
				<div class="row">
				
					<div class="col-sm-6">
				<div class="input-group">
						<button type="submit" name="share" class="btn btn-default" style="color:blue; width:190px; height: 40px;">Share</button>
					</div>
				</div>
				
					<div class="col-sm-6">
				<div class="input-group">
						<button type="button" class="btn btn-danger" name="" id="btn_hidePOP" onclick="hide()" style="width:190px; height: 40px;">Cancel</button>
					</div>
				</div>
				</div>
				<br>
			</form>
		
		</div>

</body>
</html>