<?php require('../conexion/conexionDB.php'); ?>
<?php
$id = $_GET['id'];
if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM preguntas WHERE idPregunta=$id");
  $Result1 = mysqli_query( $conex, $deleteSQL) or die(mysqli_error($conex));
if($Result1==true)
    {
        echo 1;
    }
else 
    {
        echo 0;
    }
}
?>

