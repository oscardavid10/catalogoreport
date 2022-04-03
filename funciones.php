<?php

function ConexionBasedeDatos(){
    try{
        $conexion = new mysqli('us-cdbr-east-05.cleardb.net','b3318d6e4070df','c5137977','heroku_efd1ce7f7ebb766');
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
        return $conexion;
}

?>