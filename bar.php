<?php
$result_bar = $conn->query($sql_bar);
	if ($result_bar->num_rows > 0) :
	while($row_bar = $result_bar->fetch_assoc()) :
	?>
	<div class="col-md-12" style= "background:#ffffff; border-radius: 5px;  border-style: solid;
    border-width: 1px; margin-bottom: 10px; border-color: #D1D1D1">
	
	<div class="row">
				<a style="cursor:pointer"><div class="col-sm-1">
				<div class="input-group">
				<h5><?php echo $row_bar['objectID'];?></h5>
				</div>
				</div>
				
				
				<div class="col-sm-4">
				<div class="input-group">
				<h5><?php echo $row_bar['objectFirstname'] ." ". $row_bar['objectSurname'];?></h5>
				</div>
				</div></a>
				
				
				<div class="col-sm-2">
				<div class="input-group">
				<h5>DOB: <?php echo $row_bar['DOB'] ?></h5>
				</div>
				</div> 
				
				<div class="col-sm-2">
				<div class="input-group">
				<h5>DOD: <?php echo $row_bar['DOD']?></h5>
				</div>
				</div>
				
				<div class="col-sm-2">
				<div class="input-group">
				<h5>CT Scan : <?php echo $row_bar['date']?></h5>
				</div>
				</div>
				
				<div class="col-sm-1">
				<div class="input-group">
				<a href="studyProfile.php?add=<?php echo $row_bar['objectID'];?>"><button class="btn btn-default">Profile</button></a>
				</div>
				</div>
				
	</div>
	</div>
	
	
	
	<?php
	endwhile;
	else: ?>
	<h3> No Record Found!<h3>
	<?php endif;	?>
	