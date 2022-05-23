<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>

    <?php

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente" || $_SESSION['tipo'] == "artista") :

    ?>

        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                    <?php

                    if (isset($_SESSION['tipo'])) :

                    ?>
                        <a class="navbar-brand" href="index.php?controller=obras&action=index">Home</a>

                    <?php

                    endif;

                    if (!isset($_SESSION['tipo'])) :

                    ?>

                        <a class="navbar-brand" href="index.php?controller=usuarios&action=login">Home</a>

                    <?php

                    endif;

                    ?>
                </ul>

                <?php

                if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente") :

                ?>

                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=autores">Autores</a>
                        </li>

                    </ul>



                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=subastas">Subastas activas</a>
                        </li>

                    </ul>

                    <?php

                endif;



                if (isset($_SESSION['tipo'])) :

                    if ($_SESSION['tipo'] == "artista") :

                    ?>


                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href='index.php?controller=obras&action=misSubastas'>Mis subastas</a>
                            </li>

                        </ul>


                    <?php
                    endif;

                endif;


                if (isset($_SESSION['tipo'])) :

                    if ($_SESSION['tipo'] == "cliente") :

                    ?>

                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href=<?php echo 'index.php?controller=obras&action=perfilCliente&id=' . $_SESSION["dni"] ?>>Perfil</a>
                            </li>

                        </ul>

                    <?php
                    endif;

                endif;

                if (isset($_SESSION['tipo'])) :

                    if ($_SESSION['tipo'] == "artista") :

                    ?>

                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href=<?php echo 'index.php?controller=obras&action=perfilAutor&id=' . $_SESSION["dni"] ?>>Perfil</a>
                            </li>

                        </ul>

                    <?php
                    endif;

                endif;

                if (isset($_SESSION['tipo'])) :

                    if ($_SESSION['tipo'] == "artista") :

                    ?>

                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=crearObra">Crear obra</a>
                            </li>

                        </ul>

                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=crearSubasta">Crear subasta</a>
                            </li>

                        </ul>


                    <?php

                    endif;
                endif;

                if (isset($_SESSION['tipo'])) :

                    if ($_SESSION['tipo'] == "admin") :

                    ?>

                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=index">Obras</a>
                            </li>

                        </ul>

                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=adminClientes">Clientes</a>
                            </li>

                        </ul>

                    <?php

                    endif;
                endif;

                if (isset($_SESSION['tipo'])) :

                    ?>

                    <form class="d-flex">
                        <a type="button" class="btn btn-danger btn-lg" href="index.php?controller=usuarios&action=closeSession">Cerrar sesión</a>
                    </form>

                <?php
                endif;

                ?>

            </div>
        </nav>


        <!-- autor -->

        <div class="row mt-5 mb-5 align-items-center">

            <a href="indexArt.php" class="btn-flotante">
                < ATRAS </a>

                    <div class=" col-1 col-sm-1 col-md-1 mt-5 mb-5"></div>

                    <div class=" col-12 col-sm-12 col-md-3" style="text-align: center;">

                        <div class="border border-dark border-2">

                            <div class="row g-5 mt-3 mb-3">

                                <div class="col-12 col-sm-12 col-md-12">
                                    <h5><?php echo $autor['nombreArtistico']; ?></h5>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12">
                                    <h5><?php echo $autor['nombre'] . " " . $autor['apellido1'] . " " . $autor['apellido2'] ?></h5>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12">
                                    <!-- calcular con la fecha actual -->
                                    <h5>x años de experiencia</h5>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12">
                                    <h5>Técnicas: </h5>
                                    <?php echo $autor['tecnicas']; ?>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6">
                                    <h5><?php echo $autor['correo']; ?></h5>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6">
                                    <h5><?php echo $autor['redSocial']; ?></h5>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

                        <div class="row g-5" style="text-align: center;">

                            <div class="col-12 col-sm-12 col-md-12">
                                <img class="fotoAutor" width="300px" height="300px" src="images/<?php echo $autor['fotoPerfil'] ?>" />
                            </div>

                            <div class="col-12 col-sm-12 col-md-12">
                                <h5><?php echo $autor['presentacion']; ?></h5>

                                <?php

                                if (isset($_SESSION['tipo'])) :

                                    if ($_SESSION['tipo'] == "artista") :



                                ?>

                                        <a type="button" href=<?php echo 'index.php?controller=obras&action=editarPerfilAutor&id=' . $_SESSION['dni'] ?> class="btn btn-success btn-lg mt-5">Editar</a>

                                <?php

                                    endif;
                                endif;

                                ?>
                            </div>

                        </div>

                    </div>


                    <div class="col-12 col-sm-12 col-md-3 mt-5 mb-5">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php

                                $i = 0;
                                foreach ($obras as $obra) :

                                    $idObraPropia = $obra["id"];

                                    if ($i == 0) :
                                ?>

                                        <div class="carousel-item active">

                                        <?php endif;
                                    if ($i > 0) :

                                        ?>

                                            <div class="carousel-item">

                                            <?php

                                        endif;

                                            ?>

                                            <div class="container">

                                                <?php


                                                if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente") :


                                                ?>
                                                    <div class="mx-auto bg-secondary card" style="text-align: center; width: 23rem; height: 12rem;">

                                                        <?php

                                                    endif;


                                                    if (isset($_SESSION['tipo'])) :

                                                        if ($_SESSION['tipo'] == "artista") :

                                                        ?>
                                                            <div class="mx-auto bg-secondary card" style="text-align: center; width: 21rem; height: 25rem;">

                                                        <?php

                                                        endif;

                                                    endif;

                                                        ?>

                                                        <div class="card-body">


                                                            <?php


                                                            if (isset($_SESSION['tipo'])) :

                                                                if ($_SESSION['tipo'] == "artista") :

                                                            ?>
                                                                    <div class="row g-3">
                                                                        <div class="col-12 col-sm-12 col-md-12">
                                                                            <img class="fotoAutor" width="100px" height="100px" src="images/<?php echo $obra['fotoObra'] ?>" />
                                                                            <h5 class="titulo mt-3"><?php echo $obra['nombreObra'] ?></h5>
                                                                        </div>

                                                                        <div class="col-12 col-sm-12 col-md-12">
                                                                            <a class="btn btn-primary mt-5" href=<?php echo 'index.php?controller=obras&action=detallesObraPropia&id=' . $idObraPropia ?> role="button">Detalles</a>

                                                                            <a class="btn btn-success mt-5" href=<?php echo 'index.php?controller=obras&action=editarObra&id=' . $idObraPropia ?> role="button">Editar</a>

                                                                        </div>

                                                                        <div class="col-12 col-sm-12 col-md-12">

                                                                            <a class="btn btn-danger mt-5" href="" role="button">Eliminar</a>

                                                                        </div>
                                                                    </div>
                                                                <?php

                                                                endif;

                                                            endif;

                                                            if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente") :


                                                                ?>

                                                                <div class="row g-3 align-items-center">
                                                                    <div class="col-5 col-sm-5 col-md-5">
                                                                        <img class="fotoAutor" width="100px" height="100px" src="images/<?php echo $obra['fotoObra'] ?>" />
                                                                    </div>

                                                                    <div class="col-7 col-sm-7 col-md-7">
                                                                        <h5 class="titulo mt-3"><?php echo $obra['nombreObra'] ?></h5>
                                                                        <a class="btn btn-primary mt-5" href=<?php echo 'index.php?controller=obras&action=detallesObra&id=' . $idObraPropia ?> role="button">Detalles</a>
                                                                    </div>
                                                                </div>

                                                            <?php

                                                            endif;

                                                            ?>

                                                        </div>

                                                            </div>
                                                    </div>
                                            </div>


                                        <?php

                                        $i++;
                                    endforeach;

                                        ?>




                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>



                            </div>


                            <div class="container mt-5 mb-5">

                                <?php

                                if (isset($_SESSION['tipo'])) :

                                    if ($_SESSION['tipo'] == "cliente") :

                                ?>



                                        <div class="row col-12 col-md-12">

                                            <div class="col-2 col-sm-2 col-md-2 mt-5 mb-5 offset-md-1"></div>
                                            <div class="col-12 col-md-6 mt-5 mb-5 offset-md-1">

                                                <form class="row g-3 needs-validation form-register">

                                                    <div class="row g-3 align-items-center">
                                                        <div class="col-3">
                                                            <label for="valoracion" class="col-form-label">
                                                                <h5>Valoración</h5>
                                                            </label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <input type="number" id="valoracion" name="valoracion" class="form-control" aria-describedby="passwordHelpInline">
                                                        </div>
                                                    </div>



                                                    <div class="col-8 col-md-8">
                                                        <div class="col-3">
                                                            <label for="comentarios" class="col-form-label">Comentarios</label>
                                                        </div>
                                                        <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Required example textarea" rows="4" cols="10" required></textarea>
                                                    </div>

                                                    <div class="col-6 offset-md-5 mt-5 mb-5">
                                                        <button class="btn btn-secondary" type="submit">Enviar</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>

                                <?php

                                    endif;
                                endif;

                                ?>


                            </div>



                            <div class="col-2 col-md-2 mt-5 mb-5"></div>
                            <div class="col-8 col-md-8 mt-5 mb-5">

                                <table class="table table-striped">

                                    <tbody>
                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>

                                            <?php

                                            if (isset($_SESSION['tipo'])) :

                                                if ($_SESSION['tipo'] == "artista") :

                                            ?>
                                                    <td>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-3">
                                                                <label for="" class="col-form-label">
                                                                    <h5>Contestar comentario</h5>
                                                                </label>
                                                            </div>
                                                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" rows="4" cols="10" required></textarea>
                                                        </div>
                                                        <a class="btn btn-primary mt-5" href="" role="button">Enviar</a>
                                                        </form>
                                                    </td>
                                                    <td><a class="btn btn-danger mt-5" href="" role="button">Eliminar</a></td>

                                            <?php

                                                endif;
                                            endif;

                                            ?>
                                        </tr>

                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                            <?php

                                            if (isset($_SESSION['tipo'])) :

                                                if ($_SESSION['tipo'] == "artista") :

                                            ?>
                                                    <td>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-3">
                                                                <label for="" class="col-form-label">
                                                                    <h5>Contestar comentario</h5>
                                                                </label>
                                                            </div>
                                                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" rows="4" cols="10" required></textarea>
                                                        </div>
                                                        <a class="btn btn-primary mt-5" href="" role="button">Enviar</a>
                                                        </form>
                                                    </td>
                                                    <td><a class="btn btn-danger mt-5" href="" role="button">Eliminar</a></td>

                                            <?php

                                                endif;
                                            endif;

                                            ?>
                                        </tr>

                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                            <?php

                                            if (isset($_SESSION['tipo'])) :

                                                if ($_SESSION['tipo'] == "artista") :

                                            ?>
                                                    <td>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-3">
                                                                <label for="" class="col-form-label">
                                                                    <h5>Contestar comentario</h5>
                                                                </label>
                                                            </div>
                                                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" rows="4" cols="10" required></textarea>
                                                        </div>
                                                        <a class="btn btn-primary mt-5" href="" role="button">Enviar</a>
                                                        </form>
                                                    </td>
                                                    <td><a class="btn btn-danger mt-5" href="" role="button">Eliminar</a></td>

                                            <?php

                                                endif;
                                            endif;

                                            ?>
                                        </tr>

                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                            <?php

                                            if (isset($_SESSION['tipo'])) :

                                                if ($_SESSION['tipo'] == "artista") :

                                            ?>
                                                    <td>
                                                        <div class="col-8 col-md-8">
                                                            <div class="col-3">
                                                                <label for="" class="col-form-label">
                                                                    <h5>Contestar comentario</h5>
                                                                </label>
                                                            </div>
                                                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" rows="4" cols="10" required></textarea>
                                                        </div>
                                                        <a class="btn btn-primary mt-5" href="" role="button">Enviar</a>
                                                        </form>
                                                    </td>
                                                    <td><a class="btn btn-danger mt-5" href="" role="button">Eliminar</a></td>

                                            <?php

                                                endif;
                                            endif;

                                            ?>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>


                        <div class="row footer">

                            <div class="col-12 col-md-12 bg-secondary">
                                <h4 class="mt-4"></h4>
                            </div>
                        </div>

</body>

</html>

<?php

    endif;

?>