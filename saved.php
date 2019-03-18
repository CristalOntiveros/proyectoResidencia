<?php
	
	require ('Connections/conex.php');

	if (isset($_POST['saved'])) {
		# code...
		$name = $_POST['nombreAreas'];
		
		$query = "INSERT INTO areas(nombreAreas) VALUES ('$name')";
		$result = mysqli_query($conex, $query);
			if (!$result) {
				# code...
				die("query failed");
			}
			  	
	  	// $_SESSION['message'] = 'Task Saved Successfully';
	  	// $_SESSION['message_type'] = 'success';
	  	header('Location: usuario.php');
	}
 ?>