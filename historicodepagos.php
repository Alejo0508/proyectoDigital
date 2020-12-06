<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Lista de usuarios de pago mensual</title>
</head>

<body class="body">
    <header>
        <nav class="navbar navbar-dark  bg-primary">
            <a class="navbar-brand" href="index.php">
                <img src="img\coche-estacionado.png" width="30" height="30" class="d-inline-block align-top" alt=""
                    loading="lazy">
                Historico de pagos
            </a>
        </nav>
    </header>

    <main>

        <br>
        <div class="container ">
            <div class="row">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img\banner.jpg" class="d-block w-100 banner" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        </header>

        <main>

            <?php

    include ("conexionBD.php");

    $transaccion = new conexionBD();

    $consultasql = "SELECT * FROM pagos WHERE 1";

    $mensualidad = $transaccion -> lista($consultasql);

?>

            <h2 class="titulolistamensual">Historico de pagos y uso del parqueadero</h2>

            <div class="container">

                <div class="row row-cols-1 row-cols-md-4 margeningreso">

                    <?php foreach($mensualidad as $mensualidades): ?>

                    <ul class="list-group bordediv fwefwg margeningreso">
                        <h5 class="list-group-item tab-pane fade show active">Ref pago: <?php echo ($mensualidades["idcarro"]) ?></h5>
                        <li class="list-group-item">Nombre: <?php echo ($mensualidades["nombreConductor"]) ?></li>
                        <li class="list-group-item">Placa: <?php echo ($mensualidades["placa"]) ?></li>
                        <li class="list-group-item">Modelo: <?php echo ($mensualidades["modelo"]) ?></li>
                        <li class="list-group-item">Color: <?php echo ($mensualidades["color"]) ?></li>
                        <li class="list-group-item">Mensualidad: <?php echo ($mensualidades["contratomensual"]) ?></li>
                        <li class="list-group-item">Valor pagado: <?php echo ($mensualidades["valor"]) ?></li>
                    </ul>

                    <?php endforeach ?>

                </div>

            </div>


        </main>

        <footer>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/e4f0235d6c.js" crossorigin="anonymous"></script>
</body>

</html>