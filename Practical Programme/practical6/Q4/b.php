<?php
$arr = array(1, 2, array(5,10,15,20), 4);
$c=count($arr);

	$fl="array.txt";
	$file=fopen($fl,"a");
	
	
	
	if($file == false){
		echo "Error!";
		exit();
	}
	else{
			
		for($x=0; $x<$c; $x++){
			if(is_array($arr[$x])){
				$tot=array_sum($arr[$x]);
			}
		}
		echo "Data write succsussful !<br> Array sum is : ".$tot;
	
		fwrite($file,"Array sum is :" .$tot."\n");	
	}			
	fclose($file);
	
	
	

	
?>