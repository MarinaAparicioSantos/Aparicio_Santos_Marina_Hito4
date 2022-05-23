<?php

if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente" || $_SESSION['tipo'] == "artista") :

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="clientArtist.js"></script>
    </head>

    <body>
        <form class="row g-3 needs-validation form-register" enctype="multipart/form-data" action=<?php if (isset($_GET['action'])) {
                                                                                                        if ($_GET['action'] == "createUser") {

                                                                                                            echo "index.php?controller=obras&action=createUser";
                                                                                                        } elseif ($_GET['action'] == "editarPerfilCliente") {

                                                                                                            echo "index.php?controller=obras&action=editarPerfilCliente&id=" . $_SESSION['dni'];
                                                                                                        } elseif ($_GET['action'] == "editarPerfilAutor") {

                                                                                                            echo "index.php?controller=obras&action=editarPerfilAutor&id=" . $_SESSION['dni'];
                                                                                                        }
                                                                                                    } ?> method="POST" novalidate>

            <div class="row col-12 col-md-12">

                <div class="col-3 col-sm-3 col-md-4"></div>

                <?php

                if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente") :

                ?>
                    <div class="col-12 col-sm-12 col-md-6 ajustarCliente" style="display:none;"></div>

                    <?php

                endif;

                if (isset($_SESSION['tipo'])) :
                    if ($_SESSION['tipo'] == "artista") :

                    ?>

                        <div class="col-12 col-sm-12 col-md-6 "></div>

                <?php

                    endif;
                endif;

                ?>

                <div class="col-12 col-sm-12 col-md-5 mt-5 mb-5 offset-md-1">

                    <div class="row g-3">
                        <h1>Editar perfil</h1>

                        <a href="index.php" class="btn-flotante">
                            < ATRAS </a>

                                <?php if (isset($_GET['action'])) :
                                    if ($_GET['action'] == "createUser") :

                                ?>

                                        <div class="row g-3 align-items-center">
                                            <div class="col-3">
                                                <label for="dni" class="col-form-label">DNI</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" name="dni" id="dni" class="form-control" aria-describedby="passwordHelpInline">
                                            </div>
                                        </div>

                                <?php
                                    endif;
                                endif;
                                ?>

                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="nombreUsuario" class="col-form-label">Nombre de usuario</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                            if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                                echo $cliente['nombre_usuario'];
                                                                                                                                                                            }else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                                echo $autor['nombre_usuario'];
                                                                                                                                                                            }
                                                                                                                                                                        } ?>">
                                    </div>
                                </div>

                                <?php

                                if (!isset($_SESSION['tipo'])) :

                                ?>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-3">
                                            <label for="contrasenya" class="col-form-label">Contraseña</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="password" name="contrasenya" id="contrasenya" class="form-control" aria-describedby="passwordHelpInline">
                                        </div>
                                    </div>

                                <?php

                                endif;

                                ?>

                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="nombre" class="col-form-label">Nombre propio</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="nombre" id="nombre" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                            if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                echo $cliente['nombre'];
                                                                                                                                                            }else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['nombre'];
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="apellido1" class="col-form-label">Apellido 1</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="apellido1" id="apellido1" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                        echo $cliente['apellido1'];
                                                                                                                                                                    }else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                        echo $autor['apellido1'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="apellido2" class="col-form-label">Apellido 2</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="apellido2" id="apellido2" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                        echo $cliente['apellido2'];
                                                                                                                                                                    }else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                        echo $autor['apellido2'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>">
                                    </div>
                                </div>


                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="correo" class="col-form-label">Correo</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="correo" id="correo" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                            if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                echo $cliente['correo'];
                                                                                                                                                            }else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['correo'];
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                    </div>
                                </div>


                                <div class="col-8 col-md-8">
                                    <div class="col-3">
                                        <label for="fotoPerfil" class="col-form-label">Imagen de perfil</label>
                                    </div>
                                    <input type="file" name="fotoPerfil" id="fotoPerfil" class="form-control" aria-label="file example" required value="<?php if (isset($_GET['action'])) {
                                                                                                                                                            if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                echo $cliente['fotoPerfil'];
                                                                                                                                                            }else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['fotoPerfil'];
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                    <div class="invalid-feedback">Es obligatorio</div>
                                </div>


                                <div class="col-8 col-md-8">
                                    <div class="col-3">
                                        <label for="presentacion" class="col-form-label">Presentación</label>
                                    </div>
                                    <textarea class="form-control" name="presentacion" id="presentacion" placeholder="Required example textarea" rows="4" cols="10" required><?php if (isset($_GET['action'])) {
                                                                                                                                                                                    if ($_GET['action'] == "editarPerfilCliente") {

                                                                                                                                                                                        echo $cliente['presentacion'];
                                                                                                                                                                                    }
                                                                                                                                                                                    else if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                                        echo $autor['presentacion'];
                                                                                                                                                                                    }
                                                                                                                                                                                } ?></textarea>
                                </div>


                                <?php

                                if (!isset($_SESSION['tipo'])) :

                                ?>

                                    <div class="col-6 col-md-6">
                                        <select class="form-select" size="2" name="clienteArtista" id="clienteArtista">
                                            <option class="cliente" value="cliente">Cliente</option>
                                            <option class="artista" value="artista">Artista</option>
                                        </select>
                                    </div>

                                <?php

                                endif;

                                ?>


                    </div>

                </div>

                <div class="col-3 col-sm-3 col-md-1"></div>

                <?php

                if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente") :

                ?>
                    <div class="col-12 col-sm-12 col-md-3 mt-5 mb-5 artistaMostrar" style="display:none;">

                        <?php

                    endif;

                    if (isset($_SESSION['tipo'])) :
                        if ($_SESSION['tipo'] == "artista") :

                        ?>

                            <div class="col-12 col-sm-12 col-md-3 mt-5 mb-5 ">

                        <?php

                        endif;
                    endif;

                        ?>

                        <div class="row g-3">

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="nombreArtistico" class="col-form-label">Nombre artístico</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="nombreArtistico" id="nombreArtistico" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                           if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['nombreArtistico'];
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                </div>
                            </div>

                            <div class="col-8 col-md-8 align-items-center">
                                <div class="col-3">
                                    <label for="tecnicas" class="col-form-label">Técnicas</label>
                                </div>
                                <textarea class="form-control" name="tecnicas" id="tecnicas" placeholder="Required example textarea" rows="10" cols="10" required><?php if (isset($_GET['action'])) {
                                                                                                                                                           if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['tecnicas'];
                                                                                                                                                            }
                                                                                                                                                        } ?></textarea>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="redSocial" class="col-form-label">Red social</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="redSocial" id="redSocial" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                           if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['redSocial'];
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="fechaComienzo" class="col-form-label">Fecha de comienzo</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="fechaComienzo" id="fechaComienzo" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                           if ($_GET['action'] == "editarPerfilAutor") {

                                                                                                                                                                echo $autor['fechaComienzo'];
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                </div>
                            </div>



                        </div>

                            </div>

                    </div>
                    <div class="col-6 offset-md-5 mt-5 mb-5">
                        <button class="btn btn-secondary" type="submit">Enviar</button>
                    </div>
        </form>

    </body>

    </html>

<?php

endif;

?>