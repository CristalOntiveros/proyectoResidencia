<?php
	
	require ('Connections/conex.php');

	if (isset($_POST['savede'])) {
		# code...
		$name = $_POST['Rol'];
		
		$query = "INSERT INTO rol(Rol) VALUES ('$name')";
		$result = mysqli_query($conex, $query);
			if (!$result) {
				# code...
				die("query failed");
			}
			  	
	  	// $_SESSION['message'] = 'Task Saved Successfully';
	  	// $_SESSION['message_type'] = 'success';
	  	header('Location: index.php');
	}
 ?>