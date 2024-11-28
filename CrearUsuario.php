<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<style>
        body {
            background-image: url('fondo.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 150px;
        }

        .content {
        text-align: center; /* Centra todo el contenido */
        width: 100%; /* Limita el ancho para mayor control */
        margin-bottom: 30px; /* Espacio entre los productos y el footer */
    }

        .mensaje {
        font-size: 48px;
        font-family: harlow solid;
        color: yellow;
        padding-bottom: 20px;
        }

        table {
            border: 1px solid black;
            padding: 10px;
            background-color: white;
            text-align: center;
            margin-left: 25%;
        }
        td {
            padding: 10px;
        }
</style>
    <div class="contenedor">
        <div class="mensaje">
        Introduce nombre y contraseña para crear usuario
        </div>
        <table border="1">
            <td>
                <form name="login" method="get" action="Crear.php">
                <p>Usuario <input type="text" name="nombre" value="" required></p>
                <p>Contraseña <input type="int" name="contra" value="" required></p>
                <p><input type="submit" value="Continuar"></p>
            </form>
        </table>
    </div>
</body>
</html>