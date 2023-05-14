<?PHP
	$male_status = 'unchecked';
	$female_status = 'unchecked';
	
		if (isset($_POST['Submit1'])) {
			$selected_radio = $_POST['gender'];
			if ($selected_radio == 'male') {
				$male_status = 'checked';
				echo "Male Selected";
			}
			else if ($selected_radio == 'female'){
				$female_status = 'checked';
				echo "Female Selected";
			}
		}
?>