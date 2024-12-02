<?php 

require_once('../conexion.php');
require_once('../envio.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id) && !empty($data->nombre) && !empty($data->direccion) && !empty($data->pais) && !empty($data->peso)) {
    $envio = new Envio($conexion, $data->nombre, $data->direccion, $data->pais, $data->peso);

    if ($envio->actualizar($data->id)) {
        echo json_encode(["message" => "Envio Actualizado"]);
    } else {
        echo json_encode(["message" => "Error al Actualizar"]);
    }
} else {
    echo json_encode(["message" => "Datos incompletos"]);
}