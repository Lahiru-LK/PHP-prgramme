<?php
	
	$fruit= array("Mango","Orange","Apple","Papaya","Banana");
	$arlength=count($fruit);

		if (in_array("Cherry",$fruit)){
			
			echo "Cherry is here";
		}	
			else{
				array_push($fruit,"Cherry");
				
				for($x=0;$x<$arlength;$x++){
					echo $fruit[$x]."<br>";
				}
				
			}
			
	if (in_array("Cherry",$fruit)){
			
			echo "<br>Cherry is here";
		}	
			else{
				array_push($fruit,"Cherry");
				
				for($x=0;$x<$arlength;$x++){
					echo $fruit[$x]."<br>";
				}
				
			}
	
?>