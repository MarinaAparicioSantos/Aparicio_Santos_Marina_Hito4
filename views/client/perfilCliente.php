<?php
if (isset($_SESSION['tipo'])) :

    if ($_SESSION['tipo'] == "cliente") :

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalles cliente</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

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

                <a href="indexCli.php" class="btn-flotante">
                    < ATRAS </a>
                        <div class="border border-dark border-4 mt-5 mb-5">
                            <div class="row mt-5 mb-5">
                                <div class="col-12 col-sm-12 col-md-6" style="text-align: center;">

                                    <img class="productos" src="./images/<?php echo $cliente['fotoPerfil'] ?>" width="75%" height="75%" />
                                </div>

                                <div class=" col-12 col-sm-12 col-md-6">

                                    <div class="row g-5 mt-3 mb-3">

                                        <div class="col-12 col-sm-12 col-md-12">
                                            <h3><?php echo $cliente['nombre'] . " " . $cliente['apellido1'] . " " . $cliente['apellido2'] ?></h3>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12">
                                            <!-- calcularlo sumando la cantidad de reservas que haya hecho -->
                                            <h5>Cantidad de obras compradas</h5>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12">
                                            <h5><?php echo $cliente['presentacion']; ?></h5>
                                        </div>

                                        <div class=" col-12 col-sm-12 col-md-6">

                                            <div class="col-12 col-sm-12 col-md-12">
                                                <h5><?php echo $cliente['correo']; ?></h5>
                                            </div>

                                        </div>
                                        <div class=" col-12 col-sm-12 col-md-6">

                                            <a class="btn btn-primary mt-5" href=<?php echo 'index.php?controller=obras&action=editarPerfilCliente&id=' . $_SESSION['dni'] ?> role="button">Editar perfil</a>

                                        </div>
                                    </div>
                                </div>

                            </div>

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
endif;

?>