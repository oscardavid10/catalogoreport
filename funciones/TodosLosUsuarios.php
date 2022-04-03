<?php
require('../funciones.php');

error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$conexion = ConexionBasedeDatos();
$conexion->set_charset('utf8');

// $id_equipo = $_POST['id_equipo'];

$statement = $conexion->prepare("SELECT a.id, a.usuario, a.nombre, a.password, b.nombre AS permiso FROM usuarios a INNER JOIN permisos b ON a.permiso = b.id
");
// $statement->bind_param("i",$id_equipo);
$statement->execute();
$resultados = $statement->get_result();

$respuesta = [];

while($fila = $resultados->fetch_assoc()){

    $info = [
        'id'		     => $fila['id'],
        'usuario'        => $fila['usuario'],
        'nombre'         => $fila['nombre'],
        'password'       => $fila['password'],
        'permiso'        => $fila['permiso']
    ];
    array_push($respuesta, $info);
}


echo json_encode($respuesta);

?>