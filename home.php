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

<body>
<div class="navBar">
<?php
$include = "home";
 include 'navBar.php';?>
  </div>
</nav>
</div>
  
<div class="container">
  <h3><?php echo $include;?></h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>

</body>

</body>
</html>