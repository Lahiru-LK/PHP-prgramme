<?php
	$pen=1000;
	
		echo " | Qu| Pr(Rs)| <br><br>";
	
	for($x=1; $x<100; $x++){
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
	}
?>