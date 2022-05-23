<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrar obras</title>
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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=index">Obras</a>
                </li>

            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?controller=obras&action=adminClientes">Clientes</a>
                </li>

            </ul>
            <form class="d-flex">
                <button type="button" class="btn btn-danger btn-lg">Cerrar sesión</button>
            </form>

        </div>
    </nav>

    <br>

    <a href="obrasAdm.php" class="btn-flotante">
        < ATRAS </a>
            <div class="row">

                <div class="col-2 col-sm-2 col-md-2 mt-5 mb-5"></div>

                <div class="col-8 col-sm-8 col-md-8 mt-5 mb-5">

                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Cliente</td>
                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                            </tr>

                            <tr>
                                <td>Cliente</td>
                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                            </tr>

                            <tr>
                                <td>Cliente</td>
                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                            </tr>

                            <tr>
                                <td>Cliente</td>
                                <td>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur esse ipsum, ullam vel quam laborum culpa sunt accusamus, saepe quia iusto facere inventore! Ad itaque eum atque iusto vel?</td>
                                <td><a class="btn btn-danger mt-5" href="detallesObra.php" role="button">Eliminar</a></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="row footer">

                <div class="col-12 bg-secondary">
                    <h4 class="mt-4"></h4>
                </div>
            </div>

</body>

</html>