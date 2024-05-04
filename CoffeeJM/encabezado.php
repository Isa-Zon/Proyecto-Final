<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi carrito de compras</title>
    <script src="js/sweetalert2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="encabezado.css">
</head>

<body>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu"> 
            <ul>
            <div class="navbar-start">
                <a class="navbar-item" href="index.html">Inicio</a>
                <a class="navbar-item" href="menu.php">Menu</a>
            </div>
            </ul>
        
        
            <ul>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="informacion.html" class="btn">
                            <strong>Sobre nosotros<span id="conteoCarrito">
                                </span>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
            </div>
            </ul>
        </div>
    </nav>
    <script type="text/javascript" src="js/Carrito.js"></script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
            // Simple función para refrescar el conteo del carrito siempre
            const refrescarConteoDeCarrito = () => {
                const $conteoCarrito = document.querySelector("#conteoCarrito");
                const carritoEncabezado = new Carrito();
                const conteo = carritoEncabezado.obtenerConteo();
                if (conteo > 0) {
                    $conteoCarrito.textContent = "(".concat(conteo, ")");
                } else {
                    $conteoCarrito.textContent = "";
                }
            };
            // Hacerla global
            window.refrescarConteoDeCarrito = refrescarConteoDeCarrito;
            refrescarConteoDeCarrito();

        });

        ;
    </script>
    <section class="section">