<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adicional.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/sweetalert/package/dist/sweetalert2.all.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.2 Sitio Web Sencillo</title>
</head>
<body>
    <div class="container-fluid">
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
        <p><b>Nombre del curso:</b> Conceptualización de servicios en la nube<br>
        <b>Nombre:</b> Oscar David Hernandez Reyna<br>
        <b>Codigo:</b> 211373143<br>
        <b>Correo:</b> david_010@live.com.mx</p>
      </div>
    </footer>
</body>

<script type="text/javascript">


$(document).ready(function(){
    CargarUsuarios();
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
],
columnDefs: [

],
    language: idioma_espanol,
    order: [
        [0, "desc"]
    ]
});
}

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
            //   $("#cargar_informacion_cuenta_iva").html(datas);
            }
        });

return false;
});

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
