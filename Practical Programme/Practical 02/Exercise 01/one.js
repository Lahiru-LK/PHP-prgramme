function myfunction01(){
	
	var a=document.getElementById("stid").value;
	var x=document.getElementById("Fname").value;
	var y=document.getElementById("Lname").value;
	var z=document.getElementById("addr").value;
	

	if( a == "" || a == null){
		
		alert("Please fill the student ID field");
		document.getElementById("stid").focus();
		return false;
	}
	else if( x == "" || x == null){
		
		alert("Please fill the first name field");
		document.getElementById("Fname").focus();

		return false;
	}

	else if( y == "" || y == null){
		
		alert("Please fill the last name field");
		document.getElementById("Lname").focus();

		return false;
	}

	else if( z == "" || z == null){
		
		alert("Please fill the address field");
		document.getElementById("addr").focus();

		return false;
	}
	
	else{
		alert("Thank you completing the form");
		return true;
	}


}