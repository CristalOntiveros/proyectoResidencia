<?php 
	require ('../Connections/conex.php');

	if (isset($_GET['idAreas'])) {
		# code...
		$id = $_GET['idAreas'];
		$query = "DELETE FROM areas WHERE idAreas = $id";
		$resultados = mysqli_query($conex, $query);

		if (!$resultados){
			# code...
			die("query failed");
		}
		// $_SESSION['message'] = 'Task Removed Successfully';
		// $_SESSION['message_type'] = 'danger';
		header('Location: ../index.php');
	}
?>