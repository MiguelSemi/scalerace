<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
        $conn = new mysqli("localhost", "root", "", "scalerace");

        $sql = "SELECT * from usuarios";

        $result = $conn->query($sql);

        session_start();
        $nombre = $_SESSION['nombre'];

        if (isset ($_SESSION['nombre'])){
            ?>
            <div class="contenedor">
                <div class="bienvenida">
                    Bienvenido <?php echo $nombre; ?>, Ya puede empezar a administrar.
                </div>
    
                <div class="contenido">
                    <?php
                     while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="usuarios">
                            <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
                            <p><strong>Nombre:</strong> <?php echo $row['nombre']; ?>€</p>
                            <p><a href="borrar.php?id=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre'];?>">Eliminar</a></p>
                        </div>
                        <?php
                     }
                    ?>
                </div>
            </div>
    
            <?php
        }

    ?>
</body>
</html>