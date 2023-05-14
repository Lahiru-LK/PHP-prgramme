
<html>
	<head>
		<title>Reading  a file  using PHP</title>
	</head>
	
	<body>
			<?php
				$filename = "newfile.txt";
				$file = fopen( $filename, "w" );
				
				if( $file == false ) {
					echo ( "Error in opening new file" );
					exit();
				}
				fwrite( $file, "This is a simple test\n" );
				fclose( $file );
			?>
	</body>
	
</html>
