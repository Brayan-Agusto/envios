<?php
require_once('../conexion.php');

require_once('../envio.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id)) {
    if(Envio::eliminar($conexion,$data->id)) {
        echo json_encode(["message" => "Envio eliminado"]);
    } else {
        echo json_encode(["message" => "Error al eliminar"]);
    }
} else {
    echo json_encode(["message" => "Datos imcompletos"]);
}