

</body>
</html>
<!DOCTYPE html>
<?php include ('session.php');
include ('forum_get.php');

?>


<html lang="en">
<title>Welcome 21st century cloudGraphy</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <title>Easy Responsive Tabs to Accordion</title>
    <style type="text/css" rel="stylesheet">
        body {
            background: #fff;
        }
        #container {
            width: 940px;
            margin: 0 auto;
        }
        @media only screen and (max-width: 768px) {
            #container {
                width: 90%;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>

<div class="navBar">
<?php
$include = "forum";
 include 'navBar.php';
 ?>
  </div>
  
</nav>
</div>
  
    <div id="container">

        <!--Vertical Tab-->
        <div id="parentVerticalTab">
		<div class="seif" >
            <ul class="resp-tabs-list hor_1" style="width:200px;">
                <?php while ($row_forumGET = $result_forumGET->fetch_assoc()):
				$minorID=$row_forumGET['referreeID_minor'];
				$majorID=$row_forumGET['referreeID_super'];
				$forumID=$row_forumGET['forumID'];
				$dateTIME = getTime($forumID);
	
				if ($minorID==$referreeID):
				$sql_superGET="SELECT * FROM `referees` WHERE referreeID=$majorID";
				$result_superGET = $conn -> query($sql_superGET);
				$row_forumGET = $result_superGET->fetch_assoc();
				endif;
				
				
				
				?>
				
				
				<li><?php  echo $row_forumGET['firstName'] . " " . $row_forumGET['surName'] ;?> <br><small><?php echo $dateTIME;?></small></li><?php endwhile;  ?>
           
            </ul>
			</div>
            <div class="resp-tabs-container hor_1" style="height:200px; overflow-x:hidden; overflow-y: scroll;">
				
				<?php  $result_getStudy = getStudy($referreeID);
						while ($row_getStudy  = $result_getStudy->fetch_assoc()):
						$forumID=$row_getStudy['forumID'];
						$majorID=$row_getStudy['referreeID_super'];
						$minorID=$row_getStudy['referreeID_minor'];
				
						
				?>
				<div>
                
				<div class="col-md-12 well"style= "width: 40.7%; position: fixed; right: 391px; top:95px; border-bottom: solid 2px #D1D1D1;  z-index: 1;">
				<a href = "viewer.php?ct=<?php echo $row_getStudy['CTScanID'];?>" style="cursor:pointer">
				<div class="col-sm-1">
				<div class="input-group">
				<h5><?php echo $row_getStudy['objectID'];?></h5>
				</div>
				</div>
				
				
				<div class="col-sm-5">
				<div class="input-group">
				<h5><?php echo $row_getStudy['objectFirstname'] . " " . $row_getStudy['objectSurname'];;?></h5>
				</div>
				</div></a>
				
				
				<div class="col-sm-4">
				<div class="input-group">
				<h5>CT Scan : <?php echo $row_getStudy['date']; ?></h5>
				</div>
				</div>
				
				
				
				<div class="col-sm-1">
				<div class="input-group">
				<a href="studyProfile.php?add=<?php echo $row_getStudy['objectID'];?>"><button class="btn btn-default">Profile</button></a>
				</div>
				</div>
				
				
				</div>
	
	<div class="row" style="position:relative; top: 60px; ">
		
				<?php $result_Message = getMessage($forumID); 
				while ($row_Message  = $result_Message->fetch_assoc()):
				if(($row_Message['referreeType'] == 'major') && ($majorID == $referreeID) || ($row_Message['referreeType'] == '') && ($minorID == $referreeID)) :
				?>
				
				<h5 style="text-align: left; position: relative; left:10px; color: maroon; "><?php echo $row_Message['message']; ?><br><small><?php echo $row_Message['dateTIME']?></small></h5>
				<?php else : ?>
				
				<h5 style="text-align: right; position: relative; right:10px; color: #960 ;"><?php echo $row_Message['message']; ?><br><small><?php echo $row_Message['dateTIME']?></small></h5>
				
				<?php endif; ?>
				<?php endwhile; ?>
	</div>
	
	  <?php if($majorID == $referreeID){
	 $refTYPE="major";
	 }
	 else{
	 $refTYPE="";
	 }
	 
	 ?>
	
	
	<form class="form-horizontal" method="post" action="msg_add.php?ID=<?php echo $forumID?>&TYPE=<?php echo $refTYPE?>">
		
 <div class="row" style="position:fixed; right:295px; top:620px; width:66%; z-index: 1;">
			
  <div class="col-lg-3">
    
  </div>
  <div class="col-lg-8">
    <div class="input-group">
      <textarea style="resize: none;" rows="1" type="text" name="message" class="form-control" placeholder="Message...." required></textarea>
   
	 <span class="input-group-btn">
       <button class="btn btn-primary" name="send" type="submit">Send</button></a>
      </span>

	  </div><!-- /input-group -->
  </div>
</div><!-- /.row -->

</form>	
	
	
	</div>
	<?php endwhile; ?>
		
            </div>
			
		
	
			
        </div>
		
		
			
		
			
	
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {
        
        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
</body>
</html>