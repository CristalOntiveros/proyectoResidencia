<head back>
    <meta charset="UTF-8">
    <title>AyudaTec</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="css/smoke.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/fileinput.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS-->
	  <link rel="stylesheet" href="css/estilo.css">
    <!--ICONOS-->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<script>
    function mostar(){
      document.getElementById("perfil").style.display = "block";
    }
    function ocultar(){
      document.getElementById("perfil2").style.display = "none";

    }
  </script>
    
         
    <!-- Barra de navegación para el administrador -->
    <nav class="navbar navbar-light btn-danger">
      <div class="container-fluid">
        <div class="row">
            <img src="img/ITSA.png" alt="Logotipo de cuinique" width="50px" height="50px">
            <a href="index.php"></a>
       </div>
      </div>

      <div class="btn-danger" id="perfil">
        <a type="sumit"><i class="fas fa-times"></i></a>
        <div class="container" align="center">
          <h1>Bienvenido a su perfil</h1>
          <p>Usted es el encargado de monitoreas este sistema web, tiene la responsabilidad de hacer buen uso de este sitio</p>
          <div class="form-group">
              <table class="table table-striped">
                <thead class="">
                  <tr>
                    <th>Usuario Administrador</th>
                    <th>Editar contraseña</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                      $query = "SELECT * FROM usuario";
                      $result_tasks = mysqli_query($conex, $query);    
                      while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                      <!-- <label for="cambio">Desea cambiar la contraseña de su correo</label> -->
                      <td>
                        <p>Correo: <br> 
                          <span><?php echo $row['correoUsuario']; ?>  </span>
                        </p> 
                        <p>Contraseña <br>  
                          <span><?php echo $row['passUsuario']; ?> </span>
                        </p>
                      </td>
                      <td>
                        <!-- <a href="conf/editar_pass.php?idUsuario=<?php //echo $row['idUsuario']?>">
                          <i class="fas fa-marker"></i> 
                        </a> -->
                        <a role="button" data-toggle="modal" data-target="#myEdit" data-id="1"><i class="fas fa-marker"></i></a>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
              </table>
              
          </div>        
              
        </div>
      </div> <!-- final div perfil  -->
    </nav>

    
    <div class="container">
       <div class="row ">
          <img class="container" id="imag" src="img/baner.jpg" alt="Logotipo de cuinique">
       </div>
    </div>   
    <br>

</head>