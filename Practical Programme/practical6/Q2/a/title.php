<?php
	function displayTitle(){
		echo "Different formats of date<br>";
		echo "******************************"."<br><br>";
		
		$dytim=date_create("2018/10/30");
	
	echo date("Y/m/d")."<br>";
	echo date_format($dytim,"Y/m/d")."<br><br>";
	
	echo date("d F Y")."<br>";
	echo date_format($dytim,"d F Y")."<br><br>";
	
	echo date("d/m/y")."<br>";
	echo date_format($dytim,"d/m/y")."<br><br>";
	
	echo date("d/m/y")."<br>";
	echo date_format($dytim,"Y-M-d,l")."<br><br>";
	
	echo date("h:i:s a")."<br>";
	echo date_format($dytim,"h:i:s a")."<br><br>";
	
	echo date("H:i:s a")."<br>";
	echo date_format($dytim,"H:i:s a")."<br>";
	echo date_format($dytim,"H:I:S A")."<br><br>";
	}
	
	
	displayTitle();
	
	
?>