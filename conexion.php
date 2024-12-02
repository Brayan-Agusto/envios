<?php

$server = "localhost";
$username = "root";
$paswoord = "";
$database = "envio";

$conexion = mysqli_connect($server, $username, $paswoord, $database);

if (!$conexion) {
    die ("Error en la conexion " . mysqli_connect_error());
}