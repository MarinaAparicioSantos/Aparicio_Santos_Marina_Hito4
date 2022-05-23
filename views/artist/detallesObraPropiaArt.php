<?php

if (isset($_SESSION['tipo'])) :
    if ($_SESSION['tipo'] == "cliente" || $_SESSION['tipo'] == "artista") :

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalles de la obra</title>
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

                <a href="index.php?controller=obras&action=index" class="btn-flotante">
                    < ATRAS </a>
                        <div class="border border-dark border-4 mt-5 mb-5">
                            <div class="row mt-5 mb-5">
                                <div class="col-12 col-sm-12 col-md-6" style="text-align: center;">

                                    <img class="productos" src="./images/<?php echo $miObra['fotoObra'] ?>" width="500px" height="500px" />

                                </div>

                                <div class=" col-12 col-sm-12 col-md-6">

                                    <div class="row g-5">

                                        <h3><?php echo $miObra['nombreObra'] ?></h3>
                                        <h4><?php echo $miObra['nombreArtistico'] ?></h4>

                                        <div class="row g-5">

                                            <h5>Valoración: </h5>

                                            <div class="col-12 col-sm-12 col-md-6">
                                                <h5>Tipo de obra: </h5>
                                                <?php echo $miObra['tipoObra'] ?>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-6">
                                                <h5>Inicio de creación: </h5>
                                                <?php echo $miObra['fechaInicio'] ?>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-6">
                                                <h5>Dimensiones: </h5>
                                                <?php echo $miObra['dimensiones'] ?>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-6">
                                                <h5>Fin de creación: </h5>
                                                <?php echo $miObra['fechaFin'] ?>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-6">
                                                <h5>Materiales: </h5>
                                                <?php echo $miObra['materiales'] ?>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-6">
                                                <a class="btn btn-primary mt-5 btn-lg" href=<?php echo 'index.php?controller=obras&action=editarObra&id=' . $_GET['id'] ?> role="button">Editar</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!--                                 <div class=" col-12 col-sm-12 col-md-4">

                                    <div class="row g-5">

                                        <div class="col-12 col-sm-12 col-md-12">

                                            <h5>Valoración: </h5>


                                            <form>
                                                <p class="clasificacion">

                                                    <label for="radio1">★</label>

                                                    <label for="radio2">★</label>

                                                    <label for="radio3">★</label>

                                                    <label for="radio4">★</label>

                                                    <label for="radio5">★</label>
                                                </p>
                                            </form>

                                        </div>

                                    </div>

                                </div> -->

                                <div class="col-2 col-md-2 mt-5 mb-5"></div>
                                <div class="col-8 col-md-8 mt-5 mb-5">
                                    <table class="table table-striped">

                                        <tbody>
                                            <tr>
                                                <td>Cliente</td>
                                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
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
                                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                                            </tr>

                                            <tr>
                                                <td>Cliente</td>
                                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
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
                                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                                            </tr>

                                            <tr>
                                                <td>Cliente</td>
                                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
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
                                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                                            </tr>

                                            <tr>
                                                <td>Cliente</td>
                                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
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
                                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <div class="row footer">

                            <div class="col-12 bg-secondary mt-5">
                                <h4 class="mt-4"></h4>
                            </div>
                        </div>

        </body>

        </html>

<?php

    endif;

endif;
?>