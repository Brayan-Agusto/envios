<?php

require_once('../conexion.php');
require_once('../envio.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->nombre) && !empty($data->direccion) && !empty($data->pais) && !empty($data->peso)){
    $envio = new Envio($conexion, $data->nombre, $data->direccion, $data->pais, $data->peso);

    if ($envio->registrar()){
        echo json_encode(["message" => "Envio registrado correctamente"]);
    } else {
        echo json_encode(["message" => "Error al registrar"]);
    }
}else {
    echo json_encode(["message" => "datos imcompletos"]);
}