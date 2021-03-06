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
                    if ($_SESSION['tipo'] == "cliente" || $_SESSION['tipo'] == "artista") :


                ?>
                        <a class="navbar-brand" href="index.php?controller=obras&action=index">Home</a>

                    <?php
                    endif;

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
                    <a type="button" class="btn btn-danger btn-lg" href="index.php?controller=usuarios&action=closeSession">Cerrar sesi??n</a>
                </form>

            <?php
            endif;

            if (!isset($_SESSION['tipo'])) :

            ?>

                <form class="d-flex">
                    <button type="button" class="btn btn-danger btn-lg loginButton">Iniciar sesi??n</button>

                </form>

            <?php
            endif;
            ?>

        </div>
    </nav>

    <br>

    <div class="row">
        <div class="col-3 col-sm-3 col-md-9"></div>
        <div class="col-3 col-sm-3 col-md-3 login" style="display: none;">

            <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

                <div class="mx-auto bg-secondary card" style="text-align: center; width: 18rem;">

                    <div class="card-body">
                        <form class="row g-3 needs-validation" method="POST" action="index.php?controller=usuarios&action=login">

                            <h3>Inicio de sesi??n</h3>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Nombre de usuario</label>
                                </div>
                                <div class="col-auto">
                                    <input name="user" type="text" id="b" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Contrase??a</label>
                                </div>
                                <div class="col-auto">
                                    <input name="pass" type="password" id="c" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                            <input class="btn btn-primary" type="submit" role="button"></input>
                            <span><?php echo $error, $usuarioError; ?></span>
                        </form>

                        <a class="" href="index.php?controller=obras&action=createUser">
                            <p class="text-dark">??No tienes cuenta?</p>
                            <p class="text-dark">Reg??strate aqu??.</p>
                        </a>

                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- Carrusel -->

    <?php


    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "artista" || $_SESSION['tipo'] == "cliente") :


    ?>

        <div class="container col-12 col-sm-12 col-md-6 mt-5 mb-5">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($obras as $obraArt) :

                        if ($i == 0) :
                    ?>

                            <div class="carousel-item active">

                            <?php endif;
                        if ($i > 0) :

                            ?>

                                <div class="carousel-item">

                                <?php

                            endif;
                            //if ($i < 3) :
                            $verificar = false;

                                ?>


                                <div class="container">
                                    <img src="images\<?php echo $obraArt['fotoObra'] ?>" class="d-block w-100 rounded-3" width="500px" height="500px">
                                    <div class="carousel-caption text-start">
                                        <h1><?php echo $obraArt['nombreObra'] ?></h1>
                                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                                    </div>
                                </div>
                                </div>

                            <?php
                            //endif;

                            $i++;
                        endforeach;
                            ?>



                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                </div>
            </div>
        </div>

    <?php

    endif;

    ?>

    <!-- Catalogo -->

    <div class="row productosFila1">

        <?php

        foreach ($obras as $obra) :

            $idObra = $obra["id"];

        ?>
            <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

                <div class="mx-auto bg-secondary card" style="text-align: center; width: 18rem;">

                    <div class="card-body">
                        <img class="productos" width="200px" height="200px" src="images/<?php echo $obra['fotoObra'] ?>" />

                        <h5 class="titulo mt-3"><?php echo $obra['nombreObra'] ?></h5>

                        <h5><span class="rebajas mt-3"><?php echo $obra['nombreArtistico'] ?></span></h5>
                        <?php

                        if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente" || $_SESSION['tipo'] == "artista") :

                        ?>

                            <a class="btn btn-primary" href=<?php echo 'index.php?controller=obras&action=detallesObra&id=' . $idObra ?> role="button">Detalles</a>

                        <?php

                        endif;

                        if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") :

                        ?>

                            <a class="btn btn-danger" href="" role="button">Eliminar</a>
                        <?php

                        endif;

                        ?>
                    </div>
                </div>

            </div>

            <br>

        <?php

        endforeach;

        ?>


    </div>


    <div class="row footer">

        <div class="col-12 bg-secondary">
            <h4 class="mt-4"></h4>
        </div>
    </div>

</body>

</html>