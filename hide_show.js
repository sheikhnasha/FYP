$(document).ready(function(){
    $("#show_button").click(function(){
        $("#images").slideDown();
    });
});
$(document).ready(function(){
    $("#hide_button").click(function(){
        $("#images").slideUp();
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
