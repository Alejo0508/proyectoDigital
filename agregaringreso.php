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


        
    if (isset($_POST["registrar"]))
    {

        $slotreg = $_POST['slotregistro'];
        $placareg = $_POST['placaregistro'];
        $nombrereg = $_POST['nombreregistro'];
        $colorreg = $_POST['colorregistro'];
        $modeloreg = $_POST['modeloregistro'];
        $fechareg = $_POST['fechaingresoregistro'];
        $horareg = $_POST['horaingresoregistro'];

        if (!empty($placareg))

        {
            $disponiblereg = "no";
            $mensualidadreg = "si";
        }


        $transaccion = new conexionBD(); 

        $consultasql = "UPDATE mensualidad SET disponible='$disponiblereg', placa='$placareg', color='$colorreg', modelo='$modeloreg', nombreConductor='$nombrereg',  fechaingreso='$fechareg', horaingreso='$horareg', contratomensual='$mensualidadreg' WHERE idslot = '$slotreg'";
        
        
        $transaccion -> editarslot($consultasql);

            echo'<script type="text/javascript">
            alert("Mensualidad registrada");
            window.location.href="index.php";
            </script>';

            header("location:index.php");

    }


?>