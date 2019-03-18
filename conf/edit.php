
<?php
	require ('../Connections/conex.php');
	$nombreAreas = '';
	if  (isset($_GET['idAreas'])) {
	  $id = $_GET['idAreas'];
	  $query = "SELECT * FROM areas WHERE idAreas=$id";
	  $result = mysqli_query($conex, $query);
	  if (mysqli_num_rows($result) == 1) {
	    $row = mysqli_fetch_array($result);
	    $nombre = $row['nombreAreas'];
	  }
	}


	if (isset($_POST['update'])) {
	  $id = $_GET['idAreas'];
	  $nombreAreas= $_POST['nombreAreas'];

	  $query = "UPDATE areas set nombreAreas = '$nombreAreas' WHERE idAreas=$id";
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
    <link rel="stylesheet" href="../css/estiloss.css">
    <link rel="stylesheet" href="../js/js_login.js">
    <link rel="stylesheet" href="../css/smoke.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fileinput.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body class="bg-danger">
    <div class="login-page">
        <div class="form">
            <form action="edit.php?idAreas=<?php echo $row['idAreas']?>" method="POST">
                    <div class="form-group">
                    	<label name="name">Actualizar nombre</label>
						<input type="text" class="form-control" name="nombreAreas" placeholder="Escribe el nuevo nombre del area" value="<?php echo $row['nombreAreas']?>" required>
					</div>	
					<button class="btn btn-danger" name="update">Update</button>
					<br>
					<br>
					<button class="btn btn-warning" name="cancel">Cancel</button>
                </form>
          </div>
    </div>
</body>
</html>