<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adicional.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet"></link>

    <script src="js/jquery-3.5.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jspdf.debug.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/autoNumeric.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-notify.js"></script>
  <script src="js/SimpleAjaxUploader.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>

    <!-- <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script> -->
    <script type="text/javascript" src="js/sweetalert/package/dist/sweetalert2.all.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI. Aplicación web dinámica en un servicio de la nube</title>
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
        <h5 class="card-title">Administración de Clientes</h5>
    </div>
    <div class="card-body">
    <button id="new_cliente" class="btn btn-success"><i class="fas fa-plus-circle pr-1"></i> Agregar</button><br><br>

    <div id="div_tabla_clientes" class="table-responsive">
        <table id="tabla_clientes" class="table row-border order-column table-sm striped table-sm" style="width: 100%; font-size:12px">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>RFC</th>
                    <th>Telefono</th>
                    <th>Tipo Cliente</th>
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
    <br>
    <h3>Como se utiliza esta aplicación</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/D2AzM6BYkYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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


<div class="modal fade" id="Modal_AgregarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close cerrar" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" action="" id = 'Nuevo_cliente' class="form-horizontal" onsubmit=" return false">
      <div class="modal-body">

          <div class="form-group">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" required>
          </div>
          <div class="form-group">
            <label for="rfc" class="col-form-label">RFC:</label>
            <input type="text" class="form-control" id="rfc" maxlength="14" required>
          </div>
          <div class="form-group">
            <label for="telefono" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono" maxlength="10" required>
          </div>
          <div class="form-group">
            <label for="tipo" class="col-form-label">Tipo Cliente:</label>
                <select name="tipo" class='form-control' id="tipo">
                    <option value="1">Minorista</option>
                    <option value="2">Mayorista</option>
                </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal_VerCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Cliente</h5>
        <button type="button" class="close cerrar" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <form autocomplete="off" action="" id = 'Nuevo_usuario' class="form-horizontal" onsubmit=" return false"> -->
      <div class="modal-body">

          <div class="form-group">
            <label for="nombre_ver" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre_ver" required>
          </div>
          <div class="form-group">
            <label for="rfc_ver" class="col-form-label">RFC:</label>
            <input type="text" class="form-control" id="rfc_ver" maxlength="14" required>
          </div>
          <div class="form-group">
            <label for="telefono_ver" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono_ver" maxlength="10" required>
          </div>
          <div class="form-group">
            <label for="tipo_ver" class="col-form-label">Tipo:</label>
                <select name="tipo_ver" class='form-control' id="tipo_ver">
                    <option value="1">Minorista</option>
                    <option value="2">Mayorista</option>
                </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Cerrar</button>
        <!-- <button type="submit" class="btn btn-primary">Agregar</button> -->
      </div>
      <!-- </form> -->
    </div>
  </div>
</div>

<div class="modal fade" id="Modal_EditarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="close cerrar" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" action="" id = 'Editar_cliente' class="form-horizontal" onsubmit=" return false">
      <div class="modal-body">
            <input type="hidden" name="id_cliente_editar" id="id_cliente_editar">
          <div class="form-group">
            <label for="nombre_edit" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre_edit" readonly>
          </div>
          <div class="form-group">
            <label for="rfc_edit" class="col-form-label">RFC:</label>
            <input type="text" class="form-control" id="rfc_edit" maxlength="14" required disabled>
          </div>
          <div class="form-group">
            <label for="telefono_edit" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono_edit" maxlength="10" required>
          </div>
          <div class="form-group">
            <label for="tipo_edit" class="col-form-label">Tipo:</label>
                <select name="tipo_edit" class='form-control' id="tipo_edit">
                    <option value="1">Minorista</option>
                    <option value="2">Mayorista</option>
                </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">


$(document).ready(function(){
  CargarClientes();
});

$(document).on('click', '#new_cliente', function() {

$('#Modal_AgregarCliente').modal('show');

});

$('#tabla_clientes tbody').on('click', '.ver', function (){
    var id = $(this).parents("tr").find("td:eq(0)").html();

    $("#id_cliente_ver").val(id);

    $.ajax({
        url: "funciones/CRUD_Cliente.php",
        type: "POST",
        dataType: "JSON",
        data: {
            "id" : id,
            "modo": "Consulta"
        },
        success: function(datas) {

            $("#nombre_ver").val(datas.nombre);
            $("#rfc_ver").val(datas.rfc);
            $("#telefono_ver").val(datas.telefono);
            $("#tipo_ver").val(datas.tipo);

        }
    });

    var modal = $('#Modal_VerCliente').modal('show');
});

$(document).on('click', '.cerrar', function() {

    $(".modal").modal('hide');

});

$('#tabla_clientes tbody').on('click', '.eliminar', function (){
    var id = $(this).parents("tr").find("td:eq(0)").html();

    Swal.fire({
            title: 'Eliminar',
            text: "Estas seguro que deseas eliminar este cliente?",
            icon: 'warning',
            position: 'top',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
        }).then((result) => {
            if (result.value) {

                    $.ajax({
                        url: "funciones/CRUD_Cliente.php",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            "id" : id,
                            "modo": "Baja"
                        },
                        success: function(datas) {

                          CargarClientes();

                        }
                    });


                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Eliminado',
                    text: 'Este cliente ha sido eliminado !',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })


});

$('#tabla_clientes tbody').on('click', '.editar', function (){
    var id = $(this).parents("tr").find("td:eq(0)").html();

    $("#id_cliente_editar").val(id);

    $.ajax({
        url: "funciones/CRUD_Cliente.php",
        type: "POST",
        dataType: "JSON",
        data: {
            "id" : id,
            "modo": "Consulta"
        },
        success: function(datas) {

            $("#nombre_edit").val(datas.nombre);
            $("#rfc_edit").val(datas.rfc);
            $("#telefono_edit").val(datas.telefono);
            $("#tipo_edit").val(datas.tipo);

        }
    });

    var modal = $('#Modal_EditarCliente').modal('show');
});

function CargarClientes(){

var table = $('#tabla_clientes').DataTable({
    destroy: true,
    paging:  true,
ajax: {
    "url": "funciones/TodosLosClientes.php",
    "dataSrc": ""
},
columns: [
        {"data": "id"},
        {"data": "nombre"},
        {"data": "rfc"},
        {"data": "telefono"},
        {"data": "tipo"},
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

$(document).on('submit', '#Editar_cliente', function() {

var id = $("#id_cliente_editar").val();
var nombre = $("#nombre_edit").val();
var telefono = $("#telefono_edit").val();
var tipo = $("#tipo_edit").val();

$.ajax({
        url: "funciones/CRUD_Cliente.php",
        type: "POST",
        data: {
            "id" : id,
            "nombre" : nombre,
            "telefono" : telefono,
            "tipo" : tipo,
            "modo": "Modificar"
        },
        success: function(datas) {
            if(datas>0){
                Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Modificar Cliente',
                text: 'El cliente ha sido modificado !',
                showConfirmButton: false,
                timer: 1500
            })
                $('#Modal_EditarCliente').modal('hide');
                CargarClientes();
                LimpiarCampos("#Editar_cliente");
            }else{
                Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Error',
                text: 'Ese cliente ya existe, intenta con otro !',
                showConfirmButton: false,
                timer: 1500
            })
        }
            }
        });

return false;
});

$(document).on('submit', '#Nuevo_cliente', function() {

var nombre = $("#nombre").val();
var rfc = $("#rfc").val();
var telefono = $("#telefono").val();
var tipo = $("#tipo").val();

$.ajax({
        url: "funciones/CRUD_Cliente.php",
        type: "POST",
        data: {
            "nombre" : nombre,
            "rfc" : rfc,
            "telefono" : telefono,
            "tipo" : tipo,
            "modo": "Alta"
        },
        success: function(datas) {
            if(datas>0){
                Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Nuevo Cliente',
                text: 'Este cliente ha sido dado de alta !',
                showConfirmButton: false,
                timer: 1500
            })
                $('#Modal_AgregarCliente').modal('hide');
                CargarClientes();
                LimpiarCampos("#Nuevo_cliente");
            }else{
                Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Error',
                text: 'Ese cliente ya existe, intenta con otro !',
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
