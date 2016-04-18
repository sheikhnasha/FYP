$(document).ready(function(){
    $("#show_button").click(function(){
        $("#images").slideDown();
		$("#show_button").hide();
		$("#hide_button").show();
    });
});
$(document).ready(function(){
    $("#hide_button").click(function(){
        $("#images").slideUp();
		$("#hide_button").hide();
		$("#show_button").show();
    });
});

function show() {
	
    //document.getElementById("btn_button").style.display = "none";
    document.getElementById("pop_share").style.display = "initial";
}

function hide() {
    //document.getElementById("show_button").style.display = "initial";
	 document.getElementById("pop_share").style.display = "none";
}
