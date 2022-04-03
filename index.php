<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adicional.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
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
                <form autocomplete="off" action="" id = 'Nuevo_usuario' class="form-horizontal" onsubmit=" return false">  
                <div class="form-inline">
                    <div class="form-group mb-2">
                        <label for="ejercicio_cuenta_iva">
                            Usuario
                        </label>
                        <input type="text" name="usuario" id="usuario">
                    </div>
                </div>
                <div class="form-inline">
                    <div class="form-group mb-2">
                        <label for="ejercicio_cuenta_iva">
                            Contraseña
                        </label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <div class="form-inline">
                    <div class="form-group mb-2">
                        <label for="ejercicio_cuenta_iva">
                            Nombre Completo
                        </label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                </div>
                <div class="form-inline">
                    <div class="form-group mb-2">
                        <label for="ejercicio_cuenta_iva">
                            Permiso
                        </label>
                        <select name="permiso" id="permiso">
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                </div>
                </form>
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

<script>

$(document).on('submit', '#Nuevo_usuario', function() {

var usuario = $("#usuario").val();
var password = $("#password").val();
var nombre = $("#nombre").val();
var permiso = $("#permiso").val();

$.ajax({
        url: "funciones/iva.php",
        type: "POST",
        data: {
            "usuario" : ejercicio,
            "periodo" : periodo,
            "empresa" : empresa,
            "tipo" : tipo
        },
        success: function(datas) {
              $("#cargar_informacion_cuenta_iva").html(datas);
            }
        });

return false;
});

</script>
</html>

