<?php

    include ("conexionBD.php");

    
    if (isset($_POST["guardar"]))
    {

        $id = $_POST['slotsalida'];
        $placa = $_POST['placasalida'];
        $nombre = $_POST['nombresalida'];
        $color = $_POST['colorsalida'];
        $modelo = $_POST['modelosalida'];
        $fecha = $_POST['fechaingreso2'];
        $hora = $_POST['horaingreso2'];

        $fechasalida = $_POST['fechasalida'];
        $horasalida = $_POST['horasalida'];

        $mensualidad = $_POST['mensaulidadsalida'];

        $valor = $_POST['valorpago'];

        $transaccion = new conexionBD(); 

        $consultasql = "INSERT INTO pagos (placa, color, modelo, nombreConductor, fechaingreso, horaingreso, fechasalida, horasalida, contratomensual, valor) VALUES ('$placa', '$color', '$modelo', '$nombre', '$fecha' , '$hora', '$fechasalida', '$horasalida', '$mensualidad', '$valor')";
    
        $transaccion -> agregaringreso($consultasql);

        echo'<script type="text/javascript">
    alert("Registro guardado");
    window.location.href="index.php";
    </script>';

    }



    if (isset($_POST["salida"]))
    {

        $id = $_GET['id'];

        $placa = $_POST['placasalida'];
        $nombre = $_POST['nombresalida'];
        $color = $_POST['colorsalida'];
        $modelo = $_POST['modelosalida'];
        $fecha = $_POST['fechaingreso2'];
        $hora = $_POST['horaingreso'];


        if (empty($placa))

        {
            $disponible2 = "si";
        }
        

        $transaccion = new conexionBD();

        $consultasql = "UPDATE mensualidad SET disponible='$disponible2', placa='$placa', color='$color', modelo='$modelo', nombreConductor='$nombre',  fechaingreso='$fecha', horaingreso='$hora' WHERE idslot = '$id'";
    
    
        $transaccion -> editarslot($consultasql);

        echo'<script type="text/javascript">
        alert("Salida exitosa");
        window.location.href="index.php";
        </script>';

    }

?>