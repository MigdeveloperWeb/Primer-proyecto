<?php

function obtenerServicios(){
    try{
        require 'database.php';

        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);

        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";

        $resultado = mysqli_close($db);

    }catch(\Throwable $th) {

    }
}