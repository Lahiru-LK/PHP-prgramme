<?php

	$string="Administrator";	
		
	$x=substr($string,4);
	$y=substr($string,-4);
	$z=substr($string,4,3);
	$f=substr($string,4,-3);
	
	echo $x."<br>".$y."<br>" .$z."<br>" .$f."<br>";

?>