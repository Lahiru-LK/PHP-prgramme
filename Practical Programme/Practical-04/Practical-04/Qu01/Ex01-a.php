<?php


	$fruit=array("Mango","Orange","Apple","Banana");
	$arlength=count($fruit);
	
	for($a=0;$a<$arlength;$a++){
		sort($fruit);
		echo $fruit[$a]."<br>";
		
	}


?>