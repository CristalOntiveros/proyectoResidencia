<!-- Modal -->
<div class="modal fade" id="editar<?php echo $row_usuario['idPregunta'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
      </div>
      <div class="modal-body">
        <form id="formEditar<?php echo $row_usuario['idPregunta'];?>" data-smk-icon="glyphicon-remove" action="javascript:()">
          <div class="row">
            <div class="form-group">
                <div class="col-md-2"><label class="control-label">Nombre</label></div>
                <div class="col-md-10">
                  <input class="form-control" id="nombre<?php echo $row_usuario['id_jefes'];?>" name="nombre"  value="<?php echo $row_usuario['nombre'];?>"
                  placeholder="Nombre" required maxlength="25">
                </div>
            </div>
          </div>
        </form>  
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="btnEditar<?php echo $row_usuario['id_jefes'];?>">Guardar</button>
        </div>
    </div>
  </div>
</div>
          
<script>
$('#btnEditar<?php echo $row_usuario['id_jefes'];?>').click(function() {
    if ($('#formEditar<?php echo $row_usuario['id_jefes'];?>').smkValidate()) {
                 if( $.smkEqualPass('#pass1', '#pass2') ){
      // Code here
     var dataString=
        '$nombre='+$('#nombre<?php echo $row_usuario['id_jefes'];?>').val()+
        '&apellido='+$('#apellido<?php echo $row_usuario['id_jefes'];?>').val()+
        '&sexo='+$('#sexo<?php echo $row_usuario['id_jefes'];?>').val()+
        '&fecha='+$('#fecha<?php echo $row_usuario['id_jefes'];?>').val()+
        '&usuario='+$('#usuario<?php echo $row_usuario['id_jefes'];?>').val()+
        '&correo='+$('#correo<?php echo $row_usuario['id_jefes'];?>').val()+
        '&pass2='+$('#pass2<?php echo $row_usuario['id_jefes'];?>').val()+
        '&rol='+$('#rol<?php echo $row_usuario['id_jefes'];?>').val()+
        '&telefono='+$('#telefono<?php echo $row_usuario['id_jefes'];?>').val()+
        '&viejo_usuario='+$('#viejo_usuario<?php echo $row_usuario['id_jefes'];?>').val()+
        '&id_jefes='+$('#id_jefes<?php echo $row_usuario['id_jefes'];?>').val();

    $.ajax({
        type:"POST",
        url:"ajax/editar_usuario.php",
        data:dataString
    }).done(function(data){
      if(data==1){
          $.smkAlert({
          text: 'Excelente',
          type: 'success'
      });
        ver_tabla_usuario();
        $("#editar").modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
      }
      else if(data==3){
           $.smkAlert({
           text: 'Usuario Duplicado',
           type: 'warning'
          });
      }
      else{
            $.smkAlert({
            text: 'Error',
            type: 'danger'
        });
      }
    })
  }
  }
});
  
</script>  