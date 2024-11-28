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
        $id = $_REQUEST['ID'];
        $precio = $_REQUEST['precio'];

        $sql = "update productos set precio='$precio' where id='$id'";

        $result = $conn->query($sql);

        header("location: secretoadmin.php");
        ?>
</body>
</html>