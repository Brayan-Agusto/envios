<?php

require_once('../conexion.php');
require_once('../envio.php');

$resultado = Envio::mostrar($conexion);

if (mysqli_num_rows($resultado) > 0) {
    $envios = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $envios[] = $fila;
    }
    echo json_encode($envios);
} else {
    echo json_encode(["message" => "No se encuentra Envios"]);
}