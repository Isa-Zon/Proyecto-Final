<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrito</title>
    <link rel="stylesheet" href="carrito.css">
</head>
 
<body>



<?php include_once "encabezado.php" ?>
<div class="columns">
    <div class="column">
    <div class="logo"><h1>Mi carrito de Compras</h1>
            </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Quitar del carrito</th>
                </tr>
            </thead>
            <tbody id="cuerpoTabla">
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="has-text-right is-size-5">Total</td>
                    <td colspan="2" class="is-size-5" id="celdaTotal"></td>
                </tr>
            </tfoot>
        </table>
        <a href="#"></a>
    <input type="submit" name="send" class="btn" value="Terminar Compra">    
    </div>
</div>

</body>
</html>

<?php

    include("send.php");
?>

<script src="script.js"></script>