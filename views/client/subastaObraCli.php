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
            <title>Subasta</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        </head>

        <body>

            <div class="container col-12 col-sm-12 col-md-12 g-2">

                <a href="index.php?controller=obras&action=index" class="btn-flotante">
                    < ATRAS </a>

                        <h1 style="text-align: center;">Subasta de la obra <?php echo " " . $subasta['nombreObra'] ?></h1>

                        <div class="row mt-5 mb-5">

                            <div class="col-12 col-sm-12 col-md-3" style="text-align: center;">

                                <div class="row g-5 mt-3 mb-3">

                                    <img class="imagenPuja" src="./images/<?php echo $subasta['fotoObra'] ?>" width="50%" height="50%" />

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h1><?php echo $subasta['nombreObra'] ?></h1>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h2><?php echo $subasta['nombreArtistico'] ?></h2>
                                    </div>

                                </div>

                            </div>

                            <div class=" col-12 col-sm-12 col-md-6" style="text-align: center;">

                                <div class="row g-5 mt-3 mb-3">

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="border border-dark border-2">
                                            Contador tiempo restante
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="border border-dark border-2">
                                            Contador personas
                                        </div>
                                    </div>

                                    <div class=" col-12 col-sm-12 col-md-6">
                                        <div class="border border-dark border-2">
                                            Precio inicial:
                                            <?php echo $subasta['precioInicial'] . "€" ?>
                                        </div>
                                    </div>

                                    <div class=" col-12 col-sm-12 col-md-6">
                                        <div class="border border-dark border-2">
                                            Precio actual
                                        </div>
                                    </div>

                                    <?php

                                    if (isset($_SESSION['tipo'])) :

                                        if ($_SESSION['tipo'] == "cliente") :
                                    ?>

                                            <form class="row g-3 needs-validation" novalidate>
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-3 col-md-3">
                                                        <label for="" class="col-form-label">Proponer precio</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="number" id="g" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-4 col-sm-4 col-md-4"></div>
                                                <div class="col-3 col-sm-3 col-md-3">
                                                    <a class="btn btn-primary mt-5" href="" role="button">Enviar</a>
                                                </div>
                                            </form>

                                    <?php

                                        endif;
                                    endif;
                                    ?>


                                </div>
                            </div>



                            <div class=" col-12 col-sm-12 col-md-2" style="text-align: center;">

                                <div class="row g-5 mt-3 mb-3">

                                    <div class=" col-12 col-sm-12 col-md-6">
                                        <div class="border border-dark border-2">
                                            Inicio subasta: 
                                            <?php echo $subasta['fechaInicioSubasta'] ?>
                                        </div>
                                    </div>

                                    <div class=" col-12 col-sm-12 col-md-6">
                                        <div class="border border-dark border-2">
                                            Fin subasta:
                                            <?php echo $subasta['fechaFinSubasta'] ?>
                                        </div>
                                    </div>

                                    <?php

                                    if (isset($_SESSION['tipo'])) :

                                        if ($_SESSION['tipo'] == "cliente") :
                                    ?>
                                            <div class=" col-12 col-sm-12 col-md-12">

                                                <a class="btn btn-primary mt-5 btn-lg" href="index.php?controller=obras&action=reservaObra" role="button">Reservar obra</a>

                                            </div>

                                        <?php

                                        endif;
                                    endif;

                                    if (isset($_SESSION['tipo'])) :

                                        if ($_SESSION['tipo'] == "artista") :

                                        ?>

                                            <div class=" col-12 col-sm-12 col-md-12">

                                                <a class="btn btn-primary mt-5 btn-lg" href="index.php?controller=obras&action=editarSubasta" role="button">Editar puja</a>

                                            </div>

                                    <?php

                                        endif;
                                    endif;

                                    ?>
                                </div>
                            </div>
                        </div>
            </div>
            </div>
        </body>

        </html>

<?php

    endif;
endif;
?>