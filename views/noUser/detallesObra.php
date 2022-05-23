<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="login.js"></script>


</head>

<body>

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


    <div class="container col-10 g-2">

        <a href="index.php" class="btn-flotante">
            < ATRAS </a>
                <div class="border border-dark border-4 mt-5 mb-5">
                    <div class="row mt-5 mb-5">

                        <div class="col-12 col-sm-12 col-md-6" style="text-align: center;">

                            <img class="" src="./images/<?php echo $obra['fotoObra'] ?>" width="500px" height="500px" />

                        </div>

                        <div class=" col-12 col-sm-12 col-md-6">

                            <div class="col-12 col-sm-12 col-md-12">

                                <h1><?php echo $obra['nombreObra']; ?></h1>
                                <h4><?php echo $obra['nombreArtistico']; ?></h4>

                            </div>

                            <div class="row g-5">


                                <div class="row g-5">

                                    <div class="col-12 col-sm-12 col-md-6">
                                        <h5>Tipo de obra</h5>
                                        <?php echo $obra['tipoObra']; ?>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6">
                                        <h5>Inicio de creación</h5>
                                        <?php echo $obra['fechaInicio']; ?>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6">
                                        <h5>Dimensiones</h5>
                                        <?php echo $obra['dimensiones']; ?>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6">
                                        <h5>Fin de creación</h5>
                                        <?php echo $obra['fechaFin']; ?>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6">
                                        <h5>Materiales</h5>
                                        <?php echo $obra['materiales']; ?>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['tipo'])) :
                                        if ($_SESSION['tipo'] == "cliente") :
                                            if (isset($obraPuja['idPuja'])) :
                                    ?>
                                                <div class="col-12 col-sm-12 col-md-6">
                                                    <a class="btn btn-warning mt-5" href=<?php echo 'index.php?controller=obras&action=subastaObra&id=' . $obraPuja['idPuja'] ?> role="button">Pujar</a>
                                                </div>
                                    <?php

                                            endif;
                                        endif;
                                    endif;

                                    ?>
                                </div>
                            </div>
                        </div>

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


                        if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente") :

                            ?>

                            <div class="col-2 col-md-2 mt-5 mb-5"></div>
                            <div class="col-8 col-md-8 mt-5 mb-5">
                                <table class="table table-striped">

                                    <tbody>
                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                        </tr>

                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                        </tr>

                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                        </tr>

                                        <tr>
                                            <td>Cliente</td>
                                            <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        <?php

                        endif;

                        ?>


                    </div>

                </div>
    </div>

    <?php

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "artista" || $_SESSION['tipo'] == "cliente") :

    ?>

        <div class="row footer">

            <div class="col-12 bg-secondary">
                <h4 class="mt-4"></h4>
            </div>
        </div>

    <?php

    endif;

    ?>

</body>

</html>