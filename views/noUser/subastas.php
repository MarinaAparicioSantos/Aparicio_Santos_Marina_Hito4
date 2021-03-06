<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
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
                    <a type="button" class="btn btn-danger btn-lg" href="index.php?controller=usuarios&action=closeSession">Cerrar sesi??n</a>
                </form>

            <?php
            endif;

            ?>

        </div>
    </nav>



    <!-- autores -->

    <?php

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] == "cliente" || $_SESSION['tipo'] == "artista") :

    ?>

        <div class="row mt-5 mb-5">

            <?php

            foreach ($subastas as $subasta) :

                $idSubasta = $subasta["id"];

            ?>

                <div class="col-12 col-sm-12 col-md-6 mt-5 mb-5">

                    <?php

                    if (!isset($_SESSION['tipo'])) :

                    ?>

                        <div class="mx-auto bg-secondary card" style="text-align: center; width: 25rem; height: 15rem;">

                            <?php

                        endif;

                        if (isset($_SESSION['tipo'])) :

                            if ($_SESSION['tipo'] == "artista" || $_SESSION['tipo'] == "cliente") :
                            ?>

                                <div class="mx-auto bg-secondary card" style="text-align: center; width: 25rem; height: 18rem;">

                            <?php

                            endif;

                        endif;

                            ?>

                            <div class="card-body">

                                <div class="row g-3 align-items-center">
                                    <div class="col-5 col-sm-5 col-md-5">
                                        <img class="fotoObra" width="100px" height="100px" src="images/<?php echo $subasta['fotoObra'] ?>" />
                                    </div>

                                    <div class="col-7 col-sm-7 col-md-7">
                                        <h4 class="nombre mt-3"><?php echo $subasta['nombreObra'] ?></h4>
                                        <h5 class="autor mt-3"><?php echo $subasta['nombreArtistico'] ?></h5>
                                        <!-- calcular con la fecha actual -->
                                        <h5 class="tiempoTranscurrido mt-3">Tiempo transcurrido</h5>
                                        <h5 class="tiempoQueQueda mt-3">Tiempo que queda</h5>

                                        <?php

                                        if (isset($_SESSION['tipo'])) :

                                            if ($_SESSION['tipo'] == "cliente") :

                                        ?>
                                                <a class="btn btn-primary" href=<?php echo 'index.php?controller=obras&action=subastaObra&id=' . $idSubasta ?> type="submit">Pujar</a>

                                                

                                            <?php

                                            endif;

                                        endif;

                                        if (isset($_SESSION['tipo'])) :

                                            if ($_SESSION['tipo'] == "artista") :

                                            ?>

                                                <a class="btn btn-primary" href="" type="submit">Eliminar</a>
                                                <a class="btn btn-danger" href=<?php echo 'index.php?controller=obras&action=subastaObra&id=' . $idSubasta ?> type="submit">Detalles</a>

                                        <?php

                                            endif;

                                        endif;

                                        ?>

                                    </div>
                                </div>

                            </div>

                                </div>

                        </div>

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

<?php

    endif;

?>