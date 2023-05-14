<!DOCTYPE html>
<html>
<title>Student Entrollement</title>

<style>

#p01{
	text-align: right;
}

#h01{
	
	text-align: center;
	text-decoration: underline;
	
}

#p02{
	text-align: left;
}

#p03{
	text-align: right;
}

body{
	background-color:#eedd83;
}

</style>

<body>

	<?php
		function registrar($reg){
				echo "<p id="."p01".">".$reg." <br>Registrar <br>Faculty of Technology<br>University of Ruhuna<br>Matara</p>";
		}

		function receiver($rev){
				echo "<p id="."p03".">".$rev." <br>Registrar<br>Faculty of Technology<br>University of Ruhuna<br>Matara</p>";
		}

		registrar("Ms.A.D.Gunasekara");
	
		echo "<h2 id="."h01".">Student Enrollment</h2>";
		echo "<p>Dear Ms.P.T. Kushani perera<br><br> We are happy to inform that you are selected for the <b>Bachelor of ICT</b> degree program<br><br>Thank you</p>";
		
		receiver("Ms.A.D.Gunasekara");
	?>
	
	
	
	
	
	
</body>
</html>