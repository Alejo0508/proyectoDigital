<?php

class conexionBD{

    public $usuariobd = "root";
    public $passwordbd = "";


    public function __construct(){}


    public function conectarbd(){

        $infobd = "mysql:host=localhost;port=3307;dbname=parqueadero";

        try{

            $conexionbd = new PDO($infobd, $this->usuariobd, $this->passwordbd);
            return ($conexionbd);

        }catch(PDOException $error){

            echo ($error->getMessage());

        }

    }

    public function lista($consultasql){

        $conexionbd = $this -> conectarbd();

        $consultaMensualidad = $conexionbd -> prepare ($consultasql);

        $consultaMensualidad -> setFetchMode (PDO::FETCH_ASSOC);

        $resultado = $consultaMensualidad -> execute();

        return ($consultaMensualidad -> fetchALL());


    }


    public function agregaringreso($consultasql){

       $conexionbd = $this -> conectarbd();
       
       $agregarDatos = $conexionbd -> prepare ($consultasql);

       $resultado = $agregarDatos -> execute();

       if ($resultado)
       {
     
        echo ("se agrego el registro con exito");

        }
        else
        {

        echo ("error agregando");

        }


    }

    public function editarslot($consultasql){

        // 1. establecer conexion con la bd

        $conexionbd = $this -> conectarbd();

        // 2. preparar la consulta

        $editarslot=$conexionbd->prepare($consultasql);

        // 3. ejecutar la consulta

        $resultado = $editarslot -> execute();

        // 4. verificar el resultado

        if ($resultado)
        {

         echo ("se editó el registro con exito");

        }
        else
        {

         echo ("error editando");

        }

     }

}
?>