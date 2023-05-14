<?php
	
	$pen=1000;
	$x=0;
	
	echo " | Qu| Pri(Rs)| <br><br>";
	
	while($x<100){
		if($x==10){
				echo " | ".$x."  | ".$pen*$x." | <br>"; 
			}
			else if($x==20){
				echo " | ".$x." | ".$pen*$x." |<br>"; 
			}
			else if($x==30){
				echo " | ".$x." | ".$pen*$x." |<br>"; 
			}
			else if($x==40){
				echo " | ".$x." | ". $pen*$x." |<br>"; 
			}
			else if($x==50){
				echo " | ".$x." | ".$pen*$x." |<br>"; 
			}
			
		$x++;
	}
	
?>