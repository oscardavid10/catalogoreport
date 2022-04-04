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

        $statement = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = ?");
        $statement->bind_param("s",$usuario);
        $statement->execute();
        $resultados = $statement->get_result();

        $row_cnt = $resultados->num_rows;
        if(intval($row_cnt) > 0){
            echo 0;
        }else{
            $statement = $conexion->prepare("INSERT INTO usuarios (usuario,password,nombre,permiso) VALUES (?,?,?,?)");
            $statement->bind_param("sssi",$usuario,$password,$nombre,$permiso);
            $statement->execute();
            $id_asesor = $conexion->insert_id;

            echo $id_asesor;
        }

    break;

    case 'Consulta':

        $id = $_POST['id'];

        $statement = $conexion->prepare("SELECT * FROM usuarios WHERE id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $resultados = $statement->get_result();

        while($fila = $resultados->fetch_assoc()){
       
            $info['id'] = $fila['id'];
            $info['usuario']      = $fila['usuario'];
            $info['nombre']     = $fila['nombre'];
            $info['password']      = $fila['password'];
            $info['permiso']      = $fila['permiso'];
            
            // array_push($respuesta, $info);
        }

        echo json_encode($info);

    break;

    case 'Baja':

        $id = $_POST['id'];

        $statement = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();

        echo 1;

    break;

    case 'Modificar':

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $permiso = $_POST['permiso'];



        $statement = $conexion->prepare("UPDATE usuarios SET password = ?, nombre = ?, permiso = ? WHERE id = ?");
        $statement->bind_param("ssii",$password,$nombre,$permiso,$id);
        $statement->execute();

        echo 1;

    break;


}

$statement = null;
$conexion = null;


// echo json_encode($respuesta);

?>