<!-- modal Actualizar Areas-->
<div class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" id="mas<?php echo $row_res['idRespuesta']; ?>">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header btn-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><div class="col-md-6 modal-title" id="accion-modal"></div></h4>
            </div>
            <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Respuesta</th>
                  <th>Modificar</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM respuestas";
                  $result_tasks = mysqli_query($conex, $query);    
                  while($row_res = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                    <td><?php echo $row_res['Respuesta']; ?></td>
                    <td>
                      <a type="button" class="btn btn-warning btn-sm fun" data-toggle="modal" data-target="#editar">
                        <span class="glyphicon glyphicon-edit"></span>
                      </a>
                      <a class="btn btn-danger btn-sm fun" data-toggle="modal" data-target="#eliminar<?php echo $row_res['idRespuesta']; ?>">
                        <span class="glyphicon glyphicon-trash"></span>
                      </a>
                      <?php include("../modal/eliminar_res.php");?></td>
                  </tr>
                <?php } ?>
              
              </tbody>
          </table>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
            </div><!--Modal body-->
    </div>
  </div>
</div><!--final del modal-->