<!DOCTYPE html>
<?php 
include ('getUsername.php'); 
?>
<html>

<nav class= "navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">WebGraphy</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if ($include=="home"){echo 'active';}?>"><a href="home.php">Home</a></li>
  
	 <li class="<?php if ($include=="newPatient"){echo 'active';}?>"><a href="studyNew.php">New Study</a></li>
	 <?php if( $_SESSION['user_type'] == 'admin'):?>   
	<li class="<?php if ($include=="admin"){echo 'active';}?>"><a href="Admin.php">Administrator</a></li>
<?php endif; ?>
<?php if( $_SESSION['user_type'] != 'admin'):?>   
	<li class="<?php if ($include=="forum"){echo 'active';}?>"><a href="forum.php">Forum</a></li>
<?php endif?>    
	</ul>
	      <ul class="nav navbar-nav navbar-right">
				<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php echo" " .$fName." " .$sName;?>  <span class="caret"></span></a>
					 <ul class="dropdown-menu">
					 <li><a href="#">Profile</a></li>
					<li><a href="logout.php">Logout</a></li> 
					</ul>
				</li>
		  </ul>
		  </nav>
		  </html>