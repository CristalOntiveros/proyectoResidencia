<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla con click</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap 3.3.7 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Jquery 3.2.1  -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap 3.3.7 JS  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.BTN_Accion').click(function(){
                data_id =  $(this).data('id'); // getter
                data_accion = $(this).data('accion'); // getter
                $('#id-modal').html( data_id);
                $('#accion-modal').html(data_accion);
                nombre=$(this).parents("tr").find("td").eq(0).html();
                $('#nombre-modal').html(nombre);
                apellido=$(this).parents("tr").find("td").eq(1).html();
                $('#apellido-modal').html(apellido);
                $('#botonUltimaAccion').removeClass('hidden');
            })
        })
    </script>
</head>
<body>
<div class="container">
    <h3>Tabla de datos</h3>
    <table class="table table-bordered table-condensed table-hover">
        <thead >
        <tr>
            <th class="active">Nombre</th>
            <th class="active">Apellido</th>
            <th class="active">Accion</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td><button type="button" class="btn btn-xs btn-primary BTN_Accion" role="button" data-toggle="modal" data-target="#myModalmostrar" data-id="1" data-accion="ver">Ver</button> <button type="button" class="btn btn-xs btn-success BTN_Accion" role="button" data-toggle="modal" data-target="#myModalmostrar" data-id="1" data-accion="editar">Editar</button></td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td><button type="button" class="btn btn-xs btn-primary BTN_Accion" role="button" data-toggle="modal" data-target="#myModalmostrar" data-id="2" data-accion="ver">Ver</button> <button type="button" class="btn btn-xs btn-success BTN_Accion" role="button" data-toggle="modal" data-target="#myModalmostrar" data-id="2" data-accion="editar">Editar</button></td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td><button type="button" class="btn btn-xs btn-primary BTN_Accion" role="button" data-toggle="modal" data-target="#myModalmostrar" data-id="3" data-accion="ver">Ver</button> <button type="button" class="btn btn-xs btn-success BTN_Accion" role="button" data-toggle="modal" data-target="#myModalmostrar" data-id="3" data-accion="editar">Editar</button></td>
        </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#myModalmostrar" id="botonUltimaAccion">Ultima accion</button>
</div>
<!-- modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModalmostrar" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Info</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">Acción:</div>
                        <div class="col-md-6" id="accion-modal"></div>
                    </div>
                    <div class="row"> <div class="col-md-12"><h4>Datos:</h4></div></div>
                    <div class="row">
                        <div class="col-md-6">ID</div>
                        <div class="col-md-6" id="id-modal"></div>
                        <div class="col-md-6">Nombre</div>
                        <div class="col-md-6" id="nombre-modal"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Apellido</div>
                        <div class="col-md-6"  id="apellido-modal"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
</body>
 
</html>