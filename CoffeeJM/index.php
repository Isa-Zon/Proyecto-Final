<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="styles.css">
</head>
<body>

<form method="post"  autocomplete="off">
    <h2>Datos del ordenante</h2>
    <div class="input-group">

    <div class="input-container">
        <input type="text" name="name" placeholder="Nombre">
        <i class="fa-solid fa-user"></i>
    </div>

    <div class="input-container">
        <input type="text" name="number" placeholder="Numero de mesa">
        <i class="fa-solid fa-th"></i>
    </div>
    
    </div>
    <a href="#"></a>
    <input type="submit" name="send" class="btn" value="enviar">
    <a href="index.html"> Comenzar a ordenar</a>
</form>

<?php

    include("send.php");
?>

<script src="script.js"></script>
</body>
</html> 
