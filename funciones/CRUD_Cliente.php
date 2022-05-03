<?php
require('../funciones.php');

// error_reporting(0);
// header('Content-type: application/json; charset=utf-8');

$modo = $_POST['modo'];


$conexion = ConexionBasedeDatos();
$conexion->set_charset('utf8');


switch($modo){
    case 'Alta':
        $nombre = $_POST['nombre'];
        $rfc = $_POST['rfc'];
        $telefono = $_POST['telefono'];
        $tipo = $_POST['tipo'];

        $statement = $conexion->prepare("SELECT id FROM clientes WHERE rfc = ?");
        $statement->bind_param("s",$rfc);
        $statement->execute();
        $resultados = $statement->get_result();

        $row_cnt = $resultados->num_rows;
        if(intval($row_cnt) > 0){
            echo 0;
        }else{
            $statement = $conexion->prepare("INSERT INTO clientes (nombre,rfc,telefono,tipo) VALUES (?,?,?,?)");
            $statement->bind_param("sssi",$nombre,$rfc,$telefono,$tipo);
            $statement->execute();
            $id_asesor = $conexion->insert_id;

            echo $id_asesor;
        }

    break;

    case 'Consulta':

        $id = $_POST['id'];

        $statement = $conexion->prepare("SELECT * FROM clientes WHERE id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $resultados = $statement->get_result();

        while($fila = $resultados->fetch_assoc()){
       
            $info['id'] = $fila['id'];
            $info['nombre']      = $fila['nombre'];
            $info['rfc']     = $fila['rfc'];
            $info['telefono']      = $fila['telefono'];
            $info['tipo']      = $fila['tipo'];
            
            // array_push($respuesta, $info);
        }

        echo json_encode($info);

    break;

    case 'Baja':

        $id = $_POST['id'];

        $statement = $conexion->prepare("DELETE FROM clientes WHERE id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();

        echo 1;

    break;

    case 'Modificar':

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $tipo = $_POST['tipo'];



        $statement = $conexion->prepare("UPDATE clientes SET nombre = ?, telefono = ?, tipo = ? WHERE id = ?");
        $statement->bind_param("ssii",$nombre,$telefono,$tipo,$id);
        $statement->execute();

        echo 1;

    break;


}

$statement = null;
$conexion = null;


// echo json_encode($respuesta);

?>