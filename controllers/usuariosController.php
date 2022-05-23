<?php
function login()
{
    require_once './models/usuariosModel.php';

    session_start();

    $contrasenya = "";
    $usuario = "";
    $error = "";
    $usuarioError = "";

    if (empty($_SESSION["tipo"])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            function asegurar($valor)
            {
              $valor = strip_tags($valor);
              $valor = stripslashes($valor);
              $valor = htmlspecialchars($valor);
              return $valor;
            }

            $usuario = $_POST["user"];
            $contrasenya = $_POST["pass"];

            $getUsuario = usuario(asegurar($usuario));

            if ($getUsuario) {

                if (password_verify(asegurar($contrasenya), $getUsuario["contrasenya"])) {

                    $dni = $getUsuario["dni"];
                    $_SESSION["dni"] = $dni;
                    $tipo = tipoUsuario($dni);

                    if (isset($tipo)) {
                        $_SESSION["tipo"] = $tipo["tipo"];
                    }

                    header("Location: index.php?controller=obras&action=index");
                } else {

                    $error = "contraseña incorrecta";

                }
            } else {

                $usuarioError = "Usuario y contraseña incorrectas";
               
            }
        }
    } else if (!empty($_SESSION["tipo"])) {
        header("Location: index.php?controller=obras&action=index");
    } else{
        session_destroy();
    }

    $obras = mostrarObras();

    include "./views/noUser/index.php";

}

function closeSession(){
    session_start();
    session_destroy();
    header("Location: index.php?controller=usuarios&action=login");
    
}
