<?php

    include ("conexionBD.php");

    if (isset($_POST["ingreso"]))
    {

        $id = $_GET['id'];

        $placa = $_POST["placaingreso"];
        $nombre = $_POST["nombreingreso"];
        $modelo = $_POST["modeloingreso"];
        $color = $_POST["coloringreso"];
        $fecha = $_POST["fechaingreso"];
        $hora = $_POST["horaingreso"];
        $mensualidad = $_POST["mensualidadingreso"];

        
        $disponible2;

        if (!empty($placa))

        {
            $disponible2 = "no";
        }

        if ($mensualidad == 'si')
        {

            echo'<script type="text/javascript">
            alert("Slot reservado, no se puede ingresar");
            window.location.href="index.php";
            </script>';

        }
        else
        {

            $transaccion = new conexionBD();


            $consultasql = "UPDATE mensualidad SET disponible='$disponible2', placa='$placa', color='$color', modelo='$modelo', nombreConductor='$nombre',  fechaingreso='$fecha', horaingreso='$hora' WHERE idslot = '$id'";
        
        
            $transaccion -> editarslot($consultasql);
        
            header("location:index.php");

        }
    }

?>