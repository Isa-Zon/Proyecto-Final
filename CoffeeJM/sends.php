<?php
    include("conexion.php");

    if(isset($_POST['send'])) {

        if(
            strlen($_POST['name'])>= 1 &&
            strlen($_POST['descripcion'])>= 1 &&
            strlen($_POST['precio'])>= 1
        ) {
            $name = trim($_POST['name']);
            $descripcion = trim($_POST['descripcion']);
            $number = trim($_POST['number']);
        
            $consulta = "INSERT INTO tblproductos (nombre, descripcion,  numero,)
                         VALUES ('$name', '$descripcion', '$number')";
            $resultado = mysqli_query($conex, $consulta);
        } 

    } 
?>