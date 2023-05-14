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
	    $Iterms = array( array("Fish bun",40,10),
         array("Patty",60,12),
         array("Roll",40,30),
         array("Pastry",50,20),
         array("Tea bun",20,10)  
    );
	
    $arrlenth=count($Iterms);

    echo "<table>";

        echo "<tr>
                <th> Item </th>
                <th> Price(Rs.) </th> 
                <th> Quantity </th> 
        </tr>";

        for ($row = 0; $row < $arrlenth; $row++) {
            echo "<tr>";
                    for ($col = 0; $col < 3; $col++) {
                            echo "<td>".$Iterms[$row][$col] ."</td>";
                    }
            echo "</tr>";
        }

        echo "</table>";


        echo "<br>".is_array($Iterms);
	?>

		
		


	</body>
</html>

