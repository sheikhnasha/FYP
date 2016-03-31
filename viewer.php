

<html>
<head>
<title>XTK LESSON 15</title>
<script type="text/javascript" src="http://get.goXTK.com/xtk_edge.js"></script>
<script> 
window.onload = function() {
	
	<?php
include('conn.php');
$ctID=$_GET['ct'];
$sql="SELECT * FROM ctimages WHERE CTScanID = $ctID";
$result = $conn->query($sql);
 $rowcount=mysqli_num_rows($result);
		if ($result->num_rows > 0) :
		$i=0;
while ($row = $result->fetch_assoc()){
	$allFiles[$i]= $row['directory'];
	$i++;
}
endif;
?>
  
  // the DICOM files
  //
  // this is a brain MR with dimensions 26x256x148 vx
  // some slices were removed to get the 'look-into-the-brain' effect
  var _dicom = <?php echo json_encode($allFiles); ?>;
  


  // create a new test_renderer
  var r = new X.renderer3D();
  r.bgColor = [0.2, 0.25, 0.4];
  r.init();
  r.camera.position = [0, 300, 0];
  
  // we create the X.volume container and attach all DICOM files
  var v = new X.volume();
  // map the data url to each of the slices
  v.file = _dicom.sort().map(function(v) {

    // we also add the 'fake' .DCM extension since else wise
    // XTK would think .org is the extension
    return  v ;
    
  });
  
  // add the volume
  r.add(v);
  
  // .. and render it
  r.render();
  
  r.onShowtime = function() {

    // activate volume rendering
    v.volumeRendering = true;
    v.lowerThreshold = 80;
    v.windowLower = 115;
    v.windowHigh = 360;
    v.minColor = [0, 0.06666666666666667, 1];
    v.maxColor = [0.5843137254901961, 1, 0];
    v.opacity = 0.2;
    
  };
  
  volume = v;
  
};



</script>
<link rel="stylesheet" type="text/css" href="css/demo.css">-->
</head>

<body>
</body>
</html>