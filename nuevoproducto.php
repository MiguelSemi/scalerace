<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "scalerace");

        session_start();
        $nombre = $_SESSION['nombre'];
    ?>
    <table border="1">
    <td>
        <form name="login" method="get" action="añadirproducto.php">
        <p>Producto <input type="text" name="nombre" value="" required></p>
        <p>Precio <input type="int" name="precio" value="" required></p>
        <p>imagen <input type="text" name="imagen" value="" required><p>
        <p><input type="submit" value="Continuar"></p>
    </td>
    </table>
</body>
</html>