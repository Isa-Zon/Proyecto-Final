<?php
    include("conexion.php");

    if(isset($_POST['send'])) {

        if(
            strlen($_POST['name'])>= 1 &&
            strlen($_POST['number'])>= 1
        ) {
            $name = trim($_POST['name']);
            $number = trim($_POST['number']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos (nombre, numero, fecha)
                         VALUES ('$name', '$number', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
        } 

    } 
?>