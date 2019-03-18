<?php require_once('../Connections/conex.php'); ?>
<?php


$id_jefes = $_POST['id_jefes']; 
$nombre = mb_strtoupper($_POST['nombre']);
$apellido = mb_strtoupper($_POST['apellido']);
$fecha=$_POST['fecha']; 
$sexo = $_POST['sexo'];
$pass1 = $_POST['pass2'];
$usuario = mb_strtolower($_POST['usuario']);
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$Areas_idAreas = $_POST['Areas_idAreas'];
$rol = $_POST['Rol_idRol'];
$viejo_usuario = $_POST['viejo_usuario']; 


if($usuario==$viejo_usuario){
  if ((isset($_POST["nombre"])) && ($_POST["nombre"] != "")){
    $updateSQL = sprintf("UPDATE jefes SET usuario='".$viejo_usuario."', 
    password='".$pass1."', nombre='".$nombre."', apellido='".$apellido."', 
    fecha='".$fecha."', sexo='".$sexo."', telefono='".$telefono."', correo='".$correo."',  Areas_idAreas'".$Areas_idAreas"', Rol_idRol='".$rol."' WHERE id_jefes='".$id_jefes."'");
    $Result1 = mysqli_query($conex,$updateSQL) or die(mysqli_error($conex));
    if($Result1==true){
     echo  1; 
      }
    else 
    {
     echo 0; 
    }
  }
}
else {
  $query = sprintf("SELECT jefes.usuario FROM jefes WHERE usuario='".$usuario."' ");
  mysqli_select_db($conex, $database_conex);
  $Login=mysqli_query($conex,$query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($Login);
  
  if($loginFoundUser==1){
    echo 3;
  }
  else { if ((isset($_POST["nombre"])) && ($_POST["nombre"] != "")) {  
     $updateSQL = sprintf("UPDATE login SET usuario='".$usuario."', 
    password='".$pass1."', nombre='".$nombre."', apellido='".$apellido."', 
    fecha='".$fecha."', sexo='".$sexo."', telefono='".$telefono."', correo='".$correo."', Areas_idAreas='".$Areas_idAreas."', Rol_idRol='".$rol."' WHERE id_jefes='".$id."'");
    $Result1 = mysqli_query($conex,$updateSQL) or die(mysqli_error($conex));
      if($Result1==true){
        echo  1;
      }
      else {
        echo 0;
      }
    }
  }
}
?>