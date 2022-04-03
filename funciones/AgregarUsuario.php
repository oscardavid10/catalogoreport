<?php
require('../funciones.php');

// error_reporting(0);
// header('Content-type: application/json; charset=utf-8');

$modo = $_POST['modo'];


$conexion = ConexionBasedeDatos();
$conexion->set_charset('utf8');


switch($modo){
    case 'Alta':
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $permiso = $_POST['permiso'];

        $statement = $conexion->prepare("INSERT INTO usuarios (usuario,password,nombre,permiso) VALUES (?,?,?,?)");
        $statement->bind_param("sssi",$usuario,$password,$nombre,$permiso);
        $statement->execute();
        $id_asesor = $conexion->insert_id;

        echo $id_asesor;


    break;

    case 'Baja':

        $id_asesor = $_POST['id_asesor'];

        $statement = $conexion->prepare("UPDATE asesores SET estatus = 'Inactivo' WHERE id = ?");
        $statement->bind_param("i",$id_asesor);
        $statement->execute();

    break;

    case 'Modificar':

        $id_asesor = $_POST['id_asesor'];
        $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidop'];
        $apellidom = $_POST['apellidom'];
        $estatus = $_POST['estatus'];

        $statement = $conexion->prepare("UPDATE personas a INNER JOIN asesores b ON b.id_persona = a.id SET a.nombre = ?, a.apellidop = ?, a.apellidom = ?, b.estatus = ? WHERE b.id = ?");
        $statement->bind_param("ssssi",$nombre,$apellidop,$apellidom,$estatus,$id_asesor);
        $statement->execute();

    break;


}

$statement = null;
$conexion = null;


// echo json_encode($respuesta);

?>