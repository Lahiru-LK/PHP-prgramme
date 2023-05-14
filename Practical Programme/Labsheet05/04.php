<?php

	$num=5;
	
	


	function  factorial ($num){
		$total=1;
		for($x=$num; $x>0; $x--){
			$total=$total*$x;
		}
		echo "Factorial is : ". $total;
		
	}
	
	
	 factorial($num);
	
?>