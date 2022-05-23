<?php

require "obrasModel.php";

function usuario($nombre_usuario)
{

    try {
        $conexion = crearConexion();
        $consulta = $conexion->prepare("SELECT `dni`, `contrasenya`, `nombre_usuario` FROM `usuarios` WHERE `nombre_usuario` LIKE :nombre_usuario");
        $parametros = array(":nombre_usuario" => $nombre_usuario);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
}

function tipoUsuario($dni)
{

    try {
        $conexion = crearConexion();
        $consulta = $conexion->prepare("SELECT tipo FROM `usuarios` WHERE `dni` = :dni");
        $parametros = array(":dni" => $dni);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch();
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
}
