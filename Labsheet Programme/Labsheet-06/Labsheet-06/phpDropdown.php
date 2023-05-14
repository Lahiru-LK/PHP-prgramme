<html>
	<body>
		<form action=""method="post">
			<select name="clr">
				<option value="Red">Red</option>
				<option value="Green">Green</option>
			</select>
			
			<input type="submit" name="btnsubmit" />
		</form>
	</body>
</html>


<?php
	if(isset($_POST['btnsubmit']))
	echo "Selected color is : ".$_POST['clr'];
?>