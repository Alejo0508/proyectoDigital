<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Lista de regulares</title>
</head>

<body class="body">
    <header>
        <nav class="navbar navbar-dark  bg-primary">
            <a class="navbar-brand" href="index.php">
                <img src="img\coche-estacionado.png" width="30" height="30" class="d-inline-block align-top" alt=""
                    loading="lazy">
                listado de ingresos regulares
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

    $consultasql = "SELECT * FROM mensualidad WHERE contratomensual = 'no'";

    $mensualidad = $transaccion -> lista($consultasql);

?>

            <h2 class="titulolistamensual">Estos slots NO tienen contrato mensual en el parqueadero</h2>

            <div class="container">

                <div class="row row-cols-1 row-cols-md-3">

                    <?php foreach($mensualidad as $mensualidades): ?>

                    <div class="col mb-4">
                        <div class="card h-100 bordediv">
                            <div class="card-body">
                                <h5 class="card-title">Nombre: <?php echo ($mensualidades["nombreConductor"]) ?></h5>
                                <p class="card-text">Placa: <?php echo ($mensualidades["placa"]) ?></p>
                                <p class="card-text">Modelo: <?php echo ($mensualidades["modelo"]) ?></p>
                                <p class="card-text">Color: <?php echo ($mensualidades["color"]) ?></p>
                                <p class="card-text">Slot: <?php echo ($mensualidades["idslot"]) ?></p>
                                <p class="card-text">Mensualidad: <?php echo ($mensualidades["contratomensual"]) ?></p>
                            </div>
                        </div>
                    </div>

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