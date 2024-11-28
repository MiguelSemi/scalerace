<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 

        $conn = new mysqli("localhost", "root", "", "scalerace");
        session_start();
        $admin = $_SESSION['nombre'];
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
       
        $sql = "delete from usuarios where nombre='$nombre'";

        $result = $conn->query($sql);

        header("location: secretoadmin.php");

    ?>
</body>
</html>