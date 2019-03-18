<div class="modal bs-example-modal-sm" id="eliminar<?php echo $row_usuario['idPregunta']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
      </div>
      <div class="modal-body">
        ¿Desea eliminar Pregunta o Respuesta?
        Numero del registro: <?php echo $row_usuario['idPregunta']; ?>
      
      </div>
      <div class="modal-footer">
        <button type="button" href="conf/delete_pre.php?idPregunta=<?php echo $row_usuario['idPregunta']?>" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>