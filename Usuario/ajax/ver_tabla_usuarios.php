<?php require_once('../Connections/conex.php'); ?>
<?php
$query_usuario= "SELECT * FROM preguntas  ORDER BY Preguntas ";
$usuario= mysqli_query($conex, $query_usuario) or die(mysqli_error());
$row_usuario= mysqli_fetch_assoc($usuario);
$totalRows_usuario= mysqli_num_rows($usuario);
?>

<?php if ($totalRows_usuario == 0) { // Show if recordset empty ?>
 <br><br>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-info"></i> Alert!</h4>
      <strong>No hay usuarios registrados.</strong> Si desea puede agregar uno nuevo.
    </div>

<?php } // Show if recordset empty ?>
<?php if ($totalRows_usuario > 0) { // Show if recordset not empty ?>

<h3 class="box-title">Lista de Usuarios</h3>
</div>
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Pregunta</th>
        <th>Respuesta</th>
        <th>Hora</th>
      </tr>
    </thead>
  <tbody>
    <?php do {?> 
      <tr>
        <td><?php echo $row_usuario['idPreguntas']; ?></td>
        <td><?php echo $row_usuario['Pregunta']; ?> </td>    
        
 <?php } while ($row_usuario = mysqli_fetch_assoc($Pregunta)); ?>    
        </tbody>
        <tfoot>
          <tr>
            <th>Pregunta</th>
            <th>Respuesta</th>
            <th>Hora</th>
          </tr>
        </tfoot>
      </table>
<script>
$(document).ready(function() {
    
if ( $.fn.dataTable.isDataTable( '#example1' ) ) {
table = $('#example1').DataTable( );
 paging: true
 responsive: true
}
else {
table =  $('#example1').DataTable({
  "language":{
   "lengthMenu":"Mostrar _MENU_ registros por página.",
   "zeroRecords": "Lo sentimos. No se encontraron registros.",
         "info": "Mostrando página _PAGE_ de _PAGES_",
         "infoEmpty": "No hay registros aún.",
         "infoFiltered": "(filtrados de un total de _MAX_ registros)",
         "search" : "Búsqueda",
         "LoadingRecords": "Cargando ...",
         "Processing": "Procesando...",
         "SearchPlaceholder": "Comience a teclear...",
         "paginate": {
 "previous": "Anterior",
 "next": "Siguiente",
 }
  }


 });
}

});
</script>
 <?php } // Show if recordset not empty ?>