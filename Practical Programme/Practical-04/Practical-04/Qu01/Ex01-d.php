<?php
	
	$fruit= array("Mango","Orange","Apple","Papaya","Banana","Cherry");
	$arlength=count($fruit);
	sort($fruit);
	
	for($x=0;$x<$arlength;$x++){
					echo $fruit[$x]."<br>";
				}
	
	echo "<br><br>";
	
	unset($fruit[4]);
	sort($fruit);
	
	$arlength=count($fruit);
	
	for($x=0;$x<$arlength;$x++){
					echo $fruit[$x]."<br>";
				}
?>