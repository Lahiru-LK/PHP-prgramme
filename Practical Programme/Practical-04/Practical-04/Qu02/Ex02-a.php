<!DOCTYPE html>
<html>
	<style>
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	  width: 30%;
	 
	}
	
	</style>
	
	<body>

	<?php
	
	$marks=array("English"=>76,"Mathematics"=>88,"Science"=>92,"Art"=>77,"History"=>85);
	
	$total = array_sum($marks);		
	
	echo "<table >";
			
			echo "<tr>
					<th>Subject</th>
					<th>Marks</th>
				</tr>";
				
		foreach($marks as $x=>$x_marks){
			
				echo "<tr>
						<td> $x </td>
						<td>  $x_marks </td>
					</tr>";	
		}

			echo "<tr>
					<th> Total Marks </th>
					<th> $total </th> 
				</tr>";
		
	echo "</table>";
	?>
		
		
		
		
		
		


	</body>
</html>