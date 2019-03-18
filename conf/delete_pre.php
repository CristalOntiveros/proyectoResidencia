<?php 
	require('../conexion/conexionDB.php');

	if (isset($_GET['idPregunta'])) {
		# code...
		$id = $_GET['idPregunta'];
		$query = "DELETE FROM preguntas WHERE idPregunta = $id";
		$resultados = mysqli_query($conex, $query);

		if (!$resultados){
			# code...
			die("query failed");
		}
		// $_SESSION['message'] = 'Task Removed Successfully';
		// $_SESSION['message_type'] = 'danger';
		header('Location: ../Admo.php');
	}
?>