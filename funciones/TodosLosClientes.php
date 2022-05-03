<?php
require('../funciones.php');

error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$conexion = ConexionBasedeDatos();
$conexion->set_charset('utf8');

// $id_equipo = $_POST['id_equipo'];

$statement = $conexion->prepare("SELECT a.id, a.nombre, a.rfc, a.telefono, b.nombre AS tipo FROM clientes a INNER JOIN tipos b ON a.tipo = b.id
");
// $statement->bind_param("i",$id_equipo);
$statement->execute();
$resultados = $statement->get_result();

$respuesta = [];

while($fila = $resultados->fetch_assoc()){

    $opciones = "<button type='button' class='btn btn-success btn-sm ver'><i class='bi bi-eye-fill'></i></button><button type='button' class='btn btn-warning btn-sm editar'><i class='bi bi-pencil-square'></i></button><button type='button' class='btn btn-danger btn-sm eliminar'><i class='bi bi-trash'></i></i></button>";

    $info = [
        'id'		     => $fila['id'],
        'nombre'        => $fila['nombre'],
        'rfc'         => $fila['rfc'],
        'telefono'       => $fila['telefono'],
        'tipo'        => $fila['tipo'],
        'opciones'      => $opciones
    ];
    array_push($respuesta, $info);
}


echo json_encode($respuesta);

?>