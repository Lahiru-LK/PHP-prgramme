<html>
	<body>
		<form action="" method="post">
			<input type="radio" name="radio" value="Radio 1">Radio 1
			<input type="radio" name="radio" value="Radio 2">Radio 2
			<input type="radio" name="radio" value="Radio 3">Radio 3 <br><br>
			<input type="submit" name="submit" value="Get Selected Values" />
		</form>
	</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['radio'])){
			echo "You have selected :".$_POST['radio'];
		}
	}
	

?>


