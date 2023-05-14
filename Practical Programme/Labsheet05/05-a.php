<?php

	$number = array();
	
	for($x=0; $x<5; $x++){
		array_push($number,rand(1,500));	
	}
	
	for($x=0; $x<5; $x++){
		
		echo $number[$x]." ";
	}
	
	echo "<br>Maximum Number is : ".max($number)."<br>";
	echo "Minimum Number is : ".min($number)."<br>";
	
?>