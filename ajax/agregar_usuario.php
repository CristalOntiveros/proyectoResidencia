<?php require ('../Connections/conex.php'); ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
$nombre = mb_strtoupper($_POST['nombre']);
$apellido = mb_strtoupper($_POST['apellido']);
$fecha=$_POST['fecha']; 
$sexo = $_POST['sexo'];
$pass1 = $_POST['pass2'];
$rol = $_POST['rol'];
$usuario = mb_strtolower($_POST['usuario']);
$telefono = $_POST['telefono'];
$Areas_idAreas = $_POST['Areas_idAreas'];

$query = sprintf("SELECT usuario FROM jefes  WHERE jefes.usuario='".$usuario."'");
mysqli_select_db($conex, $database_conex);
$Login=mysqli_query($conex,$query) or die(mysqli_error());
$loginFoundUser = mysqli_num_rows($Login);

if($loginFoundUser==1){
    echo 3;
}

else {if ((isset($_POST["save"])) && ($_POST["save"] == "1")) {
  $insertSQL = sprintf("INSERT INTO jefes (nombre, apellido, fecha, sexo, 
  password, foto, rol, usuario, telefono, Areas_idAreas) 
  VALUES ('$nombre', '$apellido','$fecha', $sexo,'$pass1', $rol,'$usuario', 'usuario.png', '$telefono', '$Areas_idAreas')");
  $Result1 = mysqli_query($conex, $insertSQL) or die(mysqli_error());

if($Result1==true){ 
  echo 1;
} else { 
  echo 0;
  }

}
}
?>