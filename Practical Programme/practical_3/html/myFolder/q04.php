<?php
	
	$speed= 60.5;
	
	if($speed>100){
		echo "It’s dangerous !";
	}
	else if($speed>60){
		echo "You are burning extra fuel";
	}
	else {
		echo "Safe driving speed!";
	}

?>