<html>
<body>
<?php
	
	$Ffile = "first.txt";
	$file=fopen($Ffile,"a");
	
	if( $file == true ) {
			
			fwrite($file,"phpMyAdmin \n");
			echo ( "Create write Succussfull !" );
			exit();
	}
	else{
		echo ( "Error ! have't created file <br> Please check your file!" );
		
	}
	
	fclose($file);

?>
</body>
</html>