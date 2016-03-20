function checkPass()
{
	
		//Store the password field objects into variables ...
		var pass1 = document.getElementById('inputPassword1');
		var pass2 = document.getElementById('inputPassword2');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#c66";
		//Compare the values in the password field 
		//and the confirmation field
		if(pass1.value == pass2.value){
			document.getElementById("myBtn").disabled = false;
		//The passwords match. 
		//Set the color to the good color and inform
		//the user that they have entered the correct password 
		pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
       
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
		document.getElementById("myBtn").disabled = true;
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
		
      
    }
}  