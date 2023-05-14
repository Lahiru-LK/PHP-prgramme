<?php
	extract( $_POST );
	if( isset($_POST['submit']) ) {

	}

	// determine whether phone number is valid and print an error message if not
	if(!preg_match( "/^(\(\+[0-9]{2}\)[0-9]{9})$/","412278456") ){
	
		// Perform a regular expression match
		print( "<p><span style = \"color: red; font-size: 2em\">
		
		INVALID PHONE NUMBER</span><br />
		A valid phone number must be in the form<strong>(+94)412278456</strong><br/>
		</span></p></body></html>");
		
		die(); // terminate script execution
	}
	else{ echo "Valid phone no"; 
	}
?>