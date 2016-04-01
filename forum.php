



  


	

	


</body>
</html>
<!DOCTYPE html>
<?php include ('session.php');?>


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


        <br/>
        <!--Vertical Tab-->
        <div id="parentVerticalTab">
		<div class="seif" >
            <ul class="resp-tabs-list hor_1" style="width:200px;">
                <?php for($i=0; $i<=4; $i++):?><li>Vertical <?php echo $i;?></li><?php endfor ?>
           
            </ul>
			</div>
            <div class="resp-tabs-container hor_1">
                <div>
                    Lorem ipsum dolor sit amet, lerisque commodo. Nam porta cursus lectusconsectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales sce. Proin nunc erat, gravida a facilisis quis, ornare id lectus.
                    <br>
                    <br>
                    <p>Tab 1 Container</p>
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