<?php
	// No puedo hacer que inserte los datos
	require ('Connections/conex.php');

	if (isset($_POST['save'])) {
		$nombre = mb_strtoupper($_POST['nombre']);
		$apellido = mb_strtoupper($_POST['apellido']);
		$fecha=$_POST['fecha']; 
		$sexo = $_POST['sexo'];
		$pass1 = $_POST['pass2'];
		$usuario = mb_strtolower($_POST['usuario']);
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$rol = $_POST['Rol_idRol'];
		$Areas_idAreas = $_POST['Areas_idAreas'];

		$query = "INSERT INTO jefes (nombre, apellido, fecha, sexo, password, foto, usuario, correo, telefono, Areas_idAreas, Rol_idRol) 
			VALUES ('$nombre', '$apellido','$fecha', $sexo,'$pass1', 'usuario.png', '$usuario', '$correo', '$telefono','$Areas_idAreas', $rol)";
		
		if (mysqli_query($conex, $query)) {
		    header('Location: usuario.php');
		} else {
		    echo "Error: " . $query . "<br>" . mysqli_error($conex);
		}
	}
 ?>