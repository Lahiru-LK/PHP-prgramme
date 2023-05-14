<?php

	$arr = array(1, 2, array(5,10,15,20), 4);
		
	$fl="array.txt";
	$file=fopen($fl,"w");
		
	if($file == false){
		echo "Error!";
		exit();
	}
	else{
			echo "Array create succssuful!";
			fwrite($file,print_r($arr,true));	
	}			
	fclose($file);
	
	
	
	
?>