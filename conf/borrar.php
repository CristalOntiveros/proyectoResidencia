<?php 
	require ('../Connections/conex.php');

	if (isset($_GET['idRol'])) {
		# code...
		$id = $_GET['idRol'];
		$query = "DELETE FROM rol WHERE idRol = $id";
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