<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 

        $conn = new mysqli("localhost", "root", "", "scalerace");

        $nombre = $_REQUEST['nombre'];
        $contraseña = $_REQUEST['contra'];

        $sql = "insert into usuarios (nombre, contraseña) values ('$nombre', '$contraseña')";

        $result = $conn->query($sql);

        header("location:login.html");
    

    ?>
</body>
</html>