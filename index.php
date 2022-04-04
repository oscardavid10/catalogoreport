<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adicional.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet"></link>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/sweetalert/package/dist/sweetalert2.all.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.3 Aplicación web con base de datos</title>
</head>
<body>
    <div id="page-container" class="container-fluid">
        <div id="content-wrap">
        <div class="row">
            <div id="header">
                <img src="image/logo.png" class="logo" alt="Logo de la pagina" width="120px" height="120px">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div id="contenido" class="container">
                <br>
            <div class="card">
    <div class="card-header">
        <h5 class="card-title">Administración de Usuarios</h5>
    </div>
    <div class="card-body">
    <button id="new_usuario" class="btn btn-success"><i class="fas fa-plus-circle pr-1"></i> Agregar</button><br><br>

    <div id="div_tabla_usuarios" class="table-responsive">
        <table id="tabla_usuarios" class="table row-border order-column table-sm striped table-sm" style="width: 100%; font-size:12px">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                    <th>Permiso</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tfoot>
        </table>
    </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <span><b>Nombre del curso:</b> Conceptualización de servicios en la nube<br>
        <b>Nombre:</b> Oscar David Hernandez Reyna<br>
        <b>Codigo:</b> 211373143<br>
        <b>Correo:</b> david_010@live.com.mx</span>
      </div>
    </footer>
</body>


<div class="modal fade" id="Modal_AgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" action="" id = 'Nuevo_usuario' class="form-horizontal" onsubmit=" return false">
      <div class="modal-body">

          <div class="form-group">
            <label for="usuario" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario" required>
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Contraseña:</label>
            <input type="text" class="form-control" id="password" required>
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" required>
          </div>
          <div class="form-group">
            <label for="permiso" class="col-form-label">Permiso:</label>
                <select name="permiso" class='form-control' id="permiso">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal_VerUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <form autocomplete="off" action="" id = 'Nuevo_usuario' class="form-horizontal" onsubmit=" return false"> -->
      <div class="modal-body">

          <div class="form-group">
            <label for="usuario_ver" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario_ver" required>
          </div>
          <div class="form-group">
            <label for="password_ver" class="col-form-label">Contraseña:</label>
            <input type="text" class="form-control" id="password_ver" required>
          </div>
          <div class="form-group">
            <label for="nombre_ver" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre_ver" required>
          </div>
          <div class="form-group">
            <label for="permiso_ver" class="col-form-label">Permiso:</label>
                <select name="permiso_ver" class='form-control' id="permiso_ver">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="submit" class="btn btn-primary">Agregar</button> -->
      </div>
      <!-- </form> -->
    </div>
  </div>
</div>

<div class="modal fade" id="Modal_EditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" action="" id = 'Editar_usuario' class="form-horizontal" onsubmit=" return false">
      <div class="modal-body">
            <input type="hidden" name="id_usuario_editar" id="id_usuario_editar">
          <div class="form-group">
            <label for="usuario_edit" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario_edit" required>
          </div>
          <div class="form-group">
            <label for="password_edit" class="col-form-label">Contraseña:</label>
            <input type="text" class="form-control" id="password_edit" required>
          </div>
          <div class="form-group">
            <label for="nombre_edit" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre_edit" required>
          </div>
          <div class="form-group">
            <label for="permiso_edit" class="col-form-label">Permiso:</label>
                <select name="permiso_edit" class='form-control' id="permiso_edit">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
    CargarUsuarios();
});

$(document).on('click', '#new_usuario', function() {

$('#Modal_AgregarUsuario').modal('show');

});

$('#tabla_usuarios tbody').on('click', '.ver', function (){
    var id = $(this).parents("tr").find("td:eq(0)").html();

    $("#id_usuario_ver").val(id);

    $.ajax({
        url: "funciones/CRUD_Usuario.php",
        type: "POST",
        dataType: "JSON",
        data: {
            "id" : id,
            "modo": "Consulta"
        },
        success: function(datas) {
            
            $("#usuario_ver").val(datas.usuario);
            $("#password_ver").val(datas.password);
            $("#nombre_ver").val(datas.nombre);
            $("#permiso_ver").val(datas.permiso);

        }
    });

    var modal = $('#Modal_VerUsuario').modal('show');
});

$('#tabla_usuarios tbody').on('click', '.eliminar', function (){
    var id = $(this).parents("tr").find("td:eq(0)").html();

    $.ajax({
        url: "funciones/CRUD_Usuario.php",
        type: "POST",
        dataType: "JSON",
        data: {
            "id" : id,
            "modo": "Baja"
        },
        success: function(datas) {
            
            $("#usuario_ver").val(datas.empresa);
            $("#password_ver").val(datas.codigo);
            $("#nombre_ver").val(datas.tipo);
            $("#permiso_ver").val(datas.rfc);

        }
    });

});

$('#tabla_usuarios tbody').on('click', '.editar', function (){
    var id = $(this).parents("tr").find("td:eq(0)").html();

    $("#id_usuario_editar").val(id);

    $.ajax({
        url: "funciones/CRUD_Usuario.php",
        type: "POST",
        dataType: "JSON",
        data: {
            "id" : id,
            "modo": "Consulta"
        },
        success: function(datas) {
            
            $("#usuario_edit").val(datas.usuario);
            $("#password_edit").val(datas.password);
            $("#nombre_edit").val(datas.nombre);
            $("#permiso_edit").val(datas.permiso);

        }
    });

    var modal = $('#Modal_EditarUsuario').modal('show');
});

function CargarUsuarios(){

var table = $('#tabla_usuarios').DataTable({
    destroy: true,
    paging:  true,
ajax: {
    "url": "funciones/TodosLosUsuarios.php",
    "dataSrc": ""
},
columns: [
        {"data": "id"},
        {"data": "usuario"},
        {"data": "nombre"},
        {"data": "password"},
        {"data": "permiso"},
        {"data": "opciones"},
],
columnDefs: [

],
    language: idioma_espanol,
    order: [
        [0, "desc"]
    ]
});
}

$(document).on('submit', '#Editar_usuario', function() {

var id = $("#id_usuario_editar").val();
var usuario = $("#usuario_edit").val();
var password = $("#password_edit").val();
var nombre = $("#nombre_edit").val();
var permiso = $("#permiso_edit").val();

$.ajax({
        url: "funciones/CRUD_Usuario.php",
        type: "POST",
        data: {
            "id" : id,
            "usuario" : usuario,
            "password" : password,
            "nombre" : nombre,
            "permiso" : permiso,
            "modo": "Modificar"
        },
        success: function(datas) {
            if(datas>0){
                Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Modificar Usuario',
                text: 'El usuario ha sido modificado !',
                showConfirmButton: false,
                timer: 1500
            })
                $('#Modal_EditarUsuario').modal('hide');
                CargarUsuarios();
                LimpiarCampos("#Editar_usuario");
            }else{
                Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Error',
                text: 'Ese usuario ya existe, intenta con otro !',
                showConfirmButton: false,
                timer: 1500
            })
        }
            }
        });

return false;
});

$(document).on('submit', '#Nuevo_usuario', function() {

var usuario = $("#usuario").val();
var password = $("#password").val();
var nombre = $("#nombre").val();
var permiso = $("#permiso").val();

$.ajax({
        url: "funciones/CRUD_Usuario.php",
        type: "POST",
        data: {
            "usuario" : usuario,
            "password" : password,
            "nombre" : nombre,
            "permiso" : permiso,
            "modo": "Alta"
        },
        success: function(datas) {
            if(datas>0){
                Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Nuevo Usuario',
                text: 'Este usuario ha sido dado de alta !',
                showConfirmButton: false,
                timer: 1500
            })
                $('#Modal_AgregarUsuario').modal('hide');
                CargarUsuarios();
                LimpiarCampos("#Nuevo_usuario");
            }else{
                Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Error',
                text: 'Ese usuario ya existe, intenta con otro !',
                showConfirmButton: false,
                timer: 1500
            })
        }
            }
        });

return false;
});

function LimpiarCampos($formulario){

$($formulario)[0].reset();
}

var idioma_espanol = {
  "decimal":        "",
  "emptyTable":     "No hay datos disponibles",
  "info":           "Viendo _START_ a _END_ de _TOTAL_ registros",
  "infoEmpty":      "Viendo 0 a 0 de 0 registros",
  "infoFiltered":   "(Filtrado de _MAX_ registros totales)",
  "infoPostFix":    "",
  "thousands":      ",",
  "lengthMenu":     "Ver _MENU_ registros",
  "loadingRecords": "Cargando...",
  "processing":     "Procensando...",
  "search":         "Buscar:",
  "zeroRecords":    "No se encontraron registros",
  "paginate": {
      "first":      "Primero",
      "last":       "Ultimo",
      "next":       "Siguiente",
      "previous":   "Anterior"
  },
  "aria": {
      "sortAscending":  ": activate to sort column ascending",
      "sortDescending": ": activate to sort column descending"
  }
}

</script>
</html>
