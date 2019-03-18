<header>
	<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
	</script>
	<script>
    function mostar(){
      document.getElementById("perfil").style.display = "block";
    }
    function ocultar(){
      document.getElementById("perfil2").style.display = "none";

    }
  </script>

	<div class="container">
	    <main>
	      <nav>
	        <button class="btn-menu"><i class="fas fa-bars" onclick="openNav()"></i></button>
			<a class="banner" onclick="mostrar()">Bienvenido admo</a>
	      </nav>
	    </main>     
	    
		<div id="mySidenav" class="sidenav">

			<div class="sidebar-header" align="center">
            	<img src="img/team.png" width="150px" height="150px">
        	</div>
		
		
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <!-- <a class="btn btn-dark text-light">RESUMEN</a> -->
			  <a class="btn btn-danger">AREAS</a>
			  <a class="BTN_Accion" role="button" data-toggle="modal" data-target="#myAreaRegis" data-id="1" data-accion="REGISTRAR">REGISTRAR</a>
			  <a class="BTN_Accion" role="button" data-toggle="modal" data-target="#myAreaAct" data-id="2" data-accion="ACTUALIZAR">VISUALIZAR</a>
			  <br>

			  <a class="btn btn-danger">PERSONAL</a>
			  <a class="BTN_Accion" role="button" data-toggle="modal" data-target="#myPersoRegis" data-id="3" data-accion="REGISTAR">REGISTRAR</a>
			  <a class="BTN_Accion" role="button" data-toggle="modal" data-target="#myPersoVis" data-id="4" data-accion="ACTUALIZAR">VISUALIZAR</a>
			  <br>

			  <a class="btn btn-danger">ROL</a>
			  <a class="BTN_Accion" role="button" data-toggle="modal" data-target="#myRolRegis" data-id="5" data-accion="REGISTAR">REGISTRAR</a>
			  <a class="BTN_Accion" role="button" data-toggle="modal" data-target="#myRolVis" data-id="6" data-accion="ACTUALIZAR">VISUALIZAR</a>
		</div>
	<?php require 'inc/section.php' ?>
</header>
