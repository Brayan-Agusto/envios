<?php

class Envio{
    public $nombre, $direccion, $pais, $peso;
    public $conexion;
    
    public function __construct($conexion, $nombre = null, $direccion = null, $pais = null, $peso = null)
    {
        $this->conexion = $conexion;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->pais = $pais;
        $this->peso = $peso;
    }

    public function registrar()
    {
        $sql = "INSERT INTO `envio`(`nombre`, `direccion`, `pais`, `peso`) VALUES ('$this->nombre','$this->direccion','$this->pais','$this->peso')"; 
        return mysqli_query($this->conexion, $sql);
    }

    public static function mostrar($conexion)
    {
        $sql = "SELECT * FROM `envio`";
        return mysqli_query($conexion, $sql);
    }

    public function actualizar($id)
    {
        $sql = "UPDATE `envio` SET `nombre`='$this->nombre',`direccion`='$this->direccion',`pais`='$this->pais',`peso`='$this->peso' WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    public static function eliminar($conexion, $id)
    {
        $sql = "DELETE FROM `envio` WHERE id=$id";
        return mysqli_query($conexion, $sql);
    }
}