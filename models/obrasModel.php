<?php

$servidor = "localhost";
$baseDatos = "marinaproyectointegrado";
$usuario = "developer";
$pass = "developer";

function crearConexion()
{
    $servidor = "localhost";
    $baseDatos = "marinaproyectointegrado";
    $user = "developer";
    $pass = "developer";
    try {
        return new PDO("mysql:host=$servidor;dbname=$baseDatos", $user, $pass);
    } catch (PDOException $e) {
        return false;
    }
}



function mostrarObras()
{
    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM usuarios u, artistas a, obra o
                                WHERE u.dni = a.dni_art
                                AND a.dni_art = o.dni_art");
        $sql->execute();
        $matriz = [];
        while ($al = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $al;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

function mostrarObraConcretaPuja($id)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT * , s.id AS idPuja
                                FROM usuarios u, artistas a, obra o, subasta s
                                WHERE u.dni = a.dni_art
                                AND a.dni_art = o.dni_art 
                                AND s.id_obra = o.id
                                AND o.id = ? ");

        $sql->bindParam(1, $id);
        $sql->execute();

        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

function mostrarObraConcreta($id)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM usuarios u, artistas a, obra o
                                WHERE u.dni = a.dni_art
                                AND a.dni_art = o.dni_art 
                                AND o.id = ? ");

        $sql->bindParam(1, $id);
        $sql->execute();

        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

function mostrarArtistas()
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM usuarios u, artistas a
                                WHERE u.dni = a.dni_art");
        $sql->execute();
        $matriz = [];
        while ($al = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $al;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}


function mostrarArtistaConcreto($dni)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM usuarios u, artistas a
                                WHERE u.dni = a.dni_art
                                AND u.dni = ?");

        $sql->bindParam(1, $dni);
        $sql->execute();

        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}


function mostrarClienteConcreto($dni)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM usuarios
                                WHERE dni = ?");

        $sql->bindParam(1, $dni);
        $sql->execute();

        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

function mostrarSubastas()
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM artistas a, obra o, subasta s
                                where a.dni_art = o.dni_art
                                AND o.id = s.id_obra");
        $sql->execute();
        $matriz = [];
        while ($al = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $al;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

function mostrarSubasta($id)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM artistas a, obra o, subasta s
                                where a.dni_art = o.dni_art
                                AND o.id = s.id_obra
                                AND s.id = ? ");

        $sql->bindParam(1, $id);
        $sql->execute();

        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}


function mostrarSubastasPropias($dni)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM artistas a, obra o, subasta s
                                where a.dni_art = o.dni_art
                                AND o.id = s.id_obra
                                AND a.dni_art = ? ");

        $sql->bindParam(1, $dni);
        $sql->execute();

        $matriz = [];
        while ($al = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $al;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}


function mostrarObrasPropias($dni)
{
    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM usuarios u, artistas a, obra o
                                WHERE u.dni = a.dni_art
                                AND a.dni_art = o.dni_art
                                AND a.dni_art =?");
        $sql->bindParam(1, $dni);
        $sql->execute();
        $matriz = [];
        while ($al = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $al;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}


//CREAR OBRA

function crearObraModel($nombreObra, $dimensiones, $materiales, $fechaInicio, $fechaFin, $tipoObra, $foto, $descripcion, $dniArt)
{

    try {
        $conn = crearConexion();


        $consulta = $conn->prepare("INSERT INTO obra (nombreObra, dimensiones, materiales, fechaInicio, fechaFin, tipoObra, fotoObra, descripcion,dni_art) VALUES (?,?,?,?,?,?,?,?,?)");
        $consulta->bindParam(1, $nombreObra);
        $consulta->bindParam(2, $dimensiones);
        $consulta->bindParam(3, $materiales);
        $consulta->bindParam(4, $fechaInicio);
        $consulta->bindParam(5, $fechaFin);
        $consulta->bindParam(6, $tipoObra);
        $consulta->bindParam(7, $foto);
        $consulta->bindParam(8, $descripcion);
        $consulta->bindParam(9, $dniArt);

        $consulta->execute();
        return true;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conn = null;
}


function mostrarSoloObra($id)
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT *
                                FROM obra o
                                WHERE o.id = ? ");

        $sql->bindParam(1, $id);
        $sql->execute();

        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

//EDITAR OBRA


function edicionObra($id, $dniArt, $nombreObra, $dimensiones, $materiales, $fechaInicio, $fechaFin, $tipoObra, $fotoObra, $descripcion)
{

    try {
        $conn = crearConexion();


        $consulta = $conn->prepare("UPDATE obra SET nombreObra=:nombreObra, dimensiones=:dimensiones, materiales=:materiales,
        fechaInicio=:fechaInicio,fechaFin=:fechaFin,tipoObra=:tipoObra,fotoObra=:fotoObra,descripcion=:descripcion WHERE id=:id AND dni_art=:dni_art ");

        $parametros = array(
            ":id" => $id, ":dni_art" => $dniArt, ":nombreObra" => $nombreObra, ":dimensiones" => $dimensiones, ":materiales" => $materiales, ":fechaInicio" => $fechaInicio,
            ":fechaFin" => $fechaFin, ":tipoObra" => $tipoObra, ":fotoObra" => $fotoObra, ":descripcion" => $descripcion
        );

        return $consulta->execute($parametros);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
}
//var_dump(edicionObra(5,'72415478B','obra','5x4','lapices','2021-12-21','2021-12-21','cuadro','modeloTribuAfricana.jpeg','descripcion'));

//CREAR SUBASTA
function mostrarNombreObra()
{

    try {
        $conn = crearConexion();

        $sql = $conn->prepare("SELECT nombreObra, id
                                FROM obra");
        $sql->execute();
        $matriz = [];
        while ($al = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $al;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}


function creacionSubasta($idObra, $precioInicial, $fechaInicioSubasta, $fechaFinSubasta, $descripcion)
{

    try {
        $conn = crearConexion();


        $consulta = $conn->prepare("INSERT INTO subasta (id_obra, precioInicial, fechaInicioSubasta, fechaFinSubasta, descripcion) VALUES (?,?,?,?,?)");
        $consulta->bindParam(1, $idObra);
        $consulta->bindParam(2, $precioInicial);
        $consulta->bindParam(3, $fechaInicioSubasta);
        $consulta->bindParam(4, $fechaFinSubasta);
        $consulta->bindParam(5, $descripcion);

        $consulta->execute();
        return true;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conn = null;
}

//var_dump(creacionSubasta(1, 300, '2022-08-10','2022-08-10', 'tercera subasta'));


function creacionCliente($dni, $nombreUsuario, $contrasenya, $tipo, $nombre, $apellidoUno, $apellidoDos, $fotoPerfil, $presentacion, $correo)
{

    try {
        $conn = crearConexion();

        $consulta = $conn->prepare("INSERT INTO usuarios (dni, nombre_usuario, contrasenya, tipo, nombre, apellido1, apellido2, fotoPerfil, presentacion, correo) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $consulta->bindParam(1, $dni);
        $consulta->bindParam(2, $nombreUsuario);
        $consulta->bindParam(3, $contrasenya);
        $consulta->bindParam(4, $tipo);
        $consulta->bindParam(5, $nombre);
        $consulta->bindParam(6, $apellidoUno);
        $consulta->bindParam(7, $apellidoDos);
        $consulta->bindParam(8, $fotoPerfil);
        $consulta->bindParam(9, $presentacion);
        $consulta->bindParam(10, $correo);

        $consulta->execute();
        return true;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conn = null;
}


function creacionArtista($dni, $nombreArtistico, $fechaComienzo, $tecnicas, $redSocial)
{

    try {
        $conn = crearConexion();

        $consulta = $conn->prepare("INSERT INTO artistas (dni_art, nombreArtistico, fechaComienzo, tecnicas, redSocial) VALUES (?,?,?,?,?)");
        $consulta->bindParam(1, $dni);
        $consulta->bindParam(2, $nombreArtistico);
        $consulta->bindParam(3, $fechaComienzo);
        $consulta->bindParam(4, $tecnicas);
        $consulta->bindParam(5, $redSocial);

        $consulta->execute();
        return true;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conn = null;
}

//var_dump(creacionArtista("85985675S", "jose", "2019-05-14", "lapiz", "instagram"));


//EDITAR CLIENTE
function edicionCliente($dni, $nombreUsuario, $nombre, $apellidoUno, $apellidoDos, $fotoPerfil, $presentacion, $correo)
{

    try {
        $conn = crearConexion();


        $consulta = $conn->prepare("UPDATE usuarios SET nombre_usuario=:nombre_usuario, nombre=:nombre,apellido1=:apellido1,
        apellido2=:apellido2,fotoPerfil=:fotoPerfil,presentacion=:presentacion, correo=:correo WHERE dni=:dni");

        $parametros = array(
            ":dni" => $dni, ":nombre_usuario" => $nombreUsuario, ":nombre" => $nombre, ":apellido1" => $apellidoUno, ":apellido2" => $apellidoDos,
            ":fotoPerfil" => $fotoPerfil, ":presentacion" => $presentacion, ":correo" => $correo);

        return $consulta->execute($parametros);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
}

//var_dump(edicionCliente('974563243', 'cliente', '1234', 'valentina', 'flor', 'calvo', 'a.jpg', 'hi', 'flor@gmail.com'));

//EDITAR ARTISTA

function edicionArtista($dniArt, $nombreArtistico, $fechaComienzo, $tecnicas, $redSocial)
{

    try {
        $conn = crearConexion();


        $consulta = $conn->prepare("UPDATE artistas SET nombreArtistico=:nombreArtistico,
         fechaComienzo=:fechaComienzo,tecnicas=:tecnicas,redSocial=:redSocial WHERE dni_art=:dni_art");

        $parametros = array(
            ":dni_art" => $dniArt, ":nombreArtistico" => $nombreArtistico, ":fechaComienzo" => $fechaComienzo,
             ":tecnicas" => $tecnicas, ":redSocial" => $redSocial);

        return $consulta->execute($parametros);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
}

//var_dump(edicionArtista('85985675S','josefa','2022-05-24','escultura','facebook'));