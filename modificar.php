<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 

        $conn = new mysqli("localhost", "root", "", "scalerace");
        session_start();
        $nombre = $_SESSION['nombre'];
        $id = $_REQUEST['id'];
        ?>
        <table border="1">
            <td>
                <form name="Modificar" method="get" action="modificado.php">
                <p>ID <input type="int" name="ID" value="" required></p>
                <p>Precio <input type="int" name="precio" value="" required></p>
                <p><input type="submit" value="Continuar"></p>
            </form>
        </table>
    <?php

    ?>
</body>
</html>