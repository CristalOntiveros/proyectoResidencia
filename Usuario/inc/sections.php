<section class="container">
   <!-- modal Visualizar Rol-->
  <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myPreVis" >
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
                <th>Preguntas</th>
                <th>Actualización</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $query = "SELECT * FROM preguntas";
                $result_tasks = mysqli_query($conex, $query);    
                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                    <td><?php echo $row['Pregunta']; ?></td>
                    <td>
                        <a href="conf/editar.php?idPregunta=<?php echo $row['idPregunta']?>" class="btn btn-warning">
                          <i class="fas fa-marker"></i> 
                        </a>
                        <a href="conf/borrar.php?idPregunta=<?php echo $row['idPregunta']?>" class="btn btn-warning">
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
  <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myPreRegis" >
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

</section>