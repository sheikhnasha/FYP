window.onload = function() {
  
  // the DICOM files
  //
  // this is a brain MR with dimensions 26x256x148 vx
  // some slices were removed to get the 'look-into-the-brain' effect
  var _dicom = ['DICOM/2/IM-0001-0001.dcm','DICOM/2/IM-0001-0002.dcm'];
  


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
