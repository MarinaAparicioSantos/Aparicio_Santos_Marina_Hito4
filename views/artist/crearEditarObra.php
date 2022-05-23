<?php

if (isset($_SESSION['tipo'])) :
    if ($_SESSION['tipo'] == "artista") :

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Crear o editar obra</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        </head>

        <body>

            <div class="row col-12 col-md-12">

                <div class="col-2 col-sm-2 col-md-2 mt-5 mb-5 offset-md-1"></div>
                <div class="col-12 col-md-6 mt-5 mb-5 offset-md-1">
                    <form class="row g-3 needs-validation form-register" enctype="multipart/form-data" action=<?php if (isset($_GET['action'])) {
                                                                                                                    if ($_GET['action'] == "crearObra") {

                                                                                                                        echo "index.php?controller=obras&action=crearObra";
                                                                                                                    } elseif ($_GET['action'] == "editarObra") {

                                                                                                                        echo "index.php?controller=obras&action=editarObra&id=" . $_GET['id'];
                                                                                                                    }
                                                                                                                } ?> method="POST" novalidate>
                        <?php
                        if ($_GET['action'] == "crearObra") :

                        ?>
                            <h1>Crear obra nueva</h1>

                        <?php

                        endif;

                        if ($_GET['action'] == "editarObra") :

                        ?>
                            <h1>Editar obra</h1>

                        <?php

                        endif;

                        ?>

                        <a href="indexArt.php" class="btn-flotante">
                            < ATRAS </a>

                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="" class="col-form-label">Nombre de la obra</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="nombreObra" id="nombreObra" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['nombreObra'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>">
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Dimensiones</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="dimensiones" id="dimensiones" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['dimensiones'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Materiales</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="materiales" id="materiales" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['materiales'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Fecha de inicio</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control" aria-describedby="passwordHelpInline" value=<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['fechaInicio'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>>
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Fecha de fin</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" name="fechaFin" id="fechaFin" class="form-control" aria-describedby="passwordHelpInline" value=<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['fechaFin'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>>
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Tipo de obra</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="tipoObra" id="tipoObra" class="form-control" aria-describedby="passwordHelpInline" value="<?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['tipoObra'];
                                                                                                                                                                    }
                                                                                                                                                                } ?>">
                                        </div>
                                    </div>


                                    <div class="col-8 col-md-8">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Imagen de la obra</label>
                                        </div>
                                        <input type="file" name="fotoObra" id="fotoObra" class="form-control" aria-label="file example" required>
                                        <div class="invalid-feedback"><?php echo $errorImagen ?></div>
                                    </div>


                                    <div class="col-8 col-md-8">
                                        <div class="col-3">
                                            <label for="" class="col-form-label">Descripcion</label>
                                        </div>
                                        <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Required example textarea" rows="4" cols="10" required><?php if (isset($_GET['action'])) {
                                                                                                                                                                    if ($_GET['action'] == "editarObra") {

                                                                                                                                                                        echo $obraEditar['descripcion'];
                                                                                                                                                                    }
                                                                                                                                                                } ?></textarea>
                                    </div>

                                    <div class="col-6 offset-md-5 mt-5 mb-5">
                                        <button class="btn btn-secondary" type="submit">Enviar</button>
                                    </div>
                    </form>

                </div>

            </div>

        </body>

        </html>

<?php

    endif;
endif;

?>