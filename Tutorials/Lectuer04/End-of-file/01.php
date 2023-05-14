
			<?php
				$file = "name.txt";
				if (!feof($file))
					echo "End of file";
				/*
				$file = fopen("test.txt","r");
				//Output lines until EOF is reached
				while(! feof($file)) {
				  $line = fgets($file);
				  echo $line. "<br>";
					}
					*/

			fclose($file);
			?>

