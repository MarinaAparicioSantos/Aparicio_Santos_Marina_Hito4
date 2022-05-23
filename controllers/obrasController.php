<?php

session_start();

function index()
{
  require_once './models/obrasModel.php';
  $obras = mostrarObras();
  include "./views/noUser/index.php";
}

function createUser()
{

  function asegurar($valor)
  {
    $valor = strip_tags($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
  }

  require_once './models/obrasModel.php';

  $dni = "";
  $nombreUsuario = "";
  $contrasenya = "";
  $tipo = "";
  $nombre = "";
  $apellidoUno = "";
  $apellidoDos = "";
  $fotoPerfil = "";
  $presentacion = "";
  $correo = "";

  $dniArtista = "";
  $nombreArtistico = "";
  $fechaComienzo = "";
  $tecnicas = "";
  $redSocial = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dni = $_POST["dni"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $contrasenya =  password_hash($_POST["contrasenya"], PASSWORD_DEFAULT);
    $tipo = $_POST["clienteArtista"];
    $nombre = $_POST["nombre"];
    $apellidoUno = $_POST["apellido1"];
    $apellidoDos = $_POST["apellido2"];
    $presentacion = $_POST["presentacion"];
    $correo = $_POST["correo"];



    $target_dir = "./images/";
    $target_file = $target_dir . basename($_FILES["fotoPerfil"]["name"]);
    $fotoPerfil = $_FILES["fotoPerfil"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if ($uploadOk == 0) {
      $errorImagen = "La imagen no se pudo guardar";
    } else {
      if (move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], $target_file)) {


        $insertar = creacionCliente(
          asegurar($dni),
          asegurar($nombreUsuario),
          asegurar($contrasenya),
          asegurar($tipo),
          asegurar($nombre),
          asegurar($apellidoUno),
          asegurar($apellidoDos),
          $fotoPerfil,
          asegurar($presentacion),
          asegurar($correo)
        );
        if (!$insertar) {

          $error = "ERROR";
        } else {


          header("location: index.php?controller=obras&action=index");
        }
      } else {
        $errorImagen = "No se ha guardado la imagen de la obra.";
      }
    }

    if ($_POST["clienteArtista"] == "artista") {
      echo "AAAAAAAAAA";
      $dniArtista = $_POST["dni"];
      $nombreArtistico = $_POST["nombreArtistico"];
      $fechaComienzo = $_POST["fechaComienzo"];
      $tecnicas = $_POST["tecnicas"];
      $redSocial = $_POST["redSocial"];

      $insertarArtista = creacionArtista(
        asegurar($dniArtista),
        asegurar($nombreArtistico),
        asegurar($fechaComienzo),
        asegurar($tecnicas),
        asegurar($redSocial)
      );
      if (!$insertarArtista) {

        $error = "ERROR";
      } else {


        header("location: index.php?controller=obras&action=index");
      }
    }
  }
  include "./views/noUser/crearEditarUsuario.php";
}



function detallesObra()
{

  require_once './models/obrasModel.php';
  $obraPuja = mostrarObraConcretaPuja($_GET['id']);
  $obra = mostrarObraConcreta($_GET['id']);
  include "./views/noUser/detallesObra.php";
}

function autores()
{

  require_once './models/obrasModel.php';
  $autores = mostrarArtistas();
  include "./views/noUser/autores.php";
}

function perfilAutor()
{

  require_once './models/obrasModel.php';
  $autor = mostrarArtistaConcreto($_GET['id']);
  $obras = mostrarObrasPropias($_GET['id']);
  include "./views/artist/perfilArtistaArt.php";
}

function subastas()
{

  require_once './models/obrasModel.php';
  $subastas = mostrarSubastas();
  include "./views/noUser/subastas.php";
}

function perfilCliente()
{
  require_once './models/obrasModel.php';
  $cliente = mostrarClienteConcreto($_GET['id']);
  include "./views/client/perfilCliente.php";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function editarPerfilAutor()
{
  require_once './models/obrasModel.php';

  $autor = mostrarArtistaConcreto($_GET['id']);


  $dni = "";
  $nombreUsuario = "";
  $nombre = "";
  $apellidoUno = "";
  $apellidoDos = "";
  $presentacion = "";
  $correo = "";

  $nombreArtistico = "";
  $fechaComienzo = "";
  $tecnicas = "";
  $redSocial = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function asegurar($valor)
    {
      $valor = strip_tags($valor);
      $valor = stripslashes($valor);
      $valor = htmlspecialchars($valor);
      return $valor;
    }

    $dni = $_GET['id'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $nombre = $_POST['nombre'];
    $apellidoUno = $_POST['apellido1'];
    $apellidoDos = $_POST['apellido2'];
    $presentacion = $_POST['presentacion'];
    $correo = $_POST['correo'];

    $nombreArtistico = $_POST['nombreArtistico'];
    $fechaComienzo = $_POST['fechaComienzo'];
    $tecnicas = $_POST['tecnicas'];
    $redSocial = $_POST['redSocial'];



    $fotoPerfil = "";
    if ($_FILES["fotoPerfil"]["name"] != '') {
      $fotoPerfil = $_FILES["fotoPerfil"]["name"];
      $temp = $_FILES['fotoPerfil']['tmp_name'];
      if (move_uploaded_file($temp, 'images/' . $fotoPerfil)) {

        chmod('images/' . $fotoPerfil, 0777);
      }
    } else {
      $fotoPerfil = $autor["fotoPerfil"];
    }


    $editar = edicionCliente(
      asegurar($dni),
      asegurar($nombreUsuario),
      asegurar($nombre),
      asegurar($apellidoUno),
      asegurar($apellidoDos),
      $fotoPerfil,
      asegurar($presentacion),
      asegurar($correo)
    );

    $editarArtista = edicionArtista(
      asegurar($dni),
      asegurar($nombreArtistico),
      asegurar($fechaComienzo),
      asegurar($tecnicas),
      asegurar($redSocial),
    );

    var_dump($editar && $editarArtista);
    if ($editar == true) {
      header("Location: index.php?controller=obras&action=perfilAutor&id=" . $_SESSION["dni"]);
      var_dump($editar);

      exit();
    } else {
      $error = "Datos incorrectos o no se ha actualizado nada";
      var_dump($editar);
      echo $error;
    }
  }

  include "./views/noUser/crearEditarUsuario.php";
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function editarPerfilCliente()
{

  require_once './models/obrasModel.php';
  $cliente = mostrarClienteConcreto($_GET['id']);


  $dni = "";
  $nombreUsuario = "";
  $nombre = "";
  $apellidoUno = "";
  $apellidoDos = "";
  $presentacion = "";
  $correo = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function asegurar($valor)
    {
      $valor = strip_tags($valor);
      $valor = stripslashes($valor);
      $valor = htmlspecialchars($valor);
      return $valor;
    }

    $dni = $_GET['id'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $nombre = $_POST['nombre'];
    $apellidoUno = $_POST['apellido1'];
    $apellidoDos = $_POST['apellido2'];
    $presentacion = $_POST['presentacion'];
    $correo = $_POST['correo'];



    $fotoPerfil = "";
    if ($_FILES["fotoPerfil"]["name"] != '') {
      $fotoPerfil = $_FILES["fotoPerfil"]["name"];
      $temp = $_FILES['fotoPerfil']['tmp_name'];
      if (move_uploaded_file($temp, 'images/' . $fotoPerfil)) {

        chmod('images/' . $fotoPerfil, 0777);
      }
    } else {
      $fotoPerfil = $cliente["fotoPerfil"];
    }


    $editar = edicionCliente(
      asegurar($dni),
      asegurar($nombreUsuario),
      asegurar($nombre),
      asegurar($apellidoUno),
      asegurar($apellidoDos),
      $fotoPerfil,
      asegurar($presentacion),
      asegurar($correo)
    );

    var_dump($editar);
    if ($editar == true) {
      header("Location: index.php?controller=obras&action=perfilCliente&id=" . $_SESSION["dni"]);
      var_dump($editar);

      exit();
    } else {
      $error = "Datos incorrectos o no se ha actualizado nada";
      var_dump($editar);
      echo $error;
    }
  }


  include "./views/noUser/crearEditarUsuario.php";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function subastaObra()
{

  require_once './models/obrasModel.php';
  $subasta = mostrarSubasta($_GET['id']);
  include "./views/client/subastaObraCli.php";
}

function misSubastas()
{

  require_once './models/obrasModel.php';
  $subastas = mostrarSubastasPropias($_SESSION['dni']);
  include "./views/noUser/subastas.php";
}


function reservaObra()
{

  include "./views/client/reservaObraPujadaCli.php";
}

function crearObra()
{
  require_once './models/obrasModel.php';

  $nombreObra = "";
  $dimensiones = "";
  $materiales = "";
  $fechaInicio = "";
  $fechaFin = "";
  $tipoObra = "";
  $descripcion = "";
  $dniArt = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function asegurar($valor)
    {
      $valor = strip_tags($valor);
      $valor = stripslashes($valor);
      $valor = htmlspecialchars($valor);
      return $valor;
    }

    $nombreObra = $_POST["nombreObra"];
    $dimensiones = $_POST["dimensiones"];
    $materiales = $_POST["materiales"];
    $fechaInicio = $_POST["fechaInicio"];
    $fechaFin = $_POST["fechaFin"];
    $tipoObra = $_POST["tipoObra"];
    $descripcion = $_POST["descripcion"];
    $dniArt = $_SESSION["dni"];



    $target_dir = "./images/";
    $target_file = $target_dir . basename($_FILES["fotoObra"]["name"]);
    $fotoObra = $_FILES["fotoObra"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if ($uploadOk == 0) {
      $errorImagen = "La imagen no se pudo guardar";
    } else {
      if (move_uploaded_file($_FILES["fotoObra"]["tmp_name"], $target_file)) {


        $insertar = crearObraModel(
          asegurar($nombreObra),
          asegurar($dimensiones),
          asegurar($materiales),
          asegurar($fechaInicio),
          asegurar($fechaFin),
          asegurar($tipoObra),
          $fotoObra,
          asegurar($descripcion),
          asegurar($dniArt)
        );
        if (!$insertar) {

          $error = "ERROR";
        } else {


          header("location: index.php?controller=obras&action=index");
        }
      } else {
        $errorImagen = "No se ha guardado la imagen de la obra.";
      }
    }
  }


  include "./views/artist/crearEditarObra.php";
}



function editarObra()
{

  require_once './models/obrasModel.php';
  $obraEditar = mostrarSoloObra($_GET['id']);


  $nombreObra = "";
  $dimensiones = "";
  $materiales = "";
  $fechaInicio = "";
  $fechaFin = "";
  $tipoObra = "";
  $descripcion = "";
  $dniArt = "";
  $id = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function asegurar($valor)
    {
      $valor = strip_tags($valor);
      $valor = stripslashes($valor);
      $valor = htmlspecialchars($valor);
      return $valor;
    }

    $nombreObra = $_POST["nombreObra"];
    $dimensiones = $_POST["dimensiones"];
    $materiales = $_POST["materiales"];
    $fechaInicio = $_POST["fechaInicio"];
    $fechaFin = $_POST["fechaFin"];
    $tipoObra = $_POST["tipoObra"];
    $descripcion = $_POST["descripcion"];
    $dniArt = $_SESSION["dni"];
    $id = $_GET["id"];



    $fotoObra = '';
    if ($_FILES["fotoObra"]["name"] != '') {
      $fotoObra = $_FILES["fotoObra"]["name"];
      $temp = $_FILES['fotoObra']['tmp_name'];
      if (move_uploaded_file($temp, 'images/' . $fotoObra)) {

        chmod('images/' . $fotoObra, 0777);
      }
    } else {
      $fotoObra = $obraEditar["fotoObra"];
    }


    $editar = edicionObra(
      $id,
      $dniArt,
      asegurar($nombreObra),
      asegurar($dimensiones),
      asegurar($materiales),
      asegurar($fechaInicio),
      asegurar($fechaFin),
      asegurar($tipoObra),
      $fotoObra,
      asegurar($descripcion)
    );
    var_dump($editar);
    if ($editar == true) {
      header("Location: index.php?controller=obras&action=perfilAutor&id=" . $_SESSION["dni"]);

      exit();
    } else {
      $error = "Datos incorrectos o no se ha actualizado nada";
      echo $error;
    }
  }


  include "./views/artist/crearEditarObra.php";
}

/////////////////////////////////////////////////////////////////////////////////////////7
function crearSubasta()
{

  require_once './models/obrasModel.php';

  $nombresObras = mostrarNombreObra();

  $idObra = "";
  $precioInicial = "";
  $fechaInicioSubasta = "";
  $fechaFinSubasta = "";
  $descripcion = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function asegurar($valor)
    {
      $valor = strip_tags($valor);
      $valor = stripslashes($valor);
      $valor = htmlspecialchars($valor);
      return $valor;
    }

    $idObra = $_POST['idObra'];
    $precioInicial = $_POST['precioInicial'];
    $fechaInicioSubasta = date('Y-m-d');
    $fechaFinSubasta = $_POST['fechaFin'];
    $descripcion = $_POST['descripcion'];



    $insertar = creacionSubasta(
      asegurar($idObra),
      asegurar($precioInicial),
      asegurar($fechaInicioSubasta),
      asegurar($fechaFinSubasta),
      asegurar($descripcion),

    );
    if (!$insertar) {

      $error = "ERROR";
    } else {


      header("location: index.php?controller=obras&action=index");
    }
  }


  include "./views/artist/crearEditarSubastaArt.php";
}
///////////////////////////////////////////////

function editarSubasta()
{

  include "./views/artist/crearEditarSubastaArt.php";
}

function detallesObraPropia()
{

  require_once './models/obrasModel.php';

  $miObra = mostrarObraConcreta($_GET['id']);

  include "./views/artist/detallesObraPropiaArt.php";
}

function adminClientes()
{

  include "./views/admin/clientesAdm.php";
}
