<?php

	$x="cat";
	$y="CAT";
	
	$z=strtolower($y);
	
	if(strcasecmp($x,$z)){
		echo "Not matching";
	}
	else{
		echo "Matching(Case is not considered";
	}
?>