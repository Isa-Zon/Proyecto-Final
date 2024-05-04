
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
</head>
 
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<?php
include_once "funciones.php";
?>

<section class="menu">
        <div class="nav">
            <div class="logo"><h1>Menú</h1>
            </div>
            <div>
                <ul>
                <a href="index.html">
                <input type="submit" name="send" class="btn" value="Inicio"></a>
                <a href="carrito.php">
                <input type="submit" name="send" class="btn" value="Carrito">
                </a></ul>
            </div>
    </section>

<section class="category">
    <div class="list-items">
        <h3>Bebidas Calientes</h3>
        <div class="card-list">
            <div class="card">
                <img src="imagen/BCaliente1.jpeg" alt="">
                    <div class="Coffee">
                        <p>Capuchino</p>
                    </div>
                    <div class="desc-coffee">
                        <p>Espuma, leche y café</p>
                    </div>
                    <div class="price">
                        <span>L.60.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/img3.png" alt="">
                <div class="Coffee">
                <p>Expreso</p>
                </div>
                <div class="desc-coffee">
                    <p>Café puro</p>
                </div>
                <div class="price">
                    <span>L.30.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/img5.png" alt="">
                <div class="Coffee">
                    <p>Latte</p>
                </div>
                <div class="desc-coffee">
                    <p>Canela, leche y café</p>
                </div>
                <div class="price">
                    <span>L.40.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/img6.png" alt="">
                <div class="Coffee">
                <p>Panna</p>
                </div>
                <div class="desc-coffee">
                    <p>Nata y café</p>
                </div>
                <div class="price">
                    <span>L.35.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="category">
    <div class="list-items">
        
        <div class="card-list">
            <div class="card">
                <img src="imagen/BCaliente3.jpg" alt="">
                    <div class="Coffee">
                        <p>Café con leche</p>
                    </div>
                    <div class="desc-coffee">
                        <p>café y leche</p>
                    </div>
                    <div class="price">
                        <span>L.25.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/img4.png" alt="">
                <div class="Coffee">
                <p>Macchiato</p>
                </div>
                <div class="desc-coffee">
                    <p>Espuma de leche y café</p>
                </div>
                <div class="price">
                    <span>L.70.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/BCaliente4.jpeg" alt="">
                <div class="Coffee">
                    <p>Bombon</p>
                </div>
                <div class="desc-coffee">
                    <p>Con leche condensada</p>
                </div>
                <div class="price">
                    <span>L.20.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/BCaliente5.jpg" alt="">
                <div class="Coffee">
                <p>Mocha</p>
                </div>
                <div class="desc-coffee">
                    <p>con Chocolate</p>
                </div>
                <div class="price">
                    <span>L.80.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="category">
    <div class="list-items">
        <h3>Bebidas Frias</h3>
        <div class="card-list">
            <div class="card">
                <img src="imagen/BFria1.jpg" alt="">
                    <div class="Coffee">
                        <p>Frappe</p>
                    </div>
                    <div class="desc-coffee">
                        <p>con nata, hielo y leche</p>
                    </div>
                    <div class="price">
                        <span>L.62.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/BFria9.jpeg" alt="">
                <div class="Coffee">
                <p>Smottie</p>
                </div>
                <div class="desc-coffee">
                    <p>con hielo y leche</p>
                </div>
                <div class="price">
                    <span>L.75.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/BFria8.jpeg" alt="">
                <div class="Coffee">
                    <p>Café frío</p>
                </div>
                <div class="desc-coffee">
                    <p>con hielo y leche</p>
                </div>
                <div class="price">
                    <span>L.20.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/BFria2.jpg" alt="">
                <div class="Coffee">
                <p>Affogato</p>
                </div>
                <div class="desc-coffee">
                    <p>Helado y café</p>
                </div>
                <div class="price">
                    <span>L.90.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category">
    <div class="list-items">
        <div class="card-list">
            <div class="card">
                <img src="imagen/BFria3.jpeg" alt="">
                    <div class="Coffee">
                        <p>Capuchino</p>
                    </div>
                    <div class="desc-coffee">
                        <p>con hielo y leche</p>
                    </div>
                    <div class="price">
                        <span>L.46.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/BFria4.jpeg" alt="">
                <div class="Coffee">
                <p>Latte frío</p>
                </div>
                <div class="desc-coffee">
                    <p>con hielo y leche</p>
                </div>
                <div class="price">
                    <span>L.68.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/BFria5.jpeg" alt="">
                <div class="Coffee">
                    <p>Mocca</p>
                </div>
                <div class="desc-coffee">
                    <p>Crema y leche</p>
                </div>
                <div class="price">
                    <span>L.70.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/BFria6.jpeg" alt="">
                <div class="Coffee">
                <p>Dalgona</p>
                </div>
                <div class="desc-coffee">
                    <p>Espuma, hielo y leche</p>
                </div>
                <div class="price">
                    <span>L.39.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="category">
    <div class="list-items">
        <h3>Postres</h3>
        <div class="card-list">
            <div class="card">
                <img src="imagen/PPie.jpg" alt="">
                    <div class="Coffee">
                        <p>Pie</p>
                    </div>
                    <div class="desc-coffee">
                        <p>Limón</p>
                    </div>
                    <div class="price">
                        <span>L.30.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/PFlan.jpg" alt="">
                <div class="Coffee">
                <p>Flan</p>
                </div>
                <div class="desc-coffee">
                    <p>Caramelo</p>
                </div>
                <div class="price">
                    <span>L.22.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/PPastel.jpg" alt="">
                <div class="Coffee">
                    <p>Pastel</p>
                </div>
                <div class="desc-coffee">
                    <p>Relleno de fresa</p>
                </div>
                <div class="price">
                    <span>L.55.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/PCupCake.jpg" alt="">
                <div class="Coffee">
                <p>Cup Cake</p>
                </div>
                <div class="desc-coffee">
                    <p>Chocolate</p>
                </div>
                <div class="price">
                    <span>L.15.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="category">
    <div class="list-items">
        <div class="card-list">
            <div class="card">
                <img src="imagen/PGelatina.png" alt="">
                    <div class="Coffee">
                        <p>Gelatina</p>
                    </div>
                    <div class="desc-coffee">
                        <p>Fresa</p>
                    </div>
                    <div class="price">
                        <span>L.16.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/PVolteado.jpg" alt="">
                <div class="Coffee">
                <p>Volteado</p>
                </div>
                <div class="desc-coffee">
                    <p>Piña y Caramelo</p>
                </div>
                <div class="price">
                    <span>L.25.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/PRelampago.jpeg" alt="">
                <div class="Coffee">
                    <p>Ralampago</p>
                </div>
                <div class="desc-coffee">
                    <p>Relleno de chocolate</p>
                </div>
                <div class="price">
                    <span>L.22.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/PTartaleta.jpg" alt="">
                <div class="Coffee">
                <p>Tartaleta</p>
                </div>
                <div class="desc-coffee">
                    <p>De frutos</p>
                </div>
                <div class="price">
                    <span>L.31.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="category">
    <div class="list-items">
        <div class="card-list">
            <div class="card">
                <img src="imagen/PMacarrones.png" alt="">
                    <div class="Coffee">
                        <p>Macarrones</p>
                    </div>
                    <div class="desc-coffee">
                        <p>Diferentes sabores</p>
                    </div>
                    <div class="price">
                        <span>L.14.00</span>
                        <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/PPanqueques.jpeg" alt="">
                <div class="Coffee">
                <p>Panqueques</p>
                </div>
                <div class="desc-coffee">
                    <p>Con frutas</p>
                </div>
                <div class="price">
                    <span>L.30.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>

            <div class="card">
                <img src="imagen/PIceCream.jpg" alt="">
                <div class="Coffee">
                    <p>Ice Cream</p>
                </div>
                <div class="desc-coffee">
                    <p>Con Frutas</p>
                </div>
                <div class="price">
                    <span>L.45.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                    </div>
            </div>

            <div class="card">
                <img src="imagen/PPaletas.jpeg" alt="">
                <div class="Coffee">
                <p>Paletas</p>
                </div>
                <div class="desc-coffee">
                    <p>De diferentes sabores</p>
                </div>
                <div class="price">
                    <span>L.20.00</span>
                    <button class="btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">+</button>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
