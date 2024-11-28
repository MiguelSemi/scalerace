<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<style>
    body {
        background-image: url('fondo.jpg');
        background-repeat: no-repeat;
        background-size: cover; /* Ajusta la imagen para cubrir toda la pantalla */
        margin: 0;
        height: 100vh; /* Asegura que ocupe toda la altura de la ventana */
        display: flex;
        flex-direction: column; /* Coloca los elementos en una columna */
        justify-content: space-between; /* Espacia los elementos, empujando el contenido al centro y los botones abajo */
        padding: 50px 0; /* Ajusta el espacio superior */
    }
    .content {
        text-align: center; /* Centra todo el contenido */
        width: 80%; /* Limita el ancho para mayor control */
        margin-bottom: 30px; /* Espacio entre los productos y el footer */
    }
    .welcome-message {
        font-size: 48px;
        font-family: harlow solid;
        margin-top: 20px;
        padding: 60px   ;
        color: yellow; /* Asegura que el texto se vea sobre cualquier fondo */
    }
    .product-container {
        display: flex; /* Usa Flexbox para alinear horizontalmente */
        flex-wrap: wrap; /* Permite que los productos se ajusten en varias líneas si es necesario */
        gap: 20px; /* Espacio entre productos */
        justify-content: center; /* Centra los productos horizontalmente */
    }
    .product {
        border: 1px solid black;
        padding: 10px;
        background-color: white;
        width: 250px; /* Define un ancho fijo para cada producto */
        text-align: center;
    }
    .product img {
        width: 170px;
        height: 170px;
    }
    .product a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #007BFF;
    }
    .footer {
        margin-top: auto; /* Empuja el footer hacia la parte inferior */
    }
</style>

<?php 
    $conn = new mysqli("localhost", "root", "", "scalerace");

    $sql = "SELECT * from productos";

    $result = $conn->query($sql);

    session_start();
    $nombre = $_SESSION['nombre'];

    if (isset ($_SESSION['nombre'])){
        ?>
        <div class="content">
            <div class="welcome-message">
                Bienvenido <?php echo $nombre; ?>, tenemos estos productos disponibles para ti.
            </div>

            <div class="product-container">
                <?php
                 while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="product">
                        <p><strong>Producto:</strong> <?php echo $row['nombre']; ?></p>
                        <p><strong>Precio:</strong> <?php echo $row['precio']; ?>€</p>
                        <p><img src="<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>" /></p>
                        <p><a href="añadir.php?id=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?>&precio=<?php echo $row['precio']; ?>">Añadir</a></p>
                    </div>
                    <?php
                 }
                ?>
            </div>
        </div>

        <?php
        echo "<br><br>";
        if(isset ($_SESSION['carrito'])){
            foreach ($_SESSION['carrito'] as $producto) {
                echo ($producto['nombre'])." X ";
                echo ($producto['precio'])."€ <br>";
            }
        }else{
            echo "Carrito vacío";
        }
    
    }
    else {
        header("location:login.html");
    }
?>
 
<!-- Footer con carrito y deslogueo -->
<div class="footer">
    <br>
    <form action="desloguearse.php"> 
        <input type="submit" value="Desloguearse">
    </form>
     
</body>
</html>

   <!--<form name="pizza" method="get" action="añadir.php"> 
                <td>Carbonara</td>
                <td><input id="pizza" type="hidden" name="nombre" value="carbonara" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>

            <tr>
            <form name="pizza" method="get" action="añadir.php">
                <td>Barbacoa</td>
                <td><input id="pizza" type="hidden" name="nombre" value="Barbacoa" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>
            
            <tr>
            <form name="pizza" method="get" action="añadir.php">
                <td>Carnivora</td>
                <td><input id="pizza" type="hidden" name="nombre" value="Carnivora" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>

            <tr>
            <form name="pizza" method="get" action="añadir.php">
                <td>4 Quesos</td>
                <td><input id="pizza" type="hidden" name="nombre" value="4Quesos" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>

            <tr>
            <form name="pizza" method="get" action="añadir.php">
                <td>Española</td>
                <td><input id="pizza" type="hidden" name="nombre" value="Espàñola" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>

            <tr>
            <form name="pizza" method="get" action="añadir.php">
                <td>Jamon y Queso</td>
                <td><input id="pizza" type="hidden" name="nombre" value="Jamon y queso" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>

            <tr>
            <form name="pizza" method="get" action="añadir.php">
                <td>Margarita</td>
                <td><input id="pizza" type="hidden" name="nombre" value="Margarita" readonly></td>
                <td><input type="number" name="cantidad" value="0" min="0"></td>
                <td><input type='number' name="precio" step='0.01' value='10.50' min="8" max='15' readonly></td>
                <td><input type="submit" value="Añadir"></td>
            </form>
            </tr>

            </table> -->