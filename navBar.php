<!DOCTYPE html>
<html>

<nav class= "navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Cloudgraphy</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if ($include=="home"){echo 'active';}?>"><a href="index.php">Home</a></li>
      <li class="<?php if ($include=="newPatient"){echo 'active';}?>"><a href="newPatient.php">New Study</a></li>
      <li><a href="#">Manage Study</a></li>
      <li><a href="#">Manage Doctors</a></li>
    </ul>
	      <ul class="nav navbar-nav navbar-right">
				<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>User Name  <span class="caret"></span></a>
					 <ul class="dropdown-menu">
					 <li><a href="#">Profile</a></li>
					<li><a href="#">Logout</a></li> 
					</ul>
				</li>
		  </ul>
		  </nav>
		  </html>