<?php 
  session_start();
  require_once('Connections/conex.php');
    $name = $_POST['correo'];
    $pass = $_POST['contrasena'];
  if (isset($_POST['login'])) {
    # code...
    $name = $_POST['correo'];
    $pass = $_POST['contrasena'];

    switch ($name) {
    case 'webadmin@itsa.edu.mx': if ($pass == 'itsa') {
      header("Location: ../../../../../../../../../../AyudaTec/Admo.php");
      // incude 'https://www.google.com.mx/';
    }else{
      $error="Pass Incorrecto";
      echo $error;
      // header('Location: login.php');
    }
      # code...
      break;
  }
  }// fin del if
  $sql=mysql_query("SELECT * FROM jefes WHERE correo = $name");
  if ($var = mysql_fetch_array($sql)){
    if ($pass == $var['password']) {
      $_SESSION['id'] = $var['idJefes'];
      $_SESSION['usuario'] = $var['usuario'];
      header("Location: ./..AyudaTec/sAdmo.php");
    }else{
      echo "contraseña incorrecta";
    }

  }
  
?>