<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 

        $conn = new mysqli("localhost", "root", "", "scalerace");

        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];

        $sql = "delete from productos where id='$id'";

        $result = $conn->query($sql); 

        header("location: secretoadmin.php");

    ?>
</body>
</html>