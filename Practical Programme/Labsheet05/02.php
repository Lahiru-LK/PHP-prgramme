<?php

	$num1=20;
	$num2=3;

	function addNum($num1,$num2){ 
		$total=$num1+$num2;
		echo "Addition - "."$total"."<br>";
	}
	
	function subNum($num1,$num2){ 
		$total=$num1-$num2;
		echo "Subtraction - "."$total"."<br>";
	}
	function mulNum($num1,$num2){ 
		$total=$num1*$num2;
		echo "Multiplication - "."$total"."<br>";
	}
	function divNum($num1,$num2){ 
		$total=$num1/$num2;
		echo "Division - "."$total"."<br>";
	}
	function maxNum($num1,$num2){ 
		if($num1>$num2){
			echo "Maximum - "."$num1"."<br>";
		}
		else{
			echo "Maximum - "."$num2"."<br>";
		}
		
	}
	
	addNum($num1,$num2);
	subNum($num1,$num2);
	mulNum($num1,$num2);
	divNum($num1,$num2);
	maxNum($num1,$num2);


?>