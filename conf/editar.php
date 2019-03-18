
<?php
	require ('../Connections/conex.php');
	$Rol = '';
	if  (isset($_GET['idRol'])) {
	  $id = $_GET['idRol'];
	  $query = "SELECT * FROM Rol WHERE idRol=$id";
	  $result = mysqli_query($conex, $query);
	  if (mysqli_num_rows($result) == 1) {
	    $row = mysqli_fetch_array($result);
	    $nombre = $row['Rol'];
	  }
	}

	if (isset($_POST['update'])) {
	  $id = $_GET['idRol'];
	  $Rol= $_POST['Rol'];

	  $query = "UPDATE rol set Rol = '$Rol' WHERE idRol=$id";
	  mysqli_query($conex, $query);
	  // $_SESSION['message'] = 'Task Updated Successfully';
	  // $_SESSION['message_type'] = 'warning';
	  header('Location: ../index.php');

	}
	elseif (isset($_POST['cancel'])) {
	  	# code...
	  	header('Location: ../index.php');
	  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../js/js_login.js">
    <link rel="stylesheet" href="../css/smoke.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="../text/css" href="../css/fileinput.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body class="bg-danger" id="fondo">
    <div class="login-page">
        <div class="form">
            <form action="editar.php?idRol=<?php echo $row['idRol']?>" method="POST">
              <div class="inset">
              <p>
                <label name="name">Actualizar Respuesta</label>
                <input type="text" class="form-control" name="Rol" placeholder="Escribe el nuevo nombre del Rol" value="<?php echo $row['Rol']?>" required>
              </p>
              <button class="btn btn-danger" name="update">Update</button>
					<br>
					<br>
					<button class="btn btn-warning" name="cancel">Cancel</button>

              </div>
            </form>
          </div> 
    </div>    
</body>
</html>