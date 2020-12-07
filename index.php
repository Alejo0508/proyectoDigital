<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Parqueadero</title>
</head>

<body class="body">
    <header>
        <nav class="navbar navbar-dark  bg-primary">
            <a class="navbar-brand" href="index.php">
                <img src="img\coche-estacionado.png" width="30" height="30" class="d-inline-block align-top" alt=""
                    loading="lazy">
                Parqueadero
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

            <div class="container  ">
                <div class="row justify-content-center ">

                    <div class="col-8 justify-content-center ">

                        <a href="listamensualidad.php" class="btn btn-info mb-2" active" role="button"
                            aria-pressed="true">Listado de mensualidad</a>

                        <a href="listadoregulares.php" class="btn btn-info mb-2" active" role="button"
                            aria-pressed="true">Listado regulares</a>

                        <a href="listadisponibilidad.php" class="btn btn-info mb-2" active" role="button"
                            aria-pressed="true">Lista por disponibilidad</a>

                        <a href="historicodepagos.php" class="btn btn-info mb-2" active" role="button"
                            aria-pressed="true">Historico de pagos</a>
                    </div>
                </div>
            </div>



            <?php

                include ("conexionBD.php");

                $transaccion = new conexionBD();

                $consultasql = "SELECT * FROM mensualidad WHERE 1";

                $mensualidad = $transaccion -> lista($consultasql);

                date_default_timezone_set("America/Bogota");
                $fecha_ingreso=date("Y-m-d");
                $hora_ingreso=date("H:i");

            ?>

            <br>

            <h2 class="titulolistamensual">Estos vehiculos tienen contrato mensual en el parqueadero</h2>

            <div class="container">

                <div class="row row-cols-1 row-cols-md-3 ">

                    <?php foreach($mensualidad as $mensualidades): ?>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <div class="card-body bordediv" id="card">
                                <h5 class="card-title">Nombre: <?php echo ($mensualidades["nombreConductor"]) ?></h5>
                                <p class="card-text">Placa: <?php echo ($mensualidades["placa"]) ?></p>
                                <p class="card-text">Modelo: <?php echo ($mensualidades["modelo"]) ?></p>
                                <p class="card-text">Color: <?php echo ($mensualidades["color"]) ?></p>
                                <p class="card-text">Slot: <?php echo ($mensualidades["idslot"]) ?></p>
                                <p class="card-text">Disponible: <?php echo ($mensualidades["disponible"]) ?></p>
                                <p class="card-text" id="cardnombre">Mensualidad:
                                    <?php echo ($mensualidades["contratomensual"]) ?></p>
                                <p class="card-text">Hora de ingreso: <?php echo ($mensualidades["horaingreso"]) ?></p>
                                <p class="card-text">Fecha de ingreso: <?php echo ($mensualidades["fechaingreso"]) ?>
                                </p>



                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#ingresar<?php echo ($mensualidades["idslot"])?>">
                                    Ingreso
                                </button>

                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#salida<?php echo ($mensualidades["idslot"])?>">
                                    Salida
                                </button>


                            </div>

                            <div class="modal fade" id="ingresar<?php echo ($mensualidades["idslot"])?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ingreso</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <form
                                                action="agregaringreso.php?id=<?php echo ($mensualidades["idslot"]) ?>"
                                                method="POST">

                                                <div class="form-group">
                                                    <label>Nombre: </label>
                                                    <input type="text" class="form-control" name="nombreingreso"
                                                        value="<?php echo ($mensualidades["nombreConductor"]) ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Placa: </label>
                                                    <input type="text" class="form-control" name="placaingreso"
                                                        value="<?php echo ($mensualidades["placa"]) ?>">
                                                </div>


                                                <div class="form-group">
                                                    <label>Modelo: </label>
                                                    <input type="text" class="form-control" name="modeloingreso"
                                                        value="<?php echo ($mensualidades["modelo"]) ?>">
                                                </div>


                                                <div class="form-group">
                                                    <label>Color: </label>
                                                    <input type="text" class="form-control" name="coloringreso"
                                                        value="<?php echo ($mensualidades["color"]) ?>">
                                                </div>

                                                <div class="container">
                                                    <div class="row justify-content-around col-mb-6">

                                                        <div class="form-group ">
                                                            <label>Mensualidad: </label>
                                                            <input type="text" class="form-control "
                                                                name="mensualidadingreso"
                                                                value="<?php echo ($mensualidades["contratomensual"])?>"
                                                                readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Slot: </label>
                                                            <input type="text" class="form-control" name="slotingreso"
                                                                value="<?php echo ($mensualidades["idslot"])?>"
                                                                readonly>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="container">
                                                    <div class="row justify-content-around col-mb-6">


                                                        <div class="form-group">
                                                            <label>Fecha: </label>
                                                            <input type="text" class="form-control" name="fechaingreso"
                                                                value="<?php echo ($fecha_ingreso) ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Hora: </label>
                                                            <input type="text" class="form-control" name="horaingreso"
                                                                value="<?php echo ($hora_ingreso) ?>">
                                                        </div>

                                                    </div>
                                                </div>


                                                <button type="submit" class="btn btn-primary justify-content-center"
                                                    name="ingreso">Ingreso</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="salida<?php echo ($mensualidades["idslot"])?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Salida</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">



                                            <script>
                                            function limpia(elemento) {
                                                elemento.value = "";
                                            }
                                            </script>



                                            <form action="agregarsalida.php?id=<?php echo ($mensualidades["idslot"])?>"
                                                method="POST" target="pp">

                                                <div class="form-group">
                                                    <label>Nombre: </label>
                                                    <input type="text" class="form-control" name="nombresalida"
                                                        value="<?php echo ($mensualidades["nombreConductor"]) ?>"
                                                        onclick="javascript: limpia(this);"
                                                        onBlur="javascript: verifica(this);">
                                                </div>

                                                <div class="form-group">
                                                    <label>Placa: </label>
                                                    <input type="text" class="form-control" name="placasalida"
                                                        value="<?php echo ($mensualidades["placa"]) ?>"
                                                        onclick="javascript: limpia(this);"
                                                        onBlur="javascript: verifica(this);">
                                                </div>


                                                <div class="form-group">
                                                    <label>Modelo: </label>
                                                    <input type="text" class="form-control" name="modelosalida"
                                                        value="<?php echo ($mensualidades["modelo"]) ?>"
                                                        onclick="javascript: limpia(this);"
                                                        onBlur="javascript: verifica(this);">
                                                </div>


                                                <div class="form-group">
                                                    <label>Color: </label>
                                                    <input type="text" class="form-control" name="colorsalida"
                                                        value="<?php echo ($mensualidades["color"]) ?>"
                                                        onclick="javascript: limpia(this);"
                                                        onBlur="javascript: verifica(this);">
                                                </div>

                                                <div class="container">
                                                    <div class="row justify-content-around col-mb-6">

                                                        <div class="form-group ">
                                                            <label>Mensualidad: </label>
                                                            <input type="text" class="form-control "
                                                                name="mensaulidadsalida"
                                                                value="<?php echo ($mensualidades["contratomensual"])?>"
                                                                readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Slot: </label>
                                                            <input type="text" class="form-control" id="slotsalida"
                                                                name="slotsalida"
                                                                value="<?php echo ($mensualidades["idslot"])?>"
                                                                readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Disponible: </label>
                                                            <input type="text" class="form-control"
                                                                id="disponiblesalida" name="disponiblesalida"
                                                                value="<?php echo ($mensualidades["disponible"])?>"
                                                                readonly>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class="container">
                                                    <div class="row justify-content-around col-mb-6">

                                                        <div class="form-group">
                                                            <label>Fecha Ingreso: </label>
                                                            <input type="text" class="form-control" name="fechaingreso2"
                                                                value="<?php echo ($mensualidades["fechaingreso"])?>"
                                                                onclick="javascript: limpia(this);"
                                                                onBlur="javascript: verifica(this);">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Hora Ingreso: </label>
                                                            <input type="text" class="form-control" name="horaingreso2"
                                                                value="<?php echo ($mensualidades["horaingreso"])?>"
                                                                onclick="javascript: limpia(this);"
                                                                onBlur="javascript: verifica(this);">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="container">
                                                    <div class="row justify-content-around col-mb-6">

                                                        <div class="form-group ">
                                                            <label>Fecha Salida: </label>
                                                            <input type="text" class="form-control " name="fechasalida"
                                                                value="<?php echo ($fecha_ingreso) ?>"
                                                                onclick="javascript: limpia(this);"
                                                                onBlur="javascript: verifica(this);">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Hora Salida: </label>
                                                            <input type="text" class="form-control" name="horasalida"
                                                                value="<?php echo ($hora_ingreso) ?>"
                                                                onclick="javascript: limpia(this);"
                                                                onBlur="javascript: verifica(this);">
                                                        </div>

                                                    </div>
                                                </div>


                                                <?php
        
                                                $horaentradapag = strtotime ($mensualidades["horaingreso"]);
                                                $horasalidapag = strtotime ($hora_ingreso);

                                                $totahoras = ($horasalidapag - $horaentradapag) / 60 ;

                                                $horas = number_format($totahoras, 1, '.', '');

                                                
                                                if (($mensualidades["contratomensual"]) == 'si')
                                                {
                                                    $totalpago = 0;
                                                }
                                                else
                                                {
                                                    $totalpago = $horas * 1000; 
                                                }

                                                ?>

                                                <div class="container">
                                                    <div class="row justify-content-around col-mb-6">

                                                        <div class="form-group">
                                                            <label>Valor a pagar: </label>
                                                            <input type="text" class="form-control" name="valorpago"
                                                                value="<?php echo ($totalpago) ?>"
                                                                onclick="javascript: limpia(this);"
                                                                onBlur="javascript: verifica(this);">
                                                        </div>

                                                    </div>
                                                </div>



                                                <button type="submit" class="btn btn-primary"
                                                    name="salida">Salida</button>

                                                <button type="submit" class="btn btn-primary"
                                                    name="guardar">Guardar</button>

                                            </form>
                                            <iframe name="pp" style="position:absolute; top:-1500px;"></iframe>
                                        </div>

                                    </div>
                                </div>
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