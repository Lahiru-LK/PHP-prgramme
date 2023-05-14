<?php

	$h=2;
	$r=3;
	$f=3.14;
	
	function cone($height,$radius,$fy){
		
		$cone=(($fy*($radius**2)*$height)/3);
		
		echo "volume of cone ".$cone."<br>";
		echo "volume of cone ".round($cone);
	}
	
	cone($h,$r,$f);
	
?>