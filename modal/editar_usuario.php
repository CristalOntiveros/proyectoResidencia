<!-- Modal -->
<div class="modal fade" id="editar<?php echo $row_usuario['id_jefes'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
      </div>
      <div class="modal-body">

<form id="formEditar<?php echo $row_usuario['id_jefes'];?>" data-smk-icon="glyphicon-remove" action="javascript:()">
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Nombre</label></div>
      <div class="col-md-10">
    <input class="form-control" id="nombre<?php echo $row_usuario['id_jefes'];?>" name="nombre"  value="<?php echo $row_usuario['nombre'];?>"
    placeholder="Nombre" required maxlength="25">
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Apellido</label></div>
      <div class="col-md-10">
    <input class="form-control" id="apellido<?php echo $row_usuario['id_jefes'];?>" name="apellido"  value="<?php echo $row_usuario['apellido'];?>"
    placeholder="Apellido" required maxlength="25" >
      </div>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-4"><label class="control-label">Fecha Nacimiento</label></div>
      <div class="col-md-8">
          <input type="date" class="form-control" id="fecha<?php echo $row_usuario['id_jefes'];?>"  name="fecha"   value="<?php echo $row_usuario['fecha'];?>"  required>
      </div>
  </div>
</div>
<br>
 <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Sexo</label></div>
      <div class="col-md-10">
<select class="form-control" id="sexo<?php echo $row_usuario['id_jefes'];?>" name="sexo" required>
    <option value="0">Hombre</option>
          <option value="1">Mujer</option>
        </select>      </div>
  </div>
</div>  
<br>
<div class="row">
  <div class="form-group">
      <div class="col-md-4"><label class="control-label">Telefono</label></div>
      <div class="col-md-8">
           <input type="tel" class="form-control" maxlength="15"
           id="telefono<?php echo $row_usuario['id_jefes'];?>"  value="<?php echo $row_usuario['telefono'];?>">
      </div>
  </div>
</div>
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Usuario</label></div>
      <div class="col-md-10">
        <input class="form-control" id="usuario<?php echo $row_usuario['id_jefes'];?>" name="usuario"  value="<?php echo $row_usuario['usuario'];?>"
    placeholder="Usuario" required maxlength="10" ></div>
  </div>
</div>
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Correo</label></div>
      <div class="col-md-10">
        <input class="form-control" id="usuario<?php echo $row_usuario['id_jefes'];?>" name="correo"  value="<?php echo $row_usuario['correo'];?>"
    placeholder="Correo electronico" required></div>
  </div>
</div>
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Password</label></div>
      <div class="col-md-10">
         <div class="input-group">
      <input type="password" class="form-control" data-smk-strongPass="medium" maxlength="15"
      id="pass1" name="pass1"  value="<?php echo $row_usuario['password'];?>" required >
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
           <input type="password" class="form-control" maxlength="15"
           id="pass2<?php echo $row_usuario['id_jefes'];?>"  value="<?php echo $row_usuario['password'];?>">
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
       
<input type="hidden"  name="id_jefes" id="id_jefes<?php echo $row_usuario['id_jefes'];?>" value="<?php echo $row_usuario['id_jefes'];?>" size="32">
<input type="hidden"  name="viejo_usuario" id="viejo_usuario<?php echo $row_usuario['id_jefes'];?>" value="<?php echo $row_usuario['usuario'];?>" size="32">

</form>
      </div>
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
        'nombre='+$('#nombre<?php echo $row_usuario['id_jefes'];?>').val()+
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