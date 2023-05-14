<?php

	$x="cat";
	$y="CAT";
	
	if(strcasecmp($x,$y)){
		echo "Not matching";
	}
	else{
		echo "Matching(Case is not considered";
	}
?>