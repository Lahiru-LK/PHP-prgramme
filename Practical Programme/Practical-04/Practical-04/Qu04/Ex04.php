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
	
	$amount=array("January"=>2000,"February"=>3500,"March"=>4000,"April"=>5000,"May"=>1000);
	
	$total = array_sum($amount);		
	
	echo "<table >";
			
			echo "<tr>
					<th>Month</th>
					<th>Amount</th>
                    <th>Reaming Balance</th>
				</tr>";
				
		foreach($amount as $y => $y_amount){
			
				echo "<tr>
						<td>". $y."</td>
						<td>". $y_amount ."</td>
                        <td>" .(50000-20000-$y_amount). "</td>
					</tr>";	

                    
		}
        
		
	echo "</table>";
	?>
		
		
		
		
		
		


	</body>
</html>