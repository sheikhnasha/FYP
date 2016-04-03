

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
                <?php while ($row_forumGET = $result_forumGET->fetch_assoc()):?><li><?php echo $row_forumGET['firstName'] . " " . $row_forumGET['surName'] ;?></li><?php endwhile ?>
           
            </ul>
			</div>
            <div class="resp-tabs-container hor_1" style="height:200px; overflow-x:hidden; overflow-y: scroll;">
				<div>
                
	
				<div class="col-md-12 well"style= "width: 45.5%; position: fixed; right: 313px; top:95px; border-bottom: solid 2px #D1D1D1;  z-index: 1;">
				<a href = "viewer.php?ct=<?php echo $row_bar['CTScanID'];?>" style="cursor:pointer"><div class="col-sm-1">
				<div class="input-group">
				<h5>123</h5>
				</div>
				</div>
				
				
				<div class="col-sm-6">
				<div class="input-group">
				<h5>Firstname SurName</h5>
				</div>
				</div></a>
				
				
				<div class="col-sm-3">
				<div class="input-group">
				<h5>CT Scan :  02/12/16</h5>
				</div>
				</div>
				
				
				
				<div class="col-sm-1">
				<div class="input-group">
				<a href="studyProfile.php?add=<?php echo $row_bar['objectID'];?>"><button class="btn btn-default">Profile</button></a>
				</div>
				</div>
				
				
				</div>
	
	<div class="row" style="position:relative; top: 60px; ">
				<?php for($i=0; $i<=50; $i++):?>
				
				<h5 style="text-align: left; position: relative; left:10px; color: maroon; ">Hello</h5>
				
				
				<h5 style="text-align: right; position: relative; right:10px; color: #960 ;">Hello</h5>
				<?php endfor; ?>
	</div>
	
	
	</div>
	
	
                <div>
                    Lorem consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis.
                    <br>
                    <br>
                    <p>Tab 2 Container</p>
                </div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                    <br>
                    <br>
                    <p>Tab 3 Container</p>
                </div> 
				<div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                    <br>
                    <br>
                    <p>Tab 4 Container</p>
                </div>
				<div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                    <br>
                    <br>
                    <p>Tab 5 Container</p>
                </div>
            </div>
        </div>
		
		<div class="form-group" style="width:71.6%; position: relative; left:200px; top:20px" >
				<br>
					<div class="col-sm-12">						
							<textarea rows="1" style="resize: none;" name="email" required class="form-control" id="exampleInputAmount" placeholder="Message"></textarea>
				</div>
	
      

        <br>
        <br>
        <br/>
  

        
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