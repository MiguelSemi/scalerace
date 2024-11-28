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

        $sql = "SELECT nombre from usuarios where nombre='$nombre' and contraseña='$contraseña'";

        $result = $conn->query($sql);

        $row_count = $result->num_rows;

        echo $row_count;

        if($row_count > 0){
            session_start();
            $_SESSION['nombre'] = $nombre;
            if ($_REQUEST['nombre'] == 'admin' && $_REQUEST['contra'] == 'admin'){ 
                header("location: secretoadmin.php");
            }else{
                header("location: secreto.php");
            }
        }else{
            header("location: login.html");
        }
    
        //while($row = $result->fetch_assoc()) {
         //   echo $row['nombre']." ";
         //   echo $row['contraseña'];
         //}

        //if ($_REQUEST['nombre'] == 'admin' && $_REQUEST['contra'] == 'admin'){

          //  session_start();
           // $_SESSION['nombre'] = $nombre;
           // $_SESSION['contra'] = $contrasena;
            //header("location:secreto.php");

        //}
        //elseif {

           // header("location:login.html");

        //}


    ?>
</body>
</html>