<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" href="./assets/style/index.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php require'./shopping_cart.php'?>
    </header>
    <section>
        <div class="main-box-images">
            <div class="box-content">
                <div class="box-images">
                    <img class="img" src="./assets/style/images/franela.jpg" alt="">
                </div>
                <div class="words">
                    <h3>Franela</h3>
                    <p>30$</p>
                    <input id="buy-shirt" type="button" value="Comprar">
                </div>
            </div>
            <div class="box-content">
                <div class="box-images">
                    <img class="img" src="./assets/style/images/bolso.jpg" alt="imagen de prueba">
                </div>
                <div class="words">
                    <h3> Bolso de cuero</h3>
                    <p>50$</p>
                    <input id="buy-bag" type="button" value="Comprar">
                </div>
            </div>
            <div class="box-content">
                <div class="box-images">
                    <img class="img" src="./assets/style/images/audifonos.jpg" alt="imagen de prueba">
                </div>
                <div class="words">
                    <h3>Audifonos</h3>
                    <p>60$</p>
                    <input id="buy-headphones" type="button" value="Comprar">
                </div>
            </div>
            <div class="box-content">
                <div class="box-images">
                    <img class="img" src="./assets/style/images/herramientas.jpg" alt="imagen de prueba">
                </div>
                <div class="words">
                    <h3> Herramientas</h3>
                    <p>70$</p>
                    <input id="buy-tool" type="button" value="Comprar">
                </div>
            </div>
            <div class="box-content">
                <div class="box-images">
                    <img class="img" src="./assets/style/images/laptop.jpg" alt="imagen de prueba">
                </div>
                <div class="words">
                    <h3>Laptop</h3>
                    <p>300$</p>
                    <input id="buy-laptop" type="button" value="Comprar">
                </div>
            </div>
        </div>
    </section>
    <!--datos de carrito-->
    <section>
        <div id="box-data-car" class="box-data-car" style="display:none;">
             <h1>Carrito de compras</h1>
            <div class="box-car">
                <div class="menu-products">
                   <p>Producto</p>
                   <p>Cantidad</p>
                   <p>Accion</p>
                   <p>Total</p>
                </div>
                <div id="product-shirt" class="products" style="display:none;">
                    <p class="title">Franela</p>
                    <p class="item" id="product-total">0</p> 
                    <div class="buttons">
                        <button id="positive">+</button>
                        <button id="negative">-</button>
                    </div>
                    <p class="total" id="money-total">$0</p>
                </div>
                <div id="product-bag" class="products" style="display:none;">
                    <p class="titledos">Bolso de cuero</p>
                    <p class="itemdos">0</p> 
                    <div class="buttonsdos">
                        <button id="positive">+</button>
                        <button id="negative">-</button>
                    </div>
                    <p class="totaldos">$0</p>
                </div>
                <div id="product-headphones" class="products" style="display:none;">
                    <p class="titletres">Audifonos</p>
                    <p class="itemtres">0</p> 
                    <div class="buttonstres">
                        <button id="positive">+</button>
                        <button id="negative">-</button>
                    </div>
                    <p class="totaltres">$0</p>
                </div>
                <div id="product-tool" class="products" style="display:none;">
                    <p class="titlecuatro">Herramientas</p>
                    <p class="itemcuatro">0</p> 
                    <div class="buttonscuatro">
                        <button id="positive">+</button>
                        <button id="negative">-</button>
                    </div>
                    <p class="totalcuatro">$0</p>
                </div>
                <div id="product-laptop" class="products" style="display:none;">
                    <p class="title">Laptop</p>
                    <p class="item">0</p> 
                    <div class="buttons">
                        <button id="positive">+</button>
                        <button id="negative">-</button>
                    </div>
                    <p class="total">$0</p>
                </div>
                <div class="section-box-total">
                    <h2>Productos totales</h2>
                    <p>0</p>
                    <p><button>Vaciar carro</button></p>
                    <p> $0</p>
                </div>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>
</html>