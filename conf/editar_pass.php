<?php
  require ('../Connections/conex.php');
  $pass = '';
  if  (isset($_GET['idUsuario'])) {
    $id = $_GET['idUsuario'];
    $query = "SELECT * FROM usuario WHERE idUsuario=$id";
    $result = mysqli_query($conex, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $pass = $row['password'];
    }
  }

  if (isset($_POST['update'])) {
    $id = $_GET['idUsuario'];
    $pass= $_POST['password'];

    $query = "UPDATE usuario set password = '$pass' WHERE idUsuario=$id";
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