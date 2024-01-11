<?php
$db = mysqli_connect('localhost', 'root', 'Mavspro95', 'appsalon');

if(!$db){
    echo "Hubo un error";
}else{
    echo "Conexion establecida correctamente";
}
?>