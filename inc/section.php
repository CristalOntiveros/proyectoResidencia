<section class="container">
  <!-- modal Visualizar Areas-->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myAreaAct" >
    <div class="modal-dialog modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-header btn-danger">
          <div class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <table class="table table-responsive table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th>Areas</th>
                <th>Actualización</th>
              </tr>
              
            </thead>
            <tbody>
              <?php 
                $query = "SELECT * FROM areas";
                $result_tasks = mysqli_query($conex, $query);    
                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                      <td><?php echo $row['nombreAreas']; ?></td>
                      <td>
                        <a href="conf/edit.php?idAreas=<?php echo $row['idAreas']?>" class="btn btn-warning">
                          <i class="fas fa-marker"></i> 
                        </a>
                        <a href="conf/delete.php?idAreas=<?php echo $row['idAreas']?>" class="btn btn-warning">
                        <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                  </tr>
                  
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div><!--Modal body-->
    </div>
  </div><!--final del modal-->

  <!-- modal Registrar Areas-->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myAreaRegis" >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header btn-danger">
          <div class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="saved.php" method="POST">
            <div class="form-group">
             	<label>Nombre</label>
    				    <input type="text" class="form-control" id="area1" name="nombreAreas" aria-describedby="emailHelp" placeholder="Escribe el nombre de la area" required>
    			  </div>				
    			  <button type="submit" class="btn btn-warning" name="saved">Submit</button>
          </form>
    	    <div class="modal-footer">
    	      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div><!--Modal body-->
  		</div>
  	</div>
  </div><!--final del modal-->

  <!--Mostrar Div Personal Visualizar-->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myPersoVis" >
    <div class="modal-dialog modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-header btn-danger">
          <div class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
  	      <table class="table table-responsive table-striped table-hover container-fluid">
  		      <thead class="thead-dark">
        			<tr>
        			  <th>Nombre</th>
        			  <th>Apeido</th>
        			  <th>fecha de nacimiento</th>
        			  <th>Sexo</th>
        			  <th>Numero de telefono</th>
        			  <th>Usuario</th>
                <th>Correo</th>
        			  <th>contraseña</th>
        			  <th>Area a la que pertenece</th>
                <th>Rol</th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php 
        			    $query = "SELECT * FROM jefes";
        			       $result_task = mysqli_query($conex, $query);    
        			       while($row = mysqli_fetch_assoc($result_task)) { ?>
        			       <tr>
        			          <td><?php echo $row['nombre']; ?></td>
        			          <td><?php echo $row['apellido']; ?></td>
        			          <td><?php echo $row['fecha']; ?></td>
        			          <td><?php echo $row['sexo']; ?></td>
        			          <td><?php echo $row['telefono']; ?></td>
        			          <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
        			          <td><?php echo $row['password']; ?></td>
        			          <td><?php echo $row['Areas_idAreas']; ?></td>
                        <td><?php echo $row['Rol_idRol']; ?></td>
        			       </tr>
        			<?php } ?>
        		</tbody>
        	</table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div><!--Modal body-->
    </div>
  </div><!--final del modal-->

  <!-- modal Registrar Personal-->
  <div class="modal fade" role="dialog" aria-labelledby="myLargeModalLabel" id="myPersoRegis" >
      <div class="modal-dialog modal-lg" role="dialog">
          <div class="modal-content">
              <div class="modal-header btn-danger">
                  <div class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                  <form action="save.php" method="POST">
                      <div class="row">
              <div class="form-group">
                <div class="col-md-2"><label class="control-label">Nombre</label></div>
                <div class="col-md-10">
                  <input class="form-control" id="nombre" name="nombre"
                  placeholder="Nombre" required maxlength="25" >
                </div>
              </div>
            </div>
            <br>          
            <div class="row">
              <div class="form-group">
                <div class="col-md-2"><label class="control-label">Apellido</label></div>
                <div class="col-md-10">
                  <input class="form-control" id="apellido" name="apellido"
                  placeholder="Apellido" required maxlength="25" >
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                  <div class="col-md-4"><label class="control-label">Fecha Nacimiento</label></div>
                  <div class="col-md-8">
                      <input type="date" class="form-control" id="fecha"  name="fecha" required>
                  </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                  <div class="col-md-2"><label class="control-label">Sexo</label></div>
                  <div class="col-md-10">
                    <select class="form-control" id="sexo" name="sexo" required>
                      <option value="" >--Seleccione--</option>
            					<option value="0" >Hombre</option>
                      <option value="1" >Mujer</option>
                    </select>
                  </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <div class="col-md-2"><label class="control-label">Telefono</label></div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" pattern="[0-9]{10}" required>
                  </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <div class="col-md-2"><label class="control-label">Usuario</label></div>
                <div class="col-md-10">
                  <input class="form-control" id="usuario" name="usuario"
                  placeholder="Usuario" required maxlength="10" ></div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <div class="col-md-2"><label class="control-label">Correo</label></div>
                <div class="col-md-10">
                  <input class="form-control" id="correo" name="correo"
                  placeholder="Correo" required></div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <div class="col-md-2"><label class="control-label">Password</label></div>
                <div class="col-md-10">
                  <div class="input-group">
                  <input type="password" class="form-control" data-smk-strongPass="medium" maxlength="15"
                  id="pass1" name="pass1" required>
                  <span class="input-group-addon">medium</span>
                  </div>
                </div>
              </div>
            </div>
            <br>  
            <div class="row">
              <div class="form-group">
                <div class="col-md-4"><label class="control-label">Repetir Password</label></div>
                <div class="col-md-8">
                  <input type="password" class="form-control" id="pass2" name="pass2" maxlength="15" >
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <?php 
                  $query = "SELECT * FROM rol";
                  $result_tasks = mysqli_query($conex, $query); ?>
                  <div class="col-md-2"><label class="control-label">Rol al que pertenece</label></div>
                  <div class="col-md-10">
                    <select type="text" name="Rol_idRol" class="form-control" id="Rol_idRol" placeholder="Seleccionar rol" required>
                    <?php    
                      while($row = mysqli_fetch_assoc($result_tasks)) { ?>            
                      <option id="Rol_idRol" value="<?php echo $row["idRol"];?>" name="Rol_idRol">
                      <?php echo $row['Rol']?> 
                      </option>
                      <?php }?>
                    </select>
                  </div>   
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <?php 
                  $query = "SELECT * FROM areas";
                  $result_tasks = mysqli_query($conex, $query); ?>
                  <div class="col-md-2"><label class="control-label">Area a la que pertenece</label></div>
                  <div class="col-md-10">
                    <select type="text" name="Areas_idAreas" class="form-control" id="Areas_idAreas" placeholder="Seleccionar departamento" required>
                    <?php    
                      while($row = mysqli_fetch_assoc($result_tasks)) { ?>            
                      <option id="Areas_idAreas" value="<?php echo $row["idAreas"];?>" name="Areas_idAreas">
                      <?php echo $row['nombreAreas']?> 
                      </option>
                      <?php }?>
                    </select>
                  </div>                     
              </div>
            </div>
  					<button type="submit" class="btn btn-warning" name="save">Submit</button>
                  </form>
              
  	            <div class="modal-footer">
  	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  	            </div>
              </div><!--Modal body-->
          </div>
      </div>  
  </div><!--Final del modal-->

  <!-- modal Visualizar Rol-->
  <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myRolVis" >
    <div class="modal-dialog modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-header btn-danger">
          <div class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <table class="table table-responsive table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th>Areas</th>
                <th>Actualización</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $query = "SELECT * FROM rol";
                $result_tasks = mysqli_query($conex, $query);    
                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                    <td><?php echo $row['Rol']; ?></td>
                    <td>
                        <a href="conf/editar.php?idRol=<?php echo $row['idRol']?>" class="btn btn-warning">
                          <i class="fas fa-marker"></i> 
                        </a>
                        <a href="conf/borrar.php?idRol=<?php echo $row['idRol']?>" class="btn btn-warning">
                        <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                  </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div><!--Modal body-->
    </div>
  </div><!--final del modal-->

  <!-- modal Registrar Rol-->
  <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myRolRegis" >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header btn-danger">
          <div class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="savede.php" method="POST">
            <div class="form-group">
              <label>Rol</label>
                <input type="text" class="form-control" id="rol" name="Rol" aria-describedby="emailHelp" placeholder="Escribe el nombre del Rol" required>
            </div>        
            <button type="submit" class="btn btn-warning" name="savede">Submit</button>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div><!--Modal body-->
      </div>
    </div>
  </div><!--final del modal-->

  <!-- modal Editar Perfil-->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myEdit" >
      <div class="modal-dialog modal-lg" role="dialog">
          <div class="modal-content">
              <div class="modal-header btn-danger">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                  <form action="conf/editar_pass.php" method="POST">
                      <div class="form-group">
                          <?php 
                              $query = "SELECT * FROM usuario";
                              $result_tasks = mysqli_query($conex, $query);
                              $row_pass = mysqli_fetch_assoc($result_tasks); 
                           ?>
                        <label name="name">Actualizar contraseña</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $row_pass["passUsuario"];?>" required>
                      </div>        
                      <button class="btn btn-success" name="update">Update</button>
                  </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div><!--Modal body-->
          </div>
        </div>
  </div><!--final del modal-->

</section>