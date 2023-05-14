<?php

	$Ffile = "first.txt";
	$file=fopen($Ffile,"w");
	
	if( $file == true ) {
			echo ( "Create file Succussfull ! " );
			exit();
	}
	
	fclose($file);

?>