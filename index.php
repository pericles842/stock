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
                <div>
                    <h3>Kit de herramientas</h3>
                    <p>30%</p>
                    <input id="buy-tool" type="button" value="Comprar">
                </div>
            </div>
            <div class="box-content">
                <div class="box-images">
                    <img class="img" src="./assets/style/images/laptop.jpg" alt="imagen de prueba">
                </div>
                <div>
                    <h1>contenido</h1>
                </div>
            </div>
        </div>
    </section>
</body>
</html>