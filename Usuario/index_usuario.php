<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AyudaTec</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    
    <link rel="stylesheet" href="../css/smoke.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fileinput.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Bootstrap 3.3.7 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap 3.3.7 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Bootstrap 3.3.7 JS  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--ICONOS-->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

          
    <!-- Barra de navegación para el administrador -->
    <nav class="navbar navbar-light bg-danger">
      <div class="container-fluid">
        <div class="row">
            <img src="../img/ITSA.png" alt="Logotipo de cuinique" width="50px" height="50px">
            <a class="navbar-brand text-light" id="center" href="index_usuario.php">AyudaTec</a>
       </div>
      </div>
    </nav>
    
    <div class="container-fluid" id="separador">
       <div class="row ">
          <img class="container" id="imag" src="../img/cuinique.png" alt="Logotipo de cuinique">
       </div>
    </div> 

</head>
<body class="hold-transition skin-blue sidebar-mini" onLoad="ver_tabla_usuario()">
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header" id="ima" align="center">
            <img src="../img/team.png" width="150px" height="150px">
        </div>
        
        <div class="sidebar-body" id="lateral">
          <h1 class="bg-light text-dark" align="center">PREGUNTAS</h1>
          <h4 class="BTN_Accion" role="button" data-toggle="modal" data-target="#myRolRegis" data-id="1" data-accion="REGISTAR">REGISTRAR</h4>
          <h4 class="BTN_Accion" role="button" data-toggle="modal" data-target="#myRolVis" data-id="2" data-accion="ACTUALIZAR">VISUALIZAR</h4>

          <h1 class="bg-light text-dark" align="center">RESPUESTAS</h1>
          <h4 class="BTN_Accion" data-toggle="modal" data-target="#myRolRegis" data-id="3" data-accion="REGISTAR">REGISTRAR</h4>
          <h4 class="BTN_Accion" data-toggle="modal" data-target="#myRolVis" data-id="4" data-accion="ACTUALIZAR">VISUALIZAR</h4>
        </div>
        
    </nav>
  <?php require 'inc/sections.php' ?>
  </div>
      
  <!-- Voy a remplazar esto por la tabla ver_tabla_usuarios -->
  <div class="container bg-danger">
    <h1>
      *fotografia del usuario
    *nombre del usuario
    *nombre del area al que pertenece el usuario
    </h1>
  </div>
  <!-- ------------------ -->
  <div class="container">
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum porro error nemo natus, blanditiis sunt libero nihil nesciunt. Repellendus temporibus impedit, aliquam inventore reprehenderit ullam officia, odit! Suscipit, animi, est.</h1>
  </div>

  <section>
    <h1>Enviamos un comentario</h1>
  </section>
  
</body>
</html>