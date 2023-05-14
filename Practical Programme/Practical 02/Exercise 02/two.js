
var nam = prompt("please Enter Your Name");
var x = new Date();
var y = x.getFullYear();

alert("Current Year : "+y+ "\nWelcome "+nam);

function myfunction02(){

    var bdy =document.getElementById("BDyear").value;
    var fage =document.getElementById("Ager").value;

    
	if( bdy == "" || bdy == null){
		
		alert("Please fill all the fields");
		document.getElementById("BDyear").focus();
		return false;


	}
	else if( fage == "" || fage == null){
		
		alert("Please fill all the fields");
		document.getElementById("Ager").focus();
		return false;
	}

    else if( bdy > fage ){
		
		alert("Please enter valid information");
		return false;
	}

    else if( bdy == fage ){
		
		alert("You born in this year...!!!! ");
		return false;
	}

    else if( bdy < fage ){
		var age=(fage-bdy);
		alert("Your age in "+ fage+" is "+age);
		return true;
	}

}

