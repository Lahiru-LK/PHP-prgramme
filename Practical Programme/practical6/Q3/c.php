
<?php
	
	$Ffile = "first.txt";
	$file=fopen($Ffile,"a");
	
	if( $file == true ) {
			
			fwrite($file,"phpMyAdmin \n");
			echo ( "Create file Succussfull !" );
			exit();
	}
	
	else{
		echo ( "Error ! have't created file <br> Please check your file!" );
		
	}
	
	fclose($file);

?>
