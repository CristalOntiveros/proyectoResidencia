
<?php require ('Connections/conex.php'); ?>
<!DOCTYPE html>
<html>
  <?php require 'inc/head.php' ?>
<body class="hold-transition skin-blue sidebar-mini" onLoad="ver_tabla_usuario()">
<?php require ('inc/header.php'); ?>
<div class="wrapper">
  <div class="container-fluid">
    <br>
   <!-- <div class="row">
      <div class="col-md-2 col-md-offset-9">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          <i class="fa fa-plus" aria-hidden="true"></i> Agregar
        </button>
      </div>
    </div> -->
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="ver_tabla_usuario"></div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoke.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/fileinput.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>


