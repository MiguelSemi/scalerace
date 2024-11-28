<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 

        $conn = new mysqli("localhost", "root", "", "scalerace");

        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $imagen = $_REQUEST['imagen'];

        $sql = "insert into productos (nombre, precio, imagen) values ('$nombre', '$precio', '$imagen')";

        $result = $conn->query($sql);

        header("location:secretoadmin.php");
    

    ?>
</body>
</html>