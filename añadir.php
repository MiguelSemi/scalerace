<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    Se añadio al carro correctamente.



    <?php
      $conn = new mysqli("localhost", "root", "", "scalerace");

      $id = $_REQUEST['id'];
      $nombre = $_REQUEST['nombre'];
      $precio = $_REQUEST['precio'];


      $sql = "SELECT * from productos where id='$id'";

      $result = $conn->query($sql);

        echo "<br>id ";
        var_dump($_REQUEST['id']);
        echo "<br> nombre producto";
        var_dump($_REQUEST['nombre']);
        echo "<br>precio producto ";
        var_dump($_REQUEST['precio']);
    
        session_start();

        $producto = [
            'id' => $id,
            'nombre' => $nombre,
            'precio' => $precio,
        ];

        $_SESSION['carrito'][] = $producto;

            header("location:secreto.php")
    ?>
</body>
</html>